<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"F:\phpstu\PHPTutorial\WWW\tp5cms4\public/../application/admin\view\tparttupian\edit.htm";i:1547884388;s:85:"F:\phpstu\PHPTutorial\WWW\tp5cms4\public/../application/admin\view\commons\header.htm";i:1547774329;s:83:"F:\phpstu\PHPTutorial\WWW\tp5cms4\public/../application/admin\view\commons\left.htm";i:1547454242;}*/ ?>
<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title>beyond Admin后台</title>

<meta name="description" content="Dashboard">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--Basic Styles-->
<link href="__ADMIN__/style/bootstrap.css" rel="stylesheet">
<link href="__ADMIN__/style/font-awesome.css" rel="stylesheet">
<link href="__ADMIN__/style/weather-icons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="__ADMIN__/chajian/duotu/webuploader/0.1.5/webuploader.css" />
<!--Beyond styles-->
<link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet" type="text/css">
<link href="__ADMIN__/style/demo.css" rel="stylesheet">
<link href="__ADMIN__/style/typicons.css" rel="stylesheet">
<link href="__ADMIN__/style/animate.css" rel="stylesheet">

<script type='text/javascript' src='__ADMIN__/ueditor/ueditor.config.js'></script>
<script type='text/javascript' src='__ADMIN__/ueditor/ueditor.all.min.js'></script>
<script type='text/javascript' src='__ADMIN__/ueditor/lang/zh-cn/zh-cn.js'></script>



<style>
.uploader-list-container .queueList .filelist .progress{
    display:none;
}


</style>


  <script type="text/javascript" src="__ADMIN__/chajian/jquery-1.7.2.js"></script>
  <link rel="stylesheet" href="__ADMIN__/chajian/duotu/zyupload/skins/zyupload-1.0.0.min.css " type="text/css">
<script type="text/javascript" src="__ADMIN__/chajian/duotu/zyupload/zyupload-1.0.0.js"></script>







</head>
<body>

    
<!-- 头部 -->
<div class="navbar">
<div class="navbar-inner">
<div class="navbar-container">
<!-- Navbar Barnd -->
<div class="navbar-header pull-left">
<a href="#" class="navbar-brand">
    <small>
            <img src="images/logo.png" alt="">
        </small>
</a>
</div>
<!-- /Navbar Barnd -->
<!-- Sidebar Collapse -->
<div class="sidebar-collapse" id="sidebar-collapse">
<i class="collapse-icon fa fa-bars"></i>
</div>
<!-- /Sidebar Collapse -->
<!-- Account Area and Settings -->
<div class="navbar-header pull-right">
<div class="navbar-account">
    <ul class="account-area">
        <li>
            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                <div class="avatar" title="View your public profile">
                    <img src="images/adam-jansen.jpg">
                </div>
                <section>
                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('name'); ?></span></span></h2>
                </section>
            </a>
            <!--Login Area Dropdown-->
            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                <li class="username"><a>David Stevenson</a></li>
                <li class="dropdown-footer">
                    <a href="<?php echo url('Tpadmin/logout'); ?>">
                            退出登录
                        </a>
                </li>
                <li class="dropdown-footer">
                    <a href="<?php echo url('Tpadmin/edit',array('id'=>\think\Request::instance()->session('id'))); ?>">
                            修改密码
                        </a>
                </li>
            </ul>
            <!--/Login Area Dropdown-->
        </li>
        <!-- /Account Area -->
        <!--Note: notice that setting div must start right after account area list.
            no space must be between these elements-->
        <!-- Settings -->
    </ul>
</div>
</div>
<!-- /Account Area and Settings -->
</div>
</div>
</div>

<!-- /头部 -->

<div class="main-container container-fluid">
<div class="page-container">
        <!-- Page Sidebar -->












<div class="page-sidebar" id="sidebar">
<!-- Page Sidebar Header-->
<div class="sidebar-header-wrapper">
    <input class="searchinput" type="text">
    <i class="searchicon fa fa-search"></i>
    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
</div>
<!-- /Page Sidebar Header -->
<!-- Sidebar Menu -->
<ul class="nav sidebar-menu">
    <!--Dashboard-->
  
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text">管理员</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tpadmin/lists'); ?>">
                    <span class="menu-text">
                        管理列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>      



         <ul class="submenu">
            <li>
                <a href="<?php echo url('tpauthgroup/lists'); ?>">
                    <span class="menu-text">
                        用户组列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul> 




         <ul class="submenu">
            <li>
                <a href="<?php echo url('tpauthrule/lists'); ?>">
                    <span class="menu-text">
                        权限列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul> 



    </li> 

    <!-- 栏目 -->

 <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text">栏目管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tpcate/lists'); ?>">
                    <span class="menu-text">
                            栏目列表                       </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>                            
    </li> 




    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-file-text"></i>
            <span class="menu-text">文章管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
             <?php if($getarticle): ?>
            <li>
                <a href="<?php echo url('tparticle/lists',array('typeid'=>1)); ?>">
                    <span class="menu-text">
                        所有文章列表                                    
                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        <?php endif; if($getarticle): if(is_array($getarticle) || $getarticle instanceof \think\Collection): $i = 0; $__LIST__ = $getarticle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
 <li>
                <a href="<?php echo url('tparticle/lists',array('cateId'=>$vo['id'])); ?>">
                    <span class="menu-text">
                        <?php echo $vo['catename']; ?>                                    
                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>

