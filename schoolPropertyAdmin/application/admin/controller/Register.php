<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2020/3/11
 * Time: 13:55
 */

namespace app\admin\controller;

use think\Controller;
use think\captcha\Captcha;
use app\admin\model\Admin;

class Register extends Controller
{
    //显示注册页
    public function index(){
        return $this->fetch();
    }
    //验证码
    public function verify(){
        $config=array(
            'useNoise'=>false,
            'length'=>4
        );
        $captcha=new Captcha($config);
        return $captcha->entry();
    }
    //实现注册的逻辑
    public function register(){
        $username=input('username');
        $password=input('password');
        $code=input('code');
        //1、判断用户名、密码、验证码是否为空
        if(empty($username)||empty($password)||empty($code)){
            return json([
                'status'=>0,
                'msg'=>'用户名、密码或者验证码为空'
            ]);
        }

        //2、判断验证码是否正确
        $captcha=new Captcha();
        $res=$captcha->check($code);
        if(!$res){
            return json([
                'status'=>0,
                'msg'=>'验证码错误'
            ]);
        }
        //3、判断用户名、密码是否存在，不存在则执行添加功能
        $model=new Admin();
        $arr=$model->where('username',$username)->find();
        if(is_null($arr)==false&&$password==$arr['password']){
            return json([
                'status'=>0,
                'msg'=>'用户已存在'
            ]);
        }else{
          $result=$model->save(['username'=>$username,'password'=>$password]);
          if($result){
              return json([
                  'status'=>1,
                  'msg'=>'注册成功'
              ]);
          }else{
              return json([
                  'status'=>0,
                  'msg'=>'注册失败'
              ]);
          }
        }


    }

}