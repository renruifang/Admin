<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2020/3/20
 * Time: 15:37
 */

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Book as BookModel;
use app\admin\model\Category;
use think\Db;
use think\Image;
class Book extends Controller
{
    //商品展示列表
    public function index(){
        $arr=Db::table('book')->alias('b')->join('category c','b.category_id = c.id')
            ->field('b.id,b.title,b.image_thumb,b.sum,b.lend,b.now,c.meta_title')->select();
        $this->assign('arr',$arr);
        return $this->fetch();
    }

    //添加商品
    public function add(){
        $request=Request::instance();
        if($request->isGet()){
            $where="status=1 and pid>0";
            $categorys=Db::table('category')->where($where)->select();
            $this->assign('categorys',$categorys);
            return $this->fetch();
        }else{
            $request=Request::instance();
            $arr=$request->post();
            $file=$request->file('image'); //获取上传图片
            if($file){
                $info=$file->move(ROOT_PATH.'public'.DS.'uploads');//将图片存在框架目录下
                if($info){
                    $path=$info->getSaveName();//获取图片路径
                    $arr['image']=$path;

                    //缩略图
                    $image=Image::open($file);
                    $thumb_path=ROOT_PATH.'public'.DS.'uploads'.DS.'thumb'.DS.'thumb_'.$info->getFilename();
                    $image->thumb(100,100)->save($thumb_path);
                    $arr['image_thumb']='thumb'.DS.'thumb_'.$info->getFilename();
                }else{
                    $file->getError();//上传失败后的错误提示信息
                }
            }
            $model=new BookModel();
            $res=$model->save($arr);
            if($res){
                $this->success('添加成功','index');
            }else{
                $this->error('添加I失败','add');
            }
        }

    }

    //更新商品
    public function edite(){
        $request=Request::instance();
        if($request->isGet()){
            $id=input('id');
            $model=new BookModel();
            $arr=$model->where('id',$id)->find();
            $this->assign('arr',$arr);
//          将书籍类型分配到视图页
            $model2=new Category();
            $where="status=1 and pid>0";
            $categorys=$model2->where($where)->select();
            $this->assign('categorys',$categorys);
            return $this->fetch();
        }else{
            $request=Request::instance();
            $id=input('id');
            $arr=$request->post();
            $file=$request->file('image');
            if($file){
                $info=$file->move(ROOT_PATH.'public'.DS.'uploads');
                if($info){
                    $path=$info->getSaveName();//获取图片路径
                    $arr['image']=$path;

                    //缩略图
                    $image=Image::open($file);
                    $thumb_path=ROOT_PATH.'public'.DS.'uploads'.DS.'thumb'.DS.'thumb_'.$info->getFilename();
                    $image->thumb(100,100)->save($thumb_path);
                    $arr['image_thumb']='thumb'.DS.'thumb_'.$info->getFilename();

                }else{
                    $file->getError();
                }
            }
            $model=new BookModel();
            $res=$model->save($arr,['id'=>$id]);
            if($res){
                $this->success('更新成功','index');
            }else{
                $this->error('更新失败','edite?id=$id');
            }
        }


    }

    //删除商品
    public function del(){
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