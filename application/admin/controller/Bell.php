<?php
namespace app\admin\controller;
use \think\Session;
class Bell extends \app\admin\Auth
{
    public function index(){
        $user_data=Session::get();
        if($user_data['user_cate']=='老板'){
            $list=db('Daysoff')->order(['state'=>0,'id'=>'desc'])->select();
        }elseif($user_data['user_cate']=='员工'){
            db('Daysoff')->where('uid='.$user_data['u_id'])->update(['red'=>0]);
            $list=db('Daysoff')->where('uid='.$user_data['u_id'])->order('id desc')->select();
        }
        $this->assign('list',$list);
        $this->assign('user_data',$user_data);
        return $this->fetch();
    }
    // 调休申请
    public function holiday(){
        $user_data=Session::get();
        db('Daysoff')->insert([ 'uid'=>$user_data['u_id'],
                                'user_name'=>$user_data['user_name'],
                                'start_time'=>input('start_time'),
                                'end_time'=>input('end_time'),
                                'reason'=>input('reason'),
                            ]);
        $this->success('提交成功','index');
    }
    // 同意
    public function agree(){
        db('Daysoff')->where('id='.input('id'))->update(['state'=>1,'red'=>1]);
        $this->success('操作成功','index');
    }

    // 拒绝
    public function reject(){
        db('Daysoff')->where('id='.input('id'))->update(['state'=>2,'red'=>1]);
        $this->success('操作成功','index');
    }
    
}
?>