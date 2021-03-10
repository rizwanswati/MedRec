<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w960">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">Diagnosis and Complications</h2>
        </div>
        <div class="card-body">

            <?php echo form_open('diagnosis/saveUpdatediagnosis'); ?>

            <h2>Registration No : <?php $reg = $info->reg_no; echo form_input(['name'=>"regno",'required'=>"required",'value'=>"$reg", 'pattern'=>"^[0-9]*$", 'style'=>"width:80px; text-align:center; font-size: 27px; border:0; outline:0; background: transparent;border-bottom: 1px solid black;"]) ?></h2>
            <?php echo form_error('regno', '<div class="text-danger">', '</div>'); ?>
            <br>
                <input type="hidden" name="diag_id" value="<?=$info->diag_id;?>">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td colspan="4" style="text-align: center; font-weight: bolder">Diagnosis</td>
                </tr>
                <tr>
                    <td colspan="4">

                        <?=form_textarea(['class'=>"input--style-5",'rows'=>"2",'cols'=>"50",'name'=>"diagnosis", 'required'=>"required",'value'=>set_value('diagnosis',$info->diagnosis)]);?>

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

