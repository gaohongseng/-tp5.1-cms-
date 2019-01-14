<?php /*a:3:{s:74:"F:\phpstu\PHPTutorial\WWW\tp5cms4\application\admin\view\tpadmin\lists.htm";i:1547197982;s:75:"F:\phpstu\PHPTutorial\WWW\tp5cms4\application\admin\view\commons\header.htm";i:1547179081;s:73:"F:\phpstu\PHPTutorial\WWW\tp5cms4\application\admin\view\commons\left.htm";i:1547284782;}*/ ?>
<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title>beyond Admin后台</title>

<meta name="description" content="Dashboard">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--Basic Styles-->
<link href="http://tp5cms4.com/static/admin/style/bootstrap.css" rel="stylesheet">
<link href="http://tp5cms4.com/static/admin/style/font-awesome.css" rel="stylesheet">
<link href="http://tp5cms4.com/static/admin/style/weather-icons.css" rel="stylesheet">

<!--Beyond styles-->
<link id="beyond-link" href="http://tp5cms4.com/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
<link href="http://tp5cms4.com/static/admin/style/demo.css" rel="stylesheet">
<link href="http://tp5cms4.com/static/admin/style/typicons.css" rel="stylesheet">
<link href="http://tp5cms4.com/static/admin/style/animate.css" rel="stylesheet">

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
                    <h2><span class="profile"><span><?php echo htmlentities(app('request')->session('name')); ?></span></span></h2>
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
                    <a href="<?php echo url('Tpadmin/edit',array('id'=>app('request')->session('id'))); ?>">
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
            <li>
                <a href="<?php echo url('tparticle/lists',array('typeid'=>1)); ?>">
                    <span class="menu-text">
                        所有文章                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>

            <li>
                <a href="<?php echo url('tparticle/liststype',array('typeid'=>1,'cateId'=>4)); ?>">
                    <span class="menu-text">
                    经典案例文章                                   </span>
                    <i class="menu-expand"></i>
                </a>
            </li>


             <li>
                <a href="<?php echo url('tparticle/liststype',array('typeid'=>1,'cateId'=>26)); ?>">
                    <span class="menu-text">
                    新闻咨询文章                                   </span>
                    <i class="menu-expand"></i>
                </a>
            </li>


           <li>
                <a href="<?php echo url('tparticle/liststype',array('typeid'=>1,'cateId'=>40)); ?>">
                    <span class="menu-text">
                    常见问题文章                                   </span>
                    <i class="menu-expand"></i>
                </a>
            </li>

             <li>
                <a href="<?php echo url('tparticle/liststype',array('typeid'=>1,'cateId'=>39)); ?>">
                    <span class="menu-text">
                    VIP客户文章                                   </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('tparticle/liststype',array('typeid'=>1,'cateId'=>37)); ?>">
                    <span class="menu-text">
                  团队风采文章                                   </span>
                    <i class="menu-expand"></i>
                </a>
            </li>

            
        </ul>                            
    </li> 




    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-chain"></i>
            <span class="menu-text">图片管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tparttupian/lists',array('typeid'=>3)); ?>">
                    <span class="menu-text">
                        所有图片列表                                    
                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>

            
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
            <li class="active">用户管理</li>
            </ul>
</div>
<!-- /Page Breadcrumb -->

<!-- Page Body -->
<div class="page-body">

<button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url("tpadmin/add"); ?>'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
<div class="col-lg-12 col-sm-12 col-xs-12">
<div class="widget">
<div class="widget-body">
<div class="flip-scroll">
<table class="table table-bordered table-hover">
<thead class="">
<tr>
    <th class="text-center">ID</th>
    <th class="text-center">用户名称</th>
    <th class="text-center">用户身份</th>
    <th class="text-center">操作</th>
</tr>
</thead>
<tbody>
   
<?php if(is_array($adminres) || $adminres instanceof \think\Collection || $adminres instanceof \think\Paginator): $i = 0; $__LIST__ = $adminres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$admin): $mod = ($i % 2 );++$i;?>                        
    <tr>
        <td align="center"><?php echo htmlentities($admin['id']); ?></td>
        <td align="center"><?php echo htmlentities($admin['name']); ?></td>
        <td align="center"><?php echo htmlentities($admin['groupTitle']); ?></td>
        <td align="center">
            <a href="<?php echo url('tpadmin/edit',array('id'=>$admin['id'])); ?>" class="btn btn-primary btn-sm shiny">
                <i class="fa fa-edit"></i> 编辑
            </a>
            <a href="<?php echo url('tpadmin/deladmin',array('id'=>$admin['id'])); ?>" onClick="warning('确实要删除吗', '<?php echo url('tpadmin/deladmin',array('id'=>3)); ?>')" class="btn btn-danger btn-sm shiny">
                <i class="fa fa-trash-o"></i> 删除
            </a>
        </td>
    </tr>
   <?php endforeach; endif; else: echo "" ;endif; ?>                  


                        </tbody>
</table>
</div>
<div>

<div class="div" style='margin-top:20px;'>
 <?php echo $adminres; ?>    
</div>
      
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
<script src="http://tp5cms4.com/static/admin/style/jquery_002.js"></script>
<script src="http://tp5cms4.com/static/admin/style/bootstrap.js"></script>
<script src="http://tp5cms4.com/static/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="http://tp5cms4.com/static/admin/style/beyond.js"></script>



</body></html>