<?php endforeach; endif; else: echo "" ;endif; endif; ?>

            
        </ul>                            
    </li> 




    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-chain"></i>
            <span class="menu-text">图片管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
        <?php if($getarttupian): ?>
            <li>
                <a href="<?php echo url('tparttupian/lists',array('typeid'=>3)); ?>">
                    <span class="menu-text">
                        所有图片列表                                    
                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        <?php endif; if($getarttupian): if(is_array($getarttupian) || $getarttupian instanceof \think\Collection): $i = 0; $__LIST__ = $getarttupian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
 <li>
                <a href="<?php echo url('tparttupian/lists',array('cateId'=>$vo['id'])); ?>">
                    <span class="menu-text">
                        <?php echo $vo['catename']; ?>                                    
                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>

<?php endforeach; endif; else: echo "" ;endif; endif; ?>
        </ul>                            
    </li> 



    


    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-chain"></i>
            <span class="menu-text">友情链接</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tplink/lists'); ?>">
                    <span class="menu-text">
                        链接列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>                            
    </li> 



    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-h-square"></i>
            <span class="menu-text">其他修改</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tpqtarticle/tp3wenzhanlst'); ?>">
                    <span class="menu-text">
                        文章列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>                            
    </li> 


<li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa   fa-comments"></i>
            <span class="menu-text">表单管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tpform/lists'); ?>">
                    <span class="menu-text">
                        留言列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>                            
    </li> 


    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">系统</span>
            <i class="menu-expand"></i>
        </a>


        <ul class="submenu">
           
            <li>
                <a href="<?php echo url('tpconf/lists'); ?>">
                    <span class="menu-text">
                        配置列表                             
                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li> 
            <li>
                <a href="<?php echo url('tpconf/conf'); ?>">
                    <span class="menu-text">
                        配置项                              </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>    
    </li>  

                     
    
</ul>
<!-- /Sidebar Menu -->
</div>















































<!-- /Page Sidebar -->
<!-- Page Content -->
<div class="page-content">
<!-- Page Breadcrumb -->
<div class="page-breadcrumbs">
    <ul class="breadcrumb">
                        <li>
        <a href="#">系统</a>
    </li>
                        <li>
        <a href="#">用户管理</a>
    </li>
                        <li class="active">修改用户</li>
                        </ul>
</div>
<!-- /Page Breadcrumb -->

<!-- Page Body -->
<div class="page-body">
    
<div class="row">



    

    <div class="col-lg-12 col-sm-12 col-xs-12">
    <div class="tabbable">
        <ul class="nav nav-tabs ">
            <li class="tab-danger active"><a data-toggle="tab"  aria-expanded="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">图片内容</font></font></a></li>
            <li class="tab-success"><a href="<?php echo url('tparttupian/lists',array('typeid'=>3)); ?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">回到列表</font></font></a></li>
          
        </ul>
        <div class="tab-content radius-bordered" style='height:auto;'>
            <div class="active tab-pane" >
               





<div class="widget-body">


<div id="horizontal-form">
    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="username" class="col-sm-2 control-label no-padding-right">标题</label>
            <div class="col-sm-6">
                <input class="form-control" id="username" placeholder="" name="title"  type="text" value="<?php echo $arttupianRes['title']; ?>">
            </div>
            <p class="help-block col-sm-4 red">* 必填</p>
        </div>



<div class="form-group">
            <label for="group_id" class="col-sm-2 control-label no-padding-right">所属栏目</label>
            <div class="col-sm-6">

<select name="cateid" id="">
  <!--   <option value="0">顶级栏目</option> -->
    <?php if(is_array($cateres) || $cateres instanceof \think\Collection): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<option value="<?php echo $vo['id']; ?>" <?php if($vo['id'] == $arttupianRes['cateid']): ?>selected<?php endif; ?>><?php if($vo['level'] != 0): ?>|<?php endif; ?><?php echo str_repeat('-',$vo['level']*4);?><?php echo $vo['catename']; ?></option>
    <?php endforeach; endif; else: echo "" ;endif; ?>

</select>



            </div>
        </div>  






        <div class="form-group">
            <label for="group_id" class="col-sm-2 control-label no-padding-right">作者</label>
            <div class="col-sm-6">
  <input class="form-control" id="username" placeholder="" name="author"  type="text" value="<?php echo $arttupianRes['author']; ?>">
                                  </div>
        </div>  



        <div class="form-group">
            <label for="group_id" class="col-sm-2 control-label no-padding-right">标签</label>
            <div class="col-sm-6">


  <input class="form-control" id="username" placeholder="" name="keywords"  type="text">



            </div>
        </div>  






 <div class="form-group">
            <label for="group_id" class="col-sm-2 control-label no-padding-right">描述</label>
            <div class="col-sm-6">


<textarea class="form-control" id="form-field-8" placeholder="" name="desc"  type="text" rows='6'><?php echo $arttupianRes['desc']; ?></textarea>

            </div>
        </div>  













