<?php include dirname(__DIR__).'/info_home.php'; ?>

<table id="myTable" style="margin-top: -15px">
    <thead>
    <tr class="table100-head">
        <th>Reg</th>
        <th>Gen Exam</th>
        <th>CVS</th>
        <th>Fundoscopy</th>
        <th>Resp Sys</th>
        <th>Abdomen</th>
        <th>Weight</th>
        <th>BMI</th>
        <th>Circumference</th>
        <th>BP</th>
        <th>Date</th>
        <th colspan="2" style="text-align: center">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if($info){
        foreach ($info as $row){?>
            <tr>
                <td style="text-align: center"><?=$row->reg_no_pe;?></td>
                <td style="text-align: center"><?=$row->General_phy_ex;?></td>
                <td style="text-align: center"><?=$row->cvs;?></td>
                <td style="text-align: center"><?=$row->fundoscopic_finding;?></td>
                <td style="text-align: center"><?=$row->respiratory_system;?></td>
                <td style="text-align: center"><?=$row->abdomen;?></td>
                <td style="text-align: center"><?=$row->weight;?></td>
                <td style="text-align: center"><?=$row->mbi;?></td>
                <td style="text-align: center"><?=$row->circumference;?></td>
                <td style="text-align: center"><?=$row->blood_pressure;?></td>
                <td style="text-align: center"><?=$row->date;?></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-success" style=" height: 48px" href="<?=base_url('Basicinfo/updateGenPhy/'.$row->phy_id);?>" role="button">Update</a></td>
                <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-danger" style=" height: 48px" href="<?=base_url('Basicinfo/deleteGenPhy/'.$row->phy_id);?>" role="button">Delete</a></td>
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