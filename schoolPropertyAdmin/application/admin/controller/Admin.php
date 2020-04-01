<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2020/3/10
 * Time: 13:29
 */

namespace app\admin\controller;


use think\Controller;
use app\admin\model\Admin as AdminModel;
use think\Request;
use app\admin\model\Role;

class Admin extends Controller
{
    //管理员列表
    public function administrator(){
        $model=new AdminModel();
        $arr=$model->paginate(5);
        $this->assign('arr',$arr);
        return $this->fetch();
    }
    //添加管理员
    public function addAdministrator(){
        $request=Request::instance();
        if($request->isPost()){
            $model=new AdminModel();
            $arr=$request->post();
            $data=array(
                'username'=>$arr['username'],
                'password'=>$arr['password'],
                'status'=>$arr['status']
            );
            $res=$model->save($data);
            if($res){
                $this->success('添加成功','administrator');
            }else{
                $this->error('添加失败','addAdministrator');
            }
        }
        return $this->fetch();
    }

    //编辑管理员信息
    public function editeAdministrator(){
        $request=Request::instance();
        if($request->isPost()){
            $arr=$request->post();
            $model=new AdminModel();
            $data=array(
                'username'=>$arr['username'],
                'password'=>$arr['password'],
                'status'=>$arr['status']
            );
            $res=$model->save($data,['id'=>$arr['id']]);
            if($res){
                $this->success('更新成功','administrator');
            }else{
                $this->error('更新失败','editeAdministrator');
            }
        }
        $id=input('id');
        $model=new AdminModel();
        $arr=$model->where('id',$id)->find();
        $this->assign('arr',$arr);
        return $this->fetch();
    }

    //删除管理员
    public function delAdministrator(){
        $id=input('id');
        $res=AdminModel::destroy($id);
        if($res){
            $this->success('删除成功','administrator');
        }else{
            $this->error('删除失败','administrator');
        }
    }

    //批量删除
    public function delAll(){
        $id=input('id');
        $res=AdminModel::destroy($id);
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

    //角色列表
    public function role(){
        $model=new Role();
        $arr=$model->paginate(5);
        $this->assign('arr',$arr);
        return $this->fetch();
    }

    //角色添加
    public function addRole(){
        $request=Request::instance();
        if($request->isPost()){
            $model=new Role();
            $arr=array(
                'name'=>input('name'),
                'remark'=>input('remark'),
                'status'=>input('status')
            );
            $res=$model->save($arr);
            if($res){
                $this->success('添加成功','role');
            }else{
                $this->error('添加失败','addRole');
            }
        }
        return $this->fetch();
    }

    //角色删除
    public function delRole(){
        $id=input('id');
        $res=Role::destroy($id);
        if($res){
            $this->success('删除成功','role');
        }else{
            $this->error('删除失败','role');
        }
    }

    //角色编辑
    public function editeRole(){
        $request=Request::instance();
        if($request->isPost()){
            $model=new Role;
            $id=input('id');
            $arr=array(
                'name'=>input('name'),
                'remark'=>input('remark'),
                'status'=>input('status')
            );
            $res=$model->save($arr,['id'=>$id]);
            if($res){
                $this->success('更新成功','role');
            }else{
                $this->error('更新失败','editeRole');
            }
        }
        $model=new Role();
        $id=input('id');
        $arr=$model->where('id',$id)->find();
        $this->assign('arr',$arr);
        return $this->fetch();
    }

    //角色批量删除
    public function delAll2(){
        $id=input('id');
        $res=Role::destroy($id);
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