<div class="form-group">



<div class="uploader-list-container">

<!-- 存储上次上传的图片 -->
<div id="moduleGallery" class="editableGallery"></div>
<!-- 提供再次上传     -->         
<div id="uploader" class="commonWebUploader">        

        <input type="hidden" class="imgfirst" name="imgfirst">
<?php if($imgstate != 0): ?>
     

    <div class="queueList">
        <div id="dndArea" class="placeholder" >
            <div id="filePicker-2"></div>
            <p>或将照片拖到这里，单次最多可选300张</p>


        <ul class="filelist">
        <li id="wu_file_0">
        <p class="title">1.jpg</p>
            <p class="imgWrap">
                <img src="data:image/jpeg; base64, /9j/4AAQSkZJRgABAQAAAQABAAD / 2wBDAAoHBwgHBgoICAgLCgoLDhgQDg0NDh0VFhEYIx8lJCIfIiEmKzcvJik0KSEiMEExNDk7Pj4 + JS5ESUM8SDc9Pjv / 2wBDAQoLCw4NDhwQEBw7KCIoOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozv / wAARCABuAG4DASIAAhEBAxEB / 8QAGwAAAgMBAQEAAAAAAAAAAAAABAUCAwYBAAf / xAA5EAACAQMDAgMGAwYGAwAAAAABAgMABBEFEiExQRMicQZRYYGRoRQjMhUzUrHB8BZCctHh8WKCsv / EABkBAAIDAQAAAAAAAAAAAAAAAAIDAAEEBf / EACcRAAMAAgIBBAIBBQAAAAAAAAABAgMREiExBBNBUSJxMmGBobHw / 9oADAMBAAIRAxEAPwDYCUirUmB61RjNe21jnJSGuUwsEHpzXClDZZe9TFxtHmGfQU6cifkBy0TZRkZAOOlDXsMkwj8JImKk5MgzjjtRisrjg1xlxTPIJXHAFtViXCkJgYGQDivW1u8KnxJjKT3IA / lUtxHau7mPQVCFnAqDSAVEox6mprDnoCamyiPiseAK7tZupqwiKLiWWOM + 4nJ + lQN3bBtqLLMcZyBtH + 9U7S8svTOrGo5JqfkUdKoknupF / IiSIYz03H60n1mwvZYEZrqZWLA5Vtvb4UnN6icUO2uhmPHzrWxluUHG4Z91SAFBtGrXrhlBBTuPjUhCEPkdkJ7BuPpQTDpbRbaT0F4rhUGhhcNC7LKwZVTduxzgZ93pXLfVbK5bbFcIW / hJwfoeari / om0XFSDkdulS / FNGPMMipHaehFVyrlTU5OfBekyl9asIn2NJ + Yedg5Neh1pJ5VSG1lfcSAT5Rx9 + 9KjCv7TBIHKt / T / anulW6fjLfjoxP9 / alXnvj0NnFHlhiR3cgO2JI8H3ZP1NcnsZGiDTTMTkcf8AAp8qpk8e6uxlFkDFgBg1v4bXZk5CKPSyoG22mc / 6dv8A9YoqHTpIiGkhiRTxw + 5v5f1ov9t6espSWeNcDOS4 / lVK67Y3sngQMGZRvJHrUmJXgjbaLEtlDcZ64wBQOtW + LeNth / Xj7Uel8qrsETtzngVVO8l4giMBAU55 + lI9Zi93BUL5LxVxtMzrkLe890P8xUvKzZz8qzHtvG0k9mFDZ8 / I6D9PU0it9Yu7OPLahOBgbUJVz9 + n98UzG9QFS3R9AaNZbkxt + l4iDg465pOfZppZJVVp7dQRtLMrq4z9RVPs / qVxqEV08szvs2hS6KpGc + 6tHcRrBfWaIWjSV2D4PYAng0CtpvS / 5hcfAPo2ny6fF + GaUSOEYhsY6txRsq4QcYJB7UDr0l7ZMGsPGk2sAzIodtvXoahpuoXt + 84u7VoUjwI2ZChcHrwSfd96uu5bKXkEucreqR15H2NaDR1ZrxDnG1Puf + qQ3AzqKr / 4k / 39a0Xs + PEkaXtzj5f91z67cz9tf72a96hv + g8CPuOXPQdKC1KzS4tjHISV3A / rK + /uKYIRk0NekCAEjOT/AL11b2pejnMxsNtZrrd5EYUCQxqRuG7BOeec1qLD8GrqkKhXZMkBAorHvK0ftDqJRVZQsWRnHvrSaKwN0MRBAyk9eScj / isGPNk95T9lseIwDhPj0rqHMh9KguPxGMc81NCDK2R2rpgmdkjV / wBSg + oqg2sB6xIf / UVCPVLSRcrMCPQ1CTVbZTgFm9BWTg38D96CVtYQhURqoPXaMVJrcO6O7uzRnKkt0oL9rQ4yFb6UHN7RBL1LdY / 1DILHr8KtY39E5D / HUkliepNRcDFKBq8rnACr8qpvNXe3bEsgRFXJb4UXtUweSI6pMllM104YrGhJCjJxRXs17SxTLZwW9rIwkDBsYLLz3HYdOtK11Nb24S4RgIyvRutOdA0yzkvROC48B2lULwgyoGT8ePpWacV8968BZablKWbJQBu832oa7wYFB5BIz16c1fGwYEg5BHBoTUH2WobOMMBnPSt9JOWmKS29GORF / wASao0UhCokR + WM9 / StDoSxb1Mbs2V3Et8T9PnSBtNlttQu7o6om25VVPkOQACMfen3s5vBeNyGESKqsO / U1licayJfI68bmdtDlMG4Pzr0f71 / SuRn88 + hr0Z87itxnPndto95DHgyRNg / Gpy2l1EM + Gj / AOlufvirtO1y1vAxVzuU4ZWUjFI9W1LUheSBI3dMnaUBxj1q1Smd / Ablt6 + Qm11Ww / Hm11CV7U9gVxk / E9q1UFhpkiqVt4ZARw5AJ + vWsHYwjUGP4 + Jbhix2 + XkD1 + QrQWVoLKIxxTzRxHqm / wCwPUfKg7rtBzUytPyS12zGkQNdwTB416xMfOPQ9 / Tr60pfT7j2jtkVxJaKFOXwPOD2xnP2704a7srFScKD3PUn50suvaK2hfxYEwRwWJCr8 + 1E / wAV2L / k + kWW / svcW8YRNQXA / jjz / Wm2lRy6f + Jd5xPKArxpEx4xwf5Z + tVW + p6dLYxg3G69kRX2nI68kAd6X / jtSWV7W32QkSb2dkHmQjhff / F9aTdLQU / s1utXV1ZiBY53LyZLYfAJ4pSF1Mu08jCaIgDasudo7k5omHVbC4tC + puFCsNsbLuI + 1LtQ1DSLfyWMjCaQAp5jtbPwOfTtXPy + nyu / dh / 2NeH1EQuOgh2jnwDHlQQQNx7elaHQExDI4GMtj6CsPp2tRw3dxHrdtc2UW0CBmibrjnJGR16Yrb + z17ZXFggtpUZ1UeNg9HxzR + mw5FkV5GDnycp0MYs + M2c4xXkJ3ufiKmh8xwagc4JA6muqjCfGdN1a3sr94Zdy + Y8hcjrWo / GQXdhKYJFkyuODyM1gv2VdXd0zrvZm6hOlGaJpk6X0UsDEAN + YAcEDIyGB / visk5H7bnRscLnsOs9We3sAixkShmBcjA25JHPzpfd + 0zElRN4j / wpz9 + leurCGaKB3uGl8R / D8KPLMp78YPTHuomDRo1mkeZDAkSl33Kd2wZwwBFFLvitsXSnk + hOLrUr + 5SNlaKPcCxxuOO / wrZnRrh4Y1XSYgWHmniG7K44wft1pfa / hbWw8XyNICqs7SOf8wzxtqz / ABC8M8cNrIUbaxAtzhT5htBGfcCPmaqkl5KX5eBkLfUbScR2llIU4y7gAcf38qhNcysyLcKvjqeAJR5RwMHnn + vwoaebU7yFp5NQnEbbwIzLt78evTFR3tM6WkMaQwNh9xbAdSMHgdev8qXjlqUtt / su5Trb / wAHJNQnW28NpgZGkCyIoPmXOD6EDv8A1FCRaXLZ3 / iBsoiHarEllOOh49MH170chTAtIZWklWUoxL5BPUZUnBB7 + tNfCWyWO7ngj8dz + 7UNkZ5YZyRnv2zijlVoGlO + icN / qEMReaQO + f3Zj3Eg9MHyg / KmelTObZ8IIfEJOV6tkk88ds0jk8GciWKQzBsna0Y4zyPQ / wBnmndkCsA3dhTFW3ovi9bGMeoSKwAQeX9XP6qn + 1GAC7JRj3YNBoME / GpRDLNnoKamwGkY2GGSE4gBXkcD4UQmnrdz + NHKYbwHk4B3DgcnjI49fpRBXnb0HuFQbanQdOeK5qyNHQqFQJbWltZW + 2S2W0uZAQl7s3Ak9 + cFT8Dir72JrFXulm8ae52RRlmYKAMnk59asa93Z / ERK6nG9l4ZgOgP8Q56GqZUn00yGzlAEUfiPAw / Lxn / AC9x06dK0TSa6Mty0 + wSLRZdTDFU8KLxsld4VTjqeAcj + 81yG0WG3tpYLdwVuJFLISxTBZc9CSDjpjjNHQ3UmvW8M8D + B4LtvR1LK / BGOCPWvNb2Oh2olvLdLppJm83hAkFiW4yeBRbQCWlpA37OLNHNdRHw5TJHIjvtZgSSDgkfHjrzRzzzCeOO2gQxuGVWbDecdiQ3r9KDtbu2uopbdEljWK4MkWzClM88df4iKMheOOz1CNIt0sQE5Mzlwxxwe2P09qtddEffYVKkNo8E8hkt5pMhljQybz1I4B6HJHzqk6al7dpdwXR / MIZwsQUgr35GQexHH2qi8Cs6wXf5njReLE8eV2MCOxY / xD70y0wLGdsaqu458owKvktpEU77L4rNVcjHU5JPejkiC8dh / OuL5T76mxwPSjmUiNtkScZ5 + AoQanaiR4TNtdD5gRVxY5xWE1wkatcEEjL9j8BQZsrxymhmHGsjaZ //2Q==">
            </p>
            <p class="progress">
                <span></span>
            </p>
            <div class="file-panel" style="overflow: hidden; height: 30px;">
                <span class="cancel">删除</span><span class="rotateRight">向右旋转</span><span class="rotateLeft">向左旋转</span>
            </div>
            </li>
        </ul>
        </div>
    </div>


