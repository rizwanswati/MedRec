<table id="myTable" style="margin-top: -15px">
    <thead>
    <tr class="table100-head">
        <th style="text-align: center">Reg</th>
        <th style="text-align: center">Name</th>
        <th style="text-align: center">WBC</th>
        <th style="text-align: center">RHB</th>
        <th style="text-align: center">Platelets</th>
        <th style="text-align: center">Urea</th>
        <th style="text-align: center">Creatinine</th>
        <th style="text-align: center">Suger-F</th>
        <th style="text-align: center">Suger-R</th>
        <th style="text-align: center">HbA1c</th>
        <th style="text-align: center">M.Albumin</th>
        <th style="text-align: center">TSH</th>
        <th style="text-align: center">ALT</th>
        <th style="text-align: center">Urine</th>
        <th style="text-align: center">CXR</th>
        <th style="text-align: center">ECG</th>
        <th style="text-align: center">ECR</th>
        <th style="text-align: center">Other</th>
        <th style="text-align: center">Date</th>
        <th colspan="2" style="text-align: center">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if($info){
        foreach ($info as $row){?>
            <tr>
                <td style="text-align: center"><?=$row['reg_no_bcr'];?></td>
                <td style="text-align: center"><?=$row['name'];?></td>
                <td style="text-align: center"><?=$row['wbc'];?></td>
                <td style="text-align: center"><?=$row['rhb'];?></td>
                <td style="text-align: center"><?=$row['platelets'];?></td>
                <td style="text-align: center"><?=$row['urea'];?></td>
                <td style="text-align: center"><?=$row['creatinine'];?></td>
                <td style="text-align: center"><?=$row['blood_suger_F'];?></td>
                <td style="text-align: center"><?=$row['blood_suger_R'];?></td>
                <td style="text-align: center"><?=$row['hba1c'];?></td>
                <td style="text-align: center"><?=$row['microalbumin'];?></td>
                <td style="text-align: center"><?=$row['tsh'];?></td>
                <td style="text-align: center"><?=$row['alt'];?></td>
                <td style="text-align: center"><?=$row['urine'];?></td>
                <td style="text-align: center"><?=$row['cxr'];?></td>
                <td style="text-align: center"><?=$row['ecg'];?></td>
                <td style="text-align: center"><?=$row['esr'];?></td>
                <td style="text-align: center"><?=$row['other'];?></td>
                <td style="text-align: center"><?=$row['date'];?></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-success" style=" height: 48px" href="<?=base_url('lab/updateBioChemRep/'.$row['b_id']);?>" role="button">Update</a></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-danger" style=" height: 48px" href="<?=base_url('lab/deleteBioChemRep/'.$row['b_id']);?>" role="button">Delete</a></td>
            </tr>
        <?php } }?>
    </tbody>
</table>
<?php if ($pagination){ echo $this->pagination->create_links();}?>