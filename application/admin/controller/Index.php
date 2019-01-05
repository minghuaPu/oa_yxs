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
	   $user_data=Session::get();
       $worksheet=db('worksheet')->where('uid='.$user_data['u_id'])->where('whether=0')->select();
       $this->assign("user_data",$user_data);
       if($user_data['user_cate']=='员工'){
       $Monday=date('Y-m-d', (time() - ((date('w') == 0 ? 7 : date('w')) - 1) * 24 * 3600));//星期一
       $Tuesday=date('Y-m-d', (time() - ((date('w') == 0 ? 7 : date('w')) - 2) * 24 * 3600));//星期二
       $Wednesday=date('Y-m-d', (time() - ((date('w') == 0 ? 7 : date('w')) - 3) * 24 * 3600));//星期三
       $Thursday=date('Y-m-d', (time() - ((date('w') == 0 ? 7 : date('w')) - 4) * 24 * 3600));//星期四
       $Friday=date('Y-m-d', (time() - ((date('w') == 0 ? 7 : date('w')) - 5) * 24 * 3600));//星期五
       $Saturday=date('Y-m-d', (time() - ((date('w') == 0 ? 7 : date('w')) - 6) * 24 * 3600));//星期六
       $ye=date('Y-m-d H:i:s',strtotime('-1week'));
       // var_dump($ye);
       $week=['','','','','',''];
       foreach ($worksheet as $key => $value) {
           if($Monday==date('Y-m-d',$value['time'])||$Monday==date('Y-m-d',$value['state'])){
                $week[0]+=number_format($value['score'],2,'.','');
           }
           if($Tuesday==date('Y-m-d',$value['time'])||$Tuesday==date('Y-m-d',$value['state'])){
                $week[1]+=number_format($value['score'],2,'.','');
           }
           if($Wednesday==date('Y-m-d',$value['time'])||$Wednesday==date('Y-m-d',$value['state'])){
                $week[2]+=number_format($value['score'],2,'.','');
           }
           if($Thursday==date('Y-m-d',$value['time'])||$Thursday==date('Y-m-d',$value['state'])){
                $week[3]+=number_format($value['score'],2,'.','');
           }
           if($Friday==date('Y-m-d',$value['time'])||$Friday==date('Y-m-d',$value['state'])){
                $week[4]+=number_format($value['score'],2,'.','');
           }
           if($Saturday==date('Y-m-d',$value['time'])||$Saturday==date('Y-m-d',$value['state'])){
                $week[5]+=number_format($value['score'],2,'.','');
           }
       }
       $yue=date('Y-m-1',time());
       $current_month=date('m',time());
       $firstday=strtotime($yue);
       $month=['','','',''];
       
       $monday=$firstday-86400*(date('N',$firstday)-1);

       for ($i=1; $i <= 5; $i++) {
            $start = date("Y-m-d",$monday+($i-1)*86400*7);//起始周一
            $end   = date("Y-m-d",$monday+$i*86399*7);//结束周日
            if(date('m',$monday+$i*86399*7)!=$current_month)
            {   
                continue;
            }
            foreach ($worksheet as $key => $value) {
                if(strtotime($start)>=strtotime($yue)){
                    // echo $i.$start.'---'.$end."<br/>";
                    if($start < date('Y-m-d',$value['time'])&& date('Y-m-d',$value['time'])< $end||$start < date('Y-m-d',$value['state'])&& date('Y-m-d',$value['state'])< $end){
                        $month[$i-2]+=number_format($value['score'],2,'.','')/6;
                    }
                }
            }
         
        }
        $this->assign('month',json_encode($month));
        $this->assign('week',json_encode($week));
    }elseif ($user_data['user_cate']=='老板') {
       $users=db('user')->field('id,user_name')->where('user_cate="员工"')->select();
       $worksheet=db('worksheet')->where('whether=0')->select();
       $mainclassify=db('mainclassify')->field('type')->select();
       foreach ($mainclassify as $key => $value) {
           $main[$key]['name']=$value['type'];
           $main[$key]['value']=0;
           $mainclass[]=$value['type'];
       }
       foreach ($users as $key => $value) {
           $users[$key]['zong']=0;
           $users[$key]['liang']=0;
       }
       $user_statistics=[];
       foreach ($worksheet as $key => $value) {
           $lian[date('Y',$value['time'])]=date('Y',$value['time']);
           foreach ($lian as $k => $val) {
               
               if($val==date('Y',$value['time'])){
                $user_statistics[$k]['year']=$val;
                $user_statistics[$k]['hidden']=false;
                $user_statistics[$k]['data']=$users;
                $year[$k][]=$value;
                }
           }
       }
       foreach ($user_statistics as $key => $value) {
           foreach ( $user_statistics[$key]['data'] as $ks => $vl) {
                     foreach ($year[$key] as $e => $v) {
                          if($vl['id']==$v['uid']){
                         $user_statistics[$key]['data'][$ks]['zong']+=$v['score'];
                         $user_statistics[$key]['data'][$ks]['liang']+=$v['quantity'];
                        }
                     }
                    
                    
                 }
       }
       rsort($user_statistics);
       $this->assign('user_statistics',json_encode($user_statistics));
        $this->assign('users',json_encode($users));
        $this->assign('main',json_encode($main));
        $this->assign('mainclass',json_encode($mainclass));
    }
    	return $this->fetch();
    }

    public function usertask(){
        $year=input('year');
        $uid=input('uid');
        $worksheet=db('worksheet')->where("uid=$uid")->where('whether=0')->select();
        $shuliang=[0,0,0,0,0,0,0,0,0,0,0,0];
        $fenshu=[0,0,0,0,0,0,0,0,0,0,0,0];
        $mainclassify=db('mainclassify')->field('type')->select();
       foreach ($mainclassify as $key => $value) {
           $mainshuliang[$key]['name']=$value['type'];
           $mainshuliang[$key]['value']=0;
           $mainfenshu[$key]['name']=$value['type'];
           $mainfenshu[$key]['value']=0;
       }
        foreach ($worksheet as $key => $value) {
             if(date('Y',$value['time'])==$year){
                $a[$key]=json_decode($value['primary'],true);
                 foreach ($mainclassify as $e => $v) {
                    if($a[$key]['type']==$v['type']){
                       $mainshuliang[$e]['value']+=$value['quantity'];
                        $mainfenshu[$e]['value']=$value['score'];
                   }
               }
                foreach ($shuliang as $k => $val) {
                    if(date('m',$value['time'])==$k+1){
                        $shuliang[$k]+=$value['quantity'];
                        $fenshu[$k]+=$value['score'];
                    }
                }
             }
        }
        return json(['shuliang'=>$shuliang,'fenshu'=>$fenshu,'mainfenshu'=>$mainfenshu,'mainshuliang'=>$mainshuliang]);
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
    //粗加工页面
    public function proche_cjg(){
    	$cjg_list  =  db('rough')->where('cas',1)->order('id desc')->paginate(10);
         $this->assign('cjg_list',$cjg_list);
        return $this->fetch();
    }
    //热处理页面
    public function proche_rcl(){
        $rcl_list  =  db('treatment')->where('cas',1)->order('id desc')->paginate(10);
        $this->assign('rcl_list',$rcl_list);
        return $this->fetch();
    }
    //锻造车间页面
    public function proche_dzcj(){
        $dzcj_list  =  db('workshop')->where('cas',1)->order('id desc')->paginate(10);
         $this->assign('dzcj_list',$dzcj_list);
        return $this->fetch();
    }
     //包装检验页面
    public function proche_bzjy(){
        $bzjy_list  =  db('packaging')->where('cas',1)->order('id desc')->paginate(10);
         $this->assign('bzjy_list',$bzjy_list);
        return $this->fetch();
    }
     //精加工页面
    public function proche_jjg(){
        $jjg_list  =  db('machining')->where('cas',1)->order('id desc')->paginate(10);
         $this->assign('jjg_list',$jjg_list);
        return $this->fetch();
    }
     //其他页面
    public function proche_qt(){
        $qt_list  =  db('other')->where('cas',1)->order('id desc')->paginate(10);
         $this->assign('qt_list',$qt_list);
        return $this->fetch();
    }
    //车间检查添加工作
    public function addWork(){
        $proche_type = input('proche_type');
        $time = input('time');
        $name = input('name');
        $team = input('team');
        $title = input('title');
        $size = input('size');
        $describes = input('describes');
        $modify = input('modify');
        $workshop = input('workshop');
        $remarks = input('remarks');
        $status = input('status');
        $work=request()->file('work_require');
        $imgpath = [];
        foreach($work as $value){ 
                if($value){
                    $info = $value->move(ROOT_PATH.'/public/uploads');
                    if($info){
                        $work_file = $info->getSaveName();
                        array_push($imgpath,$work_file);
                    }else{

                         echo $info->getError();
                    }
                }; 
                };
        if($proche_type=='workshop'){
           db($proche_type)->insert([
            'time'=>$time,
            'name'=>$name,
            'team'=>$team,
            'title'=>$title,
            'size'=>$size,
            'describes'=>$describes,
            'modify'=>$modify,
            'workshop'=>$workshop,
            'remarks'=>$remarks,
            'status'=>$status,
            'picture1'=>json_encode($imgpath),
            
        ]);  
       }else{
        db($proche_type)->insert([
            'time'=>$time,
            'name'=>$name,
            'title'=>$title,
            'size'=>$size,
            'describes'=>$describes,
            'modify'=>$modify,
            'workshop'=>$workshop,
            'remarks'=>$remarks,
            'status'=>$status,
            'picture1'=>json_encode($imgpath),
            
        ]); 
       }
         $this->success('添加成功');
        
        
         
       
    }
    //车间检查数据添加到回收站
    public function goRecycle(){
        $proche_type = input('proche_type');
        $id_list = json_decode(input('list'));
        db($proche_type)->where('id','in',$id_list)->setField('cas','0'); 
        
        
        
    }
    //车间检查更改完成状态
    public function changeIsfinsih(){
        $proche_type = input('proche_type');
        $id = input('id');
        $num = input('num');
            if($num==1){
            db($proche_type)->where('id',$id)->setField('status','已完成');
            }else{
            db($proche_type)->where('id',$id)->setField('status','未解决');
            }
    }
    //车间检查获取图片
    public function getPic(){
        $proche_type = input('proche_type');
        $id = input('id');    
        $pic_path=db($proche_type)->where('id',$id)->value('picture1');
        return json_decode($pic_path);
        
    }
    //车间检查获取更改的数据
    public function getWork(){
        $proche_type = input('proche_type');
        $id = input('id');        
        $list=db($proche_type)->where('id',$id)->find();
        return json($list);
        
    }
    
    //车间检查获取异常数据
    public function getAbnormal(){
        $proche_type = input('proche_type');
        $id = input('id');
        $content=db($proche_type)->field('id,why')->where('id',$id)->find();
        return json($content);
       
    }
    
    //车间检查更新异常数据
    public function updateAbnormal(){
        $proche_type = input('proche_type');
        $id = input('id');
        $abnormalMessage = input('abnormalMessage');
        $content=db($proche_type)->where('id',$id)->setField('why',$abnormalMessage);
        $this->success('修改成功');
       
    }
     //车间检查修改数据
    public function updateWork(){
        $proche_type = input('proche_type');
        $id = input('id');        
        $time = input('time');
        $name = input('name');
        $team = input('team');
        $title = input('title');
        $size = input('size');
        $describes = input('describes');
        $modify = input('modify');
        $workshop = input('workshop');
        $remarks = input('remarks');
        $status = input('status');
        $work=request()->file('work_require');
        $imgpath = [];
        if($proche_type=='workshop'){
            if (count($work)==0){
            db($proche_type)->where('id',$id)->update(['time'=>$time,'name'=>$name,'team'=>$team,'title'=>$title,'size'=>$size,'describes'=>$describes,'modify'=>$modify,
            'workshop'=>$workshop,'remarks'=>$remarks,'status'=>$status]); 
            }else{
              foreach($work as $value){ 
                    if($value){
                        $info = $value->move(ROOT_PATH.'/public/uploads');
                        if($info){
                            $work_file = $info->getSaveName();
                            array_push($imgpath,$work_file);
                        }else{
                             echo $info->getError();
                        }
                    }; 
                    }; 
                db($proche_type)->where('id',$id)->update(['time'=>$time,'name'=>$name,'team'=>$team,'title'=>$title,'size'=>$size,'describes'=>$describes,'modify'=>$modify,
                'workshop'=>$workshop,'remarks'=>$remarks,'status'=>$status,'picture1'=>$imgpath]);  
            }  
        }else{
             if (count($work)==0){
            db($proche_type)->where('id',$id)->update(['time'=>$time,'name'=>$name,'title'=>$title,'size'=>$size,'describes'=>$describes,'modify'=>$modify,
            'workshop'=>$workshop,'remarks'=>$remarks,'status'=>$status]); 
            }else{
              foreach($work as $value){ 
                    if($value){
                        $info = $value->move(ROOT_PATH.'/public/uploads');
                        if($info){
                            $work_file = $info->getSaveName();
                            array_push($imgpath,$work_file);
                        }else{
                             echo $info->getError();
                        }
                    }; 
                    }; 
                db($proche_type)->where('id',$id)->update(['time'=>$time,'name'=>$name,'title'=>$title,'size'=>$size,'describes'=>$describes,'modify'=>$modify,
                'workshop'=>$workshop,'remarks'=>$remarks,'status'=>$status,'picture1'=>$imgpath]);  
            }  
        }    
        $this->success('修改成功');  
    }
    //车间检查回收站页面
    public function recycle(){
        $table = input('info');
        if ($table=='rough') {
        $recycle_type = '粗加工';
        $this->assign('recycle_type',$recycle_type);
        }elseif ($table=='treatment') {
        $recycle_type = '热处理';
        $this->assign('recycle_type',$recycle_type);
        }elseif ($table=='workshop') {
        $recycle_type = '锻造车间';
        $this->assign('recycle_type',$recycle_type);
        }elseif ($table=='packaging') {
        $recycle_type = '包装检验';
        $this->assign('recycle_type',$recycle_type);
        }elseif ($table=='machining') {
        $recycle_type = '精加工';
        $this->assign('recycle_type',$recycle_type);
        }elseif ($table=='other') {
        $recycle_type = '其他';
        $this->assign('recycle_type',$recycle_type);
        }
        $recycle_list = db($table)->where('cas',0)->order('id desc')->paginate(10);
        $this->assign('recycle_list',$recycle_list);
        return $this->fetch();
        
    }
     //车间检查回收站恢复删除
    public function recoverDele(){
        $proche_type = input('proche_type');
        $id_list = json_decode(input('list'));
        if ($proche_type=="粗加工") {
          db('rough')->where('id','in',$id_list)->setField('cas','1');
        }elseif ($proche_type=="热处理") {
           db('treatment')->where('id','in',$id_list)->setField('cas','1');
        }elseif ($proche_type=="锻造车间") {
           db('workshop')->where('id','in',$id_list)->setField('cas','1');
        }elseif ($proche_type=="包装检验") {
           db('packaging')->where('id','in',$id_list)->setField('cas','1');
        }elseif ($proche_type=="精加工") {
           db('machining')->where('id','in',$id_list)->setField('cas','1');
        }elseif ($proche_type=="其他") {
           db('other')->where('id','in',$id_list)->setField('cas','1');
        }         
        
    }
    //车间检查回收站彻底删除
    public function allDele(){
        $proche_type = input('proche_type');
        $id_list = json_decode(input('list'));
         if ($proche_type=="粗加工") {
           db('rough')->delete($id_list);
        }elseif ($proche_type=="热处理") {
           db('treatment')->delete($id_list);
        }elseif ($proche_type=="锻造车间") {
           db('workshop')->delete($id_list);
        }elseif ($proche_type=="包装检验") {
           db('treatment')->delete($id_list);
        }elseif ($proche_type=="精加工") {
           db('treatment')->delete($id_list);
        }elseif ($proche_type=="其他") {
           db('treatment')->delete($id_list);
        }        
       
    }
    //车间检查回收站查询图片
    public function recycleGetPic(){
        $proche_type = input('proche_type');
        $id = input('id');
        if ($proche_type=="粗加工") {
          $pic_path=db('rough')->where('id',$id)->value('picture1');
        }elseif ($proche_type=="热处理") {
          $pic_path=db('treatment')->where('id',$id)->value('picture1');
        }elseif ($proche_type=="锻造车间") {
          $pic_path=db('workshop')->where('id',$id)->value('picture1');
        }elseif ($proche_type=="包装检验") {
          $pic_path=db('packaging')->where('id',$id)->value('picture1');
        }elseif ($proche_type=="精加工") {
          $pic_path=db('machining')->where('id',$id)->value('picture1');
        }elseif ($proche_type=="其他") {
          $pic_path=db('other')->where('id',$id)->value('picture1');
        }        
        return json_decode($pic_path);  

    }
    //车间检查导出Excel
    public function  exportDayInner(){
        $proche_type = input('proche_type');
        if ($proche_type=='workshop') {
            $innerdata = db($proche_type)->field('id,time,name,team,title,size,describes,modify,workshop,remarks,why')->select();
            $title = array('id','时间','名称','设备','产品名称','产品尺寸','问题描述','整改情况','对应车间','备注','异常情况');
        }else if($proche_type=='other'){
           $innerdata = db($proche_type)->field('id,time,name,title,size,describes,modify,workshop,remarks,why')->select();
           $title = array('id','时间','类型','产品名称','产品尺寸','问题描述','整改情况','对应车间','备注','异常情况'); 
        }else{
           $innerdata = db($proche_type)->field('id,time,name,title,size,describes,modify,workshop,remarks,why')->select();
           $title = array('id','时间','名称','产品名称','产品尺寸','问题描述','整改情况','对应车间','备注','异常情况'); 
        }
        if ($proche_type=="rough") {
           exportexcel($innerdata,$title,'粗加工');
        }elseif ($proche_type=="treatment") {
          exportexcel($innerdata,$title,'热处理');
        }elseif ($proche_type=="workshop") {
          exportexcel($innerdata,$title,'锻造车间');
        }elseif ($proche_type=="packaging") {
          exportexcel($innerdata,$title,'包装检验');
        }elseif ($proche_type=="machining") {
          exportexcel($innerdata,$title,'精加工');
        }elseif ($proche_type=="other") {
          exportexcel($innerdata,$title,'其他');
        }    
        
 
    }
    //车间检查搜索打印信息
    public function getPrintMessage(){
        $proche_type = input('proche_type');
        $id = input('id');
        $list = db($proche_type)->where('id',$id)->find();
        return $list;
    }
    //车间检查搜索页面
    public function proche_select(){
        $proche_type = input('proche_type');
        $time = input('time');
        $content = input('content');
        $type = input('type');
        $where = ['time'=>$time,'cas'=>1];
        if ($type=='-1') {
            $list=db($proche_type)                                              
                   ->where('time|name|title|workshop|describes|modify','like',"%".$content."%")
                   ->where('cas','=',1) 
                   ->order("id desc")                                        
                   ->paginate(10);
        }else{
            if($type=='time'){
                 $list=db($proche_type)                                                              
                       ->where('time','=',$time)
                       ->where('cas','=',1) 
                       ->order("id desc")                                        
                       ->paginate(10);   
            }else{
                 $list=db($proche_type)                                              
                       ->where($type,'like',"%".$content."%")
                       ->where('cas','=',1) 
                       ->order("id desc")                                        
                       ->paginate(10);
            }  
        }
        
       $this->assign('list',$list);
       $this->assign('proche_type',$proche_type);

        return $this->fetch();
    }


	public function stock(){     //库存的数据
        $inventory=db('inventory')->order("id desc")->select();
        $this->assign('inventory',json_encode($inventory)); 
        return $this->fetch();
    }
    public function inventory(){
        $gangzhong=input('gangzhong');
        $type=input('type');
        $standard=input('standard');
        $number=input('number');
        if(input('select')==0){
          
            $inventory=db('inventory')->where('gangzhong','like',"%".$gangzhong."%")
                                      ->where('type','like',"%".$type."%")
                                      ->where('standard','like',"%".$standard."%")
                                      ->where('number','like',"%".$number."%")
                                      ->order("id desc")
                                      ->select();
                                      return json($inventory);
        }elseif(input('select')==1){
            db('inventory')->insert(['gangzhong'=>$gangzhong,'type'=>$type,'standard'=>$standard,'number'=>$number]);
             $inventory=db('inventory')->order("id desc")->select();
             return json($inventory);
        }elseif(input('select')==2){
            db('inventory')->where("id=".input('id'))->delete();
        }elseif (input('select')==3) {
            $user_data=Session::get();
            $num=db('inventory')->where("id=".input('id'))->value('number');

            $nums=$number-$num;
          
            db('inventory')->where("id=".input('id'))->update(['number'=>input('number')]);
            db('statistical')->insert(['inventory_id'=>input('id'),'number'=>$nums,'uid'=>$user_data['u_id'],'time'=>time()]);
        }elseif (input('select')==4) {
            db('inventory')->where("id=".input('id'))->update(['standard'=>input('standard')]);
        }elseif (input('select')==5) {
            db('inventory')->where("id=".input('id'))->update(['number'=>input('number')]);
        }elseif (input('select')==6) {
            db('inventory')->where("id=".input('id'))->update(['number'=>input('number')]);
        }
        
      
    }
    public function statistical(){
        $statistical=db('statistical')->select();
        $data=[];
        foreach ($statistical as $key => $value) {
            $data[$key]=db('inventory')->field('gangzhong,type,standard')->where('id='.$value['inventory_id'])->find();
            $data[$key]['name']=db('user')->where('id='.$value['uid'])->value('user_name');
            $data[$key]['number']=$value['number'];
            $data[$key]['time']=$value['time'];
        }
        $this->assign('data',$data);
        return $this->fetch();
    }
	public function save(){   //保存库存修改的数据
	     $value =input('keep');
		 $id = input('id');
		 $leibie= input('lb');
		 
		 if($leibie == '形状'){
		 	$leibie="shape";
		 }
		 elseif($leibie == '材质'){
		 	$leibie="material";
		 }
		 elseif($leibie == '直径'){
		 	$leibie="diameter";
		 }
		 elseif($leibie == '长度'){
		 	$leibie="length";
		 }
		 elseif($leibie == '重量'){
		 	$leibie="weight";
		 }
		 elseif($leibie == '数量'){
		 	$leibie="numbers";
		 } ;
		 
		 db('steel')->where("id=$id")->update(["$leibie"=>"$value"]);
		
		 $this->success('修改成功',url('stock'));
	}

}
//车间检查导出Excel方法
function exportexcel($data=array(),$title=array(),$filename='report'){
     ob_end_clean(); 
     ob_start(); 
     header("Content-type:application/octet-stream");
     header("Accept-Ranges:bytes");
     header("Content-type:application/vnd.ms-excel");
     header("Content-Disposition:attachment;filename=".$filename.".xls");
     header("Pragma: no-cache");
     header("Expires: 0");
     //导出xls 开始
     if (!empty($title)){
         foreach ($title as $k => $v) {
             $title[$k]=iconv("UTF-8", "GB2312",$v);
         }
         $title= implode("\t", $title);
         echo "$title\n";
     }
     if (!empty($data)){
         foreach($data as $key=>$val){
             foreach ($val as $ck => $cv) {
                 $data[$key][$ck]=iconv("UTF-8", "GB2312", $cv);
             }
             $data[$key]=implode("\t", $data[$key]);
         }
         echo implode("\n",$data);
     }
 }