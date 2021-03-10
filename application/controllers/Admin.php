<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: rizwanullah
 * Date: 12/22/2018
 * Time: 5:16 PM
 */
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('patientinfo');
    }
    
    public function dashboard()
    {
        $this->load->library('pagination');
        $config = configuration();
        $config['base_url']  = base_url('admin/dashboard');
        $config['per_page']  = 12;
        $config['total_rows'] = $this->patientinfo->getTotalRow(patient_table_name());
        $this->pagination->initialize($config);
        $data['info'] = $this->patientinfo->get(patient_table_name(),$config['per_page'],$this->uri->segment(3));
        $data['pagination'] = TRUE;
        if ($this->session->userdata('logged_in')) {
            $this->load->view('admin_home',$data);
        }else{
            redirect(base_url(),'welcome','location');
        }
    }

}