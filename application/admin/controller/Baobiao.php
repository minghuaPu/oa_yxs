<?php
namespace app\admin\controller;
use \think\Session;
class Baobiao extends \app\admin\Auth
{
  // 考勤开始
   protected  $num_a = ['cd_num'=>0,'zt_num'=>0,'qj_num'=>0,'kg_num'=>0,'jb_num'=>0]; 
    public function list_by_year()
    {
      $time =str_replace(["年","月","日"],["-","-",""],input("time"));
      $User=Session::get();
  

      $s_list =  db("clock")->where('uid='.$User['u_id']." and time='".$time."'")->find();
      return json($s_list);
    }

    public function add_tixing()
    {
      $User=Session::get();

      $s_list =  db("tixing")->insert([
        'tx_time'=>input("tx_time"),
        'tx_title'=>input("tx_title"),
        'uid'=>$User['u_id'],
        ]);
      
    }
    public function get_tixing()
    {
      $User=Session::get();

      $s_list =  db("tixing")->where([
        'tx_time'=>input("tx_time"),
        'uid'=>$User['u_id'],
        ])->select();
        return json($s_list);
      
    }

    public function kaoqing()
    {
     
      $User=Session::get();
      
      $my_uid = $User['u_id'];
      if($User['user_cate']=='老板'){
        $User['u_id'] =  db("user")->where("company_name = ".$User['u_company']." and id !=".$my_uid)->value("id");
      }
    // 
    // $this->assign('year_a',json_encode($this->setYearData($User)) );
    // 
      
      $user_a = [];
      if($User['user_cate']=='老板'){
        $user_a =  db("user")->where("company_name = ".$User['u_company']." and id !=".$my_uid)->select();
      }
      $this->assign('user_a',json_encode($user_a) );
      $this->assign('user_id',  $User['u_id']);
      return $this->fetch();
    }

    public function setYearData($User)
    {
      $year = date("Y",time());
      $year_a = ['cd_num'=>0,'zt_num'=>0,'qj_num'=>0,'kg_num'=>0,'jb_num'=>0];  
      $year_a['cd_num'] += db("clock")->where("forenoon_shang like '%迟到%'")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();
      $year_a['cd_num'] += db("clock")->where("forenoon_xia like '%迟到%' ")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();
      $year_a['cd_num'] += db("clock")->where("afternoon_shang like '%迟到%' ")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();
      $year_a['cd_num'] += db("clock")->where(" afternoon_xia like '%迟到%'")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();

      $year_a['zt_num'] += db("clock")->where("forenoon_shang like '%早退%'")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();
      $year_a['zt_num'] += db("clock")->where("forenoon_xia like '%早退%' ")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();
      $year_a['zt_num'] += db("clock")->where("afternoon_shang like '%早退%' ")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();
      $year_a['zt_num'] += db("clock")->where(" afternoon_xia like '%早退%'")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();

      // 年请假
      $qj_list = db("clock")->query("select * from crm_qingjia where FROM_UNIXTIME(start_time,'%Y') =  $year");
      foreach ($qj_list  as   $qj_value) {
        $year_a['qj_num']+=round(($qj_value['end_time'] - $qj_value['start_time'])/86400);
          // 是不是小于开始的时候，以及大于结束的时候
 
          if ($qj_value['start_jd'] == '下午') {
            $year_a['qj_num'] -=0.5;
          
          }
          if ( $qj_value['end_jd'] == '上午') {
            $year_a['qj_num'] -=0.5;
          
          }

      }

      // $year_a['qj_num'] += db("clock")->where("forenoon_shang like '%请假%'")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();
      // $year_a['qj_num'] += db("clock")->where("forenoon_xia like '%请假%' ")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();
      // $year_a['qj_num'] += db("clock")->where("afternoon_shang like '%请假%' ")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();
      // $year_a['qj_num'] += db("clock")->where(" afternoon_xia like '%请假%'")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();

      $year_a['kg_num'] += db("clock")->where("forenoon_shang like '%旷工%'")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();
      $year_a['kg_num'] += db("clock")->where("forenoon_xia like '%旷工%' ")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();
      $year_a['kg_num'] += db("clock")->where("afternoon_shang like '%旷工%' ")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();
      $year_a['kg_num'] += db("clock")->where(" afternoon_xia like '%旷工%'")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();

      $year_a['jb_num'] += db("clock")->where("forenoon_shang like '%加班%'")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();
      $year_a['jb_num'] += db("clock")->where("forenoon_xia like '%加班%' ")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();
      $year_a['jb_num'] += db("clock")->where("afternoon_shang like '%加班%' ")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();
      $year_a['jb_num'] += db("clock")->where(" afternoon_xia like '%加班%'")->where('uid='.$User['u_id']." and  time like '$year%' ")->count();
  
     return $year_a;
    }
    public function get_baobiao_data()
    { 
      $time = input("time");
      $User=Session::get();
  
      $uid = input("user_id");
      $s_list =  db("clock")->where('uid='.$uid ." and time like '".$time."%'")->select();

      $str_time = strtotime($time);
      $ym = date('Ym',$str_time);

      $qj_list = db("clock")->query("select * from crm_qingjia where FROM_UNIXTIME(start_time,'%Y%m') =  $ym or  FROM_UNIXTIME(end_time,'%Y%m') =  $ym");
      
      
      $select_year = date('Y',$str_time);
      $select_month = date('m',$str_time);
      
      $rt_a = [];
      $end_day = 0;
      if(in_array( $select_month,[1,3,5,7,8,10,12])){
        $end_day = 31;
      }elseif($select_month == 2){

        $end_day = $select_year%4==0?29:28;
      }else{
         $end_day = 30;
      }
      for ($i=1; $i <=$end_day ; $i++) { 
        $cur_time = strtotime($select_year.'-'.$select_month.'-'.$i);

        if(date('w',$cur_time) != 0){

            $value['forenoon_shang'] = '异常';
            $value['forenoon_xia'] = '异常';
            $value['afternoon_shang'] = '异常';
            $value['afternoon_xia'] = '异常';

            $value['td_qj'] = '';
        
            // 当前这一天的时间戳
      

            foreach ($qj_list as $key => $qj_value) {
              
              if( $cur_time>=$qj_value['start_time'] && $cur_time<=$qj_value['end_time'] ){
                
                // 是不是小于开始的时候，以及大于结束的时候

                if ($qj_value['start_jd'] == '下午' && $i==date("d",$qj_value['start_time'])) {
                  // 开始那一天
                  $this->num_a['qj_num']+=0.5;
                  $value['afternoon_shang'] = '<span class="qd_qj">请假</span>';
                  $value['afternoon_xia'] = '<span class="qd_qj">请假</span>';
                  $value['td_qj'] = 'only_xw';//只请了下午假

                }elseif ($qj_value['end_jd'] == '上午' && $i==date("d",$qj_value['end_time'])) {
                  // 结束那一天
                  $this->num_a['qj_num']+=0.5;
                  $value['forenoon_shang'] = '<span class="qd_qj">请假</span>';
                  $value['forenoon_xia'] = '<span class="qd_qj">请假</span>';
                  $value['td_qj'] = 'only_sw';//只请了上午假
                }else{
                  ++$this->num_a['qj_num'];
                  $value['forenoon_shang'] = '<span class="qd_qj">请假</span>';
                  $value['forenoon_xia'] = '<span class="qd_qj">请假</span>';
                  $value['afternoon_shang'] = '<span class="qd_qj">请假</span>';
                  $value['afternoon_xia'] = '<span class="qd_qj">请假</span>';
                  $value['td_qj'] = 'all';//全天请假
                }
              }
          } 
         
        } else{
          $value['forenoon_shang'] = '正常';
          $value['forenoon_xia'] = '正常';
          $value['afternoon_shang'] = '正常';
          $value['afternoon_xia'] = '正常';

          $value['td_qj'] = 'all';
        }
        
        $rt_a[$i] = $value;
      }
      // print_r( $rt_a);exit();
      foreach ($s_list as $key => $value) {
        list($y,$m,$d) = explode("-",$value['time']);
        $d = intval($d);
          if($rt_a[$d]['td_qj'] != "all" ){
            // 没有全天请假
            if($rt_a[$d]['td_qj'] != "only_sw"){
              //没有请上午,给上午重新赋值签到情况
              $rt_a[$d]['forenoon_shang'] = $this->getStrr($value['forenoon_shang']);
              $rt_a[$d]['forenoon_xia'] = $this->getStrr($value['forenoon_xia']);
            }
            if($rt_a[$d]['td_qj'] != "only_xw"){
                 //没有请下午,给下午重新赋值签到情况
              $rt_a[$d]['afternoon_shang'] = $this->getStrr($value['afternoon_shang']);
              $rt_a[$d]['afternoon_xia'] = $this->getStrr($value['afternoon_xia']);
            }
         // $rt_a[$d] = $value;
          }
         
      }
      $year_a = [];
      // if($User['user_cate']=='老板'){
         $User['u_id'] =  $uid;
         $year_a  = $this->setYearData($User);
      // }
      return json(['num_a'=>$this->num_a,'data'=>$rt_a,'year_a'=> $year_a]);
    }

