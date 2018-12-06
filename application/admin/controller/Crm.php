<?php
namespace app\admin\controller;
use \think\Session;
class Crm extends \app\admin\Auth
{
    public function index()
    {
      $belongid=Session::get('u_belong');
      $cate=Session::get('user_cate');
         //查询公司分类
        $companycate_list = db('companycate')->select();
        $this->assign('companycate_list',json_encode($companycate_list));
         $where_data=[];
          if(input('companycate_id')>0){
            $where_data['companycate_id'] = input('companycate_id');
        }

        //查询公司阶段
        $companystage_list = db('companystage')->select();
        $this->assign('companystage_list',json_encode($companystage_list));
        $where_datastage=[];
        if(input('companystage_id')>0){
            $where_datastage['companystage_id'] = input('companystage_id');
        }

        //查询客户来源
        $usersource_list = db('usersource')->select();
        $this->assign('usersource_list',json_encode($usersource_list));
        $where_datasource=[];
        if(input('usersource_id')>0){
            $where_datasource['usersource_id'] = input('usersource_id');
        }
        //查询客户公司规模，关系，结款方式，行业
        $size = db('size')->select();
        $accountstyle=db('accountstyle')->select();
        $industry=db('industry')->select();
        $relation=db('relation')->select();
        $this->assign('size',json_encode($size));
        $this->assign('accountstyle',json_encode($accountstyle));
        $this->assign('industry',json_encode($industry));
        $this->assign('relation',json_encode($relation));
        //模糊查询
        if(input('company_name')){
            $where_data['company_name'] = ['like','%'.input('company_name').'%'];
        }
        if($cate=="管理员"){
          $list = db('userinfo')->alias('u')//给userinfo表设置简写u
                              ->field('u.id, u.companycate_id, u.company_name, u.user_name, u.user_phone, u.remark, u.time,u.belong, c.company_cate')//查询
                              ->join('crm_companycate c','u.companycate_id=c.id','left')//设置公司分类表简写为c，用u的id和c的id比较
                              ->where($where_data)
                              ->join('crm_companystage s','u.companystage_id=s.id','left')
                              ->where($where_datastage)
                              ->join('crm_usersource sou','u.usersource_id=sou.id','left')
                              ->where($where_datasource)
                              ->order('u.id desc')//设置排序为从大到小
                              ->paginate(10);
        $this->assign('list',$list);
        }
        else{
          $list = db('userinfo')->alias('u')//给userinfo表设置简写u
                              ->field('u.id, u.companycate_id, u.company_name, u.user_name, u.user_phone, u.remark, u.time,u.belong, c.company_cate')//查询
                              ->join('crm_companycate c','u.companycate_id=c.id','left')//设置公司分类表简写为c，用u的id和c的id比较
                              ->where($where_data)
                              ->join('crm_companystage s','u.companystage_id=s.id','left')
                              ->where($where_datastage)
                              ->join('crm_usersource sou','u.usersource_id=sou.id','left')
                              ->where($where_datasource)
                              ->where("belong='$belongid'")
                              ->order('u.id desc')//设置排序为从大到小
                              ->paginate(10);
        $this->assign('list',$list);
        }
        
       
        return $this->fetch();
    }


