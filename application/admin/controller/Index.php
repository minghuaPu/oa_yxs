<?php
namespace app\admin\controller;
use \think\Session;
class Index extends \app\admin\Auth
{
    public function index()
    {
        $User=Session::get();
        $users=db('user')->where('id='.$User['u_id'])->find();
        $this->assign('users',json_encode($users));
        $worksheet=db('worksheet')->where("uid",$User['u_id'])->where('whether=0')->select();
        
         $yue=date('Y-m-1',time());
       $current_month=date('m',time());
       $firstday=strtotime($yue);
        $monday=$firstday-86400*(date('N',$firstday)-1);

       for ($i=1; $i <= 5; $i++) {
            $start = date("Y-m-d",$monday+($i-1)*86400*7);//起始周一
            $end   = date("Y-m-d",$monday+$i*86399*7);//结束周日
           
            if(date('m',$monday+$i*86399*7)!=$current_month)
            {   
                continue;
            }
            $zhouci[]='第'.$i.'周';
            $shuliang[]='';
            $zongfen[]='';
            foreach ($worksheet as $key => $value) {
                if(strtotime($start)>=strtotime($yue)){
                    
                    if($start <= date('Y-m-d',$value['time'])&& date('Y-m-d',$value['time'])<= $end||$start <= date('Y-m-d',$value['state'])&& date('Y-m-d',$value['state'])<= $end){
                        $shuliang[$i-1]+=number_format($value['quantity'],2);
                        $zongfen[$i-1]+=number_format($value['score'],2);
                    }
                }
            }
         
        }
        $user_list=db('user')->where('user_cate='."'员工'")->select();
        $date=date('Y-m-d',time());
         $data=db('clock')->where('uid',$User['u_id'])->where('time',$date)->find();
        if(!$data){
            
            foreach ($user_list as $key => $value) {
                db('clock')->insert(['uid'=>$value['id'],'time'=>$date]);
              
            }
            
        }
         $this->assign('data',json_encode($data));
        $this->assign('shuliang',json_encode($shuliang));
        $this->assign('zongfen',json_encode($zongfen));
        $this->assign('zhouci',json_encode($zhouci));
        return $this->fetch();
    }
    public function update(){
        $imgs = request()->file('file');
        $data='';
         if($imgs){
            $info = $imgs->move(ROOT_PATH.'/public/uploads');
            if($info){
                $data = $info->getSaveName();
            }else{
                 echo $info->getError();
            }
        }
        return json($data);
    }
    public function Changepicture(){
        $user=Session::get();

        db('user')->where('id='.$user['u_id'])->update(['imageUrl'=>input('imgs')]);
        $realpassword=db('user')->where('id='.$user['u_id'])->find();
        Session::set('imageUrl',$realpassword["imageUrl"]);
    }
    public function clock(){
        $user=Session::get();
        $date=date('Y-m-d',time());
        $forenoonshang=strtotime($date.' 08:30:00');
        $forenoonxia=strtotime($date.' 12:30:00');

        $afternoonshang=strtotime($date.' 14:30:00');
        $afternoonxia=strtotime($date.' 19:00:00');
        $data=db('clock')->where('uid',$user['u_id'])->where('time',$date)->find();
        if(!$data){
            db('clock')->insert(['uid'=>$user['u_id'],'time'=>$date]);
        }

        if($forenoonshang<time()&&$forenoonxia>time()){
            // 上午上班
            db('clock')->where('uid',$user['u_id'])->where('time',$date)->update(['forenoon_shang'=>time()]);
        }elseif($forenoonxia<time()&&$afternoonshang>time()){
            // 上午下班
            db('clock')->where('uid',$user['u_id'])->where('time',$date)->update(['forenoon_xia'=>time()]);
        }elseif($afternoonshang<time()&&$afternoonxia>time()){
            // 下午上班
            db('clock')->where('uid',$user['u_id'])->where('time',$date)->update(['afternoon_shang'=>time()]);
        }elseif($afternoonxia>time()){
            // 下午下班
            db('clock')->where('uid',$user['u_id'])->where('time',$date)->update(['afternoon_xia'=>time()]);
        }
        $this->success('打卡成功','index');
    }
    public function red(){
        $user=Session::get();
        if($user['user_cate']=='老板'){
            $data=db('Daysoff')->where('state=0')->count();
            return json($data);
        }else{
            $data=db('Daysoff')->where('uid='.$user['u_id'])->where('red=1')->count();
            return json($data);
        }
    }
    public function prompt(){
        $user=Session::get();
        if($user['user_cate']=='老板'){
                $data=db('worksheet')->field('u.user_name,w.zhoujihua,w.prompt')
                                     ->alias('w')->join('crm_user u','w.uid=u.id')
                                     ->where('prompt<>1')->select();
                db('worksheet')->where('prompt<>1')->update(['prompt'=>1]);
        }else{
            $data=db('worksheet')->field('u.user_name')->alias('w')->join('crm_user u','w.boss_id=u.id')
                 ->where("uid=".$user['u_id'])
                 ->where('boss_prompt=0')
                 ->select();
            db('worksheet')->where("uid=".$user['u_id'])->where('boss_prompt=0')->update(['boss_prompt'=>1]);
        }
        
        return json($data);
    }
    public function right(){
        $user=Session::get();
        
        $week=0;
        $month=0;
        $year=0;
        $first=1;
        $sdefaultDate=date('Y-m-d');
        $w=date('w',strtotime($sdefaultDate));
        $week_start=date('Y-m-d',strtotime("$sdefaultDate -".($w ? $w - $first : 6).' days'));
        $week_end=date('Y-m-d',strtotime("$week_start +6 days"));
        $user_list=db('user')->where("user_cate='员工'")->select();
        $integral=db('integral')->select();
        $year=[];
        $month=[];
        $week=[];
        foreach ($user_list as $k => $val){
              $year[$k]['uid']=$val['id'];
              $month[$k]['uid']=$val['id'];
              $week[$k]['uid']=$val['id'];

              $year[$k]['integral']=0;
              $month[$k]['integral']=0;
              $week[$k]['integral']=0;

              $worksheet=db('worksheet')->where('uid='.$val['id'])->where('whether=0')->select();
            foreach ($worksheet as $key => $value) {
                
              if(date("Y",$value['time'])==date('Y',time())){
                 $year[$k]['integral']+=$value['score'];
              }
              if(date("Y-m",$value['time'])==date('Y-m',time())){
                $month[$k]['integral']+=$value['score'];
              }
              if($week_start<=date("Y-m-d",$value['time']) && $week_end>=date("Y-m-d",$value['time'])){
                $week[$k]['integral']+=$value['score'];
              }
            }

            $Attendance=db('attendance')->where('uid='.$val['id'])->select();
            foreach ($Attendance as $key => $value) {
                $minute=ceil($value['minute']/60);
                if($value['Attendance_status']=='迟到'||$value['Attendance_status']=='早退'){
                    if(date("Y",$value['time'])==date('Y',time())){
                        if($minute>2){
                            $minute=40;
                            $year[$k]['integral']=$year[$k]['integral']-$minute;
                        }else{
                            $minute=$minute*10;
                            $year[$k]['integral']=$year[$k]['integral']-$minute;
                        }
                    }
                    if(date("Y-m",$value['time'])==date('Y-m',time())){
                        if($minute>2){
                            $minute=40;
                            $month[$k]['integral']=$month[$k]['integral']-$minute;
                        }else{
                            $minute=$minute*10;
                            $month[$k]['integral']=$month[$k]['integral']-$minute;
                        }
                      }
                    if($week_start<=date("Y-m-d",$value['time']) && $week_end>=date("Y-m-d",$value['time'])){
                        if($minute>2){
                            $minute=40;
                            $week[$k]['integral']=$week[$k]['integral']-$minute;
                        }else{
                            $minute=$minute*10;
                            $week[$k]['integral']=$week[$k]['integral']-$minute;
                        }
                      }
                }
                if($value['Attendance_status']=='旷工'){
                        if(date("Y",$value['time'])==date('Y',time())){
                                $year[$k]['integral']=$year[$k]['integral']-80;
                        }
                        if(date("Y-m",$value['time'])==date('Y-m',time())){
                                $month[$k]['integral']=$month[$k]['integral']-80;
                        }
                        if($week_start<=date("Y-m-d",$value['time']) && $week_end>=date("Y-m-d",$value['time'])){
                                $week[$k]['integral']=$week[$k]['integral']-80;
                        }
                }
            }
             $daysoff=db('daysoff')->where('uid='.$val['id'])->select();
            foreach ($daysoff as $key => $value) {
                $tian=($value['end_time']-$value['start_time'])/86400+1;
                  if($value['type']=='请假'&&$value['state']=='1'){
                      if(date("Y",$value['start_time'])==date('Y',time())){
                                $year[$k]['integral']=$year[$k]['integral']-$tian*80;
                        }
                        if(date("Y-m",$value['start_time'])==date('Y-m',time())){
                                $month[$k]['integral']=$month[$k]['integral']-$tian*80;
                        }
                        if($week_start<=date("Y-m-d",$value['start_time']) && $week_end>=date("Y-m-d",$value['start_time'])){
                                $week[$k]['integral']=$week[$k]['integral']-$tian*80;
                        }
                    }
                    if($value['type']=='调休'&&$value['state']=='1'){
                      if(date("Y",$value['start_time'])==date('Y',time())){
                                $year[$k]['integral']=$year[$k]['integral']-$tian*40;
                        }
                        if(date("Y-m",$value['start_time'])==date('Y-m',time())){
                                $month[$k]['integral']=$month[$k]['integral']-$tian*40;
                        }
                        if($week_start<=date("Y-m-d",$value['start_time']) && $week_end>=date("Y-m-d",$value['start_time'])){
                                $week[$k]['integral']=$week[$k]['integral']-$tian*40;
                        }
                    }
                    if($value['type']=='加班'&&$value['state']=='1'){
                         $overtime=ceil(($value['end_time']-$value['start_time'])/3600);
                        if(date("Y",$value['start_time'])==date('Y',time())){
                                $year[$k]['integral']=$year[$k]['integral']+$overtime*10*1.3;
                        }
                        if(date("Y-m",$value['start_time'])==date('Y-m',time())){
                                $month[$k]['integral']=$month[$k]['integral']+$overtime*10*1.3;
                        }
                        if($week_start<=date("Y-m-d",$value['start_time']) && $week_end>=date("Y-m-d",$value['start_time'])){
                                $week[$k]['integral']=$week[$k]['integral']+$overtime*10*1.3;
                        }
                    }
            }


      
    }
   //     $ll=db('integral')->where('time',$week_start)->select();
   //      foreach ($week as $key => $value) {
   //          if($ll){
   //              db('integral')->where(['uid'=>$value['uid'],'time'=>$week_start])->update(['integral'=>$value['integral']]);
   //          }else{
   //              db('integral')->insert(['uid'=>$value['uid'],'time'=>$week_start,'integral'=>$value['integral']]);
   //          }
   //      }
          
   //  $integral_list=db('integral')->select();
   //  foreach ($integral_list as $key => $value) {
   //     $aa[$key]=strtotime($value['time']);
   //    if($aa[$key]=strtotime($value['time'])){
   //       $scores_a[date('m',strtotime($value['time']))][$key][date('W',strtotime($value['time']))]['integral']=$value['integral'];
   //       $scores_a[date('m',strtotime($value['time']))][$key][date('W',strtotime($value['time']))]['uid']=$value['uid'];
   //    }
   //  }
   //  $week_best =[];
   //  $yue_best =[];
   //  $week4=[];
   //  $yue12=[];
   //  foreach ($scores_a as $key => $value) {
   //     foreach ($value as $k => $val) {
   //       foreach ($val as $y => $v) {
   //        $week_best[$y]['integral']=1;
   //         $week_best[$y]['uid'] =1;
   //         $week4[$key][$v['uid']]=0;
   //       }
   //     }
   //  }
   // foreach ($scores_a as $key => $value) {
   //     foreach ($value as $k => $val) {
   //       foreach ($val as $y => $v) {
   //            if($week_best[$y]['integral']<$v['integral']){
   //              $week_best[$y]['integral'] = $v['integral'];
   //                $week_best[$y]['uid'] = $v['uid'];
   //           }

   //       }
   //     }
   //  }
   //   foreach ($scores_a as $key => $value) {
   //     foreach ($value as $k => $val) {
   //       foreach ($val as $y => $v) {
   //            if($week_best[$y]['integral']==$v['integral']){
   //             $scores_a[$key][$k][$y]['integral']=$v['integral']+50;
   //           }
              
   //       }
   //     }
   //  }
   //  foreach ($scores_a as $key => $value) {
   //     foreach ($value as $k => $val) {
   //       foreach ($val as $y => $v) {
   //           $yue_best[$key][$v['uid']][]=$v;
             
   //       }
   //     }
   //  }
   //  foreach ($yue_best as $key => $value) {
       
   //      foreach ($value as $k => $val) {
   //          foreach ($val as $y => $v) {
   //              $week4[$key][$v['uid']]+=$v['integral'];
   //              $yue12[$key]['uid']=0;
   //              $yue12[$key]['integral']=0;
   //          }
                
   //      }
   //  }
    
 
   // return json($week_best);
    foreach ($year as $key => $value) {
        
        $weeks[$key]  = $week[$key]['integral'];
        $months[$key]  = $month[$key]['integral'];
        $years[$key]  = $year[$key]['integral'];
    }
    array_multisort($weeks,SORT_DESC , $weeks, SORT_ASC, $week);
    array_multisort($months,SORT_DESC , $months, SORT_ASC, $month);
    array_multisort($years,SORT_DESC , $years, SORT_ASC, $year);
    $week[0]['integral']+=50;
    $month[0]['integral']+=400;
    $year[0]['integral']+=800;
    foreach ($week as $key => $value) {
        if($user['u_id']==$week[$key]['uid']){
            $weekfenshu=$week[$key]['integral'];
        }
        if($user['u_id']==$month[$key]['uid']){
            $monthfenshu=$month[$key]['integral'];
        }
         if($user['u_id']==$year[$key]['uid']){
            $yearfenshu=$year[$key]['integral'];
        }
    }



    // $age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
    // return json($age);
        return json(['year'=>$yearfenshu,'month'=>$monthfenshu,'week'=>$weekfenshu]);
    }
    // 考勤提交
    public function Attendance(){
        $Attendance=input();
        $user=Session::get();
         $sdefaultDate = date("Y-m-d",$Attendance['time']);
            $forenoonshang=strtotime($sdefaultDate.' 08:30:00');
            $forenoonxia=strtotime($sdefaultDate.' 12:30:00');

            $afternoonshang=strtotime($sdefaultDate.' 14:30:00');
            $afternoonxia=strtotime($sdefaultDate.' 19:00:00');
          
            if($Attendance['classes']==0){
                 if($Attendance['Attendance_status']=='早退'){
                    $Attendance['minute']=ceil(($forenoonxia-$Attendance['time'])/60);
                } 
                if($Attendance['Attendance_status']=='迟到'){
                  $Attendance['minute']=ceil(($Attendance['time']-$forenoonshang)/60);
                }
                 if($Attendance['Attendance_status']=='旷工'){
                  $Attendance['minute']='旷工';
                }
            }
             elseif($Attendance['classes']==1){
                 if($Attendance['Attendance_status']=='早退'){
                    $Attendance['minute']=ceil(($afternoonxia-$Attendance['time'])/60);
                } 
                if($Attendance['Attendance_status']=='迟到'){
                  $Attendance['minute']=ceil(($Attendance['time']-$afternoonshang)/60);
                }
                 if($Attendance['Attendance_status']=='旷工'){
                  $Attendance['minute']='旷工';
                }
            }else{
                 if($Attendance['Attendance_status']=='旷工'){
                  $Attendance['minute']='旷工';
                }
            }
        db('Attendance')->insert([
                                    'uid'=>$user['u_id'],
                                    'user_name'=>$user['user_name'],
                                    'Attendance_status'=>$Attendance['Attendance_status'],
                                    'classes'=>$Attendance['classes'],
                                    'time'=>$Attendance['time'],
                                    'reason'=>$Attendance['reason'],
                                    'minute'=>$Attendance['minute']
                                ]);
        
    }
    public function AttendanceDel(){
        $id=input('id');
        db('Attendance')->where('id='.$id)->delete();
        $this->success('删除成功','lookAttendance');

    }
    public function lookattendance(){
        $Attendance=db('Attendance')->order('id desc')->select();
        $clock=db('clock')->field('u.user_name,c.forenoon_shang,c.forenoon_xia,c.afternoon_shang,c.afternoon_xia,c.time')->alias('c')->join('crm_user u','u.id=c.uid')->order('c.id')->select();
        foreach ($Attendance as $key => $value) {
            // $sdefaultDate = date("Y-m-d",$value['time']);
            // $forenoonshang=strtotime($sdefaultDate.' 08:30:00');
            // $forenoonxia=strtotime($sdefaultDate.' 12:30:00');

            // $afternoonshang=strtotime($sdefaultDate.' 14:30:00');
            // $afternoonxia=strtotime($sdefaultDate.' 7:00:00');
            // $Attendance[$key]['minute']='';
            $Attendance[$key]['time']=date("Y-m-d",$value['time']);
            // if($value['classes']==0){
            //      if($value['Attendance_status']=='早退'){
            //         $Attendance[$key]['minute']=ceil(($forenoonxia-$value['time'])/60);
            //     } 
            //     if($value['Attendance_status']=='迟到'){
            //       $Attendance[$key]['minute']=ceil(($value['time']-$forenoonshang)/60);
            //     }
            //      if($value['Attendance_status']=='旷工'){
            //       $Attendance[$key]['minute']='旷工';
            //     }
            // }
            //  elseif($value['classes']==1){
            //      if($value['Attendance_status']=='早退'){
            //         $Attendance[$key]['minute']=ceil(($afternoonxia-$value['time'])/60);
            //     } 
            //     if($value['Attendance_status']=='迟到'){
            //       $Attendance[$key]['minute']=ceil(($value['time']-$afternoonshang)/60);
            //     }
            //      if($value['Attendance_status']=='旷工'){
            //       $Attendance[$key]['minute']='旷工';
            //     }
            // }else{
            //      if($value['Attendance_status']=='旷工'){
            //       $Attendance[$key]['minute']='旷工';
            //     }
            // }
        }
        $this->assign('clock',$clock);
        $this->assign('Attendance',$Attendance);
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
            $month[]=0;
            $zhouci[]='第'.$i.'周';
            foreach ($worksheet as $key => $value) {
                if(strtotime($start)>=strtotime($yue)){
                    // echo $i.$start.'---'.$end."<br/>";
                    if($start <= date('Y-m-d',$value['time'])&& date('Y-m-d',$value['time'])<= $end||$start <= date('Y-m-d',$value['state'])&& date('Y-m-d',$value['state'])<= $end){
                        $month[$i-1]+=number_format($value['score'],2,'.','');
                    }
                }
            }
         
        }
        $this->assign('zhouci',json_encode($zhouci));
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
    //投票页面
    public function toupiao(){
        $User=Session::get();
        $uid = $User['u_id'];
        $this->assign('User',$User);
        $bumenlist = db('bumen')->select();
        $this->assign('bumenlist',$bumenlist);
        $toupiao = db('toupiao')->order('id desc')->select();
        $toupiaolist = [];
        foreach ($toupiao as $key => $v1) {
            foreach (json_decode($v1['participant']) as $key => $v2) {
                if ($v2==$uid) {
                array_push($toupiaolist, $v1);
            }
            }
        }
        $this->assign('toupiaolist',$toupiaolist);
        return $this->fetch();
    }
    //新建投票
    public function addtoupiao(){
       $bumen = input('executerid');
       $oplist = json_decode(input('oplist'));
       $biaoti = input('biaoti');
       $optionsRadios = input('optionsRadios');
       $time = strtotime(input('time'));
       $bumenlist = explode(",",$bumen);
       $participant = [1];
       $optio = [];
       foreach ($oplist as $key => $value) {
           $optio[input($value)]=0;
       };
       
       foreach ($bumenlist as $key => $value) {
           $list =db('user')->field('id')->where('bumen',$value)->select();
           foreach ($list as $key => $value) {
                array_push($participant, $value['id']);   
           }
       };
       if ($optionsRadios=='单选') {
           $optionsRadios = 1;
       }else{
        $optionsRadios = 2;
       };
       $s = db('toupiao')->select();
       db('toupiao')->insert([
            'content'=>$biaoti,
            'multiple'=>$optionsRadios,
            'lasttime'=>$time,
            'option'=>json_encode($optio),
            'participant'=>json_encode($participant),   
        ]);
        $this->success('新建投票成功'); 
    }
    //保存投票数据
    public function saveToupiao(){
        $User=Session::get();
        $uid = $User['u_id'];
        $isdan = input('isdan');
        $id = input('id');
        if ($isdan==1) {
            $resultdan = input('optionsRadios');
            $a = db('toupiao')->field('option')->where('id',$id)->find();
            $b = json_decode($a['option'],true);
            $b[$resultdan]=$b[$resultdan]+1;
            // var_dump($b);
            $c = db('toupiao')->field('yitoupiao')->where('id',$id)->find();
            $d = $c['yitoupiao'];
            if($d==''){
                $d=$uid;
            }else{
                $d=$d .','.$uid;
            }
            db('toupiao')->where('id',$id)->update(['option'=>json_encode($b),'yitoupiao'=>$d]);
            
        }else{
             $resultduo = $_POST['ops'];
             $a = db('toupiao')->field('option')->where('id',$id)->find();
             $b = json_decode($a['option'],true);
             foreach ($resultduo as $key => $value) {
                 $b[$value]=$b[$value]+1;
             }
             $c = db('toupiao')->field('yitoupiao')->where('id',$id)->find();
            $d = $c['yitoupiao'];
            if($d==''){
                $d=$uid;
            }else{
                $d=$d .','.$uid;
            }
            db('toupiao')->where('id',$id)->update(['option'=>json_encode($b),'yitoupiao'=>$d]);
        }
        $this->success('投票成功');
    }
    //得到投票信息
    public function getToupiao(){
        $id = input('id');
        $list=db('toupiao')->where('id',$id)->find();
        foreach ($list as $key => $value) {
            if ($key=='option') {
                $list['option'] = json_decode($list['option']);
            }
        }
        return json($list);
    }
    //得到投票信息
    public function getDetail(){
        $id = input('id');
        $list=db('toupiao')->where('id',$id)->find();
        foreach ($list as $key => $value) {
            if ($key=='option') {
                $list['option'] = json_decode($list['option']);
            }
        }
        return json($list);
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
    //上传图片
    public function uploadPic(){
        $work=request()->file('pic');
        // var_dump($_FILES['sss']);
        // print_r($work);
        // var_dump($work);

        foreach($work as $value){ 
                if($value){
                    $info = $value->move(ROOT_PATH.'/public/uploads');
                    if($info){
                        $work_file = $info->getSaveName();
                    }else{

                         echo $info->getError();
                    }
                }; 
                };
        return json($work_file);
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
        $imgpath = json_decode(input('img_path'));
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
        $imgpath = input('img_path');
        if($proche_type=='workshop'){
            if (count($imgpath)==0){
            db($proche_type)->where('id',$id)->update(['time'=>$time,'name'=>$name,'team'=>$team,'title'=>$title,'size'=>$size,'describes'=>$describes,'modify'=>$modify,
            'workshop'=>$workshop,'remarks'=>$remarks,'status'=>$status]); 
            }else{
                db($proche_type)->where('id',$id)->update(['time'=>$time,'name'=>$name,'team'=>$team,'title'=>$title,'size'=>$size,'describes'=>$describes,'modify'=>$modify,
                'workshop'=>$workshop,'remarks'=>$remarks,'status'=>$status,'picture1'=>$imgpath]);  
            }  
        }else{
             if (count($imgpath) ==0){
            db($proche_type)->where('id',$id)->update(['time'=>$time,'name'=>$name,'title'=>$title,'size'=>$size,'describes'=>$describes,'modify'=>$modify,
            'workshop'=>$workshop,'remarks'=>$remarks,'status'=>$status]); 
            }else{
                
              // foreach($work as $value){ 
              //       if($value){
              //           $info = $value->move(ROOT_PATH.'/public/uploads');
              //           if($info){
              //               $work_file = $info->getSaveName();
              //               array_push($imgpath,$work_file);
              //           }else{
              //                echo $info->getError();
              //           }
              //       }; 
              //       }; 
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