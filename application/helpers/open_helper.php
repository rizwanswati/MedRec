<?php

function show($data)
{
    echo '<pre>';
    print_r($data);
    exit();
}

function user_table_name()
{
    return 'user';
}

function patient_table_name()
{
    return 'patient';
}

function history_table_name()
{
    return 'history_questions';
} //reg_no_hq
function gen_phy_exam_t_name()
{
    return 'physical_examination';
} //reg_no_pe
function post_t_artry_right()
{
    return 'post_t_artry_right';
} //regno
function post_t_artry_left()
{
    return 'post_t_artry_left';
} //regno
function d_paedis_artry_right()
{
    return 'd_paedis_artry_right';
} //regno
function d_paedis_artry_left()
{
    return 'd_paedis_artry_left';
} //regno
function abpi_table_name()
{
    return 'abpi';
}  //reg_no
function pressure_sensation_table_name()
{
    return 'pressure_sensation';
} //regno
function tps_table_name()
{
    return 'touch_pressure_reading';
} //regno
function bio_chemical_table_name()
{
    return 'biochemical_report';
}  //reg_no_bcr
function lipid_table_name()
{
    return 'lipid_profile';
} //regno
function diagnosis_table()
{
    return 'diagnosis';
} //reg_no
function complication_table()
{
    return 'complications';
}  //reg_no
function clinical_table()
{
    return 'clinical_summary';
}  //regno
function immunization_table()
{
    return 'immunization';
} //regno
function treatment_table()
{
    return 'treatment';
} //reg_no
function future_plan_table()
{
    return 'future_plans';
} //reg_no
function future_test_table()
{
    return 'future_tests';
} // regno
function foot_images_table()
{
    return 'foot_images';
} //regno

function soft_delete($check)//user,patient,foot-images are out of scope of this funtion
{
    if($check==1){ //regno
        $tables = [
            'post_t_artry_right',
            'post_t_artry_left',
            'd_paedis_artry_right',
            'd_paedis_artry_left',
            'pressure_sensation',
            'touch_pressure_reading',
            'lipid_profile',
            'clinical_summary',
            'immunization',
            'future_tests',
            'foot_images'
        ];
        return $tables;
    }
    if ($check==2){ //reg_no
        $tables = [
            'abpi',
            'diagnosis',
            'complications',
            'treatment',
            'future_plans'
        ];
        return $tables;
    }
}

function prep_future_tests($regno,$futurePlanId,$test)
{
    $data = array(
        'regno'             => $regno,
        'future_plan_id'    => $futurePlanId,
        'test'              => $test
    );
    return $data;
}

function prep_future_plan($regno,$date){
    $data = array(
        'reg_no'    => $regno,
        'date'      => $date
    );
    return $data;
}

function prep_treatment($regno,$rx,$med,$dose,$frequency,$duration,$meal,$date){
    $data = array(
        'reg_no'    => $regno,
        'med'       => $med,
        'dose'      => $dose,
        'frequency' => $frequency,
        'duration'  => $duration,
        'date'      => $date,
        'meal'      => $meal,
        'rx'        => $rx
    );
    return $data;
}

function prep_med_update($info)
{
    $data = array(
        'med'       => $info['med-name'],
        'dose'      => $info['dose'],
        'frequency' => $info['frequency'],
        'duration'  => $info['duration'],
        'meal'      => $info['meal'],
        'rx'        => $info['rx']
    );
    return $data;
}

function prep_immune($regno,$type,$does)
{
    $data = array(
        'regno' => $regno,
        'type'  => $type,
        'dose'  => $does,
        'date'  => date('Y/m/d')
    );
    return $data;
}
function prep_clinical($info,$update){
    if ($update){
        $data = array(
            'summary'   => $info['clinical_s']
        );
        return $data;
    }else {
        $data = array(
            'regno' => $info['regno'],
            'summary' => $info['clinical_s']
        );
        return $data;
    }
}

function prep_complication($regno,$value){
    $data = array(
        'reg_no'        => $regno,
        'complication'  => $value
    );
    return $data;
}

function prep_diagnosis($info,$update)
{
    if($update){
        $data = array(
            'diagnosis' => $info['diagnosis']
        );
    }else{
        $data = array(
            'reg_no'    => $info['regno'],
            'diagnosis' => $info['diagnosis']
        );   
    }
    
    return $data;
}

function prep_lipid($info)
{
    $data = array(
        'regno'         => $info['regno'],
        'tc'            => $info['tc'],
        'ldl'           => $info['ldl'],
        'tg'            => $info['tg'],
        'hdl'           => $info['hdl'],
        'hdl_ldl_ratio' => getRatio($info['ldl'],$info['hdl']),
        'date'          => $info['date']
    );
    return $data;
}