    //查询学生表
    public function Studentsinfo(){
      $belongid=Session::get('u_belong');
      $cate=Session::get('user_cate');
       //查询学校
        $schoolname_list = db('school')->select();
        $this->assign('schoolname_list',$schoolname_list);
         $where_data=[];
          if(input('schoolname_id')>0){
            $where_data['schoolname_id'] = input('schoolname_id');
        }

        //查询专业课程
        $lessonname_list = db('lessname')->select();
        $this->assign('lessonname_list',$lessonname_list);
        $where_data=[];
        if(input('lessonname_id')>0){
            $where_data['lessonname_id'] = input('lessonname_id');
        }
        //模糊查询
        $where_data=[];
        if(input('school_name')){
            $where_data['school_name'] = ['like','%'.input('school_name').'%'];
        }
        if($cate=="管理员"){
          $list = db('studentsinfo')->alias('si')
                                   ->field('si.id, si.lessonname_id, si.schoolname_id, si.name, si.phone, si.wecat, si.time, si.professio, sc.school_name,les.lesson_name,si.uid')//查询
                                   ->join('crm_school sc','si.schoolname_id=sc.id','left')
                                   ->join('crm_lessname les','si.lessonname_id=les.id','left')
                                   ->where($where_data)                          
                                  ->order('si.id desc')
                                  ->paginate(10);
        }
        else
        {
          $list = db('studentsinfo')->alias('si')
                                   ->field('si.id, si.lessonname_id, si.schoolname_id, si.name, si.phone, si.wecat, si.time, si.professio, sc.school_name,les.lesson_name,si.uid')//查询
                                   ->join('crm_school sc','si.schoolname_id=sc.id','left')
                                   ->join('crm_lessname les','si.lessonname_id=les.id','left')
                                   ->where($where_data)
                                   ->where("belong='$belongid'")                          
                                  ->order('si.id desc')
                                  ->paginate(10);
                                }
          //查询专业                        
        $lesson_name = db('lessname')->select();
        $this->assign('lesson_name',$lesson_name);                         
        $this->assign('list',$list);      
        return $this->fetch();
    }
    //编辑学生页面
    public function editstudentinfo(){
      $id = input('id');
        $info = db('studentsinfo')->where("uid=$id")->find();
        $this->assign('info',$info);
        $shixiinfo=db('mark')->where('user_id',$info["uid"])->find();
        $this->assign('shixiinfo',$shixiinfo);
      return $this->fetch();
    }
//查看学生页面
    public function eachstudentinfo(){
        $id = input('id');
        $info = db('studentsinfo')->where("uid=$id")->find();
        $this->assign('info',$info);
        $mark = db('mark')->alias('m')
                        ->join('crm_studentsinfo s','m.user_id=s.uid','left')
                        ->field('m.courses,m.mark,m.time,m.user_id,s.id,s.uid')
                        ->where("m.user_id=$id")
                        ->order('m.id desc')
                        ->select();
                        $this->assign('mark',$mark);
      return $this->fetch();
    }
    //保存每个学生分数
    public function score(){
      $id = input('id');
      $data = input();
      $haveinfo = db('mark')->where('user_id',$data["user_id"])->find();
      if(empty($haveinfo)){
        db('mark')->insert($data);
      }
      else
        db('mark')->where('user_id',$data["user_id"])->update($data);
        $this->success('修改成功','studentsinfo');
 }
    
    //保存客户信息
    public function Customersave(){
        db('userinfo')->insert(input());
    }
    //删除客户
    public function delete(){
    	$id = input('id');
    	if($id>0){
    		db('userinfo')->where("id=$id")->delete();
        $this->success('删除成功','admin/crm/index');
    	}
    }
    public function deletestudentsinfo(){
      $id = input('id');
      if($id>0){
        db('studentsinfo')->where("id=$id")->delete();
        $this->success('删除成功','admin/crm/studentsinfo');
      }
    }
    //查询每个客户信息
    public function edit(){
        $id = input('id');
        $info = db('userinfo')->where("id=$id")->find();
        $this->assign('info',$info);
        return $info;
    }
    //编辑每个客户信息
    public function update_userinfo(){
      $id = input('id');
      $info=input();
      db('userinfo')->where("id=$id")->update($info);
      $this->success('修改成功','index');
    }
    //客户来源数据词典
    public function usersource(){
        $list = db('usersource')->paginate(10);
        $this->assign('list',$list);
        return $this->fetch();
    }
       //更改客户来源数据词典
    public function update_usersource(){
      $cate=Session::get('user_cate');
      if($cate=="管理员"){
        foreach ($_REQUEST['user_source'] as $key => $value) {
            db('usersource')->where("id=$key")->update(['user_source'=>$value]);
        }
     $this->success('修改成功','usersource');
      }
        else
       $this->success('您不是管理员，修改失败','usersource');
 }
  public function addsource(){
  return $this->fetch();
 }
 
