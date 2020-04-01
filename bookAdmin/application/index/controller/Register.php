<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2020/3/23
 * Time: 0:46
 */

namespace app\index\controller;
use think\Request;
use think\Controller;
use app\index\model\Login;
class Register extends Controller
{
    public function index(){
        return $this->fetch();
    }

    //注册逻辑
    public function add()
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

        //2.添加用户
        $request=Request::instance();
        $arr=$request->post();
        $model=new Login();
        $res=$model->save($arr);
        if($res){
            return json([
                'status' => 1,
                'msg' => '注册成功'
            ]);
        }else{
            return json([
                'status' => 0,
                'msg' => '注册失败'
            ]);
        }
    }

}