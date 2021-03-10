<?php include dirname(__DIR__).'/info_home.php'; ?>

<table id="myTable" style="margin-top: -15px">
    <thead>
    <tr class="table100-head">
        <th style="text-align: center">Reg</th>
        <th style="text-align: center">Name</th>
        <th style="text-align: center">Vibration Left</th>
        <th style="text-align: center">Vibration Right</th>
        <th style="text-align: center">Temp Left</th>
        <th style="text-align: center">Temp Right</th>
        <th style="text-align: center">Pain Left</th>
        <th style="text-align: center">Pain Right</th>
        <th style="text-align: center">Ankle Left</th>
        <th style="text-align: center">Ankle Right</th>
        <th colspan="2" style="text-align: center">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if($info){
        foreach ($info as $row){?>
            <tr>
                <td style="text-align: center"><?=$row['regno'];?></td>
                <td style="text-align: center"><?=$row['name'];?></td>
                <td style="text-align: center"><?=$row['vib_sn_left'];?></td>
                <td style="text-align: center"><?=$row['vib_sn_right'];?></td>
                <td style="text-align: center"><?=$row['temp_sn_left'];?></td>
                <td style="text-align: center"><?=$row['temp_sn_right'];?></td>
                <td style="text-align: center"><?=$row['pain_sn_left'];?></td>
                <td style="text-align: center"><?=$row['pain_sn_right'];?></td>
                <td style="text-align: center"><?=$row['ankle_left'];?></td>
                <td style="text-align: center"><?=$row['ankle_right'];?></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-success" style=" height: 48px" href="<?=base_url('Basicinfo/updateSensation/'.$row['tpr_id']);?>" role="button">Update</a></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-danger" style=" height: 48px" href="<?=base_url('Basicinfo/deleteSensation/'.$row['tpr_id']);?>" role="button">Delete</a></td>
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