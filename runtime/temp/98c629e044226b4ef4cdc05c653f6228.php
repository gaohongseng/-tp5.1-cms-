<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"F:\phpstu\PHPTutorial\WWW\tp5cms4\public/../application/admin\view\tpform\lists.htm";i:1547708374;s:85:"F:\phpstu\PHPTutorial\WWW\tp5cms4\public/../application/admin\view\commons\header.htm";i:1547774329;s:83:"F:\phpstu\PHPTutorial\WWW\tp5cms4\public/../application/admin\view\commons\left.htm";i:1547454242;}*/ ?>
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

<!--Beyond styles-->
<link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet" type="text/css">
<link href="__ADMIN__/style/demo.css" rel="stylesheet">
<link href="__ADMIN__/style/typicons.css" rel="stylesheet">
<link href="__ADMIN__/style/animate.css" rel="stylesheet">

</head>
<body>
<!-- 头部 -->

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
            <li class="active">栏目管理</li>

           
            </ul>
</div>
<!-- /Page Breadcrumb -->

<!-- Page Body -->
<div class="page-body">


<div class="row">
<div class="col-lg-12 col-sm-12 col-xs-12">
<div class="widget">
<div class="widget-body">
<div class="flip-scroll">
<table class="table table-bordered table-hover">
<thead class="">
<tr>
    <th class="text-center">ID</th>
    <th class="text-center">姓名</th>
    <th class="text-center">手机号码</th>
    <th class="text-center">QQ号码</th>
  <th class="text-center">留言内容</th>
   
    <th class="text-center">操作</th>
</tr>
</thead>
<tbody>
    <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<tr>
    <td align="center"><?php echo $vo['id']; ?></td>
     <td align="center"><?php echo mb_substr($vo['xinmin'],0,20,'utf-8');if(strlen($vo['xinmin'])>20){echo '...';}?></td>

    <td align="center"><?php echo mb_substr($vo['shouji'],0,20,'utf-8');if(strlen($vo['shouji'])>20){echo '...';}?></td>
    <td align="center"><?php echo mb_substr($vo['qq'],0,20,'utf-8');if(strlen($vo['qq'])>20){echo '...';}?></td>

    <td align="center"><?php echo mb_substr($vo['content'],0,20,'utf-8');if(strlen($vo['content'])>20){echo '...';}?></td>






     
    <td align="center">
      
        <a href="#" onClick="warning('确实要删除吗','<?php echo url('del',array('theid'=>$vo['id'])); ?>')" class="btn btn-danger btn-sm shiny">
            <i class="fa fa-trash-o"></i> 删除
        </a>
    </td>
</tr>
<?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
</table>
</div>
<div>
   <?php echo $list->render(); ?>
        </div>
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
<script src="__ADMIN__/style/jquery_002.js"></script>
<script src="__ADMIN__/style/bootstrap.js"></script>
<script src="__ADMIN__/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__ADMIN__/style/beyond.js"></script>



</body>
</html>