<?php
namespace app\admin\controller;
use \think\Session;
class Question extends \app\admin\Auth
{
    public function index(){
       
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
}
?>