<script type="text/javascript" src="__ADMIN__/chajian/duotu/webuploader/0.1.5/webuploader.js"></script>

    <div class="statusBar" style="display:none;">
        <div class="progress"> <span class="text">0%</span> <span class="percentage"></span> </div>
        <div class="info"></div>
        <div class="btns">
            <div id="filePicker2"></div>
            <div class="uploadBtn">开始上传</div>
        </div>
    </div>


<?php else: ?>



    <div class="queueList">
        <div id="dndArea" class="placeholder" >
            <div id="filePicker-2"></div>
            <p>或将照片拖到这里，单次最多可选300张</p>

        </div>
    </div>

<script type="text/javascript" src="__ADMIN__/chajian/duotu/webuploader/0.1.5/webuploader.js"></script>


<div class="statusBar" style="display:none;">
        <div class="progress"> <span class="text">0%</span> <span class="percentage"></span> </div>
        <div class="info"></div>
        <div class="btns">
            <div id="filePicker2"></div>
            <div class="uploadBtn">开始上传</div>
        </div>
    </div>

<?php endif; ?>
    
</div>

















  </div>  













 <div class="form-group">
            <label for="group_id" class="col-sm-2 control-label no-padding-right">文章内容</label>
            <div class="col-sm-12">


<textarea name="content" id='content'>
<?php echo $arttupianRes['content']; ?>
</textarea>



            </div>
        </div>  

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">保存信息</button>
            </div>
        </div>
    </form>
