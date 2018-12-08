<?php
namespace app\admin\controller;
use \think\Session;
class Task extends \app\admin\Auth
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
        
        if($user_data['user_cate']=='老板')
          {
            $work_list  =  db('bossworklist')->order('id desc')->paginate(10);
            $unfinish_list=db("bossworklist")->where('state=3 or state=4')->select();
            $this->assign('unfinish_list',$unfinish_list); 
        }
        else
            $work_list  =  db('work')->order('id desc')->where("belong",$belong)->where("bumen",$user_data["bumen"])->paginate(10);
        
        $this->assign('work_list',$work_list); 
        
        $main=db('mainclassify')->select();
        $this->assign('main',json_encode($main));
        
        $date=date('Y-m-d');
        $this->assign('date',$date); 
        $yuan=db('worksheet')->where("uid=".$user_data['u_id'])->select();
        $yuangong=[];
        foreach ($yuan as $key => $value) {
            if(date('Y-m-d',$value['time'])==$date){
                $yuangong[]=$value;
            }
        }
        $time=date('Y-m-d',time());
        $list=db('bossworklist')->select();
        $bossfenprw=[];
        $daibanwork=[];
        foreach ($list as $key => $value) {
           $uname=explode(',',$value['execute_id'] ); 
            foreach ($uname as $k => $val) {
               if($val==$user_data['user_name']){
                        if(date('Y-m-d',$value['time'])==$time){
                            $bossfenprw[]=$value;
                    }else{
                        $daibanwork[]=$value;
                    }
               }
            }
            
        }
        $this->assign('bossfenprw',$bossfenprw);
        $this->assign('daibanwork',$daibanwork);
        $this->assign('yuangong',json_encode($yuangong));

        return $this->fetch();
    } 
    //员工分类
    public function classify(){
        $user_data=Session::get();
       
        
        $select=input('select');
        if($select==0){
            db('worksheet')->insert(['uid'=>$user_data['u_id'],'time'=>time()]);
            $data=db('worksheet')->where('uid='.$user_data['u_id'])->order('id desc')->find();
            return json($data);
        }
        else if($select==1){
            $xuan=input("xuan");
            $up['id']=$xuan;
            $up['type']=input('type');
            db('worksheet')->where('id='.input('theme_id'))->update(["primary"=>json_encode($up)]);
            $data=db('fineclassify')->where('main='.$xuan)->select();
            return json($data);
        }
        else if($select==2){
            
            $up['id']=input('xuan.id');
            $up['type']=input('xuan.type');
            $up['main']=input('xuan.main');
            $up['liangtype']=input('xuan.liangtype');
            $up['grade']=input('xuan.grade');
            db('worksheet')->where('id='.input('theme_id'))->update(["secondary"=>json_encode($up)]);
            $data=db('workingtime')->where('type='.$up['liangtype'])->select();
            
            return json($data);            
        }
        else if($select==3){
            db("worksheet")->where('id='.input('theme_id'))->update(["quantity"=>input('liang')]);
            $data=db('worksheet')->where('id='.input('theme_id'))->value('secondary');
            json_decode($data);
            // $aa=intval($data['grade'])*intval(input('liang'));
            return json($data);
        }
        else if($select==4){
            db("worksheet")->where('id='.input('theme_id'))->update(["job"=>input('job')]);
        }
        else if($select==5){
            db("worksheet")->where('id='.input('theme_id'))->update(["whether"=>input('whether')]);
        }
        else if($select==6){
            db("worksheet")->where('id='.input('theme_id'))->update(["reasons"=>input('reasons')]);
        }
        else if($select==7){
            db("worksheet")->where('id='.input('theme_id'))->update(["remark"=>input('remark')]);
        }
        else if($select==8){
            db("worksheet")->where('id='.input('theme_id'))->update(["score"=>input('score')]);
        }
    } 
    //交作业的页面
	public function add()
    {
        $user_data=Session::get();
        $time=date('Y-m-d H:i:s');
        $this->assign("time",$time);

        $work=db('worklist')->where("belong",$user_data['u_belong'])->select();
        $this->assign('work',$work);
        
        return $this->fetch();
    }
    //交作业时保存
    public function save()
    {
        $data=input();
        $user_data=Session::get();
        $data["belong"]=$user_data["u_belong"];
        //获取当前时间
        $time=date('Y-m-d H:i:s');
        $data['time'] = $time;        
        //获取当前用户ID
        $u_id=Session::get('u_id');
        $data['u_id'] = $u_id;
        $data['bumen']=$user_data['bumen'];
        //获取文件
        $work = request()->file('work');
        if($work){
            $info = $work->move(ROOT_PATH.'/public/uploads');
            if($info){
                $data['work'] = $info->getSaveName();
            }else{
                 echo $info->getError();
            }
        }
        db("work")->insert($data);
        $this->success('添加成功','index');
    }
    //查看任务
    public function read()
    {
        $time=date('Y-m-d H:i:s');
        $this->assign('time',$time);
        $user_data=Session::get();
        $belong=$user_data["u_belong"];
        //搜索用户
        $u_where_data = [];
        if(input('user_name')){
            $u_where_data['user_name'] = ['like','%'.input('user_name').'%'];
        }    
        //作业列表的用户  
        $user_list=db("user")->where($u_where_data)->select(); 
        $this->assign('user_list',$user_list);          
        //添加条件
        
        //当前用户
        $user=db('user')->where("user_name",$user_data['user_name'])->select();
        $this->assign("user",$user);
        //作业列表
        $work_list  =  db('worklist')->where("belong='$belong'")->order('id desc')->paginate(10);
        $this->assign('work_list',$work_list); 

        return $this->fetch();
    }   
    //ajax接口接收要查询的年月日
    public function look2(){
       $year=input('y')>0?input('y'):date('Y');
        $this->assign('year',$year);
        //如果没有传入月份则获取当前系统月份
        $month=input('m')>0?str_pad(input('m'),2,"0",STR_PAD_LEFT):date('m');
        $this->assign('month',intval($month));
        //获取当前月有多少天
        $days=date('t',strtotime("{$year}-{$month}-1"));
        $this->assign('t_days',$days);
         //获取当前用户信息
        $user_data=Session::get();
        //当前用户
        $user=db('user')->where("user_name",$user_data['user_name'])->select(); 
        $this->assign("user",$user);  
        //所有学生用户
        $user_list=db("user")->where("user_cate","员工")->where("belong",$user_data['u_belong'])->select();
        $this->assign('user_list',$user_list); 
        //添加条件
        $where_data = [];
        if($user_data['user_cate']=='员工'){
            $where_data['u_id']=$user_data['u_id'];
        }else{
            $where_data=[];
        }
        //查询当年当月的数据（临时）
        $t_work_list  = db('work')->field("DATE_FORMAT(time, '%d') d,u_id,reply")
                                ->where($where_data)
                                ->where("DATE_FORMAT(time, '%Y%m') = ".$year.$month)
                                ->select(); 
        $this->assign('t_work_list',json_encode($t_work_list));  
        $work_list = [];
        //改变当天的数据类型
        foreach ($t_work_list as $key => $value) {
            $work_list[intval($value['d'])] = true;
        }
        $this->assign('work_list',json_encode($work_list));   
        return json(['t_days'=>$days,'t_work_list'=>$t_work_list,'work_list'=>$work_list]);
    }       
    //查看提交情况
    public function look(){
    	//如果没有传入年份则获取当前系统年份
     	$year=input('y')>0?input('y'):date('Y');
        $this->assign('year',$year);
    	//如果没有传入月份则获取当前系统月份
    	$month=input('m')>0?str_pad(input('m'),2,"0",STR_PAD_LEFT):date('m');
    	$this->assign('month',intval($month));
    	//获取当前月有多少天
   		$days=date('t',strtotime("{$year}-{$month}-1"));
    	$this->assign('t_days',$days);
         //获取当前用户信息
        $user_data=Session::get();
        //当前用户
        $user=db('user')->where("user_name",$user_data['user_name'])->select(); 
        $this->assign("user",$user);  
        //所有学生用户
        $user_list=db("user")->where("user_cate","员工")->where("belong",$user_data['u_belong'])->select();
        $this->assign('user_list',$user_list); 
        //添加条件
        $where_data = [];
        if($user_data['user_cate']=='员工'){
            $where_data['u_id']=$user_data['u_id'];
        }else{
            $where_data=[];
        }
        //查询当年当月的数据（临时）
        $t_work_list  = db('work')->field("DATE_FORMAT(time, '%d') d,u_id,reply")
                                ->where($where_data)
                                ->where("DATE_FORMAT(time, '%Y%m') = ".$year.$month)
                                ->select();
        $this->assign('t_work_list',json_encode($t_work_list));  
        $work_list = [];
        //改变当天的数据类型
        foreach ($t_work_list as $key => $value) {
            $work_list[intval($value['d'])] = true;
        }
        $this->assign('work_list',json_encode($work_list));   
    	return $this->fetch();
    }
    //批改作业页面
    public function check()
    {
         $id = input('id');
        $check = db('bossworklist')->where("id=$id")->select();
        $this->assign('check',$check);     
         $log_list = db('worklog')->where("rw_id=$id")->select();
         $this->assign('log_list',$log_list); 
        $user_name=Session::get('user_name');
        $user=db('user')->where("user_name",$user_name)->select();
        $this->assign("user",$user);      
        return $this->fetch();
    }       
    //布置作业页面   
	public function arrange()
    {
         $time=date('Y-m-d H:i:s');
        $this->assign("time",$time); 
        
         $userid_list=db("user")->field('id,user_name')->select(); 
          $this->assign('userid_list',$userid_list);  
        
        
         
//      $username_list=db("user")->column('user_name'); 
//       $this->assign('user_name',$user_name);   
        return $this->fetch();
    }  
    //布置作业保存
    public function save2()
    {
       $user_data=Session::get();
        $u_id = $user_data["u_id"];
        $work_name = input('work_name');
        $work_file = input('work_require');
        $urgency = input('urgency');
        $content = input('content');
        $executerid = input('executerid');
        $lasttime = input('lasttime');
         db('bossworklist')->insert([
            'work_name'=>$work_name,
            'work_file'=>$work_file,
            'work_require'=>$content,
            'execute_id'=>$executerid,
            'work_rank'=>$urgency,
            'lasttime'=>strtotime($lasttime),
            'uid'=>$u_id,
            'time'=>time(),
        ]);
        // $uname=explode(',',$executerid);
        // foreach ($uname as $key => $value) {
        //     db('rwbiao')->insert(['u_name'=>$value]);
        // }
        
        $this->success('布置成功','index');
    }  
    public function update()
    {  	
    	$user_data=Session::get();
    	$rw_id = input('id');
    	$uname = $user_data['user_name'];
    	$rw_log = input('log');
         	
	    	db('worklog')->insert([
	            'rw_id'=>$rw_id,
	            'rw_log'=>$rw_log,
	            'uname'=>$uname,           
	            'time'=>date('Y-m-d H:i',time()),
	        ]);     
	         $this->success('操作成功'); 
    	
    	
    }
    public function giveUp()
    {
    	db('bossworklist')
    		->where('id',input('id'))
    		->update(['state' => '3']);
    		
    	
    }
     public function finishWork()
    {
    	db('bossworklist')
    		->where('id',input('id'))
    		->update(['state' => '4']);
    		
    	
    }
    public function xiugai()
    {
        $id = input('id');
        $check = db('worklist')->where("id=$id")->select();
        $this->assign('check',$check);     
   
        $user_name=Session::get('user_name');
        $user=db('user')->where("user_name",$user_name)->select();
        $this->assign("user",$user);      
        return $this->fetch();
    }
    public function updatexiugai()
    {
        $id = input('id');
        $data=input();
        $work=request()->file('work_require');
        if($work){
            $info = $work->move(ROOT_PATH.'/public/uploads');
            if($info){
                $data['work_require'] = $info->getSaveName();
            }else{
                 echo $info->getError();
            }
        }
        $time=date('Y-m-d H:i:s');
        $data["time"]=$time;
        db('worklist')->where("id=$id")->update($data);
        $this->success('操作成功','index');      
    }   
}

