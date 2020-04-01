<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2020/3/10
 * Time: 10:54
 */

namespace app\admin\controller;


use think\Controller;

class Index extends Controller
{
    public function index(){
        return $this->fetch();
    }

}