</div>
</div>
            </div>


<!-- 图片集
 -->

           
<style>
.info {
    float: left;
    color: #666;
    display: inline-block;
    margin-left: -370px;
}
</style>

        </div>
    </div>
</div>







</div>

</div>
<!-- /Page Body -->
</div>
<!-- /Page Content -->
</div>	
</div>









<!--Basic Scripts-->
<!-- <script src="__ADMIN__/style/jquery_002.js"></script> -->
<script src="__ADMIN__/style/bootstrap.js"></script>
<script src="__ADMIN__/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__ADMIN__/style/beyond.js"></script>

<script>

UE.getEditor('content',{unitialFrameWidth:1000,initialFrameHeight:400,})
</script>
<script>
$(function(){
    $(".nav-tabs li").bind('click',function(){
        $the=$(this).index();
        $theHref=$(this).css('href');
        $(this).addClass('active').siblings().removeClass('active');
        $(this).eq(0).addClass('tab-danger').removeClass('tab-success').siblings().addClass('tab-success').removeClass('tab-danger');
        $(".tab-pane").eq($the).show().siblings().hide();
        console.log($the);
    })

    // $(".tab-content").attr('css',)

})

</script>

<script>
$(function(){
    $("#fo1btn").bind('click',function(){
        $.ajax({
            type:'post',
            url:'/admin/tparttupian/uploadsubmit'
            async:false,
            data:$("form1").serialize(),
            dataType:'json',
            success:function(){
                console.log(data);
            }
        })

        return false;
    })


})

</script>
<script>

