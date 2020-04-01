<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2020/3/22
 * Time: 21:39
 */

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Image;
use app\admin\model\Lunbo as LunboModel;
class Lunbo extends Controller
{
    //轮播图列表
    public function index(){
        $model=new LunboModel();
        $arr=$model->select();
        $this->assign('arr',$arr);
        return $this->fetch();
    }

    //添加轮播图
    public function add(){
        $request=Request::instance();
        if($request->isGet()){
            return $this->fetch();
        }else{
            $request=Request::instance();
            $arr=$request->post();
            $file=$request->file('image');
            if($file){
                $info=$file->move(ROOT_PATH.'public'.DS.'uploads');
                if($info){
                    $path=$info->getSaveName();
                    $arr['pic']=$path;

//                    缩略图
                    $image=Image::open($file);
                    $thumb_path=ROOT_PATH.'public'.DS.'uploads'.DS.'thumb'.DS.'thumb_'.$info->getFilename();
                    $image->thumb(100,100)->save($thumb_path);
                    $arr['thumb_pic']='thumb'.DS.'thumb_'.$info->getFilename();
                }else{
                    $file->getError();
                }
            }
            $model=new LunboModel();
            $res=$model->save($arr);
            if($res){
                $this->success('添加成功','index');
            }else{
                $this->error('添加失败','add');
            }
        }

    }

    //编辑轮播图
    public function edite(){
        $request=Request::instance();
        if($request->isGet()){
            $id=input('id');
            $model=new LunboModel();
            $arr=$model->where('id',$id)->find();
            $this->assign('arr',$arr);
            return $this->fetch();
        }else{
            $id=input('id');
            $request=Request::instance();
            $arr=$request->post();
            $file=$request->file('image');
            if($file){
                $info=$file->move(ROOT_PATH.'public'.DS.'uploads');
                if($info){
                    $path=$info->getSaveName();
                    $arr['pic']=$path;

//                    缩略图
                    $image=Image::open($file);
                    $thumb_path=ROOT_PATH.'public'.DS.'uploads'.DS.'thumb'.DS.'thumb_'.$info->getFilename();
                    $image->thumb(100,100)->save($thumb_path);
                    $arr['thumb_pic']='thumb'.DS.'thumb_'.$info->getFilename();
                }else{
                    $file->getError();
                }
            }
            $model=new LunboModel();
            $res=$model->save($arr,['id',$id]);
            if($res){
                $this->success('更新成功','index');
            }else{
                $this->error('更新失败','edite?id=$id');
            }


        }
    }

//    删除轮播图
    public function del(){
        $id=input('id');
        $res=LunboModel::destroy($id);
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