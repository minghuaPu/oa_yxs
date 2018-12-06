<?php
namespace app\admin\controller;
use \think\Session;
class Gongdan extends \app\admin\Auth
{
    public function index()
    {
    	$user_data=Session::get();
        $belong=$user_data['u_belong'];
        $bumen=$user_data['bumen'];
        $user_cate=$user_data['user_cate'];
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
        if($bumen==''&& $user_cate=='老板')
        {
            $work_list  =  db('gongdan')->order('id desc')->where("belong",$belong)->paginate(10);
        }
        else
            $work_list  =  db('gongdan')->order('id desc')->where("belong",$belong)->where("bumen",$bumen)->paginate(10);
        $this->assign('work_list',$work_list); 
  
        return $this->fetch();
    }
    public function add()
    {
        $user_data=Session::get();
        $time=date('Y-m-d H:i:s');
        $this->assign("time",$time);

        $work=db('gongdan')->where("belong",$user_data['u_belong'])->select();
        $this->assign('work',$work);
        
        return $this->fetch();
    }
     public function save()
    {
        $data=input();
        $user_data=Session::get();
        $data["belong"]=$user_data["u_belong"];
        $data["bumen"]=$user_data["bumen"];
        //获取当前时间
        $time=date('Y-m-d H:i:s');
        $data['time'] = $time;        
        //获取当前用户ID
        $u_id=Session::get('u_id');
        $data['u_id'] = $u_id;
        //获取文件
        db("gongdan")->insert($data);
        $this->success('添加成功','index');
    }
    public function check()
    {
        $id = input('id');
        $check = db('gongdan')->where("id=$id")->select();
        $this->assign('check',$check);     
   
        $user_name=Session::get('user_name');
        $user=db('user')->where("user_name",$user_name)->select();
        $this->assign("user",$user);      
        return $this->fetch();
    }
    public function update(){
        $id = input('id');
        $data=input();
        $time=date('Y-m-d H:i:s');
        $data["time"]=$time;
        db('gongdan')->where("id=$id")->update($data);
        $this->success('审核成功','index');
    }
}