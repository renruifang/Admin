<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2020/3/11
 * Time: 20:06
 */

namespace app\admin\controller;


use think\Controller;
use app\admin\model\Book as BookModel;
use think\Request;

class Book extends Controller
{
//    图书列表
    public function book(){
        $model=new BookModel();
        $arr=$model->paginate(5);
        $this->assign('arr',$arr);
        return $this->fetch();
    }

    //添加书籍
    public function addBook(){
        $request=Request::instance();
        if($request->isPost()){
            $model=new BookModel();
            $arr=$request->post();
            $data=array(
                'name'=>$arr['name'],
                'type'=>$arr['type'],
                'num'=>$arr['num'],
                'prince'=>$arr['prince']
            );
            $res=$model->save($data);
            if($res){
                $this->success('添加成功','book');
            }else{
                $this->error('添加失败','addBook');
            }
        }
        return $this->fetch();
    }

    //编辑书籍信息
    public function editeBook(){
        $request=Request::instance();
        if($request->isPost()){
            $model=new BookModel();
            $id=input('id');
            $arr=$request->post();
            $data=array(
                'name'=>$arr['name'],
                'type'=>$arr['type'],
                'num'=>$arr['num'],
                'prince'=>$arr['prince']
            );
            $res=$model->save($data,['id'=>$id]);
            if($res){
                $this->success('更新成功','book');
            }else{
                $this->error('更新失败','editeBook');
            }
        }
        $model=new BookModel();
        $id=input('id');
        $arr=$model->where('id',$id)->find();
        $this->assign('arr',$arr);
        return $this->fetch();
    }

    //删除书籍
    public function delBook(){
        $id=input('id');
        $res=BookModel::destroy($id);
        if($res){
            $this->success('删除成功','book');
        }else{
            $this->error('删除失败','book');
        }
    }

    //批量删除
    public function delAll(){
        $id=input('id');
        $res=BookModel::destroy($id);
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