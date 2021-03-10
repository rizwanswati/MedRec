<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: rizwanullah
 * Date: 12/22/2018
 * Time: 5:16 PM
 */
class General extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function IFexits($tableName,$columnName,$regno)
    {
        $query = $this->db->get_where($tableName,array($columnName => $regno));
        return $query->row();
    }

    public function getIDs($tableName,$col_date,$col_regno,$date,$regno)
    {
        $query = $this->db->get_where($tableName,array($col_date => $date, $col_regno=>$regno));
        return $query->result();
    }

    public function getIMGnames($tableName,$col_regno,$regno)
    {
        $query = $this->db->get_where($tableName,array($col_regno=>$regno));
        return $query->result();
    }

    public function delete($tableName,$ColumnName,$regno)
    {
        $this->db->delete($tableName, array($ColumnName => $regno));
    }

}