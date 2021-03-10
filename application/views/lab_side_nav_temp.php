<div class="wrapper">

    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3><a href="<?=base_url('user')?>"> Welcome<br>&nbsp;<?php echo $this->session->userdata('name');?></a></h3>
        </div>



        <ul class="list-unstyled components">
            <li>
                <a href="#ShowgenExam" data-toggle="collapse" aria-expanded="false" style="font-weight: bold">Show Records</a>
                <ul class="collapse list-unstyled" id="ShowgenExam">
                    <li><a href="<?=base_url('lab/ShowGenExam')?>">Show General Examination</a></li>
                    <li><a href="<?=base_url('lab/ShowLipidProfile')?>">Show Lipid Profile</a></li>
                </ul>
            </li>
        </ul>


        <ul class="list-unstyled components">
            <li>
                <a href="#genExam" data-toggle="collapse" aria-expanded="false" style="font-weight: bold">Biochemical Examination</a>
                <ul class="collapse list-unstyled" id="genExam">
                    <li><a href="<?=base_url('lab')?>">General Examination</a></li>
                    <li><a href="<?=base_url('lab/lipid_profile')?>">Lipid Profile</a></li>
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


            </div>
        </nav>


