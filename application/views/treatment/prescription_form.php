<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w760">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">Prescription</h2>
        </div>
        <div class="card-body">
            <?php echo form_open('treatment/prescrition_form'); ?>

            <h2>Registration No : <?php $reg = $this->session->userdata('reg_no'); echo form_input(['name'=>"regno",'required'=>"required",'value'=>"$reg", 'pattern'=>"^[0-9]*$", 'style'=>"width:80px; text-align:center; font-size: 27px; border:0; outline:0; background: transparent;border-bottom: 1px solid black;"]) ?></h2>
            <?php echo form_error('regno', '<div class="text-danger">', '</div>'); ?>
            <?php echo form_error('next_meeting', '<div class="text-danger">', '</div>'); ?>
            <br>

            <table class="table table-bordered" id="pres_table">
                <thead>
                <tr>
                    <td colspan="3" style="text-align: center; font-weight: bolder">Prescription Date:</td>
                    <td colspan="3"><?=form_input(['class'=>"input--style-5",'name'=>"date",'value'=>set_value('date'),'placeholder'=>'day/month/year', 'style'=>"width:300px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;"]);?></td>
                </tr>
                <tr>
                    <td colspan="6" style="text-align: center; font-weight: bolder">Rx:</td>
                </tr>
                <tr>
                    <td colspan="6">

                        <?=form_textarea(['class'=>"input--style-5",'rows'=>"2",'cols'=>"82",'name'=>"rx", 'required'=>"required",'value'=>set_value('rx')]);?>

                    </td>
                </tr>
                <tr>
                    <td colspan="6" style="text-align: center; font-weight: bolder">Medicines:</td>
                </tr>
                <tr>
                    <td style="text-align: center; font-weight: bolder"> Name </td> <!-- nexim -->
                    <td style="text-align: center; font-weight: bolder"> Dose </td> <!-- 500mg -->
                    <td style="text-align: center; font-weight: bolder"> Frequency </td> <!-- 1-1-1 -->
                    <td style="text-align: center; font-weight: bolder"> Meal </td> <!-- after/before -->
                    <td style="text-align: center; font-weight: bolder"> Duration </td> <!-- 10 days -->
                    <td style="text-align: center; font-weight: bolder"> <button onclick="myFunction(); return false;" style="color:#97310e; font-size: 20px; ">+</button> </td>
                </tr>
                </thead>
                <tbody id="body">
                <tr>
                    <td colspan="6" style="text-align: center; font-weight: bolder">Plan For Next Meeting</td>
                </tr>

                <tr>
                    <td colspan="3" style="text-align: center; font-weight: bolder">Date For Next Meet Up</td>
                    <td colspan="3" style="text-align: center; font-weight: bolder">

                        D: <select name="day">
                            <option value="" selected>day</option>
                            <?php for($i=1; $i<=31; $i++)
                            {?>
                            <option value="<?=$i;?>"><?=$i;?></option>
                            <?php } ?>
                            </select>
                        M: <select name="month">
                            <option value='' selected>Month</option>
                            <option value='1'>Janaury</option>
                            <option value='2'>February</option>
                            <option value='3'>March</option>
                            <option value='4'>April</option>
                            <option value='5'>May</option>
                            <option value='6'>June</option>
                            <option value='7'>July</option>
                            <option value='8'>August</option>
                            <option value='9'>September</option>
                            <option value='10'>October</option>
                            <option value='11'>November</option>
                            <option value='12'>December</option>
                        </select>

                        Y: <select name="year">
                            <option value='' selected>Year</option>
                            <?php for($i=0; $i<=50; $i++)
                            {
                                $j = 2010+$i;
                            ?>
                            <option value='<?=$j;?>'><?=$j;?></option>
                            <?php }?>
                        </select>
                    </td>
                </tr>

                <tr>

                    <td colspan="3">
                        <div>
                            <input type="checkbox" name="next[]" value="hba1c" style="width: unset">
                            &nbsp;<label for="coding">HbA1c</label>
                        </div>
                        <div>
                            <input type="checkbox" name="next[]" value="s.creatinine" style="width: unset">
                            <label for="music">S.Creatinine</label>
                        </div>
                        <div>
                            <input type="checkbox" name="next[]" value="microalbumin" style="width: unset">
                            <label for="music">Microalbumin</label>
                        </div>
                        <div>
                            <input type="checkbox" name="next[]" value="lipi profile" style="width: unset">
                            <label for="music">Lipid Profile</label>
                        </div>
                    </td>

                    <td colspan="3">
                        <div>
                            <input type="checkbox" name="next[]" value="alt" style="width: unset">
                            &nbsp;<label for="coding">ALT</label>
                        </div>
                        <div>
                            <input type="checkbox" name="next[]" value="urine" style="width: unset">
                            <label for="music">Urine R/E</label>
                        </div>
                        <div>
                            <input type="checkbox" name="next[]" value="eye" style="width: unset">
                            <label for="music">Eye Examination</label>
                        </div>
                        <div>
                            <input type="checkbox" name="next[]" value="foot" style="width: unset">
                            <label for="music">Foot Examination</label>
                        </div>
                    </td>


                </tr>
                </tbody>
            </table>
            <div align="center">
                <button class="btn btn--radius-2 btn--red" type="submit" onclick="redirectPage()">Save</button>
            </div>
            <?=form_close();?>
            <?php if (Globals::authenticatedMemeberId()){echo "<script>alert('Patient Does not exist');</script>"; Globals::setAuthenticatedMemeberId(false);} ?>

        </div>
    </div>
