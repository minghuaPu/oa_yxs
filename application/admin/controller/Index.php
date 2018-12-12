<?php
namespace app\admin\controller;
use \think\Session;
class Index extends \app\admin\Auth
{
    public function index()
    {
      $ubelong=Session::get('u_belong');
        //查询公司分类
    	$list = db('companycate')->select();
    	$this->assign('list',$list);
        //查询客户来源
        $user_source = db('usersource')->select();
        $this->assign('user_source',$user_source);
        //查询学校名字
        $school_name = db('school')->select();
        $this->assign('school_name',$school_name);
        //查询所报课程
        $lesson_name = db('lessname')->select();
        $this->assign('lesson_name',$lesson_name);
        //查询公告
        //$id = input('id');
        $notice_info = db('notice')->where("belong='$ubelong'")->order('id desc')->select();
        $this->assign('notice_info',$notice_info);
        return $this->fetch();
    }
    //添加客户
    public function customersave(){   
        $belong=Session::get('u_belong');   
        $time=date('y-m-d');
        $time="20".$time;
        $data=input();
        $data['time']=$time;
        $data['belong']=$belong;
        db('userinfo')->insert($data);
        $this->success('添加成功','index');
    }
    //保存公告
  public function noticesave(){
        $ubelong=Session::get('u_belong');
        $time=date('y-m-d');
        $time="20".$time;
        $data=input();
        $data["belong"]=$ubelong;
        $data['time']=$time;
        db('notice')->insert($data);
        $this->success('添加成功',"index");
    }
    //添加学生
    public function studentsave(){
        $uid=Session::get('u_id');
        $ubelong=Session::get('u_belong');
        $time=date('y-m-d');
        $time="20".$time;
        $data=input();
        $data['time']=$time;
        $data['belong']=$ubelong;
        $data["uid"]=$uid;
        $have=db("studentsinfo")->where(['uid'=>$uid])->find();
        
             db('studentsinfo')->insert($data);
             $this->success('添加成功',"index");

    }
	public function work(){
		
    	return $this->fetch();
    }
	public function finance(){
		
    	return $this->fetch();
    }
	public function department(){
		
    	return $this->fetch();
    }
    public function information(){
        return $this->fetch();
    }
    public function cjg(){
        return $this->fetch();
    }
}