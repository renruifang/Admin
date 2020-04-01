<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2020/3/22
 * Time: 20:43
 */

namespace app\index\controller;

use think\Controller;
use app\index\model\Book as BookModel;
use app\index\model\Lunbo;
class Book extends Controller
{

    //商品展示
    public function index(){
        $model=new BookModel();
//        分配"category_id"为6的
        $books=$model->where('category_id',6)->select();
        $this->assign('books',$books);

//        分配"category_id"为10的
        $books2=$model->where('category_id',10)->select();
        $this->assign('books2',$books2);


//        分配轮播图
        $model=new Lunbo();
        $lunbo=$model->select();
        $this->assign('lunbo',$lunbo);
        return $this->fetch();

    }


}