</div>
<!--</div>-->

<script>

    var row_number = 0;


    function redirectPage() {
        var protocol = window.location.protocol;
        var host = window.location.hostname;
        var path = window.location.pathname;
        var address = protocol+'//'+host+'/immunization';
        window.open(address, "_blank");
    }
    
    function myFunction() {
        var table = document.getElementById("body");
        var row = table.insertRow(row_number); //row
        var rowid = Math.floor((Math.random() * 100) + 1 + (Math.random()*100)+1);
        row.setAttribute('id',rowid);
        var cell1 = row.insertCell(0); // name
        var cell2 = row.insertCell(1); // Dose
        var cell3 = row.insertCell(2); // Frequency
        var cell4 = row.insertCell(3); // Meal
        var cell5 = row.insertCell(4); // Duration
        var cell6 = row.insertCell(5); // Delete row

        cell1.innerHTML = '<input type="text" name="name[]" value="" required="required" class="input--style-5" style="width:180px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;">';
        cell2.innerHTML = '<input type="text" name="dose[]" required="required" value="" class="input--style-5" style="width:180px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;">';
        cell3.innerHTML = '<input type="text" name="frequency[]" required="required" value="" class="input--style-5" style="width:180px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;">';

        var str1 = '<div class="value">';
        var str2 = '<div class="input-group">';
        var str3 = '<div class="rs-select2 js-select-simple select--no-search">';
        var str4 = '<select name="meal[]"> ' +
            '<option value="before">Before</option>' +
            '<option value="after">After</option>' +
            '</select>';
        var str5 = '  <div class="select-dropdown"></div>';
        var str6 = '</div></div></div>';
        var str7 = str1+str2+str3+str4+str5+str6;

        cell4.innerHTML = str7;

        cell5.innerHTML = '<input type="text" name="duration[]" required="required" value="" class="input--style-5" style="width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;">';

        cell6.innerHTML = '<button onclick="delRow(this); return false;"style="color:#97310e; font-size: 20px; ">-</button>';

        row_number = row_number+1;
        return false;
    }




    function delRow(r) {

        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("pres_table").deleteRow(i);
        row_number = row_number-1;
        return false;
    }

</script>

