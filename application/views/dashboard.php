<table id="myTable" style="margin-top: -15px">
    <thead>
    <tr class="table100-head">
        <th>Reg No</th>
        <th>Old Reg#</th>
        <th>Name</th>
        <th>Age</th>
        <th>Sex</th>
        <th>Marital Status</th>
        <th>Contact</th>
        <th colspan="3" style="text-align: center">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if($info){ foreach ($info as $row){?>
    <tr>
        <td><?=$row->reg_no;?></td>
        <td><?=$row->old_reg;?></td>
        <td><?=$row->name;?></td>
        <td><?=$row->age;?></td>
        <td><?=$row->sex;?></td>
        <td><?=$row->martial_status;?></td>
        <td><?=$row->contact;?></td>
        <td style="text-align: center;height: 55px;width: 0px;">


            <div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Show &nbsp;&nbsp;
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">

                    <li class="dropdown-submenu">
                        <a class="test" tabindex="-1" href="#"><strong>Add New Record</strong> &nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="<?=base_url('Add/GenPhy/'.$row->reg_no)?>">General Phy Exam</a></li>
                            <li><a tabindex="-1" href="<?=base_url('Add/ABPI/'.$row->reg_no)?>">ABPI</a></li>
                            <li><a tabindex="-1" href="<?=base_url('Add/Pressure/'.$row->reg_no)?>">Pressure Points</a></li>
                            <li><a tabindex="-1" href="<?=base_url('Add/Touch/'.$row->reg_no)?>">Touch Pressure Readings</a></li>
                            <li><a tabindex="-1" href="<?=base_url('Add/Peripheral/'.$row->reg_no)?>">Peripheral Pulses</a></li>
                            <li><a tabindex="-1" href="<?=base_url('Add/Chem/'.$row->reg_no)?>">Chem Examination</a></li>
                            <li><a tabindex="-1" href="<?=base_url('Add/Lipid/'.$row->reg_no)?>">Lipid Profile</a></li>
                            <li><a tabindex="-1" href="<?=base_url('Add/Diag/'.$row->reg_no)?>">Diagnosis & Complications</a></li>
                            <li><a tabindex="-1" href="<?=base_url('Add/Summary/'.$row->reg_no)?>">Clinical Summary</a></li>
                            <li><a tabindex="-1" href="<?=base_url('Add/Med/'.$row->reg_no)?>">Prescriptions</a></li>
                            <li><a tabindex="-1" href="<?=base_url('Add/Immunization/'.$row->reg_no)?>">Immunization</a></li>
                        </ul>
                    </li>


                    <li class="dropdown-submenu">
                        <a class="test" tabindex="-1" href="#">Patient &nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="<?=base_url('basicinfo/showHistory/'.$row->reg_no)?>">History</a></li>
                            <li><a tabindex="-1" href="<?=base_url('basicinfo/showGenPhy/'.$row->reg_no)?>">General Phy Exam</a></li>

                            <li class="dropdown-submenu">
                                <a class="test" tabindex="-1" href="#">Peripheral Pulses&nbsp;<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="<?=base_url('basicinfo/dpaedisleft/'.$row->reg_no)?>">D-paedis Left</a></li>
                                    <li><a tabindex="-1" href="<?=base_url('basicinfo/dpaedisright/'.$row->reg_no)?>">D-paedis Right</a></li>
                                    <li><a tabindex="-1" href="<?=base_url('basicinfo/posttibialleft/'.$row->reg_no)?>">Post Tibial Left</a></li>
                                    <li><a tabindex="-1" href="<?=base_url('basicinfo/posttibialright/'.$row->reg_no)?>">Post Tibial Right</a></li>
                                </ul>

                            </li>
                            <li><a tabindex="-1" href="<?=base_url('basicinfo/showABPI_Single/'.$row->reg_no)?>">ABPI</a></li>
                            <li><a tabindex="-1" href="<?=base_url('basicinfo/showPressure_Single/'.$row->reg_no)?>">Pressure Points</a></li>
                            <li><a tabindex="-1" href="<?=base_url('basicinfo/showTouch/'.$row->reg_no)?>">Touch Pressure Readings</a></li>
                        </ul>
                    </li>


                    <li class="dropdown-submenu">
                        <a class="test" tabindex="-1" href="#">Lab Reports &nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="<?=base_url('chemicalexam/showChem_Single/'.$row->reg_no)?>">Chem Examination</a></li>
                            <li><a tabindex="-1" href="<?=base_url('chemicalexam/showLipid_Single/'.$row->reg_no)?>">Lipid Profile</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-submenu">
                        <a class="test" tabindex="-1" href="#">Diagnosis &nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="<?=base_url('diagnosis/showDiag_Single/'.$row->reg_no)?>">Diagnosis</a></li>
                            <li><a tabindex="-1" href="<?=base_url('diagnosis/showComp_Single/'.$row->reg_no)?>">Complications</a></li>
                            <li><a tabindex="-1" href="<?=base_url('diagnosis/showSum_Single/'.$row->reg_no)?>">Clinical Summary</a></li>
                        </ul>
                    </li>
                    <li><a tabindex="-1" href="<?=base_url('treatment/showMed_Single/'.$row->reg_no)?>">Prescriptions</a></li>
                    <li><a tabindex="-1" href="#">Next Consultation Plan</a></li>
                    <li><a tabindex="-1" href="#">Immunization</a></li>
                </ul>
            </div>
            
            
        </td>
        <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-danger" style=" height: 48px" href="<?=base_url('Basicinfo/delete/'.$row->reg_no);?>" role="button">Delete</a></td>
        <td style="text-align: center;height: 55px;width: 0px;"><a class="btn btn-info" style=" height: 48px" href="<?=base_url('Basicinfo/edit/'.$row->reg_no);?>" role="button">Update</a></td>
    </tr>
    <?php } }?>
    </tbody>
</table>
<?php if($pagination){echo $this->pagination->create_links();}?>
<?php if (Globals::authenticatedMemeberId()){echo "<script>alert('No Such Record Found');</script>"; Globals::setAuthenticatedMemeberId(false);} ?>

