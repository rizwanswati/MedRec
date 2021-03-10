<?php
defined('BASEPATH') OR exit('No direct access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('userlogin');
    }

    public function index()
    {
        $this->load->view('login_page');
    }

    public function user_login()
    {
        if (!empty($this->input->post())) {
            $data = login_data_sanitization($this->input->post());
            $result = $this->userlogin->login($data);
            if (isset($result)) {
                $result['email'] = $data['email'];
                set_session($result);
            } else {
                $err = array(
                    'error' => 'Email or Password is Incorrect!'
                );
                $this->load->view('login_page', $err);
            }
        }else{
            $this->load->view('login_page');
        }
    }
}
