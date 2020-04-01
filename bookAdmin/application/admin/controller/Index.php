<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2020/3/5
 * Time: 20:50
 */

namespace app\admin\controller;


use think\Controller;

class Index extends Controller
{
    public function index(){
        return $this->fetch();
    }

}