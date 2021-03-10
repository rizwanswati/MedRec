<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: rizwanullah
 * Date: 12/22/2018
 * Time: 5:16 PM
 */
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('biochemicalexam');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            $this->load->library('pagination');
            $config = configuration();
            $config['base_url']  = base_url('user/index');
            $config['per_page']  = 12;
            $config['total_rows'] = $this->biochemicalexam->getTotalRow(bio_chemical_table_name());
            $this->pagination->initialize($config);
            $data['info'] = $this->biochemicalexam->generic_getAll(bio_chemical_table_name(),'reg_no_bcr','name','reg_no',$config['per_page'],$this->uri->segment(3));
            $data['pagination'] = TRUE;
            $this->load->view('lab_home',$data);
        }else{
            redirect(base_url(),'welcome','location');
        }
    }
}