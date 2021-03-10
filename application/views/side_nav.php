<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3><a href="<?=base_url('admin/dashboard')?>"> Welcome<br>&nbsp;<?php echo $this->session->userdata('name');?></a></h3>
        </div>

        <ul class="list-unstyled components">

            <li>

                <a href="#home" data-toggle="collapse" aria-expanded="false" style="font-weight: bold">Home</a>
                <ul class="collapse list-unstyled" id="home">
                    <li><a href="#patient" data-toggle="collapse" aria-expanded="false"><strong>Patient</strong></a>
                        <ul class="collapse list-unstyled" id="patient" style="margin-left: 15px">
                            <li><a href="<?=base_url('basicinfo/history')?>">History</a></li>
                            <li><a href="<?=base_url('basicinfo/genphyexam')?>">General Physical Examination</a></li>
                            <li><a href="<?=base_url('basicinfo/showABPI')?>">ABPI</a></li>
                            <li><a href="<?=base_url('basicinfo/showPressure_All')?>">Pressure Points</a></li>
                            <li><a href="<?=base_url('basicinfo/touch')?>">Touch Pressure Readings</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#binfo" data-toggle="collapse" aria-expanded="false"><strong>Lab Reports</strong></a>
                        <ul class="collapse list-unstyled" id="binfo" style="margin-left: 15px">
                            <li><a href="<?=base_url('chemicalexam/showChemExam')?>">Chemical Examination</a></li>
                            <li><a href="<?=base_url('chemicalexam/showLipid')?>">Lipid Profile</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#diag" data-toggle="collapse" aria-expanded="false"><strong>Diagnosis</strong></a>
                        <ul class="collapse list-unstyled" id="diag" style="margin-left: 15px">
                            <li><a href="<?=base_url('diagnosis/showDiagnosis')?>">Diagnosis</a></li>
                            <li><a href="<?=base_url('diagnosis/showClinicalSummary')?>">Clinical Sumary</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?=base_url('treatment/showTreatment')?>"><strong>Prescriptions</strong></a>
                    </li>

                    <li>
                        <a href="<??>"><strong>Next Consultation Plan</strong></a>
                    </li>

                    <li>
                        <a href="<??>"><strong>Immunization</strong></a>
                    </li>

                </ul>


            </li>




        </ul>

        <ul class="list-unstyled components">
            <!--            <p style="font-weight: bold">Add New Patient</p>-->
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" style="font-weight: bold">New Patient</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="<?=base_url('basicinfo')?>">Basic Information</a></li>
                    <li><a href="<?=base_url('basicinfo/patient_history')?>">History</a></li>
                    <li><a href="<?=base_url('basicinfo/gen_phy_exam')?>">General Physical Examination</a></li>
                    <li><a href="<?=base_url('basicinfo/peripheral_pulses')?>">Peripheral Pulses</a></li>
                    <li><a href="<?=base_url('basicinfo/abpi')?>">ABPI</a></li>
                    <li><a href="<?=base_url('basicinfo/pressure_points')?>">Pressure Points</a></li>
                    <li><a href="<?=base_url('basicinfo/touch_pressure_readings')?>">Touch Pressure Readings</a></li>
                </ul>

            </li>
        </ul>

        <ul class="list-unstyled components">
            <li>
                <a href="#genExam" data-toggle="collapse" aria-expanded="false" style="font-weight: bold">Biochemical Examination</a>
                <ul class="collapse list-unstyled" id="genExam">
                    <li><a href="<?=base_url('chemicalexam')?>">General Examination</a></li>
                    <li><a href="<?=base_url('chemicalexam/lipid_profile')?>">Lipid Profile</a></li>
                </ul>
            </li>
        </ul>

        <ul class="list-unstyled components">
            <li>
                <a href="#diagnosis" data-toggle="collapse" aria-expanded="false" style="font-weight: bold">Diagnosis</a>
                <ul class="collapse list-unstyled" id="diagnosis">
                    <li><a href="<?=base_url('diagnosis')?>">Diagnosis & Complications</a></li>
                    <li><a href="<?=base_url('diagnosis/clinical_summary')?>">Clinical Summary</a></li>
                </ul>
            </li>
        </ul>

        <ul class="list-unstyled components">
            <li>
                <a href="#treatment" data-toggle="collapse" aria-expanded="false" style="font-weight: bold">Treatment</a>
                <ul class="collapse list-unstyled" id="treatment">
                    <li><a href="<?=base_url('treatment')?>">Prescription</a></li>
                </ul>
            </li>
        </ul>

        <ul class="list-unstyled components">
            <li>
                <a href="#immune" data-toggle="collapse" aria-expanded="false" style="font-weight: bold">Immunization</a>
                <ul class="collapse list-unstyled" id="immune">
                    <li><a href="<?=base_url('immunization')?>">Immunization</a></li>
                </ul>

            </li>
        </ul>


        <ul class="list-unstyled CTAs">
            <li><a href="<?=base_url('register/logout');?>" class="download">Log out</a></li>
        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content">

        <nav class="navbar navbar-default navbar-expand-lg">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                        <i id="icon-change" class="glyphicon glyphicon-chevron-left"></i>

                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <?=form_open('search/find', array('class' => 'search-form','role' => 'search'));?>
                            <div class="form-group pull-right" id="search">
                                <?=form_input(['class'=>"form-control",'name'=>"raw",'placeholder'=>"Database Search",'required'=>"required",'type'=>"text", 'value'=>set_value('raw')]);?>
                                <button type="submit" class="form-control form-control-submit">Submit</button>
                                <span class="search-label"><i class="glyphicon glyphicon-search"></i></span>
                            </div>
                        <?=form_close();?>

                    </ul>
                </div>


            </div>
        </nav>

        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: -40px;">
                <ul class="nav navbar-nav navbar-left" style="margin-left: -30px;">
                    <input class="search form-control navbar-header" placeholder="Table Search" id="myInput" onkeyup="searchTable();" style="width: 220px; margin-top: 15px; height: 46px"/>
                </ul>
                <button type="button" id="sidebarCollapse" class="btn btn--blue   navbar-btn" style="margin-top: 13px" onclick="sortTable()">
                    <i id="icon-change" class="glyphicon glyphicon-sort-by-order"></i>
                </button>

            </div>
        </div>
        <br>
        
        
        
  