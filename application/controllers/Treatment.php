<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Treatment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('medprescription');
    }

    public function index()
    {
        $this->load->view('treatment/prescription');
    }

    public function prescrition_form()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('regno','Registration Number','required');
        $this->form_validation->set_rules('name[]','Should not there be a name of immunization.?','required');
        $this->form_validation->set_rules('rx','you forgot RX.?','required');
        $this->form_validation->set_rules('frequency[]','Should not there be a frequency.?','required');
        $this->form_validation->set_rules('duration[]','Should not there be a duration.?','required');
        $this->form_validation->set_rules('dose[]','Should not there be a dose of immunization.?','required');
        $this->form_validation->set_rules('day','Pick up a day for next meeting, It is','required');
        $this->form_validation->set_rules('month','Pick up a month for next meeting, It is','required');
        $this->form_validation->set_rules('year','Pick up a year for next meeting, It is','required');
        $this->form_validation->set_rules('date','Date, It is','required');
        if($this->form_validation->run()) {

            $this->form_validation->set_rules('regno', 'Patient Does not Exists', 'is_unique[patient.reg_no]');
            if (!$this->form_validation->run()) {//return false if not unique , means users exists
                $regno = $this->input->post('regno');
                $rx    = $this->input->post('rx');
                $name = $this->input->post('name');
                $frequency = $this->input->post('frequency');
                $dose = $this->input->post('dose');
                $meal = $this->input->post('meal');
                $duration = $this->input->post('duration');
                $day    = $this->input->post('day');
                $month  = $this->input->post('month');
                $year   = $this->input->post('year');
                $pres_date  = $this->input->post('date');
                $next_meeting_date = $day.'/'.$month.'/'.$year;
                for ($i=0; $i<count($name); $i++)
                {
                    $data = prep_treatment($regno,$rx,$name[$i],$dose[$i],$frequency[$i],$duration[$i],$meal[$i],$pres_date);
                    $this->medprescription->insert(treatment_table(),$data);
                }
                
                if(array_key_exists('next',$this->input->post())) {
                    $data_future = prep_future_plan($regno,$next_meeting_date);
                    $future_id = $this->medprescription->insert(future_plan_table(),$data_future);
                    $plan_next = $this->input->post('next');
                    for ($i=0; $i<count($plan_next); $i++)
                    {
                        $data = prep_future_tests($regno,$future_id,$plan_next[$i]);
                        $this->medprescription->insert(future_test_table(),$data);
                    }
                }else{
                    $data_future = prep_future_plan($regno,$next_meeting_date);
                    $this->medprescription->insert(future_plan_table(),$data_future);
                }
                $print_data = $this->input->post();
                $this->load->view('print',$print_data);
            }else{
                Globals::setAuthenticatedMemeberId(true);
                $this->index();
            }
        }else{
            $this->index();
        }
    }

    public function next_plain()
    {
        $this->load->view('treatment/next_plain');
    }

    public function showTreatment()
    {
        $this->load->library('pagination');
        $config = configuration();
        $config['base_url']  = base_url('treatment/showTreatment');
        $config['per_page']  = 10;
        $config['total_rows'] = $this->medprescription->getTotalRow(treatment_table());
        $this->pagination->initialize($config);
        $data['info'] = $this->medprescription->generic_getAll(treatment_table(),'reg_no','name','reg_no',$config['per_page'],$this->uri->segment(3));
        $data['pagination'] = TRUE;
        $this->load->view('info/medication',$data);
    }

    public function deletePrescription($trt_id)
    {
        $this->medprescription->delete(treatment_table(),'trt_id',$trt_id);
        redirect(base_url('treatment/showTreatment'));
    }
    
    public function deleteWholePrescription($day,$month,$year,$regno)
    {
        $date = $day.'/'.$month.'/'.$year;
        $this->medprescription->deleteWhole(treatment_table(),'date',$date,'reg_no',$regno);
        $this->showMed_Single($regno);
    }

    public function updatePrescription($day,$month,$year,$regno)
    {
        $date = $day.'/'.$month.'/'.$year;
        $data['info'] = $this->medprescription->getRecord(treatment_table(),'date',$date,'reg_no',$regno);
        $data['pagination'] = FALSE;
        $this->load->view('info/list_medication',$data);
    }

    public function updateMed($trt_id){
        $data['info'] = $this->medprescription->getSingleRecord(treatment_table(),'trt_id',$trt_id);
        $this->load->view('treatment/edit_med',$data);
    }
    
    public function saveUpdatedMed()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('regno','Registration Number','required');
        $trt_id = $this->input->post('trt_id');
        if($this->form_validation->run()) {
            $this->form_validation->set_rules('regno', 'Patient Does not Exists', 'is_unique[patient.reg_no]');
            if (!$this->form_validation->run()) {//return false if not unique , means users exists
                $data = prep_med_update($this->input->post());
                $this->medprescription->generic_update(treatment_table(),'trt_id',$trt_id,$data);
                $this->showMed_Single($this->input->post('regno'));
            }else{
                Globals::setAuthenticatedMemeberId(true);
                $this->updatePrescription($trt_id);
            }
        }else{
            $this->updatePrescription($trt_id);
        }
    }

    public function showMed_Single($reg_no)
    {
        $data['info'] = $this->medprescription->getPressure_Single_patient(treatment_table(),'reg_no','reg_no',$reg_no,'name');
        $data['pagination'] = FALSE;
        $this->load->view('info/medication',$data);
    }
    
    public function openPrescription($day,$month,$year,$regno)
    {
        $date = $day.'/'.$month.'/'.$year;
        $data['info'] = $this->medprescription->getRecord(treatment_table(),'date',$date,'reg_no',$regno);
        $data['pagination'] = FALSE;
        $this->load->view('prescription',$data);
    }
}