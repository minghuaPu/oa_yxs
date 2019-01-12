<?php
namespace app\admin\controller;
use \think\Session;
class Bell extends \app\admin\Auth
{
    public function index(){
        $user_data=Session::get();
        if($user_data['user_cate']=='老板'){
            $list=db('Daysoff')->order('id desc')->select();
            foreach ($list as $key => $value) {
            $list[$key]['start_time']=date("Y-m-d H:i:s",$value['start_time']);
            $list[$key]['end_time']=date("Y-m-d H:i:s",$value['end_time']);
        }
        }elseif($user_data['user_cate']=='员工'){
            db('Daysoff')->where('uid='.$user_data['u_id'])->update(['red'=>0]);
            $list=db('Daysoff')->where('uid='.$user_data['u_id'])->order('id desc')->select();
            foreach ($list as $key => $value) {
                $list[$key]['start_time']=date("Y-m-d H:i:s",$value['start_time']);
                $list[$key]['end_time']=date("Y-m-d H:i:s",$value['end_time']);
            }
        }
        $this->assign('list',json_encode($list));
        $this->assign('user_data',$user_data);
        return $this->fetch();
    }
    // 调休申请
    public function holiday(){
        $user_data=Session::get();
        $data=db('Daysoff')->insertGetId([ 'uid'=>$user_data['u_id'],
                                'user_name'=>$user_data['user_name'],
                                'type'=>input('type'),
                                'start_time'=>input('start_time'),
                                'end_time'=>input('end_time'),
                                'reason'=>input('reason'),
                            ]);
        $list=db('Daysoff')->where('id='.$data)->find();
        return json($list);
    }
    // 同意
    public function agree(){
       db('Daysoff')->where('id='.input('id'))->update(['state'=>1,'red'=>1]);
        $list=db('Daysoff')->where('id='.input('id'))->find();
        return json($list);
    }

    // 拒绝
    public function reject(){
        db('Daysoff')->where('id='.input('id'))->update(['state'=>2,'red'=>1]);
        $list=db('Daysoff')->where('id='.input('id'))->find();
        return json($list);
    }
    
}
?>