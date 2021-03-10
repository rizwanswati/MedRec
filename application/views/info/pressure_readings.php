<?php include dirname(__DIR__).'/info_home.php'; ?>

<table id="myTable">
    <thead>
    <tr class="table100-head" style="margin-top: -15px">
        <th>Reg No</th>
        <th>Name</th>
        <th>AVG Right</th>
        <th>AVG Left</th>
        <th>Result Right</th>
        <th>Result Left</th>
        <th>Images</th>
        <th colspan="2" style="text-align: center">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if($info){
        foreach ($info as $row){?>
            <tr>
                <td><?=$row['regno'];?></td>
                <td><?=$row['name'];?></td>
                <td><?=$row['averege_right'];?></td>
                <td><?=$row['averege_left'];?></td>
                <td><?=$row['result_right'];?></td>
                <td><?=$row['result_left'];?></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-danger" style=" height: 48px" href="<?=base_url('Basicinfo/ShowFootImgs/'.$row['regno']);?>" role="button">Images</a></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-success" style=" height: 48px" href="<?=base_url('Basicinfo/update_Pressure/'.$row['ps_id'].'/'.$row['date'].'/'.$row['regno']);?>" role="button">Update</a></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-danger" style=" height: 48px" href="<?=base_url('Basicinfo/deletePressure/'.$row['ps_id'].'/'.$row['regno'].'/'.$row['date']);?>" role="button">Delete</a></td>
            </tr>
        <?php } }?>
    </tbody>
</table>
<?php if($pagination){echo $this->pagination->create_links();}?>



</div>
</div>
<?php include dirname(__DIR__).'/js_sources.php'; ?>
</body>
</html>