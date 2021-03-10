<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w960">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">General Chemical Examination</h2>
        </div>
        <div class="card-body">
            <?php echo form_open('chemicalexam/saveUpdate'); ?>

            <h2>Registration No : <?php $reg = $info->reg_no_bcr; echo form_input(['name'=>"regno",'required'=>"required",'value'=>"$reg", 'pattern'=>"^[0-9]*$", 'style'=>"width:80px; text-align:center; font-size: 27px; border:0; outline:0; background: transparent;border-bottom: 1px solid black;"]) ?></h2>
            <?php echo form_error('regno', '<div class="text-danger">', '</div>'); ?>
            <br>
            <input type="hidden" name="b_id" value="<?=$info->b_id?>">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td colspan="4" style="text-align: center; font-weight: bolder">Laboratory Test</td>
                </tr>
                <tr>
                    <td>Hb</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"rhb",'value'=>set_value('rhb',$info->rhb), 'style'=>"width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                    <td>Blood Sugar Fasting</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"bsf",'value'=>set_value('bsf',$info->blood_suger_F), 'pattern'=>"^[0-9]*$", 'style'=>"width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td>WBCs</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"wbc",'value'=>set_value('wbc',$info->wbc), 'pattern'=>"^[0-9]*$", 'style'=>"width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                    <td>Blood Sugar Random</td>
                    <td><?=form_input(['class'=>"input--style-5", 'name'=>"bsr",'value'=>set_value('bsr',$info->blood_suger_R), 'pattern'=>"^[0-9]*$", 'style'=>"width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td>Platelets</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"plts",'value'=>set_value('plts',$info->platelets), 'pattern'=>"^[0-9]*$", 'style'=>"width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                    <td>HbA1c</td>
                    <td><?=form_input(['class'=>"input--style-5",'type'=>"number",'name'=>"hbac",'value'=>set_value('hbac',$info->hba1c), 'step'=>"any",'style'=>"width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td>Urea</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"urea",'type'=>"number",'step'=>"any",'value'=>set_value('urea',$info->urea), 'style'=>"width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                    <td>U.Microalbumin</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"malbumin", 'type'=>"number",'step'=>"any",'value'=>set_value('malbumin',$info->microalbumin), 'style'=>"width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td>Creatinine</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"crtnine", 'type'=>"number",'step'=>"any",'value'=>set_value('crtnine',$info->creatinine), 'style'=>"width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                    <td>Urine R/E</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"urine", 'type'=>"number",'step'=>"any",'value'=>set_value('urine',$info->urine), 'style'=>"width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td>ALT</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"alt",'type'=>"number",'step'=>"any",'value'=>set_value('alt',$info->alt), 'style'=>"width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                    <td>TFTs</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"tsh",'type'=>"number",'step'=>"any",'value'=>set_value('tsh',$info->tsh), 'style'=>"width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td>CXR</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"cxr",'value'=>set_value('cxr',$info->cxr), 'style'=>"width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                    <td>ECG</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"ecg",'value'=>set_value('ecg',$info->ecg), 'style'=>"width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td>ESR/CRP</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"esr",'value'=>set_value('esr',$info->esr), 'style'=>"width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                    <td>Vit-D level</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"vitd",'value'=>set_value('vitd',$info->vitd), 'style'=>"width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td>Other</td>
                    <td colspan="3"><?=form_input(['class'=>"input--style-5",'name'=>"other",'value'=>set_value('other',$info->other), 'style'=>"width:480px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
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

