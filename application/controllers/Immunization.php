<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Immunization extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('immune');
    }

    public function index()
    {
        $this->load->view('immunization/immunization');
    }

    public function immunization_form()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('regno','Registration Number','required');
        $this->form_validation->set_rules('type[]','Should not there be a type of immunization.?','required');
        $this->form_validation->set_rules('dose[]','Should not there be a dose of immunization.?','required');
        if($this->form_validation->run()) {
            $this->form_validation->set_rules('regno', 'Patient Does not Exists', 'is_unique[patient.reg_no]');
            if (!$this->form_validation->run()) {//return false if not unique , means users exists
                $regno = $this->input->post('regno');
                $type = $this->input->post('type');
                $dose = $this->input->post('dose');
                for ($i=0; $i<count($type); $i++)
                {
                    $data =  prep_immune($regno,$type[$i],$dose[$i]);
                    $this->immune->insert(immunization_table(),$data);
                }            
                redirect(base_url().'admin/dashboard','location');
            }else{
                Globals::setAuthenticatedMemeberId(true);
                $this->index();
            }
        }else{
            $this->index();
        }
    }
}