function prep_lipid_update($info)
{
    $data = array(
        'regno'         => $info['regno'],
        'tc'            => $info['tc'],
        'ldl'           => $info['ldl'],
        'tg'            => $info['tg'],
        'hdl'           => $info['hdl'],
        'hdl_ldl_ratio' => getRatio($info['ldl'],$info['hdl']),
    );
    return $data;
}


function prep_biochemical($info)
{
    $data = array(
        'reg_no_bcr'    => $info['regno'],
        'wbc'           => $info['wbc'],
        'rhb'           => $info['rhb'],
        'platelets'     => $info['plts'],
        'urea'          => $info['urea'],
        'creatinine'    => $info['crtnine'],
        'blood_suger_F' => $info['bsf'],
        'blood_suger_R' => $info['bsr'],
        'hba1c'         => $info['hbac'],
        'microalbumin'  => $info['malbumin'],
        'tsh'           => $info['tsh'],
        'alt'           => $info['alt'],
        'urine'         => $info['urine'],
        'cxr'           => $info['cxr'],
        'ecg'           => $info['ecg'],
        'other'         => $info['other'],
        'esr'           => $info['esr'],
        'vitd'          => $info['vitd'],
        'date'          => $info['chem_date']
    );
    return $data;

}


function prep_biochemical_update($info)
{
    $data = array(
        'reg_no_bcr'    => $info['regno'],
        'wbc'           => $info['wbc'],
        'rhb'           => $info['rhb'],
        'platelets'     => $info['plts'],
        'urea'          => $info['urea'],
        'creatinine'    => $info['crtnine'],
        'blood_suger_F' => $info['bsf'],
        'blood_suger_R' => $info['bsr'],
        'hba1c'         => $info['hbac'],
        'microalbumin'  => $info['malbumin'],
        'tsh'           => $info['tsh'],
        'alt'           => $info['alt'],
        'urine'         => $info['urine'],
        'cxr'           => $info['cxr'],
        'ecg'           => $info['ecg'],
        'vitd'          => $info['vitd'],
        'other'         => $info['other'],
    );
    return $data;

}



function prep_pressure_sensation($info,$update)
{
    if ($update)
    {
        $data = array(
            'p1' => $info['p_1'],
            'p2' => $info['p_2'],
            'p3' => $info['p_3'],
            'p4' => $info['p_4'],
            'p5' => $info['p_5'],
            'p6' => $info['p_6'],
            'p7' => $info['p_7'],
            'p8' => $info['p_8'],
            'p9' => $info['p_9'],
            'p10' => $info['p_10'],
            'result_right'=>$info['result_right'],
            'result_left'=>$info['result_left'],
            'averege_right'=>$info['avg_right'],
            'averege_left' => $info['avg_left'],
            'regno'         => $info['regno'],
            'date'          => $info['date']
        );
        return $data;
    }else{
        $data = array(
            'p1' => $info['p_1'],
            'p2' => $info['p_2'],
            'p3' => $info['p_3'],
            'p4' => $info['p_4'],
            'p5' => $info['p_5'],
            'p6' => $info['p_6'],
            'p7' => $info['p_7'],
            'p8' => $info['p_8'],
            'p9' => $info['p_9'],
            'p10' => $info['p_10'],
            'result_right'=>$info['result_right'],
            'result_left'=>$info['result_left'],
            'averege_right'=>$info['avg_right'],
            'averege_left' => $info['avg_left'],
            'regno'         => $info['regno'],
            'date'          => $info['date']
        );
        return $data;
    }

}

function img_upload_config()
{
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['overwrite'] = FALSE;
    $config['remove_spaces'] = TRUE;
    $config['max_size']      = 0;
    $config['max_width']     = 0;
    $config['max_height']    = 0;

    return $config;
}

function prep_img_data($name,$regno,$date,$update)
{
    if ($update)
    {
        $data = array(
            'img_name' => $name,
            'regno'    => $regno,
            'date'     => $date
        );
        return $data;
    }else{
        $data = array(
            'img_name' => $name,
            'regno'    => $regno,
            'date'     => date('d/m/Y')
        );
        return $data;
    }

}


function prep_touch_sen($info)
{
    $data = array(
        'regno'         => $info['regno'],
        'vib_sn_left'   => $info['vib_sen_left'],
        'vib_sn_right'  => $info['vib_sen_right'],
        'temp_sn_left'  => $info['temp_sen_left'],
        'temp_sn_right' => $info['temp_sen_right'],
        'pain_sn_left'  => $info['pain_sen_left'],
        'pain_sn_right' => $info['pain_sen_right'],
        'ankle_left'    => $info['ankle_left'],
        'ankle_right'   => $info['ankle_right']
    );
    return $data;
}

function peri_prep($col,$regno,$value)
{
    $data = array(
        'regno' => $regno,
         $col   => $value
    );
    return $data;
}


