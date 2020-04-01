<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:92:"D:\phpStudy\PHPTutorial\WWW\tp53\public/../application/admin\view\computer\add_computer.html";i:1583937749;s:71:"D:\phpStudy\PHPTutorial\WWW\tp53\application\admin\view\common\top.html";i:1583918304;s:72:"D:\phpStudy\PHPTutorial\WWW\tp53\application\admin\view\common\left.html";i:1583993005;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://www.jq22.com/jquery/bootstrap-4.2.1.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="/static/admin/css/orionicons.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/static/admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/static/admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/static/admin/img/favicon.png?3">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<!--头部-->
<!-- navbar-->
<header class="header">
<nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base">学校资产管理</a>
<ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
<li class="nav-item">
<form id="searchForm" class="ml-auto d-none d-lg-block">
<div class="form-group position-relative mb-0">
<button type="submit" style="top: -3px; left: 0;" class="position-absolute bg-white border-0 p-0"><i class="o-search-magnify-1 text-gray text-lg"></i></button>
<input type="search" placeholder="Search ..." class="form-control form-control-sm border-0 no-shadow pl-4">
</div>
</form>
</li>
<li class="nav-item dropdown mr-3"><a id="notifications" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-gray-400 px-1"><i class="fa fa-bell"></i><span class="notification-icon"></span></a>
<div aria-labelledby="notifications" class="dropdown-menu"><a href="#" class="dropdown-item">
<div class="d-flex align-items-center">
<div class="icon icon-sm bg-violet text-white"><i class="fab fa-twitter"></i></div>
<div class="text ml-2">
<p class="mb-0">You have 2 followers</p>
</div>
</div></a><a href="#" class="dropdown-item">
<div class="d-flex align-items-center">
<div class="icon icon-sm bg-green text-white"><i class="fas fa-envelope"></i></div>
<div class="text ml-2">
<p class="mb-0">You have 6 new messages</p>
</div>
</div></a><a href="#" class="dropdown-item">
<div class="d-flex align-items-center">
<div class="icon icon-sm bg-blue text-white"><i class="fas fa-upload"></i></div>
<div class="text ml-2">
<p class="mb-0">Server rebooted</p>
</div>
</div></a><a href="#" class="dropdown-item">
<div class="d-flex align-items-center">
<div class="icon icon-sm bg-violet text-white"><i class="fab fa-twitter"></i></div>
<div class="text ml-2">
<p class="mb-0">You have 2 followers</p>
</div>
</div></a>
<div class="dropdown-divider"></div><a href="#" class="dropdown-item text-center"><small class="font-weight-bold headings-font-family text-uppercase">View all notifications</small></a>
</div>
</li>
<li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="/static/admin/img/avatar-6.jpg" alt="Jason Doe" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>
<div aria-labelledby="userInfo" class="dropdown-menu"><a href="#" class="dropdown-item"><strong class="d-block text-uppercase headings-font-family">Mark Stephen</strong><small>Web Developer</small></a>
<div class="dropdown-divider"></div><a href="#" class="dropdown-item">Settings</a><a href="#" class="dropdown-item">Activity log       </a>
<div class="dropdown-divider"></div><a href="login.html" class="dropdown-item">Logout</a>
</div>
</li>
</ul>
</nav>
</header>
<div class="d-flex align-items-stretch">
    <!--左侧导航-->
    <div id="sidebar" class="sidebar py-3">
    <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
    <ul class="sidebar-menu list-unstyled">
        <li class="sidebar-list-item"><a href="<?php echo url('index/index'); ?>" class="sidebar-link text-muted active"><i class="o-home-1 mr-3 text-gray"></i><span>首页</span></a></li>
        <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3 text-gray"></i><span>管理员</span></a>
            <div id="pages" class="collapse">
                <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                    <li class="sidebar-list-item"><a href="<?php echo url('admin/administrator'); ?>" class="sidebar-link text-muted pl-lg-5">管理员列表</a></li>
                    <li class="sidebar-list-item"><a href="<?php echo url('admin/addAdministrator'); ?>" class="sidebar-link text-muted pl-lg-5">添加管理员</a></li>
                    <li class="sidebar-list-item"><a href="<?php echo url('admin/role'); ?>" class="sidebar-link text-muted pl-lg-5">角色列表</a></li>
                    <li class="sidebar-list-item"><a href="<?php echo url('admin/addRole'); ?>" class="sidebar-link text-muted pl-lg-5">添加角色</a></li>
                </ul>
            </div>
        </li>
        <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages1" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3 text-gray"></i><span>电脑</span></a>
            <div id="pages1" class="collapse">
                <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                    <li class="sidebar-list-item"><a href="<?php echo url('computer/computer'); ?>" class="sidebar-link text-muted pl-lg-5">电脑列表</a></li>
                    <li class="sidebar-list-item"><a href="<?php echo url('computer/addComputer'); ?>" class="sidebar-link text-muted pl-lg-5">添加电脑</a></li>
                </ul>
            </div>
        </li>
        <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages2" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3 text-gray"></i><span>图书</span></a>
            <div id="pages2" class="collapse">
                <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                    <li class="sidebar-list-item"><a href="<?php echo url('book/book'); ?>" class="sidebar-link text-muted pl-lg-5">图书列表</a></li>
                    <li class="sidebar-list-item"><a href="<?php echo url('book/addBook'); ?>" class="sidebar-link text-muted pl-lg-5">添加图书</a></li>
                </ul>
            </div>
        </li>
        <li class="sidebar-list-item"><a href="<?php echo url('login/index'); ?>" class="sidebar-link text-muted"><i class="o-exit-1 mr-3 text-gray"></i><span>Login</span></a></li>
    </ul>

</div>
    <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
            <section class="py-5">
                <div class="row">
                    <!-- Form Elements -->
                    <div class="col-lg-12 mb-5">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="h6 text-uppercase mb-0">Computer Add</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="<?php echo url('addComputer'); ?>" method="post">
                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">电脑品牌</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="brand">
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">电脑类型</label>
                                        <div class="col-md-9 select mb-3">
                                            <select name="type" class="form-control">
                                                <option value="0">笔记本电脑</option>
                                                <option value="1" selected>台式电脑</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">电脑数量</label>
                                        <div class="col-md-9">
                                            <input type="text" name="num" class="form-control">
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">电脑单价</label>
                                        <div class="col-md-9">
                                            <input type="text" name="prince" class="form-control">
                                        </div>
                                    </div>
                                    <div class="line"></div>

                                    <div class="form-group row">
                                        <div class="col-md-9 ml-auto">
                                            <button type="submit" class="btn btn-secondary">添加</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 text-center text-md-left text-primary">
                        <p class="mb-2 mb-md-0">Your company &copy; 2018-2020</p>
                    </div>
                    <div class="col-md-6 text-center text-md-right text-gray-400">
                        <p class="mb-0">Copyright &copy; 2019.Company name All rights reserved.More Templates <a href="http://www.jq22.com/" target="_blank" title="jq22">jq22</a></p>
                        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- JavaScript files-->
<script src="https://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="/static/admin/vendor/popper.js/umd/popper.min.js"> </script>
<script src="https://www.jq22.com/jquery/bootstrap-4.2.1.js"></script>
<script src="/static/admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="https://cdn.bootcss.com/Chart.js/2.7.2/Chart.min.js"></script>
<script src="/static/admin/js/js.cookie.min.js"></script>
<script src="/static/admin/js/front.js"></script>
</body>
</html>