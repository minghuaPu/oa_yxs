<?php
namespace app\index\controller;
use \think\Session;
class Login extends \think\Controller
{
    public function index()
    {
    	$user_list=db('user')->select();
    	$this->assign('user_list',$user_list);
        return $this->fetch();
    }
    public function reg(){
    	$data=input();
        if($data['user_cate']=="员工"){
            $havecompany=db('companylist')->where('company_id',$data['belong'])->find();//根据从属编号查找有没该公司
            if(!empty($havecompany)){
                $company=$havecompany['company_name'];//如果有则找到公司名
                $have=db('user')->where('user_name',$data['user_name'])->find();//有没有该登录名
        if(empty($have))
        {
            $data["company_name"]=$company;//如果没有登录名则把找到的公司名嵌套进data
            db('user')->insert($data);    
            return json(['msg'=>'找到公司并没有重复账号,注册成功']);
        }
        else
            return json(['msg'=>'找到公司但重复账号,注册失败']);
        }
            return json(['msg'=>'找不到公司,注册失败']);
            }

            if($data['user_cate']=="老板"){
            $havecompany=db('companylist')->where('company_name',$data['company_name'])->find();//根据从属编号查找有没该公司
            if(empty($havecompany)){       
                $have=db('user')->where('user_name',$data['user_name'])->find();//有没有该登录名
        if(empty($have))
        {
            $newcompany["company_name"]=$data["company_name"];
            $newcompany["company_boss"]=$data["user_name"];
            db('companylist')->insert($newcompany);
            $newcompany1=db('companylist')->where('company_name',$data['company_name'])->find();
            $data["belong"]=$newcompany1["company_id"];
            db('user')->insert($data);
      
            return json(['msg'=>'还没有这家公司并没有重复账号，注册成功']);
        }
        else
            return json(['msg'=>'还没这家公司但重复账号，注册失败']);
        }
            return json(['msg'=>'已存在公司，注册失败']);
            }


            
    	
    }
    public function loginin(){
    	$data=input();
        $realpassword=db("user")->where("user_name",$data['user_name'])->
        where("password",$data['password'])->
        find();
        if(!empty($realpassword)){
            Session::set('user_name',$realpassword["user_name"]);
            Session::set('bumen',$realpassword["bumen"]);
            Session::set('user_cate',$realpassword["user_cate"]);
            Session::set('u_id',$realpassword["id"]);
            Session::set('u_company',$realpassword["company_name"]);
            $havecompany=db('companylist')->where('company_name',$realpassword["company_name"])->find();
            Session::set('u_belong',$havecompany["company_id"]);
        	return true;
        }
        else
        	return false; 
    }

    public function logout(){
            Session::delete('user_name');
            Session::delete('user_cate');
            Session::delete('u_id');
            $this->success('退出成功','index/login/index');
    }
}
