<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:88:"F:\phpstu\PHPTutorial\WWW\tp5cms4cms\public/../application/admin\view\tparthives\add.htm";i:1549618678;s:88:"F:\phpstu\PHPTutorial\WWW\tp5cms4cms\public/../application/admin\view\commons\header.htm";i:1547774329;s:86:"F:\phpstu\PHPTutorial\WWW\tp5cms4cms\public/../application/admin\view\commons\left.htm";i:1549506592;}*/ ?>
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
<script type='text/javascript' src='__ADMIN__/ueditor/ueditor.config.js'></script>
<script type='text/javascript' src='__ADMIN__/ueditor/ueditor.all.min.js'></script>
<script type='text/javascript' src='__ADMIN__/ueditor/lang/zh-cn/zh-cn.js'></script>
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



<!-- 
    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-file-text"></i>
            <span class="menu-text">文章管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu"> -->
 <?php if($getarticle): ?>
        <!--     <li>
                <a href="<?php echo url('tparticle/lists',array('typeid'=>1)); ?>">
                    <span class="menu-text">
                        所有文章列表                                    
                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li> -->
        <?php endif; if($getarticle): if(is_array($getarticle) || $getarticle instanceof \think\Collection): $i = 0; $__LIST__ = $getarticle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<!--  <li>
                <a href="<?php echo url('tparticle/lists',array('cateId'=>$vo['id'])); ?>">
                    <span class="menu-text">
                        <?php echo $vo['catename']; ?>                                    
                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
 -->
<?php endforeach; endif; else: echo "" ;endif; endif; ?>

            
  <!--       </ul>                            
    </li>  -->




    <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-file-text"></i>
            <span class="menu-text">文档管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tparthives/lists',array('typeid'=>1)); ?>">
                    <span class="menu-text">
                        文档列表                                    
                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('tparthives/add',array('typeid'=>1)); ?>">
                    <span class="menu-text">
                        添加文档                                   
                    </span>
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



    


    <li <?php if($lowercon == 'tplink'): ?>class='open'<?php endif; ?>>
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



    <li <?php if($lowercon == 'tpsearch'): ?>class='open'<?php endif; ?>>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-chain"></i>
            <span class="menu-text">搜索标签</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tpsearch/lists'); ?>">
                    <span class="menu-text">
                        搜索列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>                            
    </li> 
    


    <li <?php if($lowercon == 'tpmodel'): ?>class='open'<?php endif; ?>>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-maxcdn"></i>
            <span class="menu-text">模型管理</span>
            <i class="<menu-exp></menu-exp>and"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tpmodel/add'); ?>">
                    <span class="menu-text">
                        添加模型                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
              <li>
                <a href="<?php echo url('tpmodel/lists'); ?>">
                    <span class="menu-text">
                        模型列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>                            
    </li> 



<li <?php if($lowercon == 'tpnote'): ?>class='open'<?php endif; ?>>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-list-ul"></i>
            <span class="menu-text">字段管理</span>
            <i class="<menu-exp></menu-exp>and"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tpfield/add'); ?>">
                    <span class="menu-text">
                        添加字段                                   </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
              <li>
                <a href="<?php echo url('tpfield/lists'); ?>">
                    <span class="menu-text">
                        字段列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>                            
    </li> 


<li <?php if($lowercon == 'tpnote'): ?>class='open'<?php endif; ?>>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa  fa-list-ul"></i>
            <span class="menu-text">采集管理</span>
            <i class="<menu-exp></menu-exp>and"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('tpnote/add'); ?>">
                    <span class="menu-text">
                        添加节点                                   </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
              <li>
                <a href="<?php echo url('tpnote/lists'); ?>">
                    <span class="menu-text">
                        节点列表                                  </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>                            
    </li> 


    <li <?php if($lowercon == 'tpqtarticle'): ?>class='open'<?php endif; ?>>
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


