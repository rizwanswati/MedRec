<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: rizwanullah
 * Date: 12/22/2018
 * Time: 5:16 PM
 */
class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('find');
    }

    public function find()
    {
        $value = $this->input->post('raw');
        if (isset($value)){
            $data['info'] = $this->find->search($value,patient_table_name());
            $data['value'] = $value;
            $data['pagination'] = FALSE;
            if ($this->session->userdata('logged_in')) {
                $this->load->view('admin_home',$data);
            }else{
                redirect(base_url(),'welcome','location');
            }
        }else{
            Globals::setAuthenticatedMemeberId(true);
            $this->load->view('admin_home');
        }

    }
}

?>