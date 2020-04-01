<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2020/3/11
 * Time: 17:28
 */

namespace app\admin\controller;


use think\Controller;
use app\admin\model\Computer as ComputerModel;
use think\Request;

class Computer extends Controller
{
    //电脑列表
    public function computer(){
        $model=new ComputerModel();
        $arr=$model->paginate(5);
        $this->assign('arr',$arr);
        return $this->fetch();
    }

    //添加电脑
    public function addComputer(){
        $request=Request::instance();
        if($request->isPost()){
            $model=new ComputerModel();
            $arr=$request->post();
            $data=array(
                'brand'=>$arr['brand'],
                'type'=>$arr['type'],
                'num'=>$arr['num'],
                'prince'=>$arr['prince']
            );
            $res=$model->save($data);
            if($res){
                $this->success('添加成功','computer');
            }else{
                $this->error('添加失败','addComputer');
            }
        }
        return $this->fetch();
    }

    //编辑电脑
    public function editeComputer(){
        $request=Request::instance();
        if($request->isPost()){
            $model=new ComputerModel();
            $id=input('id');
            $arr=$request->post();
            $data=array(
                'brand'=>$arr['brand'],
                'type'=>$arr['type'],
                'num'=>$arr['num'],
                'prince'=>$arr['prince']
            );
            $res=$model->save($data,['id'=>$id]);
            if($res){
                $this->success('更新成功','computer');
            }else{
                $this->error('更新失败','editeComputer');
            }
        }
        $model=new ComputerModel();
        $id=input('id');
        $arr=$model->where('id',$id)->find();
        $this->assign('arr',$arr);
        return $this->fetch();
    }

    //删除电脑
    public function delComputer(){
        $id=input('id');
        $res=ComputerModel::destroy($id);
        if($res){
            $this->success('删除成功','computer');
        }else{
            $this->error('删除失败','computer');
        }
    }

    //批量删除
    public function delAll(){
        $id=input('id');
        $res=ComputerModel::destroy($id);
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