<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\phpStudy\PHPTutorial\WWW\tp51\public/../application/admin\view\book\index.html";i:1584875583;s:72:"D:\phpStudy\PHPTutorial\WWW\tp51\application\admin\view\common\left.html";i:1584884924;s:71:"D:\phpStudy\PHPTutorial\WWW\tp51\application\admin\view\common\top.html";i:1584674805;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>Atlant - Responsive Bootstrap Admin Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="/static/admin/css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->

    <style>
        .page-content{
            height:750px;
        }
    </style>
</head>
<body>
<!-- START PAGE CONTAINER -->
<div class="page-container">

    <!--左侧导航-->
    <!--左侧导航-->
<!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="/static/admin/assets/images/users/avatar.jpg" alt="John Doe"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="/static/admin/assets/images/users/avatar.jpg" alt="John Doe"/>   <!--登录者头像-->
                </div>
                <div class="profile-data">
                    <div class="profile-data-name">Admin</div>   <!--管理员名称-->
                </div>
                <!--左右两侧小图标-->
                <!--<div class="profile-controls">-->
                <!--<a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>-->
                <!--<a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>-->
                <!--</div>-->
            </div>
        </li>
        <li class="xn-title">Navigation</li>
        <li class="active">
            <a href="<?php echo url('Index/index'); ?>"><span class="fa fa-desktop"></span> <span class="xn-text">首页</span></a>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">管理权限</span></a>
            <ul>
                <li><a href="<?php echo url('Rbac/administrator'); ?>">管理员列表</a></li>
                <li><a href="<?php echo url('Rbac/addAdministrator'); ?>">添加管理员</a></li>
                <li><a href="<?php echo url('Rbac/role'); ?>">角色列表</a></li>
                <li><a href="<?php echo url('Rbac/addRole'); ?>">添加角色</a></li>
                <li><a href="<?php echo url('Rbac/rule'); ?>">规则列表</a></li>
                <li><a href="<?php echo url('Rbac/addRule'); ?>">添加规则</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">分类管理</span></a>
            <ul>
                <li><a href="<?php echo url('Category/index'); ?>">分类列表</a></li>
                <li><a href="<?php echo url('Category/add'); ?>">添加分类</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">书籍管理</span></a>
            <ul>
                <li><a href="<?php echo url('Book/index'); ?>">书籍列表</a></li>
                <li><a href="<?php echo url('Book/add'); ?>">添加书籍</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">轮播图管理</span></a>
            <ul>
                <li><a href="<?php echo url('Lunbo/index'); ?>">轮播图列表</a></li>
                <li><a href="<?php echo url('Lunbo/add'); ?>">添加轮播图</a></li>
            </ul>
        </li>
        <li class="xn-title">Components</li>
    </ul>
    <!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->
<!--左侧导航结尾部分-->
    <!--左侧导航结尾-->

    <!-- PAGE CONTENT -->
    <div class="page-content">

      <!--头部导航-->
        <!--头部导航开始部分-->
<!-- START X-NAVIGATION VERTICAL -->
<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
<!-- TOGGLE NAVIGATION -->
<li class="xn-icon-button">
<a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
</li>
<!-- END TOGGLE NAVIGATION -->


<!-- SEARCH -->
<li class="xn-search">
<form role="form">
<input type="text" name="search" placeholder="Search..."/>
</form>
</li>
<!-- END SEARCH -->


