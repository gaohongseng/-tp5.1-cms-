<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"F:\phpstu\PHPTutorial\WWW\tp5cms4cms\public/../application/admin\view\tplogin\login.htm";i:1548831978;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>beyond Admin后台</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__ADMIN__/style/bootstrap.css" rel="stylesheet">
    <link href="__ADMIN__/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet">
    <link href="__ADMIN__/style/demo.css" rel="stylesheet">
    <link href="__ADMIN__/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">SIGN IN</div>
                <div class="loginbox-textbox">
                    <input value="admin" class="form-control" placeholder="username" name="name" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="password" type="password">
                </div>

                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="code"  style='width:100px;float:left;'>

                    <img src="<?php echo captcha_src(); ?>" alt="" style='float:left;margin-bottom:10px;' width='120' onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random();">
                </div>



                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="Login" type="submit">
                </div>
            </div>
                <div class="logobox">
                    <p class="text-center">beyonds</p>
                </div>
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="__ADMIN__/style/jquery.js"></script>
    <script src="__ADMIN__/style/bootstrap.js"></script>
    <script src="__ADMIN__/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="__ADMIN__/style/beyond.js"></script>




</body><!--Body Ends--></html>