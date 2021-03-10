<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w960">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">Immunization</h2>
        </div>
        <div class="card-body">

            <?php echo form_open('immunization/immunization_form'); ?>
            <h2>Registration No : <?php $reg = $this->session->userdata('reg_no'); echo form_input(['name'=>"regno",'required'=>"required",'value'=>"$reg", 'pattern'=>"^[0-9]*$", 'style'=>"width:80px; text-align:center; font-size: 27px; border:0; outline:0; background: transparent;border-bottom: 1px solid black;"]) ?></h2>
            <?php echo form_error('regno', '<div class="text-danger">', '</div>'); ?>
            <br>

            <table class="table table-bordered" id="pres_table">
               <thead>
                   <tr>
                       <td colspan="4" style="text-align: center; font-weight: bolder">Immunization</td>
                   </tr>
                   <tr>
                       <td style="text-align: center; font-weight: bolder"> Type </td>
                       <td style="text-align: center; font-weight: bolder"> dose </td>
                       <td style="text-align: center; font-weight: bolder"> <button onclick="myFunction(); return false;" style="color:#97310e; font-size: 20px; ">+</button> </td>
                   </tr>
               </thead>

                <tbody id="body">


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


<script>

    var row_number = 0;

    function myFunction() {
        var table = document.getElementById("body");
        var row = table.insertRow(row_number); //row
        var rowid = Math.floor((Math.random() * 100) + 1 + (Math.random()*100)+1);
        row.setAttribute('id',rowid);

        var cell2 = row.insertCell(0); // type
        var cell3 = row.insertCell(1); // dose
        var cell4 = row.insertCell(2); // delbutton


        var str1 = '<div class="value">';
        var str2 = '<div class="input-group">';
        var str3 = '<div class="rs-select2 js-select-simple select--no-search">';
        var str4 = '<select name="type[]"> ' +
            '<option value="Influenza">Influenza</option>' +
            '<option value="Pneumococcal">Pneumococcal</option>' +
            '</select>';
        var str5 = '  <div class="select-dropdown"></div>';
        var str6 = '</div></div></div>';
        var str7 = str1+str2+str3+str4+str5+str6;

        cell2.innerHTML = str7;
        cell3.innerHTML = '<input type="text" name="dose[]" required="required" value="" class="input--style-5" style="width:150px; height:30px; text-align:center; font-size: 15px; border:0; outline:0 ;border-bottom: 0px solid red;">';
        cell4.innerHTML = '<button onclick="delRow(this); return false;" style="color:#97310e; font-size: 20px; ">-</button>';

        row_number = row_number + 1;

        return false;
    }

    function delRow(r) {

        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("pres_table").deleteRow(i);
        row_number = row_number-1;
        return false;
    }
</script>


