<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller
{
   public function __construct()
   {
       parent::__construct();
       $this->load->library('form_validation');
       $this->load->model('registration');
   }
    public function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $data = session_info();
            $this->load->view('admin_home',$data);
        }
        else {
            $this->load->view('registration');
        }
    }
    public function registration()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('name','Full Name','required');
        $this->form_validation->set_rules('email','Email','trim|required|is_unique[user.email]|valid_email');
        $this->form_validation->set_rules('password','password','required|min_length[6]');
        $this->form_validation->set_rules('re_password','Repeate Passaword','required|min_length[6]|matches[password]');
        if($this->form_validation->run())
        {
            $data   = register_data_sanitization($this->input->post());
            $check  = $this->registration->register($data);
            if($check){
                set_session($data);
            }

        }else
        {
            if($this->session->userdata('logged_in'))
            {
                $data = session_info();
                if($data['status']=='admin') {
                    loadAdminView($data);
                }else{
                    loadUserView($data);
                }
            }
            else {
                $this->load->view('registration');
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'welcome','refresh');
    }
}
?>