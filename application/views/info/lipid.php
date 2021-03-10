<?php include dirname(__DIR__).'/info_home.php'; ?>

<table id="myTable" style="margin-top: -15px">
    <thead>
    <tr class="table100-head">
        <th style="text-align: center">Reg</th>
        <th style="text-align: center">Name</th>
        <th style="text-align: center">TC</th>
        <th style="text-align: center">LDL</th>
        <th style="text-align: center">TG</th>
        <th style="text-align: center">HDL</th>
        <th style="text-align: center">HDL:LDL</th>
        <th style="text-align: center">Date</th>
        <th colspan="2" style="text-align: center">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if($info){
        foreach ($info as $row){?>
            <tr>
                <td style="text-align: center"><?=$row['regno'];?></td>
                <td style="text-align: center"><?=$row['name'];?></td>
                <td style="text-align: center"><?=$row['tc'];?></td>
                <td style="text-align: center"><?=$row['ldl'];?></td>
                <td style="text-align: center"><?=$row['tg'];?></td>
                <td style="text-align: center"><?=$row['hdl'];?></td>
                <td style="text-align: center"><?=$row['hdl_ldl_ratio'];?></td>
                <td style="text-align: center"><?=$row['date'];?></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-success" style=" height: 48px" href="<?=base_url('Chemicalexam/updateLipid/'.$row['lp_id']);?>" role="button">Update</a></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-danger" style=" height: 48px" href="<?=base_url('Chemicalexam/deleteLipid/'.$row['lp_id']);?>" role="button">Delete</a></td>
            </tr>
        <?php } }?>
    </tbody>
</table>
<?php if ($pagination){ echo $this->pagination->create_links();}?>

</div>
</div>
<?php include dirname(__DIR__).'/js_sources.php'; ?>
</body>
</html>