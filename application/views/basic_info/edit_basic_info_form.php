<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w960">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">Patient's Basic Information</h2>
        </div>
        <div class="card-body">
            <?php echo form_open('basicinfo/saveChanges');?>
            <input type="hidden" name="regno" value="<?=$regno?>">

            <div class="form-row">
                <div class="name">Old Reg#</div>
                <div class="value">
                    <div class="input-group">
                        <?php echo form_error('old_reg', '<div class="text-danger">', '</div>'); ?>
                        <?=form_input(['class'=>"input--style-5",'name'=>"old_reg",'placeholder'=>"Reg#/Year",'required'=>"required",'value'=>set_value('old_reg',$info->old_reg)]);?>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="name">Name</div>
                <div class="value">
                    <div class="input-group">
                        <?php echo form_error('first_name', '<div class="text-danger">', '</div>'); ?>
                        <?=form_input(['class'=>"input--style-5",'name'=>"first_name",'placeholder'=>"Full Name",'required'=>"required",'value'=>set_value('first_name',$info->name)]);?>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="name">Father/Husband Name</div>
                <div class="value">
                    <div class="input-group">
                        <?php echo form_error('father_name', '<div class="text-danger">', '</div>'); ?>
                        <?=form_input(['class'=>"input--style-5",'name'=>"father_name",'placeholder'=>"Father name",'value'=>set_value('father_name',$info->father_name)]);?>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="name">Address</div>
                <div class="value">
                    <div class="input-group">
                        <?php echo form_error('address', '<div class="text-danger">', '</div>'); ?>
                        <?=form_textarea(['class'=>"input--style-5",'rows'=>"2",'cols'=>"50",'name'=>"address",'required'=>"required",'placeholder'=>"Address",'value'=>set_value('address',$info->address)]);?>
                    </div>
                </div>
            </div>
            <div class="form-row m-b-55">
                <div class="name">Phone</div>
                <div class="value">
                    <div class="row row-refine">
                        <div class="col-9">
                            <div class="input-group-desc">
                                <?php echo form_error('phone', '<div class="text-danger">', '</div>'); ?>
                                <?=form_input(['class'=>"input--style-5",'min'=>"11",'max'=>"14",'name'=>"phone",'required'=>"required",'placeholder'=>"0312********",'pattern'=>"^[0-9]*$",'value'=>set_value('phone',$info->contact)]);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">

                <div class="name">Marital Status</div>

                <div class="value">
                    <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                            <?=form_dropdown('m_status',['married'=>"Married",'unmarried'=>"Unmarried"],$info->martial_status);?>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-row m-b-55">
                <div class="name">age</div>
                <div class="value">
                    <div class="row row-refine">
                        <div class="col-9">
                            <div class="input-group">
                                <?php echo form_error('age', '<div class="text-danger">', '</div>'); ?>
                                <?=form_input(['class'=>"input--style-5",'cols'=>"10",'name'=>"age",'max'=>"100",'required'=>"required",'placeholder'=>"27",'pattern'=>"^[0-9]*$",'value'=>set_value('age',$info->age)]);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-row p-t-20">
                <!--                        <label class="label label--block"></label>-->
                <div class="name">Sex</div>
                <div class="p-t-15">
                    <label class="radio-container m-r-55">Male
                        <input type="radio"  name="sex" id="sex" value="male" <?php echo ($info->sex=='male' ? 'checked' : '');?>>
                        <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Female
                        <input type="radio" name="sex" id="sex" value="female" <?php echo ($info->sex=='female' ? 'checked' : '');?>>
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div>
                <button class="btn btn--radius-2 btn--red" type="submit">Save</button>
            </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<!--</div>-->
