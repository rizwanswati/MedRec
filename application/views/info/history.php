<?php include dirname(__DIR__).'/info_home.php'; ?>

<table id="myTable">
    <thead>
    <tr class="table100-head" style="margin-top: -15px">
        <th>Reg No</th>
        <th>Name</th>
        <th colspan="2" style="text-align: center">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if($info){
        foreach ($info as $row){?>
        <tr>
            <td><?=$row['reg_no_hq'];?></td>
            <td><?=$row['name'];?></td>
            <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-success" style=" height: 48px" href="<?=base_url('Basicinfo/showHistory/'.$row['reg_no_hq']);?>" role="button">Show</a></td>
            <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-danger" style=" height: 48px" href="<?=base_url('Basicinfo/deleteHistory/'.$row['reg_no_hq']);?>" role="button">Delete</a></td>
        </tr>
    <?php } }?>
    </tbody>
</table>
<?php //echo $this->pagination->create_links();?>



</div>
</div>
<?php include dirname(__DIR__).'/js_sources.php'; ?>
</body>
</html>