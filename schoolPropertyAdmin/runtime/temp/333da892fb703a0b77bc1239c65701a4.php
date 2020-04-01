<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpStudy\PHPTutorial\WWW\tp53\public/../application/admin\view\login\index.html";i:1583907699;}*/ ?>

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
    <style>
        .other{
            width: 270px;
            display:inline-block;
        }
        .picture{
            width: 150px;
            border-radius:10px;
        }
    </style>
</head>
<body>
<div class="page-holder d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-5 col-lg-7 mx-auto mb-5 mb-lg-0">
                <div class="pr-lg-5"><img src="/static/admin/img/illustration.svg" alt="" class="img-fluid"></div>
            </div>
            <div class="col-lg-5 px-lg-4">
                <h2 class="mb-4">后台管理系统</h2>
                <form id="loginForm" class="mt-4">
                    <div class="form-group mb-4">
                        <input type="text" name="username" placeholder="Username" class="form-control border-0 shadow form-control-lg" id="username">
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" name="passowrd" placeholder="Password" class="form-control border-0 shadow form-control-lg text-violet" id="password">
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" name="Code" placeholder="Code" class="form-control border-0 shadow form-control-lg text-violet other" id="code">
                        <img src="<?php echo url('login/verify'); ?>" alt="" class="picture" id="pic">
                    </div>
                    <button type="button" class="btn btn-primary shadow px-5" id="btn">登录</button>
                </form>
            </div>
        </div>

        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)                 -->
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

<script src="/static/admin/layer/layer.js"></script>
<script src="/static/admin/layer/skin/layer.css"></script>
<!--前端验证用户名、密码、验证码是否空-->
<script>
    $("#btn").click(function(){
        var username=$.trim($("#username").val());
        var password=$.trim($("#password").val());
        var code=$.trim($("#code").val());
        var str='';
        var num=0;
        if(username==''){
            str=str+'用户名不能为空';
            num++;
        }
        if(password==''){
            str=str+'密码不能为空';
            num++;
        }
        if(code==''){
            str=str+'验证码不能为空';
            num++;
        }
        if(num>0){
            layer.msg(str,{
                title:'错误提示信息',
                icon:5
            });
            return;
        }
        $.ajax({
            url:"<?php echo url('login/login'); ?>",
            type:'post',
            data:{
                'username':username,
                'password':password,
                'code':code
            },
            dataType:'json',
            success:function(res){
                // console.log(res);
                if(res.status==1){
                    window.location.href="<?php echo url('index/index'); ?>";
                }else{
                    layer.msg(res.msg,{
                        title:'错误提示信息',
                        icon:5
                    })
                }

            }
        })
    })

</script>
<!--点击验证码变换-->
<script>
    $("#pic").click(function(){
        $(this).attr('src',"<?php echo url('login/verify'); ?>")
    })
</script>
</body>
</html>