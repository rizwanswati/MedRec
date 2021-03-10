<?php include dirname(__DIR__).'/info_home.php'; ?>

<table id="myTable" style="margin-top: -15px;">
    <thead>
    <tr class="table100-head">
        <th style="text-align: center">Reg</th>
        <th style="text-align: center">Name</th>
        <th style="text-align: center">Diagnosis</th>
        <th colspan="3" style="text-align: center">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if($info){
        foreach ($info as $row){?>
            <tr>
                <td style="text-align: center"><?=$row['reg_no'];?></td>
                <td style="text-align: center"><?=$row['name'];?></td>
                <td style="text-align: center;"><?=shorten($row['diagnosis']);?></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-success" style=" height: 48px" href="<?=base_url('Diagnosis/showFullDiag/'.$row['diag_id']);?>" role="button">Show Full</a></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-success" style=" height: 48px" href="<?=base_url('Diagnosis/updateDiag/'.$row['diag_id']);?>" role="button">Update</a></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-danger" style=" height: 48px" href="<?=base_url('Diagnosis/delete/'.$row['diag_id']);?>" role="button">Delete</a></td>
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