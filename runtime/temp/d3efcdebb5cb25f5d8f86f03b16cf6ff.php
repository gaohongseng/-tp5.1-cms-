<?php /*a:1:{s:74:"F:\phpstu\PHPTutorial\WWW\tp5cms4\application\admin\view\tplogin\login.htm";i:1547178851;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>beyond Admin后台</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://tp5cms4.com/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://tp5cms4.com/static/admin/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="http://tp5cms4.com/static/admin/style/beyond.css" rel="stylesheet">
    <link href="http://tp5cms4.com/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://tp5cms4.com/static/admin/style/animate.css" rel="stylesheet">
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
    <script src="http://tp5cms4.com/static/admin/style/jquery.js"></script>
    <script src="http://tp5cms4.com/static/admin/style/bootstrap.js"></script>
    <script src="http://tp5cms4.com/static/admin/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="http://tp5cms4.com/static/admin/style/beyond.js"></script>




</body><!--Body Ends--></html>