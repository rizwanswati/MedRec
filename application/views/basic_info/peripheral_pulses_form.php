<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w760">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">Peripheral Pulses</h2>
        </div>
        <div class="card-body">


                <?php echo form_open('basicinfo/get_peripheral_pulses'); ?>

                <h2>Registration No : <?php $reg = $this->session->userdata('reg_no'); echo form_input(['name'=>"regno",'value'=>"$reg", 'style'=>"width:80px; text-align:center; font-size: 27px; border:0; outline:0; background: transparent;border-bottom: 1px solid black;"]) ?></h2>
                <?php echo form_error('regno', '<div class="text-danger">', '</div>'); ?>
                <br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td colspan="2" style="text-align: center"><strong>Posterior Tibial Artery</strong></td>
                        <td colspan="2" style="text-align: center"><strong>Dorsalis Paedis Artery</strong></td>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td style="text-align: center"><strong>R</strong></td>
                        <td style="text-align: center"><strong>L</strong></td>
                        <td style="text-align: center"><strong>R</strong></td>
                        <td style="text-align: center"><strong>L</strong></td>
                    </tr>
                    <tr>
                        <td width="230px">
                            <fieldset>
                                <div>
                                    <input type="checkbox" name="pta_r[]" value="strong pulse" style="width: unset">
                                    &nbsp;<label for="coding">Strong Pulse</label>
                                </div>

                                <div>
                                    <input type="checkbox" name="pta_r[]" value="palpable but Diminished" style="width: unset">
                                    <label for="music">Palpable but Diminished</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="pta_r[]" value="thready" style="width: unset">
                                    <label for="music">Thready</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="pta_r[]" value="non palpable" style="width: unset">
                                    <label for="music">Non Palpable</label>
                                </div>
                            </fieldset>
                        </td>
                        <td width="230px">
                            <fieldset>
                                <div>
                                    <input type="checkbox" name="pta_l[]" value="strong pulse" style="width: unset">
                                    &nbsp;<label for="coding">Strong Pulse</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="pta_l[]" value="palpable but Diminished" style="width: unset">
                                    <label for="music">Palpable but Diminished</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="pta_l[]" value="thready" style="width: unset">
                                    <label for="music">Thready</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="pta_l[]" value="non palpable" style="width: unset">
                                    <label for="music">Non Palpable</label>
                                </div>
                            </fieldset>
                        </td>
                        <td width="230px">
                            <fieldset>
                                <div>
                                    <input type="checkbox" name="dpa_r[]" value="strong pulse" style="width: unset">
                                    &nbsp;<label for="coding">Strong Pulse</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="dpa_r[]" value="palpable but Diminished" style="width: unset">
                                    <label for="music">Palpable but Diminished</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="dpa_r[]" value="thready" style="width: unset">
                                    <label for="music">Thready</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="dpa_r[]" value="non palpable" style="width: unset">
                                    <label for="music">Non Palpable</label>
                                </div>
                            </fieldset>
                        </td>
                        <td width="230px">
                            <fieldset>
                                <div>
                                    <input type="checkbox" name="dpa_l[]" value="strong pulse" style="width: unset">
                                    &nbsp;<label for="coding">Strong Pulse</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="dpa_l[]" value="palpable but Diminished" style="width: unset">
                                    <label for="music">Palpable but Diminished</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="dpa_l[]" value="thready" style="width: unset">
                                    <label for="music">Thready</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="dpa_l[]" value="non palpable" style="width: unset">
                                    <label for="music">Non Palpable</label>
                                </div>
                            </fieldset>
                        </td>
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
<!--</div>-->