    public function getStrr($str)
    { 
       
       if ($str) {
          $two_str = substr($str,0,6); 
          if (is_numeric($two_str)) {
              return "√";
          } else if ($two_str == '迟到') {
              ++$this->num_a['cd_num'];
              return '<span class="qd_cd">'.$two_str.'</span>';
          } else if ($two_str == '早退') {
            ++$this->num_a['zt_num'];
              return '<span class="qd_zt">'.$two_str.' </span>';
          } else if ($two_str == '请假') {
              ++$this->num_a['qj_num'];
              return '<span class="qd_qj">'.$two_str.' </span>';
          } else if ($two_str == '旷工') {
              ++$this->num_a['kg_num'];
              return '<span class="qd_kg">'.$two_str.' </span>';
          } else if ($two_str == '加班') {
              ++$this->num_a['jb_num'];
              return '<span class="qd_jb">'.$two_str.' </span>';
          } else {
              return $two_str;
          }
    
      } else {
          return '异常';
      }
    }


    public function qingjia()
    {
      $User=Session::get();
        $qj_data = json_decode(input("qj_data"),true);
      
        

        db("qingjia")->insert([
          "start_time"=> strtotime($qj_data['qj_ks_time']),
          "end_time"=> strtotime($qj_data['qj_js_time'])+60*60*23,
          "start_jd"=> $qj_data['qj_ks_jd'],
          "end_jd"=> $qj_data['qj_js_jd'],
          "yuanyin"=> $qj_data['qj_thing'],
          "uid"=>$User['u_id']
        ]); 
 
       
    }

    // 考勤开始


    // 指派开始

    public function zhipan()
    {
      $User=Session::get();
      
      $user_a =  db("user")->where("company_name = '".$User['u_company']."'")->select();
      $this->assign('user_a',json_encode($user_a) );
      return $this->fetch();
       
    }

    // 指派结束



    // 消息开始
    public function message()
    {
      return $this->fetch();
    }

    // 消息结束

 
}

