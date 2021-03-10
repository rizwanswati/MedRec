<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Abbottabad Diabetes & Foot Care Center</title>
    <?=link_tag('assets/css/bootstrap.min.css')?>
    <meta charset="UTF-8">

<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->

    <link rel="stylesheet" href="<?=base_url('assets/colorlib-regform-8/colorlib-regform-8/fonts/material-icon/css/material-design-iconic-font.min.css');?>">
    
    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url('assets/colorlib-regform-8/colorlib-regform-8/css/style.css');?>">
</head>

<body>
<div style="margin-top:-117px">
    <?php include('headerfooter/navbar.php'); ?>
</div>


<!--==================registration form code will go here--------------------->

<div class="main" style="margin-top: 30px">

    <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container">
            <div class="signup-content">
                <?php echo form_open('register/registration',['id'=>"signup-form" ,'class'=>"signup-form"]);?>
                    <h2 class="form-title">Create account</h2>
                    <div class="form-group">
<!--                        <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>-->
                        <?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
                        <?=form_input(['name'=>"name",'pattern'=>"^[A-Z a-z]*$",'id'=>"name",'placeholder'=>"Your Name",'class'=>"form-input",'value'=>set_value('name')]);?>
                    </div>
                    <div class="form-group">
<!--                        <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>-->
                        <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
                        <?=form_input(['type'=>"email",'name'=>"email",'id'=>"email",'placeholder'=>"Your Email",'class'=>"form-input",'value'=>set_value('email')]);?>
                    </div>
                    <div class="form-group">
<!--                        <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>-->
                        <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
                        <?=form_password(['name'=>"password",'id'=>"password",'placeholder'=>"Password",'class'=>"form-input",'value'=>set_value('password')]);?>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
<!--                        <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>-->
                        <?php echo form_error('re_password', '<div class="text-danger">', '</div>'); ?>
                        <?=form_password(['name'=>"re_password",'id'=>"re_password",'placeholder'=>"Repeat your Password",'class'=>"form-input"]);?>
                    </div>
                    <div class="form-group">

                        <fieldset>
                            <legend>Select Status</legend>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" value="admin" class="custom-control-input form-input" checked="">
                                    <label class="custom-control-label" for="customRadio1">Admin</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" value="user" name="customRadio" class="custom-control-input form-input">
                                    <label class="custom-control-label" for="customRadio2">User</label>
                                </div>
                            </div>
                        </fieldset>
                    <div class="form-group">
<!--                        <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>-->
                        <?=form_submit(['type'=>"submit",'id'=>"submit",'class'=>"form-submit",'value'=>"Sign Up"]); ?>
                    </div>
                <?=form_close();?>
                <p class="loginhere">
                    Have already an account ? <a href="<?=base_url('welcome');?>" class="loginhere-link">Login here</a>
                </p>
            </div>
        </div>
    </section>

</div>



<!--===============registration form will end here-------------------------------->




<!--registration form js-->
<!-- JS -->
<script src="<?=base_url('assets/colorlib-regform-8/colorlib-regform-8/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?=base_url('assets/colorlib-regform-8/colorlib-regform-8/js/main.js');?>"></script>

<!--Navbar JS-->
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>


</body>
</html>





