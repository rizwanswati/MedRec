<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function GenPhy($regno)
    {
        inserted_id('reg_no',$regno);
        redirect(base_url() . 'basicinfo/gen_phy_exam', 'location');
    }

    public function ABPI($regno)
    {
        inserted_id('reg_no',$regno);
        redirect(base_url() . 'basicinfo/abpi', 'location');
    }

    public function Pressure($regno)
    {
        inserted_id('reg_no',$regno);
        redirect(base_url() . 'basicinfo/pressure_points', 'location');
    }
    public function Touch($regno)
    {
        inserted_id('reg_no',$regno);
        redirect(base_url() . 'basicinfo/touch_pressure_readings', 'location');
    }
    public function Peripheral($regno)
    {
        inserted_id('reg_no',$regno);
        redirect(base_url() . 'basicinfo/peripheral_pulses', 'location');
    }
    public function Chem($regno)
    {
        inserted_id('reg_no',$regno);
        redirect(base_url() . 'chemicalexam', 'location');
    }
    public function Lipid($regno)
    {
        inserted_id('reg_no',$regno);
        redirect(base_url().'chemicalexam/lipid_profile','location');
    }
    public function Diag($regno)
    {
        inserted_id('reg_no',$regno);
        redirect(base_url().'diagnosis','location');
    }
    public function Summary($regno)
    {
        inserted_id('reg_no',$regno);
        redirect(base_url().'diagnosis/clinical_summary','location');
    }
    public function Med($regno)
    {
        inserted_id('reg_no',$regno);
        redirect(base_url().'treatment','location');
    }
    public function Immunization($regno)
    {
        inserted_id('reg_no',$regno);
        redirect(base_url().'Immunization','location');
    }
    
}