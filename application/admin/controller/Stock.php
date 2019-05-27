<?php
namespace app\admin\controller;
use \think\Session;

// 库存
class Stock extends \app\admin\Auth
{
  // 钢材库存开始
    public function gc_djb()
    {
      $params = input();
      $where = "";
      if (isset($params['gangzhong_kwd'])) {
        $where = "gangzhong like '%".$params['gangzhong_kwd']."%'";
      }
      $inventory=db('inventory')->where($where)->order("id desc")->paginate(12);
      $inventory->appends($params);
      $this->assign('gc_data',$inventory); 
      $this->assign('inventory',json_encode($inventory)); 
      return $this->fetch();

    }

    public function gc_rk()
    {
      $params = input();
      $where = " 1=1 ";
      if (isset($params['gangzhong_kwd'])) {
        $where .= " and gangzhong like '%".$params['gangzhong_kwd']."%'";
      }
      
      if (isset($params['year_kw'])) {
        $search_year = date('Y',strtotime($params['year_kw']));
        $where .= " and srksj like '".$search_year."%'";
      }
      $inventory=db('inventory')->where($where)->order("id desc")->paginate(12);
      $inventory->appends($params);
      $this->assign('gc_data',$inventory); 
      $this->assign('inventory',json_encode($inventory)); 
      return $this->fetch();
    }

    public function gc_ck()
    {
      $params = input();
      $where = "";
      if (isset($params['gangzhong_kwd'])) {
        $where = "gangzhong like '%".$params['gangzhong_kwd']."%'";
      }
      $inventory=db('inventory')->where($where)->order("id desc")->paginate(12);
      $inventory->appends($params);
      $this->assign('gc_data',$inventory); 
      $this->assign('inventory',json_encode($inventory)); 
      return $this->fetch();
    }

    public function gc_rk_save()
    {
      $form_data = json_decode(input('form_data'),true);
      $form_data['rksj'] = date("Y-m-d",strtotime($form_data['rksj']));
      db('inventory')->insert($form_data);

    }
    // 钢材库存结束

 
}

