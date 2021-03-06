<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpStudy\PHPTutorial\WWW\tp51\public/../application/admin\view\login\index.html";i:1583676573;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="/static/admin/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="/static/admin/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <!--<div class="login-logo"></div>-->
               <h2>图书后台管理系统</h2>

                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    <form class="form-horizontal" >
                    <!--用户名    -->
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Username" id="username" name="username"/>
                        </div>
                    </div>
                     <!--密码-->
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password"/>
                        </div>
                    </div>
                     <!--验证码   -->
                     <div class="form-group">
                        <div class="col-md-7">
                            <input type="password" class="form-control" placeholder="Code" id="code" name="code"/>
                        </div>
                         <div class="col-md-5">
                            <img src="<?php echo url('login/verify'); ?>" alt="" class="btn btn-link btn-block" id="pic">
                        </div>
                      </div>
                    <!--提交登录信息-->
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>   <!--忘记密码-->
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-info btn-block" id="btn">Log In</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            
        </div>
        
    </body>
    <script src="/static/admin/js/plugins/jquery/jquery.min.js"></script>
    <script src="/static/admin/js/layer/skin/layer.css"></script>
    <script src="/static/admin/js/layer/layer.js"></script>
    <script>
        $("#btn").click(function(){
            var username=$.trim($("#username").val());
            var password=$.trim($("#password").val());
            var code=$.trim($("#code").val());
            var num=0;//错误数
            var str='';//错误信息
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
                num++
            }
            if(num>0){
                layer.msg(str,{
                    title:'错误提示信息',
                    icon:5
                });
                return;//若用户名、密码或者验证码为空是，不再执行
            }
            // 都不为空时，利用ajax传值
            $.ajax({
                url:"<?php echo url('login/login'); ?>",
                type:'post',
                data:{
                    username:username,
                    password:password,
                    code:code
                },
                dataType:'json',
                success:function(res){
                    // console.log(res.msg);
                    if(res.status==1){
                        window.location.href="<?php echo url('index/index'); ?>";
                    }else{
                        layer.msg(res.msg,{
                            title:'错误提示信息',
                            icon:5
                        })
                    }
                }
            });
        })
    </script>

<!--点击验证码跳转-->
    <script>
        $("#pic").click(function(){
            $("#pic").attr('src',"<?php echo url('login/verify'); ?>")
        })
    </script>
</html>






