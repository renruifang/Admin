<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2020/3/8
 * Time: 17:40
 */

namespace app\admin\controller;

use think\Controller;
use think\captcha\Captcha;
use app\admin\model\Admin;

class Login extends Controller
{
    //显示登录页面
    public function index()
    {
        return $this->fetch();
    }

    //设置验证码
    public function verify()
    {
        $captcha = new Captcha([
            'length' => 4,
            'useNoise' => false,  //关闭验证码杂点
        ]);
        return $captcha->entry();
    }

    //实现登录逻辑
    public function login()
    {
        $username = input('username');
        $password = input('password');
        $code = input('code');
        //1.判断传过来的用户名、密码、验证码是否为空
        if (empty($username) || empty($password) || empty($code)) {
            return json([
                'status' => 0,
                'msg' => '用户名、密码或者验证码为空'
            ]);
        }
        //2.判断验证码是否正确
        $captcha = new Captcha();
        $res = $captcha->check($code);
        if (!$res) {
            return json([
                'status' => 0,
                'msg' => '验证码错误'

            ]);
        }
        //3.判断用户名密码是否正确
        $model=new Admin();
        $data=$model->where('username',$username)->find()->toArray();
        if(is_null($data)==false&&$data['password']==$password){
            return json([
                'status' => 1,
                'msg' => '登录成功'
            ]);
        }else{
            return json([
                'status' => 0,
                'msg' => '用户名或密码错误'
            ]);
        }
    }
}



