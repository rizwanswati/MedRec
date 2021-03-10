<?php include dirname(__DIR__).'/info_home.php'; ?>

<?php if($info){ ?>
    <table id="myTable" >

        <tbody>


        <tr>
            <td style="width:50px;"><strong>Reg No:</strong></td>
            <td><strong><?=$info->regno;?></strong></td>
        </tr>
        <tr>
            <td style="width:50px;"><strong>Clinical Summary</strong></td>
            <td style="width: 600px;"><?=$info->summary;?></td>
        </tr>
        </tbody>

    </table>
<?php }?>

<?php if ($pagination){ echo $this->pagination->create_links();}?>

</div>
</div>
<?php include dirname(__DIR__).'/js_sources.php'; ?>
</body>
</html>