function peri_prep_abpi($info)
{
    $data = array(
        'reg_no' => $info['regno'],
        'right' => $info['right'],
        'left'  => $info['left']
    );
    return $data;
}

function inserted_id($sess_name,$id){
    $ci = & get_instance();
    $ci->session->set_userdata($sess_name,$id);
}

function phy_exam_data_prep($info)
{
    $data = array(
        'General_phy_ex'        => $info['gen_phy'],
        'cvs'                   => $info['cvs'],
        'fundoscopic_finding'   => $info['ff'],
        'respiratory_system'    => $info['rs'],
        'abdomen'               => $info['abdomen'],
        'weight'                => $info['weight'],
        'mbi'                   => $info['mbi'],
        'circumference'         => $info['ac'],
        'blood_pressure'        => $info['bp'],
        'reg_no_pe'             => $info['regno'],
        'date'                  => $info['ex_date']
    );
    return $data;
}

function phy_exam_update_data_prep($info)
{
    $data = array(
        'General_phy_ex'        => $info['gen_phy'],
        'cvs'                   => $info['cvs'],
        'fundoscopic_finding'   => $info['ff'],
        'respiratory_system'    => $info['rs'],
        'abdomen'               => $info['abdomen'],
        'weight'                => $info['weight'],
        'mbi'                   => $info['mbi'],
        'circumference'         => $info['ac'],
        'blood_pressure'        => $info['bp'],
        'reg_no_pe'             => $info['regno']
    );
    return $data;
}



function Register_data_sanitization($posted_data)
{

    $data = array(

        'name'      => $posted_data['name'],
        'email'     => $posted_data['email'],
        'password'  => md5($posted_data['password']),
        'status'    => $posted_data['customRadio']
    );

    return $data;
}


function patient_data_sanitization($posted_data)
{
    $data = array(
        'old_reg'=> $posted_data['old_reg'],
        'name' => $posted_data['first_name'],
        'father_name' => $posted_data['father_name'],
        'age' => $posted_data['age'],
        'sex' => $posted_data['sex'],
        'martial_status' => $posted_data['m_status'],
        'address' => $posted_data['address'],
        'contact' => $posted_data['phone'],
        'date' => $posted_data['reg_date']

    );
    return $data;
}

function update_patient_data_sanitization($posted_data)
{
    $data = array(
        'old_reg'=> $posted_data['old_reg'],
        'name' => $posted_data['first_name'],
        'father_name' => $posted_data['father_name'],
        'age' => $posted_data['age'],
        'sex' => $posted_data['sex'],
        'martial_status' => $posted_data['m_status'],
        'address' => $posted_data['address'],
        'contact' => $posted_data['phone'],

    );
    return $data;
}


function login_data_sanitization($posted_data)
{

    $data = array(
        'email'     => $posted_data['email'],
        'password'  => md5($posted_data['pass'])
    );

    return $data;
}



function session_info()
{
    $ci = & get_instance();
    $data = array(

            'name'      => $ci->session->userdata('name'),
            'email'     => $ci->session->userdata('email'),
            'logged_in' => $ci->session->userdata('logged_in'),
            'status'    => $ci->session->userdata('status')

    );
    return $data;
}

function set_session($data)
{
    $user_session_data = array(
        'name'      => $data['name'],
        'email'     => $data['email'],
        'status'    => $data['status'],
        'logged_in' => TRUE
    );

    $status = $data['status'];
    if($status == 'admin')
    {
        loadAdminView($user_session_data);
    }else
    {
        loadUserView($user_session_data);
    }

//    return $user_session_data;
}

function loadAdminView($user_session_data)
{
    $ci = & get_instance();
    if($ci->session->userdata('logged_in')){
        redirect(base_url().'admin/dashboard','location');
//        $ci->load->view('admin_home',$user_session_data);
    }else {
        $ci->session->set_userdata($user_session_data); // session is setting here
        redirect(base_url().'admin/dashboard','location');
//        $ci->load->view('admin_home', $user_session_data);
    }
}

function loadUserView($user_session_data)
{
    $ci = & get_instance();
    if($ci->session->userdata('logged_in')){
        redirect(base_url().'user','location');
    }else {
        $ci->session->set_userdata($user_session_data); // session is setting here
        redirect(base_url().'user','location');
    }
}

