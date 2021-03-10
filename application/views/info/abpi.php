<?php include dirname(__DIR__).'/info_home.php'; ?>
<table id="myTable" style="margin-top: -15px">
    <thead>
    <tr class="table100-head">
        <th>Reg No</th>
        <th>Name</th>
        <th>Right</th>
        <th>Left</th>
        <th colspan="2" style="text-align: center">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if($info){
        foreach ($info as $row){?>
            <tr>
                <td><?=$row['reg_no'];?></td>
                <td><?=$row['name'];?></td>
                <td><?=$row['right'];?></td>
                <td><?=$row['left'];?></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-success" style=" height: 48px" href="<?=base_url('Basicinfo/update_ABPI/'.$row['abpi_id']);?>" role="button">Update</a></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-danger" style=" height: 48px" href="<?=base_url('Basicinfo/deleteABPI/'.$row['abpi_id']);?>" role="button">Delete</a></td>
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