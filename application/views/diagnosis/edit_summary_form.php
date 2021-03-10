<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w960">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">Clinical Summary</h2>
        </div>
        <div class="card-body">

            <?php echo form_open('diagnosis/updateClinicalSummary'); ?>

            <h2>Registration No : <?php $reg = $info->regno; echo form_input(['name'=>"regno",'required'=>"required",'value'=>"$reg", 'pattern'=>"^[0-9]*$", 'style'=>"width:80px; text-align:center; font-size: 27px; border:0; outline:0; background: transparent;border-bottom: 1px solid black;"]) ?></h2>
            <?php echo form_error('regno', '<div class="text-danger">', '</div>'); ?>
            <br>

            <table class="table table-bordered">
                <input type="hidden" name="cls_id" value="<?=$info->cls_id?>">
                <tbody>
                <tr>
                    <td colspan="4" style="text-align: center; font-weight: bolder">Clinical Summary</td>
                </tr>
                <tr>
                    <td colspan="4">

                        <?=form_textarea(['class'=>"input--style-5",'rows'=>"5",'cols'=>"80",'name'=>"clinical_s", 'required'=>"required",'value'=>set_value('clinical_s',$info->summary)]);?>

                    </td>
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