<!-- SIGN OUT -->
<li class="xn-icon-button pull-right">
<a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
</li>
<!-- END SIGN OUT -->
<!-- MESSAGES -->
<li class="xn-icon-button pull-right">
<a href="#"><span class="fa fa-comments"></span></a>
<div class="informer informer-danger">4</div>
<div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
<div class="panel-heading">
<h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>
<div class="pull-right">
<span class="label label-danger">4 new</span>
</div>
</div>
<div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
<a href="#" class="list-group-item">
<div class="list-group-status status-online"></div>
<img src="/static/admin/assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
<span class="contacts-title">John Doe</span>
<p>Praesent placerat tellus id augue condimentum</p>
</a>
<a href="#" class="list-group-item">
<div class="list-group-status status-away"></div>
<img src="/static/admin/assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
<span class="contacts-title">Dmitry Ivaniuk</span>
<p>Donec risus sapien, sagittis et magna quis</p>
</a>
<a href="#" class="list-group-item">
<div class="list-group-status status-away"></div>
<img src="/static/admin/assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
<span class="contacts-title">Nadia Ali</span>
<p>Mauris vel eros ut nunc rhoncus cursus sed</p>
</a>
<a href="#" class="list-group-item">
<div class="list-group-status status-offline"></div>
<img src="/static/admin/assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
<span class="contacts-title">Darth Vader</span>
<p>I want my money back!</p>
</a>
</div>
<div class="panel-footer text-center">
<a href="pages-messages.html">Show all messages</a>
</div>
</div>
</li>
<!-- END MESSAGES -->
<!-- TASKS -->
<li class="xn-icon-button pull-right">
<a href="#"><span class="fa fa-tasks"></span></a>
<div class="informer informer-warning">3</div>
<div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
<div class="panel-heading">
<h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>
<div class="pull-right">
<span class="label label-warning">3 active</span>
</div>
</div>
<div class="panel-body list-group scroll" style="height: 200px;">
<a class="list-group-item" href="#">
<strong>Phasellus augue arcu, elementum</strong>
<div class="progress progress-small progress-striped active">
<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
</div>
<small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
</a>
<a class="list-group-item" href="#">
<strong>Aenean ac cursus</strong>
<div class="progress progress-small progress-striped active">
<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
</div>
<small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
</a>
<a class="list-group-item" href="#">
<strong>Lorem ipsum dolor</strong>
<div class="progress progress-small progress-striped active">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
</div>
<small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
</a>
<a class="list-group-item" href="#">
<strong>Cras suscipit ac quam at tincidunt.</strong>
<div class="progress progress-small">
<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
</div>
<small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
</a>
</div>
<div class="panel-footer text-center">
<a href="pages-tasks.html">Show all tasks</a>
</div>
</div>
</li>
<!-- END TASKS -->
</ul>
<!-- END X-NAVIGATION VERTICAL -->
<!--头部导航结尾-->
      <!--头部导航结尾  -->
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="#">首页</a></li>
            <li><a href="#">书籍管理</a></li>
            <li class="active">书籍列表</li>
        </ul>
        <!-- END BREADCRUMB -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">
            <!-- START RESPONSIVE TABLES -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h3 class="panel-title">书籍列表</h3>
                        </div>

                        <div class="panel-body panel-body-table">

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-actions">
                                    <thead>
                                    <tr>
                                        <th width="50">编号</th>
                                        <th width="100">书籍名称</th>
                                        <th width="100">缩略图</th>
                                        <th width="100">书籍总数</th>
                                        <th width="100">借出书籍</th>
                                        <th width="100">现存书籍</th>
                                        <th width="100">书籍类型</th>
                                        <th width="100">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($arr as $item): ?>
                                    <tr id="trow_1">
                                        <td class="text-center"><?php echo $item['id']; ?></td>
                                        <td><?php echo $item['title']; ?></td>
                                        <td><img src="/uploads/<?php echo $item['image_thumb']; ?>" alt=""></td>
                                        <td><?php echo $item['sum']; ?></td>
                                        <td><?php echo $item['lend']; ?></td>
                                        <td><?php echo $item['now']; ?></td>
                                        <td><?php echo $item['meta_title']; ?></td>
                                        <td>
                                            <a href="<?php echo url('Book/edite',['id'=>$item['id']]); ?>"><button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button></a>
                                            <button class="btn btn-danger btn-rounded btn-sm" onClick="delOne(this);" data-id="<?php echo $item['id']; ?>"><span class="fa fa-times"></span></button>
                                        </td>

                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- END RESPONSIVE TABLES -->

            <!-- END PAGE CONTENT WRAPPER -->
        </div>
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>
                <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" src="/static/admin/audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="/static/admin/audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="/static/admin/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type='text/javascript' src='/static/admin/js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="/static/admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

<script type="text/javascript" src="/static/admin/js/demo_tables.js"></script>
<!-- END THIS PAGE PLUGINS-->

<!-- START TEMPLATE -->
<script type="text/javascript" src="/static/admin/js/settings.js"></script>

<script type="text/javascript" src="/static/admin/js/plugins.js"></script>
<script type="text/javascript" src="/static/admin/js/actions.js"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->

<script>
    function delOne(obj){
        var id=$(obj).data('id');
        var result=confirm('确定要删除吗？');
        if(result){
            // alert('删除成功');
            // return;
            $.ajax({
                url:"<?php echo url('Book/del'); ?>",
                type:'post',
                data:{
                    'id':id
                },
                dataType:'json',
                success:function(res){
                    if(res.status==1){
                        alert(res.msg);
                        $(obj).parent().parent().remove();

                    }else{
                        alert(res.msg);
                    }
                }

            })
        }
    }

</script>
</body>
</html>






