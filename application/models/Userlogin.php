<?php
defined('BASEPATH') OR exit('No direct script access is allowed');
/**
 * Created by PhpStorm.
 * User: rizwanullah
 * Date: 12/22/2018
 * Time: 2:45 PM
 */
class Userlogin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($data) {

        $condition = "email=" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select('name');
        $this->db->select('status');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        $result = $query->row_array();
        if (isset($result))
        {
            return $result;
        }
        else {
            return null;
        }
    }
}