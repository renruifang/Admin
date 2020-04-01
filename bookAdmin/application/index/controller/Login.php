<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2020/3/22
 * Time: 20:42
 */

namespace app\index\controller;

use think\Controller;
use app\index\model\Login as LoginModel;

class Login extends Controller
{
    //登录首页
    public function index(){
        return $this->fetch();
    }

    //登录逻辑
    public function login()
    {
        $username = input('username');
        $password = input('password');
        //1.判断传过来的用户名、密码是否为空
        if (empty($username) || empty($password)) {
            return json([
                'status' => 0,
                'msg' => '用户名或则密码为空'
            ]);
        }

        //2.判断用户名密码是否正确
        $model=new LoginModel();
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