<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2020/3/20
 * Time: 10:03
 */

namespace app\admin\controller;

use think\Request;
use think\Controller;
use think\Db;
use app\admin\model\Category as CategoryModel;

class Category extends Controller
{
//    分类列表
    public function index(){
        $model=new CategoryModel();
        $data=$model->where('status',1)->select();
        $arr=node_merge($data);
        $this->assign('arr',$arr);
        return $this->fetch();
    }

//    添加分类
    public function add(){
        $request=Request::instance();
        if($request->isGet()){
            $model=new CategoryModel();
            $where=array(
                'status'=>1,
                'pid'=>0
            );
            $arr=$model->where($where)->select();
            $id=input('id');
            $this->assign('id',$id);
            $this->assign('arr',$arr);
            return $this->fetch();
        }else{
            $model=new CategoryModel();
            $request=Request::instance();
            $arr=$request->post();
            $res=$model->save($arr);
            if($res){
                $this->success('添加成功','index');

            }else{
                $this->error('添加失败','add');
            }
        }


    }

    //更新分类
    public function edite(){
        $request=Request::instance();
        if($request->isGet()){
            $id=input('id');
            $model=new CategoryModel();
            $arr=$model->where('id',$id)->find();
            $this->assign('arr',$arr);
            return $this->fetch();
        }else{
            $id=input('id');
            $request=Request::instance();
            $arr=$request->post();
            $model=new CategoryModel();
            $res=$model->save($arr,['id'=>$id]);
            if($res){
                $this->success('更新成功','index');
            }else{
                $this->error('更新失败','edite?id=$id');
            }
        }
    }

    //删除分类
    public function del(){
        $model=new CategoryModel();
        $id=input('id');
        $where="id=$id or pid=$id";
        $res=$model->save(['status'=>0],$where);
        if($res){
            return json([
                'status'=>1,
                'msg'=>'删除成功'
            ]);
        }else{
            return json([
                'status'=>0,
                'msg'=>'删除失败'
            ]);
        }
    }
}