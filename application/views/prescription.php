<html>
<head>
    <title><?php echo $this->session->userdata('reg_no'); ?></title>
    <style>

        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .button4 {
            background-color: white;
            color: black;
            border: 2px solid #e7e7e7;
        }

    </style>
</head>


    <body>
        
        <?php //show($info); ?>

    <table style="height: 40px; margin-left: 390px; margin-top: 420px; border: 0px;" width="800">
        <thead>
            <tr>
            <!--<td colspan=1></td>-->
            <td style="font-size: 22px"><strong>Rx:</strong></td>
            </tr>
            <tr>
                <!--<td colspan=1></td>-->
                <td style="font-size: 22px"><div style="width: 150px"><?php echo $info[0]->rx.'<br>'.'<br>'; ?></div></td>
            </tr>        
        </thead>
    
        <tr>
            <!--<td style="border: 0px solid black; font-size: 25px;"><strong></strong></strong></td>-->
            <td style="font-size: 22px"><strong>Name</strong></td>
            <td style="font-size: 22px"><strong>Dose</strong></td>
            <td style="font-size: 22px"><strong>Frequency</strong></td>
            <td style="font-size: 22px"><strong>Meal</strong></td>
            <td style="font-size: 22px"><strong>Duration</strong></td>

        </tr>
        <tbody>
        <tr>
            <!--<td></td>-->
            <td style="width: 390px; font-size: 21px"><?php foreach ($info as $med){echo '<br>'.$med->med.'<br>';}?></td>
            <td style="width: 309.1px;font-size: 21px"><?php foreach ($info as $dos){echo '<br>'.$dos->dose.'<br>';}?></td>
            <td style="width: 309.1px;font-size: 21px"><?php foreach ($info as $frq){echo '<br>'.$frq->frequency.'<br>';}?></td>
            <td style="width: 309.1px;font-size: 21px"><?php foreach ($info as $ml){echo '<br>'.$ml->meal.'<br>';}?></td>
            <td style="width: 309.1px;font-size: 21px"><?php foreach ($info as $du){echo '<br>'.$du->duration.'<br>';}?></td>
        </tr>
        </tbody>
    </table>
    
    </body>


</html>