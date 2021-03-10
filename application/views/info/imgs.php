<?php include dirname(__DIR__).'/info_home.php'; ?>

<table id="myTable" style="margin-top: -15px;">
    <thead>
    <tr class="table100-head">
        <th style="text-align: center">Reg</th>
        <th style="text-align: center">Picture</th>
        <th colspan="2" style="text-align: center">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if($info){
        foreach ($info as $row){?>
            <tr>
                <td style="text-align: center" width="100px"><?=$row->regno;?></td>
                <td style="text-align: center" width="100px"><img id="blah" src="<?=base_url('uploads/'.$row->img_name)?>" alt="" width="96px" height="65px"></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-danger" style=" height: 48px" href="<?=base_url('Basicinfo/deleteSingle_Img/'.$row->id.'/'.$row->date.'/'.$row->regno);?>" role="button">Delete</a></td>
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