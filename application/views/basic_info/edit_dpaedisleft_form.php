<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<?php //show($info); ?>
<div class="wrapper wrapper--w960">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">Peripheral Pulses</h2>
        </div>
        <div class="card-body">


            <?php echo form_open('basicinfo/'.$form_c);?>

            <h2>Registration No : <?php $reg = $regno; echo form_input(['name'=>"regno",'value'=>"$reg", 'style'=>"width:80px; text-align:center; font-size: 27px; border:0; outline:0; background: transparent;border-bottom: 1px solid black;"]) ?></h2>
            <?php echo form_error('regno', '<div class="text-danger">', '</div>'); ?>
            <br>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td colspan="2" style="text-align: center"><strong><?=$Title?></strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                   <td width="230px" colspan="2">
                        <fieldset>
                            <?php
                            if ($info){
                            $index_array = array();
                            for ($i=0; $i<count($info); $i++){ ?>

                            <div>
                                <?php
                                $index = exitsInArray($info[$i]->$col);
                                if(is_int($index))
                                {
                                    array_push($index_array,$index);
                                    $check='checked';
                                    ?>
                                <input type="checkbox" checked="<?=$check?>" name="<?=$name?>[]" value="<?=pulses($index);?>" style="width: unset" >
                                &nbsp;<label for="coding"><?=Showpulse($index)?></label>
                            </div>
                            <?php } ?>
                            <?php }
                            $pulses = returnpulses();
                                foreach ($index_array as $key) {
                                    unset($pulses[$key]);
                                }
                            foreach ($pulses as $values){ ?>
                            <div>
                                <input type="checkbox" name="<?=$name?>[]" value="<?=$values;?>" style="width: unset" >
                                &nbsp;<label for="coding"><?=$values;?></label>
                            </div>
                        <?php } }?>
                        
                        </fieldset>
                    </td>
                </tr>

                </tbody>
                <tr>
                    <td><div class="text-center" style="width: 180px;">
                            <?=form_submit(['id'=>"submit",'class'=>"btn btn-primary",'value'=>"Update"])?>
                        </div>
                    </td>
                    <td>
                        <a class="btn btn-danger" style=" height: 48px; width: 180px; float: right; position: relative" href="<?=base_url('Basicinfo/'.$del_c.'/'.$regno);?>" role="button">Delete</a>
                    </td>
                </tr>
            </table>
            <?=form_close();?>
            <?php if (Globals::authenticatedMemeberId()){echo "<script>alert('Check At least one Option Box');</script>"; Globals::setAuthenticatedMemeberId(false);} ?>
        </div>
    </div>
</div>
<!--</div>-->

