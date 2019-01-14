<?php /*a:3:{s:71:"F:\phpstu\PHPTutorial\WWW\tp5cms4\application\admin\view\tpcate\add.htm";i:1547258985;s:75:"F:\phpstu\PHPTutorial\WWW\tp5cms4\application\admin\view\commons\header.htm";i:1547179081;s:73:"F:\phpstu\PHPTutorial\WWW\tp5cms4\application\admin\view\commons\left.htm";i:1547259341;}*/ ?>
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
<script type='text/javascript' src='http://tp5cms4.com/static/admin/ueditor/ueditor.config.js'></script>
<script type='text/javascript' src='http://tp5cms4.com/static/admin/ueditor/ueditor.all.min.js'></script>
<script type='text/javascript' src='http://tp5cms4.com/static/admin/ueditor/lang/zh-cn/zh-cn.js'></script>




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
<li>
<a href="#">用户管理</a>
</li>
<li class="active">添加用户</li>
</ul>
</div>
<!-- /Page Breadcrumb -->

<!-- Page Body -->
<div class="page-body">

<div class="row">
<div class="col-lg-12 col-sm-12 col-xs-12">
<div class="widget">
<div class="widget-header bordered-bottom bordered-blue">
<span class="widget-caption">新增栏目</span>
</div>
<div class="widget-body">
<div id="horizontal-form">
<form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="username" class="col-sm-2 control-label no-padding-right">上级栏目</label>
<div class="col-sm-6">

<select name="pid" id="">
    <option value="0,-1">顶级栏目</option>
    <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<option value="<?php echo htmlentities($vo['id']); ?>,<?php echo htmlentities($vo['level']); ?>"><?php if($vo['level'] != 0): ?>|<?php endif; ?><?php echo str_repeat('-',$vo['level']*4);?><?php echo htmlentities($vo['catename']); ?></option>
	<?php endforeach; endif; else: echo "" ;endif; ?>

</select>


</div>

<p class="help-block col-sm-4 red">* 必填</p>
</div>







<div class="form-group">
<label for="username" class="col-sm-2 control-label no-padding-right">栏目名称</label>
<div class="col-sm-6">
<input class="form-control" id="username" placeholder="" name="catename"  type="text">


</div>

<p class="help-block col-sm-4 red">* 必填</p>
</div>




<div class="form-group">
<label for="username" class="col-sm-2 control-label no-padding-right">栏目英文名</label>
<div class="col-sm-6">
<input class="form-control" id="username" placeholder="" name="enname"  type="text">


</div>

<p class="help-block col-sm-4 red">* 必填</p>
</div>







<div class="form-group">
<label for="group_id" class="col-sm-2 control-label no-padding-right">缩略图</label>
<div class="col-sm-5">
<input class="form-control" id="password" placeholder="" name="thumb"  type="file" style='display:inline-block;'>


</div>

<img src="" alt="" width='50' height='50' style='display:inline-block;float:left;margin:0px 10px;'>


<p class="help-block col-sm-4 red">* 必填</p>
</div>  
























<div class="form-group">
<label for="group_id" class="col-sm-2 control-label no-padding-right">栏目类型</label>
<div class="col-sm-6">




<div class="radio" style='margin-left:10px;float:left;'><label><input name="type" type="radio" value='1' checked='checked'><span class="text" >文章列表</span></label></div>

<div class="radio" style='margin-left:10px;float:left;'><label><input class="inverted" name="type" type="radio" value='2'><span class="text">单页</span></label></div>


<div class="radio" style='margin-left:10px;float:left;'><label><input class="inverted" name="type" type="radio" value='3'><span class="text">图片列表</span></label></div>




</div>
</div>  



<!-- 
<div class="form-group">
<label for="username" class="col-sm-2 control-label no-padding-right">链接地址</label>
<div class="col-sm-6">
<input class="form-control" id="username" placeholder="" name="link"  type="text">


</div>

<p class="help-block col-sm-4 red">* 必填</p>
</div> -->






<div class="form-group">
<label for="group_id" class="col-sm-2 control-label no-padding-right">显示在导航栏</label>
<div class="col-sm-6">




<div class="radio" style='margin-left:10px;float:left;'><label><input checked="checked" name="rec_index" type="radio" value='1'><span class="text">是</span></label></div>



<div class="radio" style='margin-left:10px;float:left;'><label><input checked="checked" name="rec_index" type="radio" value='0'><span class="text">否</span></label></div>




</div>

</div>



<div class="form-group">
<label for="username" class="col-sm-2 control-label no-padding-right">栏目内容</label>
<div class="col-sm-12">
<textarea name='content' id='content'></textarea>


</div>

<p class="help-block col-sm-4 red">* 必填</p>
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

<script>

UE.getEditor('content',{unitialFrameWidth:1000,initialFrameHeight:400,})
</script>

</body></html>