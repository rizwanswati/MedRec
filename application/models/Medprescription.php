<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medprescription extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function insert($table,$data){
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }

    public function getTotalRow($tableName)
    {
        $query = $this->db->get($tableName);
        return $query->num_rows();
    }

    public function generic_getAll($tableName,$col,$ToGet,$ToGetIdentifier,$limit,$offset)
    {
        $query = $this->db
            ->limit($limit,$offset)
            ->get($tableName);
        $questions = $query->result_array();
        for ($i=0; $i<count($questions); $i++)
        {
            $p_name =  $this->db
                ->select($ToGet)
                ->get_where(patient_table_name(),array($ToGetIdentifier => $questions[$i][$col]));
            $questions[$i][$ToGet] = $p_name->row()->$ToGet;
        }
        return $questions;
    }

    public function delete($tableName,$ColumnName,$regno)
    {
        $this->db->delete($tableName, array($ColumnName => $regno));
    }

    public function deleteWhole($tableName,$ColumnName,$ColValue,$reg_no,$regno){
        $this->db->where($ColumnName, $ColValue);
        $this->db->where($$reg_no, $regno);
        $this->db->delete($tableName);
    }

    public function getSingleRecord($tableName,$colName,$id)
    {
        $query = $this->db->get_where($tableName,array($colName => $id));
        return $query->row();
    }

    public function generic_update($tableName,$RecColumn,$id,$data)
    {
        $this->db->where($RecColumn, $id);
        $this->db->update($tableName, $data);
    }

    public function getPressure_Single_patient($tableName,$tablecol,$patient_reg,$tableReg,$nameToGet)//table/regno/patien.name where patient.reg_no = table.regno
    {
        $query = $this->db
            ->group_by('date')
            ->get_where($tableName,array($tablecol=>$tableReg));
        $questions = $query->result_array();
        for ($i=0; $i<count($questions); $i++)
        {
            $p_name =  $this->db
                ->select($nameToGet)
                ->get_where(patient_table_name(),array($patient_reg => $questions[$i][$tablecol]));
            $questions[$i][$nameToGet] = $p_name->row()->$nameToGet;
        }
        return $questions;
    }

    public function getSelectedRecord($tableName,$ColToSelect,$ColName,$regno)
    {
        if(ifExists($tableName,$ColName,$regno)) {
            $query = $this->db
                ->select($ColToSelect)
                ->get_where($tableName, array($ColName => $regno));
            return $query->result();
        }else{
            return FALSE;
        }
    }
    public function getRecord($tableName,$ColName,$date,$regno_f,$regno)
    {
        if(ifExists($tableName,$regno_f,$regno)) {
            $query = $this->db->get_where($tableName, array($ColName => $date,$regno_f=>$regno));
            return $query->result();
        }else{
            return FALSE;
        }
    }

}