<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: rizwanullah
 * Date: 12/22/2018
 * Time: 5:16 PM
 */
class Find extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function search($value,$tableName)
    {
        $query = $this->db
                        ->where('reg_no',$value)
                        ->or_like('name',$value)
                        ->or_where('contact',$value)
                        ->or_where('old_reg',$value)
                        ->get($tableName);

        return $query->result();
    }

    public function rows($value,$tableName)
    {
        $query = $this->db
            ->where('reg_no',$value)
            ->or_like('name',$value)
            ->or_where('contact',$value)
            ->or_where('old_reg',$value)
            ->get($tableName);

        return $query->num_rows();
    }
}

?>