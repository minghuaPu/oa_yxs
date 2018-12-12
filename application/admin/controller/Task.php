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
             $con = input('selectinfo');     
             $selectlists=db('bossworklist')                                              
                   ->where("work_name like '%$con%'") 
                   ->order("id desc")                                        
                   ->select();                 
            $this->assign('selectlists',$selectlists);
            $work_list1  =  db('bossworklist')->order('id desc')->select();
            $work_listnu = count($work_list1);
            $work_list  =  db('bossworklist')->order('id desc')->paginate(10);
            $unfinish_list1=db("bossworklist")->where('state=3 or state=4')->select();
            $unfinish_listnu = count($unfinish_list1);
            $unfinish_list=db("bossworklist")->where('state=3 or state=4')->paginate(10);
            $this->assign('work_listnu',$work_listnu);
            $this->assign('unfinish_listnu',$unfinish_listnu);  
            $this->assign('unfinish_list',$unfinish_list);
            $this->assign('work_list',$work_list);
        }
        
             
        
        $main=db('mainclassify')->select();
        $this->assign('main',json_encode($main));
        $fine=db('fineclassify')->select();
        $this->assign('fine',json_encode($fine));
       
        $date=date('Y-m-d');
        $this->assign('date',$date); 
        
        $yuan=db('worksheet')->where("uid=".$user_data['u_id'])->select();
        $yuangong=[];
        foreach ($yuan as $key => $value) {
            if(date('Y-m-d',$value['time'])==$date){
                $value['cate']=1;
               $value['primary']=json_decode($value['primary']);
               $value['secondary']=json_decode($value['secondary']);
                // json_encode($value['primary']);
                // json_encode($value['secondary']);
                $yuangong[]=$value;
            }
        }
         $zongshu=0;
        foreach ($yuangong as $key => $value) {
            if($value['whether']=='0'){
                $zongshu+=floatval($value['score']);
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
                            $value['cate']=0;
                            $yuangong[]=$value;
                    }else{
                        $daibanwork[]=$value;
                    }
               }
            }
            
        }
       
        $this->assign('zongshu',$zongshu);
        $this->assign('bossfenprw',$bossfenprw);
        $this->assign('daibanwork',$daibanwork);
        $this->assign('yuangong',json_encode($yuangong));
    
   
        
        
        
        return $this->fetch();
    } 
    //老板搜索页面
    public function select(){

         $con = input('info');          
         $selectlists=db('bossworklist')                                              
                   ->where("work_name like '%$con%' ") 
                   ->order("id desc")                                        
                   ->paginate(10); 

         $this->assign('selectlists',$selectlists);
          return $this->fetch();
         
    }
    //老板发布任务页面
    public function wfb(){
          $work_list1  =  db('bossworklist')->order('id desc')->select();
          $work_listnu = count($work_list1);
          $unfinish_list1=db("bossworklist")->where('state=3 or state=4')->select();
          $unfinish_listnu = count($unfinish_list1);
          $work_list  =  db('bossworklist')->order('id desc')->paginate(10);
          $this->assign('work_list',$work_list);
          $this->assign('work_listnu',$work_listnu);
          $this->assign('unfinish_listnu',$unfinish_listnu);
        return $this->fetch();
         
    }
    //老板已经完成任务页面
    public function yjs(){
         $work_list1  =  db('bossworklist')->order('id desc')->select();
          $work_listnu = count($work_list1);
          $unfinish_list1=db("bossworklist")->where('state=3 or state=4')->select();
          $unfinish_listnu = count($unfinish_list1);
         $unfinish_list=db("bossworklist")->where('state=3 or state=4')->paginate(10);
          $this->assign('unfinish_list',$unfinish_list);
          $this->assign('work_listnu',$work_listnu);
          $this->assign('unfinish_listnu',$unfinish_listnu);

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
            $data=db('fineclassify')->where('main='.$xuan)->select();
           
            if(input('theme_id')){
                 if($xuan==7){
                    db('worksheet')->where('id='.input('theme_id'))->update(["primary"=>json_encode($up),'score'=>10]);
                }else{
                    db('worksheet')->where('id='.input('theme_id'))->update(["primary"=>json_encode($up),'score'=>null]);
                }
                $list=db('worksheet')->where('id='.input('theme_id'))->find();
                return json(['list'=>$list]);
            }elseif(input("xuan")){
                if($xuan==7){
                    db('worksheet')->insert(["primary"=>json_encode($up),"uid"=>$user_data['u_id'],'time'=>time(),'score'=>10]);
                }else{
                    db('worksheet')->insert(["primary"=>json_encode($up),"uid"=>$user_data['u_id'],'time'=>time(),'score'=>null]);
                }
                
                $list=db('worksheet')->where('uid='.$user_data['u_id'])->order('id desc')->find();
                return json(['list'=>$list]);
            }
            
            
            
        }
        else if($select==2){
            
            
           
                $up['id']=input('xuan.id');
                $up['type']=input('xuan.type');
                $up['main']=input('xuan.main');
                    
                $up['grade']=input('xuan.grade');
                $liang=db('worksheet')->where('id='.input('theme_id'))->value('quantity');

                if(in_array($up['id'],['1','2','6','7','8',])){
                $bb=$liang*$up['grade'];

                db("worksheet")->where('id='.input('theme_id'))->update(["secondary"=>json_encode($up),"score"=>$bb]);
                
                }else{
                    db('worksheet')->where('id='.input('theme_id'))->update(["secondary"=>json_encode($up),'score'=>$up['grade']]);
                }
                
                  $data=db('worksheet')->where('id='.input('theme_id'))->value('score');
                return json($data);
            
            
            
                     
        }
        else if($select==3){
            if(input('liang')&&input('theme_id')){
            $liang=input('liang');
            $num=db("worksheet")->where('id='.input('theme_id'))->value('score');

            $dangge=db("worksheet")->where('id='.input('theme_id'))->value('secondary');
            $ii=json_decode($dangge,true);
            if(in_array($ii['id'],['1','2','6','7','8'])){
                $bb=$liang*$ii['grade'];
                db("worksheet")->where('id='.input('theme_id'))->update(["quantity"=>input('liang'),"score"=>$bb]);
            }else{
                db("worksheet")->where('id='.input('theme_id'))->update(["quantity"=>input('liang')]);
            }
            
            $data=db('worksheet')->where('id='.input('theme_id'))->value('score');
            return json($data);
            }
            
        } 
        else if($select==4){
            if(input('theme_id')){
                db("worksheet")->where('id='.input('theme_id'))->update(["job"=>input('job')]);
               
                return json(false);

            }elseif(input('job')){
                db('worksheet')->insert(["job"=>input('job'),"uid"=>$user_data['u_id'],'time'=>time()]);
                $list=db('worksheet')->where('uid='.$user_data['u_id'])->order('id desc')->find();
                return json($list);
            }else{

                return json(false);
                
            }
            
        }
        else if($select==5){
             
              if(input('theme_id')){
                db("worksheet")->where('id='.input('theme_id'))->update(["whether"=>input('whether')]);
            }
               $yuan=db('worksheet')->where("uid=".$user_data['u_id'])->select();
                foreach ($yuan as $key => $value) {
                    if(date('Y-m-d',$value['time'])==date('Y-m-d')){
                        $yuangong[]=$value;
                    }
                }
                $zongshu=0;
                foreach ($yuangong as $key => $value) {
                    if($value['whether']=='0'){
                        $zongshu+=floatval($value['score']);
                    }
                }
                   return $zongshu ;
                
        }
        else if($select==6){
             
              if(input('theme_id')){
                db("worksheet")->where('id='.input('theme_id'))->update(["reasons"=>input('reasons')]);
                return json(false);
            }elseif(input('reasons')){
                db('worksheet')->insert(["reasons"=>input('reasons'),"uid"=>$user_data['u_id'],'time'=>time()]);
                $list=db('worksheet')->where('uid='.$user_data['u_id'])->order('id desc')->find();
                return json($list);
            }else{
                return json(false);
            }
            
        }
        else if($select==7){
            
             if(input('theme_id')){
                db("worksheet")->where('id='.input('theme_id'))->update(["remark"=>input('remark')]);
                return json(false);
            }elseif(input('remark')){
                db('worksheet')->insert(["remark"=>input('remark'),"uid"=>$user_data['u_id'],'time'=>time()]);
                $list=db('worksheet')->where('uid='.$user_data['u_id'])->order('id desc')->find();
                return json($list);
            }else{
                return json(false);
            }
        }
        else if($select==8){
           
           $data=db('worksheet')->where('uid='.$user_data['u_id'])->select();
           $list=[];
           foreach ($data as $key => $value) {
              if(date("Y-m-d",$value['time'])==input('selectDate')){
                $list[]=$value;
              }
           }
           return json($list);
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
        $firstlist = db('mainclassify')
                       ->select();
        $this->assign('firstlist',$firstlist);  
         $time=date('Y-m-d H:i:s');
        $this->assign("time",$time); 
        
         $userid_list=db("user")->field('id,user_name')->select(); 
          $this->assign('userid_list',$userid_list);  
        
        
         
 
        return $this->fetch();
    } 
    //布置任务任务分类
    public function selectClassify(){
        $firstclassify = input('orderTypeName');
        // $first = db('mainclassify')->where('type',$firstclassify)->value('id');
        $senconlist = db('fineclassify')->where('main',$firstclassify)->select();
        return json($senconlist);
    } 
    //布置作业保存
    public function save2()
    {
       $user_data=Session::get();
        $u_id = $user_data["u_id"];
        $work_name = input('work_name');
        $urgency = input('urgency');
        $firstlist = input('firstlist');
        $secondlist = input('secondlist');
        $content = input('content');
        $work_file = '';
        $executerid = input('executerid');
        $lasttime = input('lasttime');
        $db_firstlist = db('mainclassify')->where('id',$firstlist)->find();
        $a = json_encode($db_firstlist);
        $db_senconlist = db('fineclassify')->where('id',$secondlist)->find();
        $b = json_encode($db_senconlist);
        $work=request()->file('work_require');
        if($work){
            $info = $work->move(ROOT_PATH.'/public/uploads');
            if($info){
                $work_file = $info->getSaveName();
            }else{

                 echo $info->getError();
            }
        }
         db('bossworklist')->insert([
            'work_name'=>$work_name,
            'work_file'=>$work_file,
            'work_require'=>$content,
            'primary'=>$a,
            'secondary'=>$b,
            'execute_id'=>$executerid,
            'work_rank'=>$urgency,
            'lasttime'=>strtotime($lasttime),
            'uid'=>$u_id,
            'time'=>time(),
        ]);
        
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

