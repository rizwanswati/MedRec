<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('diagnosiscomplication');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('diagnosis/diagnosis');
    }

    public function diagnosis_form()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('regno','Registration Number','required');
        $this->form_validation->set_rules('diagnosis','Should not there be a Diagnosis.?','required');
        if($this->form_validation->run()) {
            $this->form_validation->set_rules('regno', 'Patient Does not Exists', 'is_unique[patient.reg_no]');
            if (!$this->form_validation->run()) {//return false if not unique , means users exists
                $posted = $this->input->post();
                $regno = $this->input->post('regno');
                if(array_key_exists('diagnosis',$posted)){
                   $data =  prep_diagnosis($posted,FALSE);
                    $this->diagnosiscomplication->insert(diagnosis_table(),$data);
                }
                if (array_key_exists('comp',$posted)){
                    $comp = $posted['comp'];
                    foreach ($comp as $value){
                        $info = prep_complication($regno,$value);
                        $this->diagnosiscomplication->insert(complication_table(),$info);
                    }
                }
                redirect(base_url().'diagnosis/clinical_summary','location');
            }else{
                Globals::setAuthenticatedMemeberId(true);
                $this->index();
            }
        }else{
            $this->index();
        }
    }

    public function clinical_summary()
    {
        $this->load->view('diagnosis/clinical_summary');
    }

    public function clinical_summary_form()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('regno','Registration Number','required');
        $this->form_validation->set_rules('clinical_s','Should not there be a Clinical Summary.?','required');
        if($this->form_validation->run()) {
            $this->form_validation->set_rules('regno', 'Patient Does not Exists', 'is_unique[patient.reg_no]');
            if (!$this->form_validation->run()) {//return false if not unique , means users exists
                $data = prep_clinical($this->input->post(),FALSE);
                $this->diagnosiscomplication->insert(clinical_table(),$data);
                redirect(base_url().'treatment','location');
            }else{
                Globals::setAuthenticatedMemeberId(true);
                $this->clinical_summary();
            }
        }else{
            $this->clinical_summary();
        }
    }
    
    public function showDiagnosis()
    {
        $this->load->library('pagination');
        $config = configuration();
        $config['base_url']  = base_url('diagnosis/showDiagnosis');
        $config['per_page']  = 10;
        $config['total_rows'] = $this->diagnosiscomplication->getTotalRow(diagnosis_table());
        $this->pagination->initialize($config);
        $data['info'] = $this->diagnosiscomplication->generic_getAll(diagnosis_table(),'reg_no','name','reg_no',$config['per_page'],$this->uri->segment(3));
        $data['pagination'] = TRUE;
        $this->load->view('info/diagnosis',$data);
    }

    public function delete($diag_id)
    {
        $this->diagnosiscomplication->delete(diagnosis_table(),'diag_id',$diag_id);
        redirect(base_url('diagnosis/showDiagnosis'));
    }

    public function updateDiag($diag_id)
    {
        $data['info'] = $this->diagnosiscomplication->getSingleRecord(diagnosis_table(),'diag_id',$diag_id);
        $this->load->view('diagnosis/edit_diagnosis',$data);
    }

    public function saveUpdatediagnosis()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('regno','Registration Number','required');
        $this->form_validation->set_rules('diagnosis','Should not there be a Diagnosis.?','required');
        $diag_id = $this->input->post('diag_id');
        if($this->form_validation->run()) {
            $this->form_validation->set_rules('regno', 'Patient Does not Exists', 'is_unique[patient.reg_no]');
            if (!$this->form_validation->run()) {//return false if not unique , means users exists
                $posted = $this->input->post();
                if(array_key_exists('diagnosis',$posted)){
                    $data =  prep_diagnosis($posted,TRUE);
                    $this->diagnosiscomplication->generic_update(diagnosis_table(),'diag_id',$diag_id,$data);
                    redirect(base_url('diagnosis/showDiagnosis'));
                }
            }else{
                Globals::setAuthenticatedMemeberId(true);
                $this->updateDiag($diag_id);
            }
        }else{
            $this->updateDiag($diag_id);
        }
    }

    public function showFullDiag($diag_id)
    {
        $data['info'] = $this->diagnosiscomplication->getSingleRecord(diagnosis_table(),'diag_id',$diag_id);
        $data['pagination'] = FALSE;
        $this->load->view('info/full_diag',$data);
    }

    public function showDiag_Single($reg_no)
    {
        $data['info'] = $this->diagnosiscomplication->getPressure_Single_patient(diagnosis_table(),'reg_no','reg_no',$reg_no,'name');
        $data['pagination'] = FALSE;
        $this->load->view('info/diagnosis',$data);
    }
    
    public function showClinicalSummary()
    {
        $this->load->library('pagination');
        $config = configuration();
        $config['base_url']  = base_url('diagnosis/showDiagnosis');
        $config['per_page']  = 10;
        $config['total_rows'] = $this->diagnosiscomplication->getTotalRow(clinical_table());
        $this->pagination->initialize($config);
        $data['info'] = $this->diagnosiscomplication->generic_getAll(clinical_table(),'regno','name','reg_no',$config['per_page'],$this->uri->segment(3));
        $data['pagination'] = TRUE;
        $this->load->view('info/summary',$data);
    }
    public function showFullSum($cls_id)
    {
        $data['info'] = $this->diagnosiscomplication->getSingleRecord(clinical_table(),'cls_id',$cls_id);
        $data['pagination'] = FALSE;
        $this->load->view('info/full_summary',$data);
    }

    public function deleteSum($cls_id)
    {
        $this->diagnosiscomplication->delete(clinical_table(),'cls_id',$cls_id);
        redirect(base_url('diagnosis/showClinicalSummary'));
    }

    public function updateSum($cls_id)
    {
        $data['info'] = $this->diagnosiscomplication->getSingleRecord(clinical_table(),'cls_id',$cls_id);
        $this->load->view('diagnosis/edit_summary',$data);
    }
    
    public function updateClinicalSummary()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('regno','Registration Number','required');
        $this->form_validation->set_rules('clinical_s','Should not there be a Clinical Summary.?','required');
        $cls_id = $this->input->post('cls_id');
        if($this->form_validation->run()) {
            $this->form_validation->set_rules('regno', 'Patient Does not Exists', 'is_unique[patient.reg_no]');
            if (!$this->form_validation->run()) {//return false if not unique , means users exists
                $data = prep_clinical($this->input->post(),TRUE);
                $this->diagnosiscomplication->generic_update(clinical_table(),'cls_id',$cls_id,$data);
                redirect(base_url('diagnosis/showClinicalSummary'));
            }else{
                Globals::setAuthenticatedMemeberId(true);
                $this->updateSum($cls_id);
            }
        }else{
            $this->updateSum($cls_id);
        }
    }

    public function showSum_Single($regno)
    {
        $data['info'] = $this->diagnosiscomplication->getPressure_Single_patient(clinical_table(),'regno','reg_no',$regno,'name');
        $data['pagination'] = FALSE;
        $this->load->view('info/summary',$data);
    }
    
    public function showComp_Single($regno)
    {
        $data['info']    = $this->diagnosiscomplication->getSelectedRecord(complication_table(),'complication','reg_no',$regno);
        $data['regno']   = $regno;
        $data['Title']   = "Complications";
        $data['form_c']  = "updateComplications";
        $data['del_c']   = "deleteComplications";
        $data['name']    = "comp";
        $data['col']     = "complication";
        $data['pagination'] = FALSE;
        $this->load->view('diagnosis/edit_complications',$data);
    }

    public function updateComplications()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('regno','Registration Number','required');
        $regno = $this->input->post('regno');
        if($this->form_validation->run()) {
            $this->form_validation->set_rules('regno', 'Patient Does not Exists', 'is_unique[patient.reg_no]');
            if (!$this->form_validation->run()) {//return false if not unique , means users exists
                $posted = $this->input->post();
                $this->diagnosiscomplication->delete(complication_table(),'reg_no',$regno);
                if (array_key_exists('comp',$posted)){
                    $comp = $posted['comp'];
                    foreach ($comp as $value){
                        $info = prep_complication($regno,$value);
                        $this->diagnosiscomplication->insert(complication_table(),$info);
                    }
                }
                redirect(base_url('diagnosis/showComp_Single/'.$regno),'location');
            }else{
                Globals::setAuthenticatedMemeberId(true);
                $this->showComp_Single($regno);
            }
        }else{
            $this->showComp_Single($regno);
        }
    }

    public function deleteComplications($reg_no)
    {
        $this->diagnosiscomplication->delete(complication_table(),'reg_no',$reg_no);
        redirect(base_url('admin/dashboard'),'location');
    }
}