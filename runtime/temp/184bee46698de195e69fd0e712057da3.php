<?php /*a:3:{s:76:"F:\phpstu\PHPTutorial\WWW\tp5cms4\application\admin\view\tparttupian\add.htm";i:1547276371;s:75:"F:\phpstu\PHPTutorial\WWW\tp5cms4\application\admin\view\commons\header.htm";i:1547179081;s:73:"F:\phpstu\PHPTutorial\WWW\tp5cms4\application\admin\view\commons\left.htm";i:1547259341;}*/ ?>
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

<script type="text/javascript" src="http://tp5cms4.com/static/admin/chajian/jquery-1.7.2.js"></script>
<link rel="stylesheet" href="http://tp5cms4.com/static/admin/chajian/zyupload/skins/zyupload-1.0.0.min.css " type="text/css">
<script type="text/javascript" src="http://tp5cms4.com/static/admin/chajian/zyupload/zyupload-1.0.0.min.js"></script>

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
    <div class="tabbable">
        <ul class="nav nav-tabs ">
            <li class="tab-danger active"><a data-toggle="tab"  aria-expanded="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">图片内容</font></font></a></li>
            <li class="tab-success"><a data-toggle="tab"  aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">所有图片</font></font></a></li>
          
        </ul>
        <div class="tab-content radius-bordered" style='height:auto;'>
            <div class="active tab-pane" >
               





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
            <label for="group_id" class="col-sm-2 control-label no-padding-right">所属栏目</label>
            <div class="col-sm-6">

<select name="cateid" id="">
  <!--   <option value="0">顶级栏目</option> -->
    <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<option value="<?php echo htmlentities($vo['id']); ?>"><?php if($vo['level'] != 0): ?>|<?php endif; ?><?php echo str_repeat('-',$vo['level']*4);?><?php echo htmlentities($vo['catename']); ?></option>
    <?php endforeach; endif; else: echo "" ;endif; ?>

</select>



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





















<!-- 图片集
 -->

<div class="tab-pane" >


<div id="zyupload" class="zyupload tab-pane"></div>  
        <script type="text/javascript">
            $(function(){
                // 初始化插件
                $("#zyupload").zyUpload({
                    width            :   "100%",                 // 宽度
                    height           :   "400px",                 // 宽度
                    itemWidth        :   "140px",                 // 文件项的宽度
                    itemHeight       :   "115px",                 // 文件项的高度
                    url              :   "/admin/tparttupian/addupload",              // 上传文件的路径
                    fileType         :   ["jpg","png","txt","js","exe"],// 上传文件的类型
                    fileSize         :   51200000,                // 上传文件的大小
                    multiple         :   true,                    // 是否可以多个文件上传
                    dragDrop         :   true,                    // 是否可以拖动上传文件
                    tailor           :   true,                    // 是否可以裁剪图片
                    del              :   true,                    // 是否可以删除文件
                    finishDel        :   false,                   // 是否在上传文件完成后删除预览
                    /* 外部获得的回调接口 */
                    onSelect: function(selectFiles, allFiles){    // 选择文件的回调方法  selectFile:当前选中的文件  allFiles:还没上传的全部文件
                        console.info("当前选择了以下文件：");
                        console.info(selectFiles);



                    },
                    onDelete: function(file, files){              // 删除一个文件的回调方法 file:当前删除的文件  files:删除之后的文件
                        console.info("当前删除了此文件：");
                        console.info(file.name);
                    },
                    onSuccess: function(file, response){          // 文件上传成功的回调方法
                 
                        if(response==1){
                            console.log('上传成功');
                        }else{
                            console.log('上传失败');
                        }
                        // console.info(file.name);
                        // console.info("此文件上传到服务器地址：");
                        // console.info(response);
                        // $("#uploadInf").append("<p>上传成功，文件地址是：" + response + "</p>");
                    },
                    onFailure: function(file, response){          // 文件上传失败的回调方法
                        console.info("此文件上传失败：");
                        console.info(file.name);
                    },
                    onComplete: function(response){               // 上传完成的回调方法
                        console.info("文件上传完成");
                        console.info(response);
                    }
                });
                
            });
        
        </script> 
</div>
           
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






























<div class="col-lg-12 col-sm-12 col-xs-12">
<div class="widget">






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
<!-- <script src="http://tp5cms4.com/static/admin/style/jquery_002.js"></script> -->
<script src="http://tp5cms4.com/static/admin/style/bootstrap.js"></script>
<script src="http://tp5cms4.com/static/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="http://tp5cms4.com/static/admin/style/beyond.js"></script>

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


</body></html>