 public function addsource1(){
  $data=input();
  $source_name=$data["user_source"];
  $havesource=db('usersource')->where("user_source='$source_name'")->find();
  if(empty($havesource)){
    db('usersource')->insert(input());
        $this->success('添加成功','usersource');
  }
       else
        $this->success('该来源已存在，添加失败','usersource');
 }

//客户规模
 public function sizecate(){
        $list = db('size')->paginate(10);
        $this->assign('list',$list);
        return $this->fetch();
    }

 public function update_size(){
      $cate=Session::get('user_cate');
      if($cate=="管理员"){
        foreach ($_REQUEST['size'] as $key => $value) {
            db('size')->where("id=$key")->update(['size'=>$value]);
        }
     $this->success('修改成功','sizecate');
      }
        else
       $this->success('您不是管理员，修改失败','sizecate');
 }
  public function addsize(){
  return $this->fetch();
 }
 
 public function addsize1(){
  $data=input();
  $size=$data["size"];
  $have=db('size')->where("size='$size'")->find();
  if(empty($have)){
    db('size')->insert(input());
        $this->success('添加成功','sizecate');
  }
       else
        $this->success('该规模已存在，添加失败','sizecate');
 }


 //客户类型信息
 public function companycate(){
      $list = db('companycate')->paginate(10);
     $this->assign('list',$list);
     return $this->fetch();
 }
 //更改客户类型
  public function update_companycate(){
    $cate=Session::get('user_cate');
    if($cate=="管理员"){
      foreach ($_REQUEST['companycate'] as $key => $value) {
            db('companycate')->where("id=$key")->update(['company_cate'=>$value]);
        }
     $this->success('修改成功','companycate');
    }
        
        else
       $this->success('您不是管理员，修改失败','companycate');
 }
   public function addcompanycate(){
  return $this->fetch();
 }
 
 public function addcompanycate1(){
  $data=input();
  $company_cate=$data["company_cate"];
  $havecompany=db('companycate')->where("company_cate='$company_cate'")->find();
  if(empty($havecompany)){
    db('companycate')->insert(input());
        $this->success('添加成功','companycate');
  }
       else
        $this->success('该分类已存在，添加失败','companycate');
 }
 //学生学校
 public function school(){
      $list = db('school')->paginate(10);
     $this->assign('list',$list);
     return $this->fetch();
 }
 //添加学校
 public function addschool(){
  return $this->fetch();
 }
 
