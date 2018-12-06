<?php
use think\Request;
use think\Session;

// 获取用户信息
function getUserInfo()
{
    return Session::get('user_info');
    
}

function test($cur_ctr,$str)
{

    if (ucwords($cur_ctr)  == Request::instance()->controller()){
        return $str;
    }

}

/**
 * 生成树型菜单
 * @param  array $cat_list 所有分类列表信息
 * @return array           二维数组 array('cat_id'=>1,'parent_id'=>0,'sub_menu'=>array('cat_id'=>1,'parent_id'=>1))
 */
function tree_menu($cat_list)
{
    $menu_a=array();
    foreach ($cat_list as $key => $value) {
        if ($value['parent_id']) {//二级菜单
            $menu_a[$value['parent_id']]['sub_menu'][]=$value;
        }else{
            $menu_a[$value['id']]=$value;
        }
    }
    return $menu_a;
}

//处理订单信息的公共函数   
function doOrder($param)
{
    $orderModel=model('order');

     $param['shipping'] = 0;
     $param['discount'] = 0;
     $param['order_sn'] = date('Ymdhms',time()) +rand(1000,9999);

     $param['pay_money'] = $param['total_money'] + $param['shipping'] -$param['discount'] ;

     $param['create_time'] = time();
     $orderModel->save($param);
     // 获取最近一次添加的自增长ID
     return $orderModel->id;
}


//获取订单状态
function getOrderStatus($status)
{
    if ($status==0) {
        return '未支付';
    }else if ($status==1) {
        return '已支付';
    }
}


 

// 获取支付状态
function getPayStatus()
{
    return   array(
            '未支付',
            '<b>已支付</b>'
        );
   
}

// 获取发货状态
function getShipingStatus($status)
{
    return $status==1?'已发货':'未发货';
}