<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w960">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">Update Medicine</h2>
        </div>
        <div class="card-body">
            <?php echo form_open('treatment/saveUpdatedMed'); ?>

            <h2>Registration No : <?php $reg = $info->reg_no; echo form_input(['name'=>"regno",'required'=>"required",'value'=>"$reg", 'pattern'=>"^[0-9]*$", 'style'=>"width:80px; text-align:center; font-size: 27px; border:0; outline:0; background: transparent;border-bottom: 1px solid black;"]) ?></h2>
            <?php echo form_error('regno', '<div class="text-danger">', '</div>'); ?>
            <br>
            <input type="hidden" name="trt_id" value="<?=$info->trt_id;?>">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td colspan="4" style="text-align: center; font-weight: bolder">Update Medicine</td>
                </tr>
                <tr>
                    <td>Rx</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"rx",'value'=>set_value('rx',$info->rx), 'style'=>"width:200px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td>Medicine Name</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"med-name",'value'=>set_value('med-name',$info->med), 'style'=>"width:200px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>


                <tr>
                    <td>Dose</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"dose",'value'=>set_value('dose',$info->dose), 'style'=>"width:200px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>

                <tr>
                    <td>Frequency</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"frequency",'value'=>set_value('frequency',$info->frequency), 'style'=>"width:200px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td>Duration</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"duration",'value'=>set_value('duration',$info->duration), 'style'=>"width:200px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td>Meal</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"meal",'value'=>set_value('meal',$info->meal), 'style'=>"width:200px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>

                </tbody>
            </table>
            <div align="center">
                <button class="btn btn--radius-2 btn--red" type="submit">Save</button>
            </div>
            <?=form_close();?>
            <?php if (Globals::authenticatedMemeberId()){echo "<script>alert('Patient Does not exist');</script>"; Globals::setAuthenticatedMemeberId(false);} ?>
        </div>
    </div>
</div>
<!--</div>-->

