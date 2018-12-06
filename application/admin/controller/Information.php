<?php
namespace app\admin\controller;
use \think\Session;
error_reporting(0);
class Information extends \app\admin\Auth
{
    public function index()
    {
    	//获取当前用户信息
        $user_data=Session::get();
        $belong=$user_data['u_belong'];
        //搜索用户
        $u_where_data = [];
        if(input('user_name')){
            $u_where_data['user_name'] = ['like','%'.input('user_name').'%'];
        }    
        //作业列表的用户  
        $user_list=db("user")->where($u_where_data)->select(); 
        $this->assign('user_list',$user_list);          
        //添加条件
        $where_data = [];
        if($user_data['user_cate']=='员工'){
            $where_data['u_id']=$user_data['u_id'];
        }if(input('user_name')){
            $where_data['u_id']=$user_list[0]["id"];
        }
        //当前用户
        $user=db('user')->where("user_name",$user_data['user_name'])->select();
        $this->assign("user",$user);
        //作业列表
        if($user_data['user_cate']=='老板'){
            $work_list  =  db('user')->where("belong",$belong)->paginate(10);
        }
        else if($user_data['user_cate']=='经理'){
            $work_list  =  db('user')->where("belong",$belong)->where("bumen",$user_data['bumen'])->paginate(10);
        }
        else
             $work_list  =  db('user')->where("id",$user_data['u_id'])->paginate(10);
        $this->assign('work_list',$work_list); 
        return $this->fetch();
    }
    public function check()
    {
        $user_data=Session::get();
        $belong=$user_data['u_belong'];
        $id = input('id');
        $check = db('user')->where("id=$id")->select();
        $this->assign('check',$check);     
        $user_name=Session::get('user_name');
        $user=db('user')->where("user_name",$user_name)->select();
        $bumen=db('bumen')->where("belong",$belong)->select();
        $this->assign("user",$user); 
        $this->assign("bumen",$bumen); 
        return $this->fetch();
    }
    public function update(){
        $id = input('id');
        $data=input();
      
    
        db('user')->where("id=$id")->update($data);
       
        $this->success('操作成功','index');

        
    }
    
}