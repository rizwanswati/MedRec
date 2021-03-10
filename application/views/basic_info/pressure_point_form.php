<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w960">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">Pressure Points</h2>
        </div>
        <div class="card-body">
<!--            <div class="container-fluid">-->

                <?php echo form_open_multipart('basicinfo/pressure_point_form'); ?>

                <h2>Registration No : <?php $reg = $this->session->userdata('reg_no'); echo form_input(['name'=>"regno",'value'=>"$reg", 'style'=>"width:80px; text-align:center; font-size: 27px; border:0; outline:0; background: transparent;border-bottom: 1px solid black;"]) ?></h2>
                <?php echo form_error('regno', '<div class="text-danger">', '</div>'); ?>
                <br>

                <table class="table table-bordered">
                <tbody>
                <tr>
                    <td colspan="2" style="text-align: center; font-weight: bolder">Date</td>
                    <td colspan="2"><?=form_input(['class'=>"input--style-5",'name'=>"date",'value'=>set_value('date'),'placeholder'=>'day/month/year', 'style'=>"width:200px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; font-weight: bolder">Left</td>
                    <td colspan="2" style="text-align: center; font-weight: bolder">Right</td>
                </tr>
                <tr>
                    <td>P-1</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"p_1",'value'=>set_value('p_1'), 'style'=>"width:100px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                    <td>P-6</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"p_6",'value'=>set_value('p_6'), 'style'=>"width:100px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td>P-2</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"p_2",'value'=>set_value('p_2'), 'style'=>"width:100px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                    <td>P-7</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"p_7",'value'=>set_value('p_7'), 'style'=>"width:100px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td>P-3</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"p_3",'value'=>set_value('p_3'), 'style'=>"width:100px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                    <td>P-8</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"p_8",'value'=>set_value('p_8'), 'style'=>"width:100px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td>P-4</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"p_4",'value'=>set_value('p_4'), 'style'=>"width:100px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                    <td>P-9</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"p_9",'value'=>set_value('p_9'), 'style'=>"width:100px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td>P-5</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"p_5",'value'=>set_value('p_5'), 'style'=>"width:100px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                    <td>P-10</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"p_10",'value'=>set_value('p_10'), 'style'=>"width:100px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td style="font-weight: bolder">Avg-left</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"avg_left",'value'=>set_value('avg_left'), 'style'=>"width:100px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px;"]);?></td>

                    <td style="font-weight: bolder">Avg-Right</td>
                    <td><?=form_input(['class'=>"input--style-5",'name'=>"avg_right",'value'=>set_value('avg_right'), 'style'=>"width:100px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px;"]);?></td>
                </tr>
                <tr>
                    <td colspan="2" rowspan="2" style="align-content: center">

                        <input type='file' name="foot_img[]" id="foot_img" multiple="multiple" accept="image/gif, image/jpeg, image/png"/>
                        <div id="dvPreview">

                        </div>
                    </td>

                </tr>

                <tr>
                    <td colspan="2"><button style="width: 200px; height: 50px;" type="button" class="btn btn-primary" id="avg" name="avg" onclick="calculate_avg(); return false;">Calculate Avg<button/td>
                </tr>
                <tr>
                    <td style="font-weight: bolder; text-align: center">Result-Left</td>
                    <td>
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <?=form_dropdown('result_left',['select'=>"Select",'Normal'=>"Normal",'Mild Loss of VPT'=>"Mild Loss of VPT",'Moderate Loss of VPT'=>"Moderate Loss of VPT",'Sever Loss of VPT'=>"Sever Loss of VPT"]);?>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td style="font-weight: bolder">Result-Right</td>
                    <td>
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <?=form_dropdown('result_right',['select'=>"Select",'Normal'=>"Normal",'Mild Loss of VPT'=>"Mild Loss of VPT",'Moderate Loss of VPT'=>"Moderate Loss of VPT",'Sever Loss of VPT'=>"Sever Loss of VPT"]);?>
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
        <?=form_close()?>

            <?php if (Globals::authenticatedMemeberId()){echo "<script>alert('Patient Does not exist');</script>"; Globals::setAuthenticatedMemeberId(false);} ?>
        </div>
    </div>
</div>
<!--</div>-->
<script type="text/javascript">

    function calculate_avg() {
        var p1 = parseFloat($( "input[name='p_1']").val(), 10);
        var p2 = parseFloat($( "input[name='p_2']").val(), 10);
        var p3 = parseFloat($( "input[name='p_3']").val(), 10);
        var p4 = parseFloat($( "input[name='p_4']").val(), 10);
        var p5 = parseFloat($( "input[name='p_5']").val(), 10);

        var avg = ((p1+p2+p3+p4+p5)/5);
        $("input[name='avg_left']").val(avg);

        var p6 = parseFloat($( "input[name='p_6']").val(), 10);
        var p7 = parseFloat($( "input[name='p_7']").val(), 10);
        var p8 = parseFloat($( "input[name='p_8']").val(), 10);
        var p9 = parseFloat($( "input[name='p_9']").val(), 10);
        var p10 = parseFloat($( "input[name='p_10']").val(), 10);

        var avg = ((p6+p7+p8+p9+p10)/5);
        $("input[name='avg_right']").val(avg);


        return false;
    }

</script>



<script language="javascript" type="text/javascript">
    window.onload = function () {
        var fileUpload = document.getElementById("foot_img");
        console.info(fileUpload);
        fileUpload.onchange = function () {
            if (typeof (FileReader) != "undefined") {
                var dvPreview = document.getElementById("dvPreview");
                dvPreview.innerHTML = "";
                var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                for (var i = 0; i < fileUpload.files.length; i++) {
                    var file = fileUpload.files[i];
                    if (regex.test(file.name.toLowerCase())) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            var img = document.createElement("IMG");
                            img.height = "50";
                            img.width = "50";
                            img.src = e.target.result;
                            dvPreview.appendChild(img);
                        }
                        reader.readAsDataURL(file);
                    } else {
                        alert(file.name + " is not a valid image file.");
                        dvPreview.innerHTML = "";
                        return false;
                    }
                }
            } else {
                alert("This browser does not support HTML5 FileReader.");
            }
        }
    };
</script>


