<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w760">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">General Physical Examination</h2>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <?php echo form_open('basicinfo/get_gen_phy_exam_data'); ?>

                <h2>Registration No : <?php $reg = $this->session->userdata('reg_no'); echo form_input(['name'=>"regno",'value'=>"$reg", 'style'=>"width:80px; text-align:center; font-size: 27px; border:0; outline:0; background: transparent;border-bottom: 1px solid black;"]) ?></h2>
                <?php echo form_error('regno', '<div class="text-danger">', '</div>'); ?>
                <br>
                <table class="table table-bordered " style="width: 1040px">
                    <tbody>
                    <tr>
                        <td>Date</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ex_date",'placeholder'=>'day/month/year','value'=>set_value('ex_date')]);?></td>
                    </tr>
                    <tr>
                        <td>General Physical Examination</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"gen_phy",'value'=>set_value('gen_phy')]);?></td>
                    </tr>
                    <tr>
                        <td>CVS</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"cvs",'value'=>set_value('cvs')]);?></td>
                    </tr>
                    <tr>
                        <td>Respiratory System</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"rs",'value'=>set_value('rs')]);?></td>
                    </tr>
                    <tr>
                        <td>Abdomen</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"abdomen",'value'=>set_value('abdomen')]);?></td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td><?=form_input(['class'=>"input--style-5",'type'=>"number",'step'=>"any",'name'=>"weight",'value'=>set_value('weight')]);?></td>
                    </tr>
                    <tr>
                        <td>Fundoscopic Findings</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ff",'value'=>set_value('ff')]);?></td>
                    </tr>
                    <tr>
                        <td>BMI</td>
                        <td><?=form_input(['class'=>"input--style-5",'type'=>"number",'step'=>"any",'name'=>"mbi",'value'=>set_value('mbi')]);?></td>
                    </tr>

                    <tr>
                        <td>Abdominal Circumference</td>
                        <td><?=form_input(['class'=>"input--style-5",'type'=>"number",'step'=>"any",'name'=>"ac",'value'=>set_value('ac')]);?></td>
                    </tr>
                    <tr>
                        <td>Blood Pressure</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"bp",'value'=>set_value('bp')]);?></td>
                    </tr>

                    </tbody>

                </table>
                <div class="text-center" style="margin-left: 75%; width: 180px;">
                    <?=form_submit(['id'=>"submit",'class'=>"btn btn-primary",'value'=>"save"])?>
                </div>
                <?=form_close();?>
                <?php if (Globals::authenticatedMemeberId()){echo "<script>alert('Patient Does not exist');</script>"; Globals::setAuthenticatedMemeberId(false);} ?>
            </div>
        </div>
    </div>
</div>
<!--</div>-->

