<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chemicalexam extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('biochemicalexam');
    }

    public function index()
    {
        $this->load->view('chemical_exam/general_exam');
    }

    public function general_exam_form()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('regno','Registration Number','required');
        $this->form_validation->set_rules('chem_date','Date','required');
        if($this->form_validation->run()) {
            $this->form_validation->set_rules('regno','Patient Does not Exists','is_unique[patient.reg_no]');
            if(!$this->form_validation->run()){ //return false if not unique , means users exists
                $data = prep_biochemical($this->input->post());
                $this->biochemicalexam->insert(bio_chemical_table_name(),$data);
                redirect(base_url().'chemicalexam/lipid_profile','location');
            }else{
                Globals::setAuthenticatedMemeberId(true);
                $this->index();
            }
        }else{
            $this->index();
        }
    }
    
    public function showChemExam()
    {
        $this->load->library('pagination');
        $config = configuration();
        $config['base_url']  = base_url('chemicalexam/showChemExam');
        $config['per_page']  = 10;
        $config['total_rows'] = $this->biochemicalexam->getTotalRow(bio_chemical_table_name());
        $this->pagination->initialize($config);
        $data['info'] = $this->biochemicalexam->generic_getAll(bio_chemical_table_name(),'reg_no_bcr','name','reg_no',$config['per_page'],$this->uri->segment(3));
        $data['pagination'] = TRUE;
        $this->load->view('info/chemexam',$data);
    }

    public function updateBioChemRep($b_id)
    {
        $data['info'] = $this->biochemicalexam->getSingleRecord(bio_chemical_table_name(),'b_id',$b_id);
        $this->load->view('chemical_exam/edit_generalexam',$data);
    }

    public function saveUpdate()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('regno','Registration Number','required');
        $b_id = $this->input->post('b_id');
        if($this->form_validation->run()) {
            $data = prep_biochemical_update($this->input->post());
            $this->biochemicalexam->generic_update(bio_chemical_table_name(),'b_id',$b_id,$data);
            redirect(base_url().'chemicalexam/showChemExam','location');
        }else{
            $this->updateBioChemRep($b_id);
        }
    }
    
    public function showChem_Single($regno)
    {
        $data['info'] = $this->biochemicalexam->getPressure_Single_patient(bio_chemical_table_name(),'reg_no_bcr','reg_no',$regno,'name');
        $data['pagination'] = FALSE;
        $this->load->view('info/chemexam',$data);
    }
    
    public function deleteBioChemRep($b_id)
    {
        $this->biochemicalexam->delete(bio_chemical_table_name(),'b_id',$b_id);
        redirect(base_url('chemicalexam/showChemExam'));
    }

    public function lipid_profile()
    {
        $this->load->view('chemical_exam/lipid_profile');
    }

    public function lipid_profile_form()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('regno','Registration Number','required');
        $this->form_validation->set_rules('date','Date','required');
        if($this->form_validation->run()) {
            $this->form_validation->set_rules('regno', 'Patient Does not Exists', 'is_unique[patient.reg_no]');
            if (!$this->form_validation->run()) { //return false if not unique , means users exists
                $data = prep_lipid($this->input->post());
                $this->biochemicalexam->insert(lipid_table_name(), $data);
                redirect(base_url().'diagnosis','location');
            }else{
                Globals::setAuthenticatedMemeberId(true);
                $this->lipid_profile();
            }
        }else{
            $this->lipid_profile();
        }
    }
    
    public function showLipid()
    {
        $this->load->library('pagination');
        $config = configuration();
        $config['base_url']  = base_url('chemicalexam/showLipid');
        $config['per_page']  = 10;
        $config['total_rows'] = $this->biochemicalexam->getTotalRow(lipid_table_name());
        $this->pagination->initialize($config);
        $data['info'] = $this->biochemicalexam->generic_getAll(lipid_table_name(),'regno','name','reg_no',$config['per_page'],$this->uri->segment(3));
        $data['pagination'] = TRUE;
        $this->load->view('info/lipid',$data);
    }

    public function deleteLipid($lp_id)
    {
        $this->biochemicalexam->delete(lipid_table_name(),'lp_id',$lp_id);
        redirect(base_url('chemicalexam/showLipid'));
    }

    public function updateLipid($lp_id)
    {
        $data['info'] = $this->biochemicalexam->getSingleRecord(lipid_table_name(),'lp_id',$lp_id);
        $this->load->view('chemical_exam/edit_lipid',$data);
    }

    public function saveUpdatelipid()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('regno','Registration Number','required');
        $lp_id = $this->input->post('lp_id');
        if($this->form_validation->run()) {
            $data = prep_lipid_update($this->input->post());
            $this->biochemicalexam->generic_update(lipid_table_name(),'lp_id',$lp_id,$data);
            redirect(base_url().'chemicalexam/showLipid','location');
        }else{
            $this->updateLipid($lp_id);
        }
    }

    public function showLipid_Single($regno)
    {
        $data['info'] = $this->biochemicalexam->getPressure_Single_patient(lipid_table_name(),'regno','reg_no',$regno,'name');
        $data['pagination'] = FALSE;
        $this->load->view('info/lipid',$data);
    }

}
    
