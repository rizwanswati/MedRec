<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w960">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">Diagnosis and Complications</h2>
        </div>
        <div class="card-body">

            <?php echo form_open('diagnosis/diagnosis_form'); ?>

            <h2>Registration No : <?php $reg = $this->session->userdata('reg_no'); echo form_input(['name'=>"regno",'required'=>"required",'value'=>"$reg", 'pattern'=>"^[0-9]*$", 'style'=>"width:80px; text-align:center; font-size: 27px; border:0; outline:0; background: transparent;border-bottom: 1px solid black;"]) ?></h2>
            <?php echo form_error('regno', '<div class="text-danger">', '</div>'); ?>
            <br>

            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td colspan="4" style="text-align: center; font-weight: bolder">Diagnosis</td>
                </tr>
                <tr>
                    <td colspan="4">

                    <?=form_textarea(['class'=>"input--style-5",'rows'=>"2",'cols'=>"50",'name'=>"diagnosis", 'required'=>"required",'value'=>set_value('diagnosis')]);?>

                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: center; font-weight: bolder">Complications</td>
                </tr>
                <tr>

                    <td width="230px">
                            <div>
                                <input type="checkbox" name="comp[]" value="Ratinopathy" style="width: unset">
                                &nbsp;<label for="coding">Ratinopathy</label>
                            </div>
                            <div>
                                <input type="checkbox" name="comp[]" value="Nephropathy" style="width: unset">
                                <label for="music">Nephropathy</label>
                            </div>
                            <div>
                                <input type="checkbox" name="comp[]" value="Neuropathy" style="width: unset">
                                <label for="music">Neuropathy</label>
                            </div>
                            <div>
                                <input type="checkbox" name="comp[]" value="Diabetic Foot" style="width: unset">
                                <label for="music">Diabetic Foot</label>
                            </div>
                            <div>
                                <input type="checkbox" name="comp[]" value="Aut.Neuropathy" style="width: unset">
                                <label for="music">Aut.Neuropathy</label>
                            </div>
                        <div>
                            <input type="checkbox" name="comp[]" value="T.Paedis" style="width: unset">
                            <label for="music">T.Paedis</label>
                        </div>
                    </td>



                    <td width="230px">

                            <div>
                                <input type="checkbox" name="comp[]" value="Stroke" style="width: unset">
                                &nbsp;<label for="coding">Stroke</label>
                            </div>
                            <div>
                                <input type="checkbox" name="comp[]" value="MI" style="width: unset">
                                <label for="music">MI</label>
                            </div>
                            <div>
                                <input type="checkbox" name="comp[]" value="Angina" style="width: unset">
                                <label for="music">Angina</label>
                            </div>
                            <div>
                                <input type="checkbox" name="comp[]" value="Amputation" style="width: unset">
                                <label for="music">Amputation</label>
                            </div>
                            <div>
                                <input type="checkbox" name="comp[]" value="Fatty Liver" style="width: unset">
                                <label for="music">Fatty Liver</label>
                            </div>
                            <div>
                                <input type="checkbox" name="comp[]" value="Urine Microalbumin Urea" style="width: unset">
                                <label for="music">Urine Microalbumin Urea</label>
                            </div>
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

