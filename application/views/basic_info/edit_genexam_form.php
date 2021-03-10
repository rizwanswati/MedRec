<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w760">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">General Physical Examination</h2>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <?php echo form_open('basicinfo/SaveGenUpdate'); ?>

                <h2>Registration No : <?php $reg = $info->reg_no_pe; echo form_input(['name'=>"regno",'value'=>"$reg", 'style'=>"width:80px; text-align:center; font-size: 27px; border:0; outline:0; background: transparent;border-bottom: 1px solid black;"]) ?></h2>
                
                <br>
                
                <table class="table table-bordered " style="width: 1040px">
                    <input type="hidden" name="phy_id" value="<?=$info->phy_id?>">
                    <tbody>
                    <tr>
                        <td>General Physical Examination</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"gen_phy",'value'=>set_value('gen_phy',$info->General_phy_ex)]);?></td>
                    </tr>
                    <tr>
                        <td>CVS</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"cvs",'value'=>set_value('cvs',$info->cvs)]);?></td>
                    </tr>
                    <tr>
                        <td>Respiratory System</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"rs",'value'=>set_value('rs',$info->respiratory_system)]);?></td>
                    </tr>
                    <tr>
                        <td>Abdomen</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"abdomen",'value'=>set_value('abdomen',$info->abdomen)]);?></td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td><?=form_input(['class'=>"input--style-5",'type'=>"number",'step'=>"any",'name'=>"weight",'value'=>set_value('weight',$info->weight)]);?></td>
                    </tr>
                    <tr>
                        <td>Fundoscopic Findings</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ff",'value'=>set_value('ff',$info->fundoscopic_finding)]);?></td>
                    </tr>
                    <tr>
                        <td>BMI</td>
                        <td><?=form_input(['class'=>"input--style-5",'type'=>"number",'step'=>"any",'name'=>"mbi",'value'=>set_value('mbi',$info->mbi)]);?></td>
                    </tr>

                    <tr>
                        <td>Abdominal Circumference</td>
                        <td><?=form_input(['class'=>"input--style-5",'type'=>"number",'step'=>"any",'name'=>"ac",'value'=>set_value('ac',$info->circumference)]);?></td>
                    </tr>
                    <tr>
                        <td>Blood Pressure</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"bp",'value'=>set_value('bp',$info->blood_pressure)]);?></td>
                    </tr>

                    </tbody>

                </table>
                <div class="text-center" style="margin-left: 75%; width: 180px;">
                    <?=form_submit(['id'=>"submit",'class'=>"btn btn-primary",'value'=>"save"])?>
                </div>
                <?=form_close();?>
            </div>
        </div>
    </div>
</div>
<!--</div>-->

