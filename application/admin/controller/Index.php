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
		
    	return $this->fetch();
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
<<<<<<< HEAD
    public function cjg(){
        return $this->fetch();
    }
=======
	public function stock(){     //库存的数据
		$list=db("steel")->field('category,id')->select();  //材料名字
		$this->assign('list',json_encode($list));
	     
		$list_qb=db("steel")->field('material,shape,diameter,length,weight,numbers')->select();  
		$series = [];
 
		foreach($list_qb as $key=>$value){
			foreach($value as $k=>$v){
				if($k=='material'){

					$series[$k]['name'] = '材质';

				}elseif($k=='shape'){

					$series[$k]['name'] = '形状';
				}
				elseif($k=='diameter'){

					$series[$k]['name'] = '直径';
				}
				elseif($k=='length'){

					$series[$k]['name'] = '长度';
				}
				elseif($k=='weight'){

					$series[$k]['name'] = '重量';
				}
				elseif($k=='numbers'){
					$series[$k]['name'] = '数量';
				};
				
				$series[$k]['data'][] = $v;
				$series[$k]['type'] = 'bar';
				
			}
		};
//		print_r($list_qb);exit();
		$this->assign('series',json_encode(array_values($series)));
		 
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
>>>>>>> 0f2878cad5fee7060e979bf024098bd3811cd4bf
}