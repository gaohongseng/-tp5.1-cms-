<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"F:\phpstu\PHPTutorial\WWW\tp5cms4cms\public/../application/admin\view\tpcate\lists.htm";i:1549515046;s:88:"F:\phpstu\PHPTutorial\WWW\tp5cms4cms\public/../application/admin\view\commons\header.htm";i:1547774329;s:86:"F:\phpstu\PHPTutorial\WWW\tp5cms4cms\public/../application/admin\view\commons\left.htm";i:1549506592;}*/ ?>
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
<link rel="stylesheet" href="__ADMIN__/layui/css/layui.css">
<link rel="stylesheet" href="__ADMIN__/layui/layui.js">
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
            <li class="active">用户管理</li>
            </ul>
</div>
<!-- /Page Breadcrumb -->

<!-- Page Body -->
<div class="page-body">

<button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url("tpcate/add"); ?>'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
<div class="col-lg-12 col-sm-12 col-xs-12">
<div class="widget">
<div class="widget-body">
<div class="flip-scroll">
    <form action="" method='post'>
<table class="table table-bordered table-hover">
<thead class="">
<tr>
    <th class="text-center">伸缩</th>
    <th class="text-center">ID</th>
    <th class="text-center">排序</th>
    <th class="text-center">栏目名称</th>
    <th class="text-center">栏目类型</th>
    <th class="text-center">模型类型</th>
    <th class="text-center">显示导航栏</th>
    <th class="text-center">栏目缩略图</th>
    <th class="text-center" width='20%'>操作</th>
</tr>
</thead>
<tbody>
<style>
.open{
    border:1px solid #ccc;
    padding:0px 3px;
    cursor:pointer;
}
</style>
<?php if(is_array($cateres) || $cateres instanceof \think\Collection): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>                        
    <tr id="<?php echo $cate['id']; ?>" pid="<?php echo $cate['pid']; ?>" class='list'>
        <td align="center"><span class="open">+</span></td>
        <td align="center"><?php echo $cate['id']; ?></td>
        <td align="center"><input type='text' style='width:50px;text-align:center;' value="<?php echo $cate['sort']; ?>" name='<?php echo $cate['id']; ?>'></td>
        <td align="center" style='line-height:40px;position:relative;'><?php if($cate['level'] != 0): ?>|<?php endif; ?>
<?php echo str_repeat('-',$cate['level']*8)?>


    <a href="<?php echo url('tparthives/lists',array('modelid'=>$cate['modelid'],'cateid'=>$cate['id'])); ?>"><?php echo $cate['catename']; ?></a>


<a class="layui-btn layui-btn-sm" style='float:right;margin-top:5px;text-decoration:none;' href="<?php echo url('tpcate/add',array('catid'=>$cate['id'])); ?>"><i class="layui-icon"></i> 添加子栏目</a>
    </td>
        <td align="center">
        <?php if($cate['type'] == 1): ?>文章列表
        <?php elseif($cate['type'] == 2): ?>单页

    <?php elseif($cate['type'] == 3): ?>
    图片列表
    <?php elseif($cate['type'] == 4): ?>超链接
        <?php endif; ?></td>


<td align="center">

    <?php echo $cate['models']['model_name']; ?>

</td>




 <td align="center">

 <?php if($cate['rec_index'] == 1): ?><a class="btn btn-success btnstatus">显示</a><?php else: ?><a class="btn btn-danger btnstatus">隐藏</a><?php endif; ?>

</td>


<td align="center">
<img src="<?php if($cate["thumb"] != ""): ?>__IMG__/<?php echo $cate['thumb']; else: ?>__ADMIN__/images/defaultpic.gif<?php endif; ?>" alt=""  height='50'>
</td>



        <td align="center">
            <a href="<?php echo url('tpcate/edit',array('catid'=>$cate['id'])); ?>" class="btn btn-primary btn-sm shiny">
                <i class="fa fa-edit"></i> 编辑
            </a>
            <a href="#" onClick="warning('确实要删除吗', '<?php echo url('tpcate/del',array('catid'=>$cate['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                <i class="fa fa-trash-o"></i> 删除
            </a>
        </td>
    </tr>
   <?php endforeach; endif; else: echo "" ;endif; ?>                  
    </tbody>
</table>

    <div>
        <input type="submit" class='btn btn-primary btn-sm shiny' style='margin-left:164px;margin-top:10px;' value='排序'>
    </div>


</form>

</div>
<div>

<div class="div" style='margin-top:20px;'>

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
<script src="__ADMIN__/style/jquery_002.js"></script>
<script src="__ADMIN__/style/bootstrap.js"></script>
<!-- <script src="__ADMIN__/style/jquery.js"></script> -->
<!--Beyond Scripts-->
<script src="__ADMIN__/style/beyond.js"></script>
<script>

$(function(){

$("tr.list[pid!=0]").hide();
$(".open").bind('click',function(){
    var id=$(this).parents('tr').attr('id');
   
    if($(this).text()=='+'){
        $(this).text('-');
        $('tr[pid='+id+']').show();
    }else{
        $(this).text('+');
        $('tr[pid='+id+']').hide();
        //通过ajax找到所有的子栏目
        $.ajax({
            type:'get',
            dataType:'json',
            async:false,
            url:"/admin/tpcate/ajaxlists/cateid/"+id,
            success:function(data){
                var sonids=[];
                var pidnos=$('tr[pid!=0]');
                pidnos.each(function(k,v){
                    sonids.push(v);
                });

                $.each(data,function(k,v){
                    if($.inArray(v,sonids)){
                        $('tr[id='+v+']').hide();
                        $('tr[id='+v+']').find('span:first').text('+');
                    }
                });
            },
            error:function(data){

            }
        });

    }
})

//显示隐藏栏目

    $(".btnstatus").bind('click',function(){
        var $the=$(this).index();
        var id=$(this).parents('tr').attr('id');

        $.ajax({
            type:'get',
            dataType:'json',
            async:false,
            url:'/admin/tpcate/changestatus/cateid/'+id,
            success:function(data){
var $that=$("tr[id="+id+"]").find('.btnstatus');
                if(data==1){
                    $that.text('隐藏');
                    $that.removeClass('btn-success').addClass('btn-danger');
                    
                }else if(data==0){
                    $that.text('显示');
                $that.removeClass('btn-danger').addClass('btn-success');
                
                }
            }
        })
    })

})
</script>


</body></html>