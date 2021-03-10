<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w760">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">ABPI Information</h2>
        </div>
        <div class="card-body">

            <div class="container-fluid">
                <?php echo form_open('basicinfo/abpi_form'); ?>

                <h2>Registration No : <?php $reg = $this->session->userdata('reg_no'); echo form_input(['name'=>"regno",'value'=>"$reg", 'style'=>"width:80px; text-align:center; font-size: 27px; border:0; outline:0; background: transparent;border-bottom: 1px solid black;"]) ?></h2>
                <?php echo form_error('regno', '<div class="text-danger">', '</div>'); ?>
                <br>
                <table class="table table-bordered " style="width: 1040px">
                    <thead>
                        <td style="text-align: center"><strong>ABPI</strong></td>
                        <td style="text-align: center"><strong>Values</strong></td>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="text-align: center"><strong>Right Value</strong></td>
                        <td ><?=form_input(['class'=>"input--style-5",'type'=>"number",'step'=>"any", 'required'=>"required", 'name'=>"right",'value'=>set_value('right')]);?></td>
                    </tr>
                    <tr>
                        <td style="text-align: center"><strong>Left Value</strong></td>
                        <td><?=form_input(['class'=>"input--style-5",'type'=>"number",'step'=>"any", 'required'=>"required", 'name'=>"left",'value'=>set_value('left')]);?></td>
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
</div>
<!--</div>-->

