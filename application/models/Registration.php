<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Registration extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function register($data)
    {
        $this->db->insert(user_table_name(), $data);
        return $this->db->affected_rows();
    }
}