(function( $ ){
    // 当domReady的时候开始初始化
    $(function() {
        var $wrap = $('.uploader-list-container'),

            // 图片容器
            $queue = $( '<ul class="filelist"></ul>' )
                .appendTo( $wrap.find( '.queueList' ) ),

            // 状态栏，包括进度和控制按钮
            $statusBar = $wrap.find( '.statusBar' ),

            // 文件总体选择信息。
            $info = $statusBar.find( '.info' ),

            // 上传按钮
            $upload = $wrap.find( '.uploadBtn' ),

            // 没选择文件之前的内容。
            $placeHolder = $wrap.find( '.placeholder' ),

            $progress = $statusBar.find( '.progress' ).hide(),

            // 添加的文件数量
            fileCount = 0,

            // 添加的文件总大小
            fileSize = 0,

            // 优化retina, 在retina下这个值是2
            ratio = window.devicePixelRatio || 1,

            // 缩略图大小
            thumbnailWidth = 110 * ratio,
            thumbnailHeight = 110 * ratio,

            // 可能有pedding, ready, uploading, confirm, done.
            state = 'pedding',

            // 所有文件的进度信息，key为file id
            percentages = {},
            // 判断浏览器是否支持图片的base64
            isSupportBase64 = ( function() {
                var data = new Image();
                var support = true;
                data.onload = data.onerror = function() {
                    if( this.width != 1 || this.height != 1 ) {
                        support = false;
                    }
                }
                data.src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";
                return support;
            } )(),

            // 检测是否已经安装flash，检测flash的版本
            flashVersion = ( function() {
                var version;

                try {
                    version = navigator.plugins[ 'Shockwave Flash' ];
                    version = version.description;
                } catch ( ex ) {
                    try {
                        version = new ActiveXObject('ShockwaveFlash.ShockwaveFlash')
                                .GetVariable('$version');
                    } catch ( ex2 ) {
                        version = '0.0';
                    }
                }
                version = version.match( /\d+/g );
                return parseFloat( version[ 0 ] + '.' + version[ 1 ], 10 );
            } )(),

            supportTransition = (function(){
                var s = document.createElement('p').style,
                    r = 'transition' in s ||
                            'WebkitTransition' in s ||
                            'MozTransition' in s ||
                            'msTransition' in s ||
                            'OTransition' in s;
                s = null;
                return r;
            })(),

            // WebUploader实例
            uploader;



        // 实例化
        uploader = WebUploader.create({
            pick: {
                id: '#filePicker-2',
                label: '点击选择图片'
            },
            formData: {
                uid: 123
            },
            dnd: '#dndArea',
            paste: '#uploader',
            swf: '../Uploader.swf',
            chunked: false,
            chunkSize: 512 * 1024,
            server: '/admin/tparttupian/webduotuupload',
            // runtimeOrder: 'flash',

            // accept: {
            //     title: 'Images',
            //     extensions: 'gif,jpg,jpeg,bmp,png',
            //     mimeTypes: 'image/*'
            // },

            // 禁掉全局的拖拽功能。这样不会出现图片拖进页面的时候，把图片打开。
            disableGlobalDnd: true,
            fileNumLimit: 300,
            fileSizeLimit: 200 * 1024 * 1024,    // 200 M
            fileSingleSizeLimit: 50 * 1024 * 1024    // 50 M
        });

        // 拖拽时不接受 js, txt 文件。
        uploader.on( 'dndAccept', function( items ) {
            var denied = false,
                len = items.length,
                i = 0,
                // 修改js类型
                unAllowed = 'text/plain;application/javascript ';

            for ( ; i < len; i++ ) {
                // 如果在列表里面
                if ( ~unAllowed.indexOf( items[ i ].type ) ) {
                    denied = true;
                    break;
                }
            }

            return !denied;
        });

//上传成功的参数
//
            var arr  =  [ ]; //定义全局数组
         uploader.on('uploadSuccess',function(file,response){
            var imgurl = response._raw; //上传图片的路径
 
//截掉<pre></pre>标签
// var start = imgurl.indexOf(">");
// if (start != -1) {
// var end = imgurl.indexOf("<", start + 1);
// }
// if (end != -1) {
// imgurl = imgurl.substring(start + 1, end);
// }
//   http://fex.baidu.com/webuploader/document.html  文档见
            console.log(imgurl);

              // console.log(imgurl);
          
           
            $(".imgfirst").each(function(){  //使用foreach 循环 地址
               arr.push(imgurl+',');   //地址追加进数组
            });
            $(".imgfirst").val(arr); //将地址写入到form表单
         });
        uploader.on('dialogOpen', function() {
            console.log('here');
        });

        // uploader.on('filesQueued', function() {
        //     uploader.sort(function( a, b ) {
        //         if ( a.name < b.name )
        //           return -1;
        //         if ( a.name > b.name )
        //           return 1;
        //         return 0;
        //     });
        // });

        // 添加“添加文件”的按钮，
        uploader.addButton({
            id: '#filePicker2',
            label: '继续添加'
        });

        uploader.on('ready', function() {
            window.uploader = uploader;

             $statusBar.show(); //显示新增和上传按钮
            setState( 'ready' ); //重置上传按钮状态










$li="<?php if(is_array($arttupianRes['arttusrc']) || $arttupianRes['arttusrc'] instanceof \think\Collection): $i = 0; $__LIST__ = $arttupianRes['arttusrc'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>"+<?php echo $vo['id']; ?>+"<?php endforeach; endif; else: echo "" ;endif; ?>";
       

        

             //载入现有照片
            $li = $('<?php if(is_array($arttupianRes['arttusrc']) || $arttupianRes['arttusrc'] instanceof \think\Collection): $i = 0; $__LIST__ = $arttupianRes['arttusrc'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>' +
                                  '<li id="<?php echo $vo['id']; ?>" title ="<?php echo $uploaddir; ?><?php echo $vo['imgsrc']; ?>">' +
                                 '<p class="imgWrap"><img src="<?php echo $uploaddir; ?><?php echo $vo['imgsrc']; ?>" style="height:110px"></p>' +
                                 '<p class="progress"><span></span></p>' +
                                 '</li>' +
                                 '<input type="hidden" name="photo[\'id\']" value="<?php echo $uploaddir; ?><?php echo $vo['imgsrc']; ?>">' +
                                 '<?php endforeach; endif; else: echo "" ;endif; ?>');
         
           console.log($li);
           
            //给li添加删除按钮
             $btns = $('<div class="file-panel" style="height: 30px;line-height:30px;">' +
                    '<span class="cancel">删除</span>' +
                    '<b class="ysc" style="color:pink;">已上传</b></div>').appendTo( $li );
            $(".filelist").append( $li );



             //点击删除，提交给控制器进行删除操作     
            $(".cancel").click(function(){
                
                //定义传给控制器的文件URL和照片ID
                var urlValue = $(this).closest('li').attr('title');
                
                var idValue =  $(this).closest('li').attr('id');
                console.log(idValue);
                //提交到控制器
                $.post('<?php echo url("tparttupian/editImg"); ?>',{'url':urlValue,'id':idValue},function(data){
                  console.log(data);
                  if(data.code == 200){
                    //如删除成功,移除这个li
                    console.log(idValue);
                    $("#"+idValue).remove();
                    $(".filelist li#"+idValue).remove();
               
                     
                  }else{
                    
                  }
                });
            });
        });
        // 当有文件添加进来时执行，负责view的创建
        function addFile( file ) {
            var $li = $( '<li id="' + file.id + '">' +
                    '<p class="title">' + file.name + '</p>' +
                    '<p class="imgWrap"></p>'+
                    '<p class="progress"><span></span></p>' +
                    '</li>' ),

                $btns = $('<div class="file-panel">' +
                    '<span class="cancel">删除</span>' +
                    '<span class="rotateRight">向右旋转</span>' +
                    '<span class="rotateLeft">向左旋转</span></div>').appendTo( $li ),
                $prgress = $li.find('p.progress span'),
                $wrap = $li.find( 'p.imgWrap' ),
                $info = $('<p class="error"></p>'),

                showError = function( code ) {
                    switch( code ) {
                        case 'exceed_size':
                            text = '文件大小超出';
                            break;

                        case 'interrupt':
                            text = '上传暂停';
                            break;

                        default:
                            text = '上传失败，请重试';
                            break;
                    }

                    $info.text( text ).appendTo( $li );
                };

            if ( file.getStatus() === 'invalid' ) {
                showError( file.statusText );
            } else {
                // @todo lazyload
                $wrap.text( '预览中' );
                uploader.makeThumb( file, function( error, src ) {
                    var img;

                    if ( error ) {
                        $wrap.text( '不能预览' );
                        return;
                    }

                    if( isSupportBase64 ) {
                        img = $('<img src="'+src+'">');
                        $wrap.empty().append( img );
                    } else {
                        $.ajax('../server/preview.php', {
                            method: 'POST',
                            data: src,
                            dataType:'json'
                        }).done(function( response ) {
                            if (response.result) {
                                img = $('<img src="'+response.result+'">');
                                $wrap.empty().append( img );
                            } else {
                                $wrap.text("预览出错");
                            }
                        });
                    }
                }, thumbnailWidth, thumbnailHeight );

                percentages[ file.id ] = [ file.size, 0 ];
                file.rotation = 0;
            }

            file.on('statuschange', function( cur, prev ) {
                if ( prev === 'progress' ) {
                    $prgress.hide().width(0);
                } else if ( prev === 'queued' ) {
                    $li.off( 'mouseenter mouseleave' );
                    $btns.remove();
                }

                // 成功
                if ( cur === 'error' || cur === 'invalid' ) {
                    console.log( file.statusText );
                    showError( file.statusText );
                    percentages[ file.id ][ 1 ] = 1;
                } else if ( cur === 'interrupt' ) {
                    showError( 'interrupt' );
                } else if ( cur === 'queued' ) {
                    percentages[ file.id ][ 1 ] = 0;
                } else if ( cur === 'progress' ) {
                    $info.remove();
                    $prgress.css('display', 'block');
                } else if ( cur === 'complete' ) {
                    $li.append( '<span class="success"></span>' );
                }

                $li.removeClass( 'state-' + prev ).addClass( 'state-' + cur );
            });

            $li.on( 'mouseenter', function() {
                $btns.stop().animate({height: 30});
            });

            $li.on( 'mouseleave', function() {
                $btns.stop().animate({height: 0});
            });

            $btns.on( 'click', 'span', function() {
                var index = $(this).index(),
                    deg;

                switch ( index ) {
                    case 0:
                        uploader.removeFile( file );
                        return;

                    case 1:
                        file.rotation += 90;
                        break;

                    case 2:
                        file.rotation -= 90;
                        break;
                }

                if ( supportTransition ) {
                    deg = 'rotate(' + file.rotation + 'deg)';
                    $wrap.css({
                        '-webkit-transform': deg,
                        '-mos-transform': deg,
                        '-o-transform': deg,
                        'transform': deg
                    });
                } else {
                    $wrap.css( 'filter', 'progid:DXImageTransform.Microsoft.BasicImage(rotation='+ (~~((file.rotation/90)%4 + 4)%4) +')');
                    // use jquery animate to rotation
                    // $({
                    //     rotation: rotation
                    // }).animate({
                    //     rotation: file.rotation
                    // }, {
                    //     easing: 'linear',
                    //     step: function( now ) {
                    //         now = now * Math.PI / 180;

                    //         var cos = Math.cos( now ),
                    //             sin = Math.sin( now );

                    //         $wrap.css( 'filter', "progid:DXImageTransform.Microsoft.Matrix(M11=" + cos + ",M12=" + (-sin) + ",M21=" + sin + ",M22=" + cos + ",SizingMethod='auto expand')");
                    //     }
                    // });
                }


            });

            $li.appendTo( $queue );
        }

        // 负责view的销毁
        function removeFile( file ) {
            var $li = $('#'+file.id);

            delete percentages[ file.id ];
            updateTotalProgress();
            $li.off().find('.file-panel').off().end().remove();
        }

        function updateTotalProgress() {
            var loaded = 0,
                total = 0,
                spans = $progress.children(),
                percent;

            $.each( percentages, function( k, v ) {
                total += v[ 0 ];
                loaded += v[ 0 ] * v[ 1 ];
            } );

            percent = total ? loaded / total : 0;


            spans.eq( 0 ).text( Math.round( percent * 100 ) + '%' );
            spans.eq( 1 ).css( 'width', Math.round( percent * 100 ) + '%' );
            updateStatus();
        }

        function updateStatus() {
            var text = '', stats;

            if ( state === 'ready' ) {
                text = '选中' + fileCount + '张图片，共' +
                        WebUploader.formatSize( fileSize ) + '。';
            } else if ( state === 'confirm' ) {
                stats = uploader.getStats();
                if ( stats.uploadFailNum ) {
                    text = '已成功上传' + stats.successNum+ '张照片至XX相册，'+
                        stats.uploadFailNum + '张照片上传失败，<a class="retry" href="#">重新上传</a>失败图片或<a class="ignore" href="#">忽略</a>'
                }

            } else {
                stats = uploader.getStats();
                text = '共' + fileCount + '张（' +
                        WebUploader.formatSize( fileSize )  +
                        '），已上传' + stats.successNum + '张';

                if ( stats.uploadFailNum ) {
                    text += '，失败' + stats.uploadFailNum + '张';
                }
            }

            $info.html( text );
        }

        function setState( val ) {
            var file, stats;

            if ( val === state ) {
                return;
            }

            $upload.removeClass( 'state-' + state );
            $upload.addClass( 'state-' + val );
            state = val;

            switch ( state ) {
                case 'pedding':
                    $placeHolder.removeClass( 'element-invisible' );
                    $queue.hide();
                    $statusBar.addClass( 'element-invisible' );
                    uploader.refresh();
                    break;

                case 'ready':
                    $placeHolder.addClass( 'element-invisible' );
                    $( '#filePicker2' ).removeClass( 'element-invisible');
                    $queue.show();
                    $statusBar.removeClass('element-invisible');
                    uploader.refresh();
                    break;

                case 'uploading':
                    $( '#filePicker2' ).addClass( 'element-invisible' );
                    $progress.show();
                    $upload.text( '暂停上传' );
                    break;

                case 'paused':
                    $progress.show();
                    $upload.text( '继续上传' );
                    break;

                case 'confirm':
                    $progress.hide();
                    $( '#filePicker2' ).removeClass( 'element-invisible' );
                    $upload.text( '开始上传' );

                    stats = uploader.getStats();
                    if ( stats.successNum && !stats.uploadFailNum ) {
                        setState( 'finish' );
                        return;
                    }
                    break;
                case 'finish':
                    stats = uploader.getStats();
                    if ( stats.successNum ) {

                        alert( '上传成功' );
                    } else {
                        // 没有成功的图片，重设
                        state = 'done';
                        location.reload();
                    }
                    break;
            }

            updateStatus();
        }

        uploader.onUploadProgress = function( file, percentage ) {
            var $li = $('#'+file.id),
                $percent = $li.find('.progress span');

            $percent.css( 'width', percentage * 100 + '%' );
            percentages[ file.id ][ 1 ] = percentage;
            updateTotalProgress();
        };

        uploader.onFileQueued = function( file ) {
            fileCount++;
            fileSize += file.size;

            if ( fileCount === 1 ) {
                $placeHolder.addClass( 'element-invisible' );
                $statusBar.show();
            }

            addFile( file );
            setState( 'ready' );
            updateTotalProgress();
        };

        uploader.onFileDequeued = function( file ) {
            fileCount--;
            fileSize -= file.size;

            if ( !fileCount ) {
                setState( 'pedding' );
            }

            removeFile( file );
            updateTotalProgress();

        };

        uploader.on( 'all', function( type ) {
            var stats;
            switch( type ) {
                case 'uploadFinished':
                    setState( 'confirm' );
                    break;

                case 'startUpload':
                    setState( 'uploading' );
                    break;

                case 'stopUpload':
                    setState( 'paused' );
                    break;

            }
        });

        uploader.onError = function( code ) {
            //code
            // alert( 'Eroor: ' + '图片名不能重复!' );
        };

        $upload.on('click', function() {
            if ( $(this).hasClass( 'disabled' ) ) {
                return false;
            }

            if ( state === 'ready' ) {
                uploader.upload();
            } else if ( state === 'paused' ) {
                uploader.upload();
            } else if ( state === 'uploading' ) {
                uploader.stop();
            }
        });

        $info.on( 'click', '.retry', function() {
            uploader.retry();
        } );

        $info.on( 'click', '.ignore', function() {
            alert( 'todo' );
        } );

        $upload.addClass( 'state-' + state );
        updateTotalProgress();
    });

})( jQuery );

</script>
</body></html>