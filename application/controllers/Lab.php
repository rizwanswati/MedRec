<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('biochemicalexam');
    }
    
    public function index()
    {
        $this->load->view('lab/chemical_examination');
    }
    public function chemical_examination_form()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('regno','Registration Number','required');
        if($this->form_validation->run()) {
            $this->form_validation->set_rules('regno','Patient Does not Exists','is_unique[patient.reg_no]');
            if(!$this->form_validation->run()){ //return false if not unique , means users exists
                $data = prep_biochemical($this->input->post());
                $this->biochemicalexam->insert(bio_chemical_table_name(),$data);
                redirect(base_url().'lab/lipid_profile','location');
            }else{
                Globals::setAuthenticatedMemeberId(true);
                $this->index();
            }
        }else{
            $this->index();
        }
    }

    public function lipid_profile()
    {
        $this->load->view('lab/lipid_profile');
    }

    public function lipid_profile_form()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('regno','Registration Number','required');
        if($this->form_validation->run()) {
            $this->form_validation->set_rules('regno', 'Patient Does not Exists', 'is_unique[patient.reg_no]');
            if (!$this->form_validation->run()) { //return false if not unique , means users exists
                $data = prep_lipid($this->input->post());
                $this->biochemicalexam->insert(lipid_table_name(), $data);
                redirect(base_url().'user','location');
            }else{
                Globals::setAuthenticatedMemeberId(true);
                $this->lipid_profile();
            }
        }else{
            $this->lipid_profile();
        }
    }

    public function ShowGenExam()
    {
        $this->load->library('pagination');
        $config = configuration();
        $config['base_url']  = base_url('lab/ShowGenExam');
        $config['per_page']  = 12;
        $config['total_rows'] = $this->biochemicalexam->getTotalRow(bio_chemical_table_name());
        $this->pagination->initialize($config);
        $data['info'] = $this->biochemicalexam->generic_getAll(bio_chemical_table_name(),'reg_no_bcr','name','reg_no',$config['per_page'],$this->uri->segment(3));
        $data['pagination'] = TRUE;
        $this->load->view('lab_home',$data);
    }

    public function ShowLipidProfile()
    {
        $this->load->library('pagination');
        $config = configuration();
        $config['base_url']  = base_url('lab/ShowLipidProfile');
        $config['per_page']  = 12;
        $config['total_rows'] = $this->biochemicalexam->getTotalRow(lipid_table_name());
        $this->pagination->initialize($config);
        $data['info'] = $this->biochemicalexam->generic_getAll(lipid_table_name(),'regno','name','reg_no',$config['per_page'],$this->uri->segment(3));
        $data['pagination'] = TRUE;
        $this->load->view('lab/lipidprof',$data);
    }

    public function deleteLipid($lp_id)
    {
        $this->biochemicalexam->delete(lipid_table_name(),'lp_id',$lp_id);
        redirect(base_url('lab/ShowLipidProfile'));
    }

    public function deleteBioChemRep($b_id)
    {
        $this->biochemicalexam->delete(bio_chemical_table_name(),'b_id',$b_id);
        redirect(base_url('lab/ShowGenExam'));
    }

    public function updateBioChemRep($b_id)
    {
        $data['info'] = $this->biochemicalexam->getSingleRecord(bio_chemical_table_name(),'b_id',$b_id);
        $this->load->view('lab/edit_generalexam',$data);
    }

    public function updateLipid($lp_id)
    {
        $data['info'] = $this->biochemicalexam->getSingleRecord(lipid_table_name(),'lp_id',$lp_id);
        $this->load->view('lab/edit_lipid',$data);
    }

    public function saveUpdate()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('regno','Registration Number','required');
        $b_id = $this->input->post('b_id');
        if($this->form_validation->run()) {
            $data = prep_biochemical_update($this->input->post());
            $this->biochemicalexam->generic_update(bio_chemical_table_name(),'b_id',$b_id,$data);
            redirect(base_url().'lab/showGenExam','location');
        }else{
            $this->updateBioChemRep($b_id);
        }
    }

    public function saveUpdatelipid()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('regno','Registration Number','required');
        $lp_id = $this->input->post('lp_id');
        if($this->form_validation->run()) {
            $data = prep_lipid_update($this->input->post());
            $this->biochemicalexam->generic_update(lipid_table_name(),'lp_id',$lp_id,$data);
            redirect(base_url().'lab/ShowLipidProfile','location');
        }else{
            $this->updateLipid($lp_id);
        }
    }


}