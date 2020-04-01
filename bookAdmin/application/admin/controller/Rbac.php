<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2020/3/18
 * Time: 20:58
 */

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\model\Admin;
use app\admin\model\Role;
use app\admin\model\Rule;

class Rbac extends Controller
{
    protected $admin;
    protected $request;
    protected $role;
    protected $rule;

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->request = Request::instance();
        $this->admin = new Admin();
        $this->role = new Role();
        $this->rule = new Rule();

    }

    //管理员列表
    public function administrator()
    {
        $arr = $this->admin->select();
        $this->assign('arr', $arr);
        return $this->fetch();
    }

    //添加管理员
    public function addAdministrator()
    {
        if ($this->request->isGet()) {
            return $this->fetch();
        } else {
            $data = $this->request->post();
            $res = $this->admin->save($data);
            if ($res) {
                $this->success('添加成功', 'administrator');
            } else {
                $this->error('添加失败', 'addAdministrator');
            }
        }

    }

    //编辑管理员信息
    public function editeAdministrator()
    {
        if ($this->request->isGet()) {
            $id = input('id');
            $arr = $this->admin->where('id', $id)->find();
            $this->assign('arr', $arr);
            return $this->fetch();
        }
        $id = input('id');
        $data = $this->request->post();
        $res = $this->admin->save($data, ['id' => $id]);
        if ($res) {
            $this->success('更新成功', 'administrator');
        } else {
            $this->error('更新失败', 'editeAdministrator?id=$id');
        }

    }

    //删除一条管理员信息
    public function delAdministrator()
    {
        $id = input('id');
        $res = Admin::destroy($id);
        if ($res) {
            return json([
                'status' => 1,
                'msg' => '删除成功'
            ]);
        } else {
            return json([
                'status' => 0,
                'msg' => '删除失败'
            ]);
        }
    }

    //角色列表
    public function role()
    {
        $arr = $this->role->select();
        $this->assign('arr', $arr);
        return $this->fetch();
    }

    //增加角色
    public function addRole()
    {
        if ($this->request->isGet()) {
            return $this->fetch();
        } else {
            $data = $this->request->post();
            $res = $this->role->save($data);
            if ($res) {
                $this->success('添加成功', 'role');
            } else {
                $this->error('添加失败', 'addRole');
            }
        }

    }

    //编辑角色
    public function editeRole()
    {
        if ($this->request->isGet()) {
            $id = input('id');
            $arr = $this->role->where('id', $id)->find();
            $this->assign('arr', $arr);
            return $this->fetch();
        }
        $id = input('id');
        $data = $this->request->post();
        $res = $this->role->save($data, ['id' => $id]);
        if ($res) {
            $this->success('更新成功', 'role');
        } else {
            $this->error('更新失败', 'editeRole?id=$id');
        }

    }

    //删除角色
    public function delRole()
    {
        $id = input('id');
        $res = Role::destroy($id);
        if ($res) {
            return json([
                'status' => 1,
                'msg' => '删除成功'
            ]);
        } else {
            return json([
                'status' => 0,
                'msg' => '删除失败'
            ]);
        }
    }

    //规则列表
    public function rule()
    {
        $data = $this->rule->where('status', 1)->select();
        $arr = node_merge($data);
        $this->assign('arr', $arr);
        return $this->fetch();
    }

    //规则的添加
    public function addRule(){
        if($this->request->isGet()){
            $where=array(
                'status'=>1,
                'pid'=>0
            );
            $arr=$this->rule->where($where)->select();
            $id=input('id');
            $this->assign('id',$id);
            $this->assign('arr',$arr);
            return $this->fetch();
        }else{
            $arr=$this->request->post();
            $res=$this->rule->save($arr);
            if($res){
                $this->success('添加成功','rule');
            }else{
                $this->error('添加失败','addRule');
            }
        }


    }

    //规则的更新
    public function editeRule(){
        if($this->request->isGet()){
            $id=input('id');
            $arr=$this->rule->where('id',$id)->find();
            $this->assign('arr',$arr);
            return $this->fetch();
        }else{
            $id=input('id');
            $arr=$this->request->post();
            $res=$this->rule->save($arr,['id'=>$id]);
            if($res){
                $this->success('更新成功','rule');
            }else{
                $this->error('更新失败','editeRule?id=$id');
            }

        }
    }

    //删除规则
    public function delRule(){
        $id=input('id');
        $where="id=$id or pid=$id";
        $res=Db::table('rule')->where($where)->delete();
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