<li <?php if($lowercon == 'tpform'): ?>class='open'<?php endif; ?>>
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


    <li <?php if($lowercon == 'tpconf'): ?>class='open'<?php endif; ?>>
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
<span class="widget-caption">新增用户</span>
</div>
<div class="widget-body">
<div id="horizontal-form">
    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="username" class="col-sm-2 control-label no-padding-right">标题</label>
            <div class="col-sm-6">
                <input class="form-control" id="username" placeholder="" name="title"  type="text">
            </div>
            <p class="help-block col-sm-4 red">* 必填</p>
        </div>

        <div class="form-group">
            <label for="username" class="col-sm-2 control-label no-padding-right">属性</label>
            <div class="col-sm-6">
           
                
                <div class="checker" style='margin-top:5px;display:inline-block;'>
                    <label>
                        <input type="checkbox" class="checkboxes" value="1" name='attr[]'>
                        <span class="text"></span>
                    </label>
               </div>
               头条&nbsp;
                <div class="checker" style='margin-top:5px;display:inline-block;'>
                    <label>
                        <input type="checkbox" class="checkboxes" value="2" name='attr[]'>
                        <span class="text"></span>
                    </label>
               </div>
              推荐&nbsp;
               <div class="checker" style='margin-top:5px;display:inline-block;'>
                    <label>
                        <input type="checkbox" class="checkboxes" value="3" name='attr[]'>
                        <span class="text"></span>
                    </label>
               </div>
               幻灯&nbsp;
               <div class="checker" style='margin-top:5px;display:inline-block;'>
                    <label>
                        <input type="checkbox" class="checkboxes" value="4" name='attr[]'>
                        <span class="text"></span>
                    </label>
               </div>
               加粗 &nbsp;
               <div class="checker" style='margin-top:5px;display:inline-block;'>
                    <label>
                        <input type="checkbox" class="checkboxes" value="5" name='attr[]'>
                        <span class="text"></span>
                    </label>
               </div>
                 图片&nbsp;

            </div>
            <p class="help-block col-sm-4 red">* 必填</p>
        </div>




<div class="form-group">
            <label for="group_id" class="col-sm-2 control-label no-padding-right">所属栏目</label>
            <div class="col-sm-6">

<select name="cate_id" id="">
  <!--   <option value="0">顶级栏目</option> -->
    
    <?php if(is_array($cateres) || $cateres instanceof \think\Collection): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<option value="<?php echo $vo['id']; ?>" <?php if($vo['id'] == input('cateid')): ?>selected="selected"<?php endif; ?>><?php if($vo['level'] != 0): ?>|<?php endif; ?><?php echo str_repeat('-',$vo['level']*4);?><?php echo $vo['catename']; ?></option>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    

</select>



            </div>
        </div>  




<div class="form-group">
            <label for="group_id" class="col-sm-2 control-label no-padding-right">缩略图</label>
            <div class="col-sm-6">


  <input class="form-control" id="username" placeholder="" name="thumb"  type="file">



            </div>
        </div>  








        <div class="form-group">
            <label for="group_id" class="col-sm-2 control-label no-padding-right">作者</label>
            <div class="col-sm-6">
  <input class="form-control" id="username" placeholder="" name="author"  type="text">
                                  </div>
        </div>  



        <div class="form-group">
            <label for="group_id" class="col-sm-2 control-label no-padding-right">关键词</label>
            <div class="col-sm-6">


  <input class="form-control" id="username" placeholder="" name="keywords"  type="text">



            </div>
        </div>  






 <div class="form-group">
            <label for="group_id" class="col-sm-2 control-label no-padding-right">描述</label>
            <div class="col-sm-6">


<textarea class="form-control" id="form-field-8" placeholder="" name="desc"  type="text" rows='6'></textarea>



            </div>
        </div>  




<!-- 自定义字段的开始 -->
<?php foreach($diyField as $k=>$v):?>
 <div class="form-group">
            <label for="group_id" class="col-sm-2 control-label no-padding-right"><?php echo $v['field_cname'];?></label>
    <?php if($v['field_type']!=9){?>
            <div class="col-sm-6">
               
                <?php echo getnoueditor($v);?>
            </div>
<?php }else{?>
<div class="col-sm-12">
    <!-- 调用公共函数 -->
        <?php echo getueditor($v['field_ename']);?>
</div>
<?php };?>
   
        </div>  
<?php endforeach;?>








<!-- <div class="form-group">
            <label for="group_id" class="col-sm-2 control-label no-padding-right">是否推荐</label>
            <div class="col-sm-6">
                <label style="margin-left:15px;">
        <input name="rec" type="radio" value="1">
        <span class="text">是</span>
    </label>
    <label style="margin-left:15px;">
        <input checked="checked" name="rec" type="radio" value="0">
        <span class="text">否</span>
    </label>
 </div>
        </div> 
 -->






 








 <div class="form-group">
            <label for="group_id" class="col-sm-2 control-label no-padding-right">文章内容</label>
            <div class="col-sm-12">


<textarea name="content" id='content'></textarea>



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

<script>

UE.getEditor('content',{toolbars: [[
            'fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
            'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
            'directionalityltr', 'directionalityrtl'
            // , 'indent', '|',
            // 'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
            // 'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
            // 'simpleupload', 'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music', 'attachment'
            // , 'map', 'gmap', 'insertframe', 'insertcode', 'webapp', 'pagebreak', 'template', 'background', '|',
            // 'horizontal', 'date', 'time', 'spechars', 'snapscreen', 'wordimage', '|',
            // 'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', 'charts', '|',
            // 'print', 'preview', 'searchreplace', 'drafts', 'help'
        ]],unitialFrameWidth:1000,initialFrameHeight:400,})

</script>



</body></html>