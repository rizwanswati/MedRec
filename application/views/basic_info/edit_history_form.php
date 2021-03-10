<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w760">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">Edit Patient's History</h2>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <?php echo form_open('basicinfo/updateHistory'); ?>
                    <input type="hidden" name="regno" value="<?php if($info){echo $info[0]->reg_no_hq;}?>">
                <table class="table table-bordered" style="width: 1040px">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>History Question</th>
                        <th>Answer</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if ($info){?>
                    <tr>
                        <td><?=$info[0]->his_id?></td>
                        <td>Since how long you have diabetes?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans1",'value'=>set_value('ans1',$info[0]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[1]->his_id?></td>
                        <td>How it was diagnosed?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans2",'value'=>set_value('ans2',$info[1]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[2]->his_id?></td>
                        <td>When you started taking medication/insulin for diabetes?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans3",'value'=>set_value('ans3',$info[2]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[3]->his_id?></td>
                        <td>Have you ever landed into hypo or hyperglycemia?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans4",'value'=>set_value('ans4',$info[3]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[4]->his_id?></td>
                        <td>Do you feel SOB on exertion?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans5",'value'=>set_value('ans5',$info[4]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[5]->his_id?></td>
                        <td>Have you ever had chest pain on exertion or rest?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans6",'value'=>set_value('ans6',$info[5]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[6]->his_id?></td>
                        <td>How is your vision? Any recent deterioraton?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans7",'value'=>set_value('ans7',$info[6]->answer)]);?></td>
                    </tr>

                    <tr>
                        <td><?=$info[7]->his_id?></td>
                        <td>Any burning or pain in the feet at night?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans8",'value'=>set_value('ans8',$info[7]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[8]->his_id?></td>
                        <td>Do you feel numbness of the feet?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans9",'value'=>set_value('ans9',$info[8]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[9]->his_id?></td>
                        <td>Di you ever have wound in feet?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans10",'value'=>set_value('ans10',$info[9]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[10]->his_id?></td>
                        <td>Do you get up at night for passing urine?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans11",'value'=>set_value('ans11',$info[10]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[11]->his_id?></td>
                        <td>How is your sexual funtion/Erectile dysfunction?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans12",'value'=>set_value('ans12',$info[11]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[12]->his_id?></td>
                        <td>Menstrual irregulation | HX of GDM</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans13",'value'=>set_value('ans13',$info[12]->answer)]);?></td>
                    </tr>

                    <tr>
                        <td><?=$info[13]->his_id?></td>
                        <td>How is your BP? Did you ever use medicines?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans14",'value'=>set_value('ans14',$info[13]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[14]->his_id?></td>
                        <td>Do you have constipation or diarrhea?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans15",'value'=>set_value('ans15',$info[14]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[15]->his_id?></td>
                        <td>Do you have dental decay?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans16",'value'=>set_value('ans16',$info[15]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[16]->his_id?></td>
                        <td>Are you suffering from any other disease?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans17",'value'=>set_value('ans17',$info[16]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[17]->his_id?></td>
                        <td>Have you been bothered by the pain or stiffness of leg while walking (uphill)?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans18",'value'=>set_value('ans18',$info[17]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[18]->his_id?></td>
                        <td>During last month did you feel down, depressed or hopless?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans19",'value'=>set_value('ans19',$info[18]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[19]->his_id?></td>
                        <td>Smoker? / Ex smoker ?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans20",'value'=>set_value('ans20',$info[19]->answer)]);?></td>
                    </tr>
                    <tr>
                        <td><?=$info[20]->his_id?></td>
                        <td>Are you taking any medicaton at the moment?</td>
                        <td><?=form_textarea(['class'=>"input--style-5",'rows'=>"2",'cols'=>"50",'name'=>"ans21",'value'=>set_value('ans21',$info[20]->answer)]);?></td>
                    </tr>
                    <?php } ?>
                    </tbody>

                </table>
                <div class="text-center" style="margin-left: 75%; width: 180px;">
                    <?=form_submit(['id'=>"submit",'class'=>"btn btn-primary",'value'=>"save"])?>
                </div>
                <?=form_close();?>
            </div>
        </div>
    </div>
</div>
<!--</div>-->

