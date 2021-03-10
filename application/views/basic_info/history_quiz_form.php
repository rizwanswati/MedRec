<!--<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">-->
<div class="wrapper wrapper--w760">
    <div class="card card-5">
        <div class="card-heading">
            <h2 class="title">Patient's History</h2>
        </div>
        <div class="card-body">
            <div class="container-fluid">
            <?php echo form_open('basicinfo/get_history_info'); ?>

                <h2>Registration No : <?php $reg = $this->session->userdata('reg_no'); echo form_input(['name'=>"regno",'value'=>"$reg", 'style'=>"width:80px; text-align:center; font-size: 27px; border:0; outline:0; background: transparent;border-bottom: 1px solid black;"]) ?></h2>
                <?php echo form_error('regno', '<div class="text-danger">', '</div>'); ?>
                <br>
                <table class="table table-bordered" style="width: 1040px">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>History Question</th>
                        <th>Answer</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Since how long you have diabetes?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans1",'value'=>set_value('ans1')]);?></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>How it was diagnosed?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans2",'value'=>set_value('ans2')]);?></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>When you started taking medication/insulin for diabetes?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans3",'value'=>set_value('ans3')]);?></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Have you ever landed into hypo or hyperglycemia?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans4",'value'=>set_value('ans4')]);?></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Do you feel SOB on exertion?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans5",'value'=>set_value('ans5')]);?></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Have you ever had chest pain on exertion or rest?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans6",'value'=>set_value('ans6')]);?></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>How is your vision? Any recent deterioraton?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans7",'value'=>set_value('ans7')]);?></td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>Any burning or pain in the feet at night?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans8",'value'=>set_value('ans8')]);?></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Do you feel numbness of the feet?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans9",'value'=>set_value('ans9')]);?></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Do you ever have wound in feet?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans10",'value'=>set_value('ans10')]);?></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Do you get up at night for passing urine?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans11",'value'=>set_value('ans11')]);?></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>How is your sexual funtion/Erectile dysfunction?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans12",'value'=>set_value('ans12')]);?></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Menstrual irregulation | HX of GDM</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans13",'value'=>set_value('ans13')]);?></td>
                    </tr>

                    <tr>
                        <td>14</td>
                        <td>How is your BP? Did you ever use medicines?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans14",'value'=>set_value('ans14')]);?></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Do you have constipation or diarrhea?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans15",'value'=>set_value('ans15')]);?></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Do you have dental decay?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans16",'value'=>set_value('ans16')]);?></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Are you suffering from any other disease?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans17",'value'=>set_value('ans17')]);?></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Have you been bothered by the pain or stiffness of leg while walking (uphill)?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans18",'value'=>set_value('ans18')]);?></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>During last month did you feel down, depressed or hopless?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans19",'value'=>set_value('ans19')]);?></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Smoker? / Ex smoker ?</td>
                        <td><?=form_input(['class'=>"input--style-5",'name'=>"ans20",'value'=>set_value('ans20')]);?></td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Are you taking any medicaton at the moment?</td>
                        <td><?=form_textarea(['class'=>"input--style-5",'rows'=>"2",'cols'=>"50",'name'=>"ans21",'value'=>set_value('ans21')]);?></td>
                    </tr>

                    </tbody>

                </table>
                <div class="text-center" style="margin-left: 75%; width: 180px;">
                        <?=form_submit(['id'=>"submit",'class'=>"btn btn-primary",'value'=>"save"])?>
                </div>
            <?=form_close();?>
                <?php if (Globals::authenticatedMemeberId()){echo "<script>alert('Patient Does not exist');</script>"; Globals::setAuthenticatedMemeberId(false);} ?>
            </div>
        </div>
    </div>
</div>
<!--</div>-->