 public function addschool1(){
  $data=input();
  $school_name=$data["school_name"];
  $haveschool=db('school')->where("school_name='$school_name'")->find();
  if(empty($haveschool)){
    db('school')->insert(input());
        $this->success('添加成功','school');
  }
       else
        $this->success('该学校已存在，添加失败','school');
 }
 //更改学校
  public function update_school(){
    $cate=Session::get('user_cate');
    if($cate=="管理员"){
       foreach ($_REQUEST['school'] as $key => $value) {
            db('school')->where("id=$key")->update(['school_name'=>$value]);
        }
     $this->success('修改成功','index/index');
    }
    else
    $this->success('您不是管理员,修改失败','index/index');  
       
       
 }
//用户行业
public function industrycate(){
        $list = db('industry')->paginate(10);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function update_industry(){
      $cate=Session::get('user_cate');
      if($cate=="管理员"){
        foreach ($_REQUEST['industry'] as $key => $value) {
            db('industry')->where("id=$key")->update(['industry_name'=>$value]);
        }
     $this->success('修改成功','industrycate');
      }
        else
       $this->success('您不是管理员，修改失败','industrycate');
 }
  public function addindustry(){
  return $this->fetch();
 }
 
 public function addindustry1(){
  $data=input();
  $industry_name=$data["industry_name"];
  $have=db('industry')->where("industry_name='$industry_name'")->find();
  if(empty($have)){
    db('industry')->insert(input());
        $this->success('添加成功','industrycate');
  }
       else
        $this->success('该来源已存在，添加失败','industrycate');
 }

//行业关系
public function relationcate(){
        $list = db('relation')->paginate(10);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function update_relationcate(){
      $cate=Session::get('user_cate');
      if($cate=="管理员"){
        foreach ($_REQUEST['relation'] as $key => $value) {
            db('relation')->where("id=$key")->update(['relation'=>$value]);
        }
     $this->success('修改成功','relationcate');
      }
        else
       $this->success('您不是管理员，修改失败','relationcate');
 }
  public function addrelation(){
  return $this->fetch();
 }
 
 public function addrelation1(){
  $data=input();
  $relation=$data["relation"];
  $have=db('relation')->where("relation='$relation'")->find();
  if(empty($have)){
    db('relation')->insert(input());
        $this->success('添加成功','relationcate');
  }
       else
        $this->success('该来源已存在，添加失败','relationcate');
 }

//客户阶段
public function stagecate(){
        $list = db('companystage')->paginate(10);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function update_stagecate(){
      $cate=Session::get('user_cate');
      if($cate=="管理员"){
        foreach ($_REQUEST['companystage'] as $key => $value) {
            db('companystage')->where("id=$key")->update(['company_stage'=>$value]);
        }
     $this->success('修改成功','stagecate');
      }
        else
       $this->success('您不是管理员，修改失败','stagecate');
 }
  public function addstage(){
  return $this->fetch();
 }
 
 public function addstage1(){
  $data=input();
  $stage=$data["company_stage"];
  $have=db('companystage')->where("company_stage='$stage'")->find();
  if(empty($have)){
    db('companystage')->insert(input());
        $this->success('添加成功','stagecate');
  }
       else
        $this->success('该来源已存在，添加失败','stagecate');
 }
//结款方式
public function accountstylecate(){
        $list = db('accountstyle')->paginate(10);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function update_accountstylecate(){
      $cate=Session::get('user_cate');
      if($cate=="管理员"){
        foreach ($_REQUEST['accountstyle'] as $key => $value) {
            db('accountstyle')->where("id=$key")->update(['account_style'=>$value]);
        }
     $this->success('修改成功','accountstylecate');
      }
        else
       $this->success('您不是管理员，修改失败','accountstylecate');
 }
  public function addaccountstyle(){
  return $this->fetch();
 }
 
 public function addaccountstyle1(){
  $data=input();
  $style=$data["account_style"];
  $have=db('accountstyle')->where("account_style='$style'")->find();
  if(empty($have)){
    db('accountstyle')->insert(input());
        $this->success('添加成功','accountstylecate');
  }
       else
        $this->success('该来源已存在，添加失败','accountstylecate');
 }

 //查看每个用户的信息
 public function userinfo(){
       $id=input('id'); 
       //查询公司类型
       $companycate_list = db('companycate')->select();
        $this->assign('companycate_list',$companycate_list);
        $where_data=[];
        if(input('companycate_id')>0){
            $where_data['companycate_id'] = input('companycate_id');
        }
       //查询客户来源
        $usersource_list = db('usersource')->select();
        $this->assign('usersource_list',$usersource_list);
        $where_data2=[];
        if(input('usersource_id')>0){
            $where_data['usersource_id'] = input('usersource_id');
        }
        //查询表
        
       $info = db('userinfo')->alias('u')
                        ->join('crm_companycate c','u.companycate_id=c.id','left')
                        ->join('crm_usersource s','u.usersource_id=s.id','left')
                        ->field('u.id,u.company_name,u.time,u.state,u.remark,u.companycate_id,u.usersource_id,u.user_phone,u.user_telephone,u.province_address,u.city_address,u.area_address,u.detailed_address,u.company_url,u.three_one_dinxin,u.three_one_dinji,u.three_one_dinliang,c.company_cate,s.user_source')
                        ->where("u.id=$id")
                        ->where($where_data)
                        ->where($where_data2)
                        ->find();
                        $this->assign('info',$info);
      //查询跟单
      $with = db('with')->alias('w')
                        ->join('crm_userinfo u','w.user_id=u.id','left')
                        ->field('w.with_time,w.with_title,w.with_content,w.user_id,u.id')
                        ->where("w.user_id=$id")
                        ->order('w.id desc')
                        ->select();
                        $this->assign('with',$with);
                       
                        
  
  return $this->fetch();
 }
 //保存跟单信息
 public function with(){
  $id = input('id');
  $data = input();
  // $data['user_id'] = input('id');
  db('with')->insert($data);
 }
 //显示跟单情况
 
}
