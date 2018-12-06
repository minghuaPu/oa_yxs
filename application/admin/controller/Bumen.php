<?php
namespace app\admin\controller;
use \think\Session;
class Bumen extends \app\admin\Auth
{
public function index(){
	$belong=Session::get("u_belong");
        $list = db('bumen')->where("belong",$belong)->paginate(10);
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function addbumen(){
    return $this->fetch();
 }
public function addbumen1(){
  $belong=Session::get("u_belong");
  $data=input();
  $data["belong"]=$belong;
  $bumen=$data["bumen_name"];
  $have=db('bumen')->where("bumen_name='$bumen' and belong='$belong'")->find();
  if(empty($have)){
    db('bumen')->insert($data);
        $this->success('添加成功','index');
  }
       else
        $this->success('该部门已存在，添加失败','index');
 }
 public function update_bumen(){
   
        foreach ($_REQUEST['bumen'] as $key => $value) {
            db('bumen')->where("id=$key")->update(['bumen_name'=>$value]);
        }
     $this->success('修改成功','industrycate');


 }

    
}