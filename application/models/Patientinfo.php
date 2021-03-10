<?php

/**
 * Created by PhpStorm.
 * User: rizwanullah
 * Date: 12/24/2018
 * Time: 3:29 PM
 */
class Patientinfo extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        $this->db->insert(patient_table_name(),$data);
        return $this->db->insert_id();
    }

    public function get($tableName,$limit='',$offset='')
    {
        $query = $this->db
            ->limit($limit,$offset)
            ->get($tableName);
        return $query->result();
    }

    public function getHistory($tableName){
        $this->db->group_by('reg_no_hq');// add group_by
        $query = $this->db->get($tableName);
        $questions = $query->result_array();
        for ($i=0; $i<count($questions); $i++)
        {
           $p_name =  $this->db
                    ->select('name')
                    ->get_where(patient_table_name(),array('reg_no' => $questions[$i]['reg_no_hq']));
            $questions[$i]['name'] = $p_name->row()->name;
        }
        return $questions;
    }
                                
    public function generic_get($tableName,$tablecol,$tableReg,$nameToGet)//table/regno/patien.name where patient.reg_no = table.regno
    {
        $query = $this->db->get_where($tableName,array($tablecol=>$tableReg));
        $questions = $query->result_array();
        for ($i=0; $i<count($questions); $i++)
        {
            $p_name =  $this->db
                ->select($nameToGet)
                ->get_where(patient_table_name(),array($tablecol => $questions[$i][$tablecol]));
            $questions[$i][$nameToGet] = $p_name->row()->$nameToGet;
        }
        return $questions;
    }

    public function generic_getRegno($tableName,$tablecol,$patient_reg,$tableReg,$nameToGet,$limit,$offset)//table/regno/patien.name where patient.reg_no = table.regno
    {
        $query = $this->db
            ->limit($limit,$offset)
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


    public function getPressure_Single_patient($tableName,$tablecol,$patient_reg,$tableReg,$nameToGet)//table/regno/patien.name where patient.reg_no = table.regno
    {
        $query = $this->db
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
    
    public function getFootImgs_Single_patient($tableName,$tablecol,$patient_reg,$tableReg,$nameToGet)
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
    
    public function getABPI($tableName,$col,$ToGet,$ToGetIdentifier)
    {
        $query = $this->db->get($tableName);
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
    

    public function getSingleRow($tableName,$id)
    {
        $query = $this->db->get_where($tableName,array('reg_no' => $id));
        return $query->row();
    }

    public function getSingleRecord($tableName,$colName,$id)
    {
        $query = $this->db->get_where($tableName,array($colName => $id));
        return $query->row();
    }


    public function getSingleHistoryRecord($tableName,$colName,$regno)
    {
        if(ifExists(history_table_name(),$colName,$regno)) {
            $query = $this->db->get_where($tableName, array($colName => $regno));
            return $query->result();
        }else{
            return FALSE;
        }
    }

    public function getTotalRow($tableName)
    {
        $query = $this->db->get($tableName);
        return $query->num_rows();
    }

    public function getTotalRow_SingleRec($tableName,$colName,$id)
    {
        $this->db->where($colName, $id);
        $this->db->from($tableName);
        return $this->db->count_all_results();
    }

    public function delete($tableName,$ColumnName,$regno)
    {
        $this->db->delete($tableName, array($ColumnName => $regno));
    }
    
    public function update($table,$id,$data)
    {
        $this->db->where('reg_no', $id);
        $this->db->update($table, $data);
    }

    public function generic_update($tableName,$RecColumn,$id,$data)
    {
        $this->db->where($RecColumn, $id);
        $this->db->update($tableName, $data);
    }

    public function insert_history($data)
    {
        $this->db->insert(history_table_name(),$data);
    }
    
    public function insert_physical_exam_data($data){
        $this->db->insert(gen_phy_exam_t_name(),$data);
        return $this->db->insert_id();
    }
    
    public function insert_peripheral_pulses($table_name,$data)
    {
        $this->db->insert($table_name,$data);
    }

    public function insert_pressure_sensation($table_name,$data)
    {
        $this->db->insert($table_name,$data);
    }

    public function getGenPhy()
    {
        $query = $this->db->get(gen_phy_exam_t_name());
        return $query->result();
    }

    public function getRecord($tableName,$ColName,$regno)
    {
        if(ifExists($tableName,$ColName,$regno)) {
            $query = $this->db->get_where($tableName, array($ColName => $regno));
            return $query->result();
        }else{
            return FALSE;
        }
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

    public function deleteImages($date,$regno)
    {
        $this->db->delete(foot_images_table(), array('date' => $date,'regno'=>$regno));
    }

    public function getImgRecord($tableName,$ColName,$date,$regno_f,$regno)
    {
        if(ifExists($tableName,$ColName,$regno)) {
            $query = $this->db->get_where($tableName, array($ColName => $date,$regno_f=>$regno));
            return $query->result();
        }else{
            return FALSE;
        }
    }
    
}