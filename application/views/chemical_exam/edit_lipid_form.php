<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w960">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">Lipid Profile</h2>
        </div>
        <div class="card-body">
            <?php echo form_open('chemicalexam/saveUpdatelipid'); ?>

            <h2>Registration No : <?php $reg = $info->regno; echo form_input(['name'=>"regno",'required'=>"required",'value'=>"$reg", 'pattern'=>"^[0-9]*$", 'style'=>"width:80px; text-align:center; font-size: 27px; border:0; outline:0; background: transparent;border-bottom: 1px solid black;"]) ?></h2>
            <?php echo form_error('regno', '<div class="text-danger">', '</div>'); ?>
            <br>
            <input type="hidden" name="lp_id" value="<?=$info->lp_id;?>">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td colspan="4" style="text-align: center; font-weight: bolder">Lipid Profile Test</td>
                </tr>
                <tr>
                    <td>TC</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"tc",'type'=>"number",'step'=>"any",'value'=>set_value('tc',$info->tc), 'style'=>"width:200px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                    <td>LDL</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"ldl", 'type'=>"number",'step'=>"any",'value'=>set_value('ldl',$info->ldl), 'style'=>"width:200px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>

                </tr>
                <tr>
                    <td>TG</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"tg",'type'=>"number",'step'=>"any",'value'=>set_value('tg',$info->tg), 'style'=>"width:200px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                    <td>HDL</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"hdl",'type'=>"number",'step'=>"any",'value'=>set_value('hdl',$info->hdl), 'style'=>"width:200px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
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

