<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2020/3/10
 * Time: 17:29
 */

namespace app\admin\controller;


use think\captcha\Captcha;
use think\Controller;
use app\admin\model\Admin as AdminModel;

class Login extends Controller
{
    //登录页面
    public function index(){
        return $this->fetch();
    }

    //验证码
    public function verify(){
        $config=array(
            'fontSize'=>24,
            'length'=>4,
            'useNoise'=>false
        );
        $captcha=new Captcha($config);
        return $captcha->entry();
    }

    //登录逻辑
    public function login(){
        $username=input("username");
        $password=input("password");
        $code=input("code");
        //1.判断用户名、密码、验证码是否为空
        if(empty($username)||empty($password)||empty($code)){
            return json([
                'status'=>0,
                'msg'=>'用户名、密码或验证码不能为空'
            ]);
        }

        //2.判断验证码是否正确
        $captcha=new Captcha();
        $res=$captcha->check($code);
        if(!$res){
            return json([
                'status'=>0,
                'msg'=>'验证码错误'
            ]);
        }

        //3.判断用户名、密码是否正确
        $model=new AdminModel();
        $arr=$model->where('username',$username)->find();
        if(is_null($arr)==false&&$password==$arr['password']){
            return json([
                'status'=>1,
                'msg'=>'登录成功'
            ]);
        }else{
            return json([
                'status'=>0,
                'msg'=>'用户名或密码错误'
            ]);
        }


    }

}