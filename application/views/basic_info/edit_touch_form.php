<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w960">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">Foot Examination</h2>
        </div>
        <div class="card-body">

            <?php echo form_open('basicinfo/updateTouch'); ?>

            <h2>Registration No : <?php $reg = $info->regno; echo form_input(['name'=>"regno",'value'=>"$reg",'required'=>"required", 'style'=>"width:80px; text-align:center; font-size: 27px; border:0; outline:0; background: transparent;border-bottom: 1px solid black;"]) ?></h2>
            <?php echo form_error('regno', '<div class="text-danger">', '</div>'); ?>
            <br>
            <table class="table table-bordered">
                <input type="hidden" name="tpr_id" value="<?=$info->tpr_id;?>">
                <tbody>
                <tr>
                    <td style="width: 163.733px;">
                        <h4><strong>Sensations</strong></h4>
                    </td>
                    <td style="width: 163.733px; text-align: center;">
                        <h4><strong>Left Foot</strong></h4>
                    </td>
                    <td style="width: 163.733px; text-align: center;">
                        <h4><strong>Right Foot</strong></h4>
                    </td>
                </tr>
                <tr>
                    <td style="width: 163.733px;"><strong>Vibratory Sensation</strong></td>
                    <td style="width: 163.733px;">
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <?=form_dropdown('vib_sen_left',['normal'=>"Normal",'impared'=>"Impared"],$info->vib_sn_left);?>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td style="width: 163.733px;">
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <?=form_dropdown('vib_sen_right',['normal'=>"Normal",'impared'=>"Impared"],$info->vib_sn_right);?>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 163.733px;"><strong>Temperature Sensation</strong></td>
                    <td style="width: 163.733px;">
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <?=form_dropdown('temp_sen_left',['normal'=>"Normal",'impared'=>"Impared"],$info->temp_sn_left);?>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td style="width: 163.733px;">
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <?=form_dropdown('temp_sen_right',['normal'=>"Normal",'impared'=>"Impared"],$info->temp_sn_right);?>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 163.733px;"><strong>Pain Sensation</strong></td>
                    <td style="width: 163.733px;">
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <?=form_dropdown('pain_sen_left',['normal'=>"Normal",'impared'=>"Impared"],$info->pain_sn_left);?>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td style="width: 163.733px;"><div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <?=form_dropdown('pain_sen_right',['normal'=>"Normal",'impared'=>"Impared"],$info->pain_sn_right);?>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <td style="width: 163.733px;"><strong>Ankle Reflex</strong></td>
                    <td style="width: 163.733px;">
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <?=form_dropdown('ankle_left',['normal'=>"Normal",'impared'=>"Impared"],$info->ankle_left);?>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td style="width: 163.733px;">
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <?=form_dropdown('ankle_right',['normal'=>"Normal",'impared'=>"Impared"],$info->ankle_right);?>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <div align="center">
                <button class="btn btn--radius-2 btn--red" type="submit">Save</button>
            </div>

            <?=form_close();?>


        </div>
    </div>
</div>
<!--</div>-->