function getAddress() {
    $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
    return $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

function getRatio($num1, $num2){
    for($i = $num2; $i > 1; $i--) {
        if(($num1 % $i) == 0 && ($num2 % $i) == 0) {
            $num1 = $num1 / $i;
            $num2 = $num2 / $i;
        }
    }
    $num1 = intval($num1);
    $num2 = intval($num2);
    
    return "$num1:$num2";
}

function configuration()
{
    $config["full_tag_open"] = '<ul class="pagination">';
    $config["full_tag_close"] = '</ul>';
    $config["first_link"] = "&laquo;";
    $config["first_tag_open"] = "<li>";
    $config["first_tag_close"] = "</li>";
    $config["last_link"] = "&raquo;";
    $config["last_tag_open"] = "<li>";
    $config["last_tag_close"] = "</li>";
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '<li>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '<li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    
    return $config;
}

function ifExists($tablneName,$colmunName,$regno)
{
    $ci = & get_instance();
    $ci->load->model('general');
    $check = $ci->general->IFexits($tablneName,$colmunName,$regno);
    return $check;

}


function getIDs($tableName,$col_date,$col_regno,$date,$regno)
{
    $ci = & get_instance();
    $ci->load->model('general');
    $check = $ci->general->getIDs($tableName,$col_date,$col_regno,$date,$regno);
    return $check;

}

function getIMGnames($tableName,$col_regno,$regno)
{
    $ci = & get_instance();
    $ci->load->model('general');
    $check = $ci->general->getIMGnames($tableName,$col_regno,$regno);
    return $check;

}

function qestions($index)
{
    $question  = [
        'Since how long you have diabetes?',
        'How it was diagnosed?',
        'When you started taking medication/insulin for diabetes?',
        'Have you ever landed into hypo or hyperglycemia?',
        'Did you ever felt SOB on exertion?',
        'Have you ever had chest pain on exertion or rest?',
        'How is your vision? Any recent deterioraton?',
        'Any burning or pain in the feet at night?',
        'Do you feel numbness of the feet?',
        'Di you ever have wound in feet?',
        'What is your frequencey of micturation?',
        'How is your sexual funtion?',
        'Menstrual irregulation | HX of GDM',
        'How is your BP? Did you ever use medicines?',
        'Do you have constipation or diarrhea?',
        'Do you have dental decay?',
        'Are you suffering from any other disease?',
        'Have you been bothered by the pain or stiffness of leg while walking? (uphill)',
        'During last month did you feel down, depressed or hopless?',
        'Smoker? / Ex smoker ?',
        'Are you taking any medicaiton at the moment?'
    ];

    return $question[$index];
}

function pulses($index)
{
    $pulse = [
        'strong pulse',
        'palpable but Diminished',
        'thready',
        'non palpable'
    ];
    return $pulse[$index];
}

function Showpulse($index)
{
    $pulse = [
        'Strong Pulse',
        'Palpable but Diminished',
        'Thready',
        'Non Palpable'
    ];
    return $pulse[$index];
}

function ShowComplication($index)
{
    $pulse = [
        'Ratinopathy',
        'Nephropathy',
        'Neuropathy',
        'Diabetic Foot',
        'Aut.Neuropathy',
        'Stroke',
        'MI',
        'Angina',
        'Amputation',
        'Fatty Liver',
        'T.Paedis',
        'Urine Microalbumin Urea'
    ];
    return $pulse[$index];
}

function exitsInArray($value)
{
    $pulse = array(
        'strong pulse',
        'palpable but Diminished',
        'thready',
        'non palpable'
    );
    return array_search($value,$pulse);

}

function comp_exitsInArray($value)
{
    $pulse = array(
        'Ratinopathy',
        'Nephropathy',
        'Neuropathy',
        'Diabetic Foot',
        'Aut.Neuropathy',
        'Stroke',
        'MI',
        'Angina',
        'Amputation',
        'Fatty Liver',
        'T.Paedis',
        'Urine Microalbumin Urea'
    );
    return array_search($value,$pulse);

}

function complications($index)
{
    $pulse = [
        'Ratinopathy',
        'Nephropathy',
        'Neuropathy',
        'Diabetic Foot',
        'Aut.Neuropathy',
        'Stroke',
        'MI',
        'Angina',
        'Amputation',
        'Fatty Liver',
        'T.Paedis',
        'Urine Microalbumin Urea'
    ];
    return $pulse[$index];
}


function returnpulses()
{
    $pulse = [
        'strong pulse',
        'palpable but Diminished',
        'thready',
        'non palpable'
    ];
    return $pulse;
}

function returnComplications()
{
    $pulse = [
        'Ratinopathy',
        'Nephropathy',
        'Neuropathy',
        'Diabetic Foot',
        'Aut.Neuropathy',
        'Stroke',
        'MI',
        'Angina',
        'Amputation',
        'Fatty Liver',
        'T.Paedis',
        'Urine Microalbumin Urea'
    ];
    return $pulse;
}

function shorten($string)
{
    if (strlen($string) > 35) // if you want...
    {
        $maxLength = 35;
        $string = substr($string, 0, $maxLength);
        echo $string.'...';
    }else{
        echo $string;
    }

}
