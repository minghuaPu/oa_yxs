<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:78:"D:\wamp64\www\oa\oa_yxs\public/../application/admin\view\index\proche_rcl.html";i:1561278028;s:65:"D:\wamp64\www\oa\oa_yxs\public/../application/admin\view\top.html";i:1559006423;s:67:"D:\wamp64\www\oa\oa_yxs\public/../application/admin\view\right.html";i:1559006423;s:66:"D:\wamp64\www\oa\oa_yxs\public/../application/admin\view\left.html";i:1559006423;s:66:"D:\wamp64\www\oa\oa_yxs\public/../application/admin\view\foot.html";i:1559006423;}*/ ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/index/css/index.css?9">
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/index/css/index2.css">
<div class="page"></div>
<style>
    .avatar-uploader .el-upload {
    border: 1px dashed #d9d9d9;
    border-radius: 6px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
  }
  .avatar-uploader .el-upload:hover {
    border-color: #409EFF;
  }
  .avatar-uploader-icon {
    font-size: 28px;
    color: #8c939d;
    width: 178px;
    height: 178px;
    line-height: 178px!important;
    text-align: center;
  }
  .center_3{
    width: 80%;
    height: 100%;
    background: #ffffff;
    display: flex;
    justify-content: space-between;
    float: left;
    text-align: center;
    margin-right: 1%;
    padding: 10px;
}
.center_4{
    width: 20%;
    height: 100%;
    background: #ffffff;
    float: left;
    text-align: center;
    padding: 10px;
}
.center_4 ul li{
    height: 70px;
    display: flex;
    line-height: 80px;
    margin: 3px 0;
}
.center_4 ul li .biaoti{
    background: #1570B6;
    width: 30%;
    color: #fff
}

  .avatar {
    width: 178px;
    height: 178px;
    display: block;
  }
  input[type=file] {
    display: none!important;
}
.f_center_1_left{float: left;}
.center_2{float: right;}
.ycshij{position: absolute !important;opacity: 1;left: 0px;top: -8px;width: 10px !important;opacity: 0; cursor: pointer;}
.laydate-day-mark {font-size: 14px;color: red}
.laydate-day-mark::after {
    background-color: transparent;
}
.xialiaobtn{padding: 8px 15px;color: #fff;background: #1570B6;margin: 2%;}
.cneter_2b .el-input__inner{color: #fff !important;}
</style>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>智慧云办公系统管理</title>
    <!-- CSS公共样式 -->
    <link rel="stylesheet" type="text/css" href="__STATIC__/admin/common/common.css?99">
    <!-- 引入bootstarp -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="__STATIC__/library/dropify-master/dist/css/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/library/laydate/layui/css/layui.css">
    <!-- 引入jquery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <!-- 引入bootstarpJS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- 引入vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.9/dist/vue.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.bootcss.com/vue/2.5.13/vue.min.js"></script> -->
    <!-- 引入样式 -->
    <link rel="stylesheet" href="__STATIC__/library/element-ui.min.css">
    <!-- 引入组件库 -->
    <script src="__STATIC__/library/element-ui.min.js"></script>
    <!-- 引入 vue路由-->
    <script src="__STATIC__/library/vue-router.min.js"></script>
    <script type="text/javascript" src="__STATIC__/library/dropify-master/dist/js/dropify.min.js"></script>
    <script type="text/javascript" src="__STATIC__/library/laydate/layui/layui.all.js "></script>
   <!--  <script type="text/javascript" src="__STATIC__/library/laydate/css/layui.css"></script> -->

    <!-- 配置文件 -->
    <script type="text/javascript" src="__STATIC__/library/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="__STATIC__/library/ueditor/ueditor.all.min.js"></script>    

      <!--[if lt IE 9]>
    　 <script src="https://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
       <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.js"></script>

<link rel="stylesheet" type="text/css" href="__STATIC__/admin/index/css/ie9.css">
  <![endif]-->
  <script>
  function Appendzero(obj)
    {
        if(obj<10) return "0" +""+ obj;
        else return obj;
    }
  </script>
</head>
 
<body>
    <header id="top_menu">
        <div class="row">
            <div class="left col-md-5">
               <!--  改，logo -->
                <!-- <div class="logo pull-left">
                    <a href="<?php echo url('index/index'); ?>">
                        <img src="__STATIC__/admin/index/images/logo.png" alt=""></a>
                </div> -->
                <?php if(\think\Session::get('user_cate')=='管理员'): ?>
                <div class="title pull-left ">
                    <div class="dropdown btn_bg">
                        <button type="button" class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">
                            <span>123</span>
                            <span class="caret"></span>
                        </button>
                        
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="<?php echo url('crm/index'); ?>">
                                    <div>
                                        <span class="glyphicon glyphicon-user pull-left"></span>
                                        <div class="pull-left">
                                            <h4>CRM客户管理关系</h4>
                                            <p>给销售团队一颗云大脑</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="<?php echo url('map/index'); ?>">
                                    <div>
                                        <span class="glyphicon glyphicon-map-marker pull-left"></span>
                                        <div class="pull-left">
                                            <h4>LBS打天下</h4>
                                            <p>基于定位的外勤管理</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="<?php echo url('task/index'); ?>">
                                    <div>
                                        <span class="glyphicon glyphicon-list-alt pull-left"></span>
                                        <div class="pull-left">
                                            <h4>Task汇报管理</h4>
                                            <p>员工汇报提交或审核</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation" tabindex="-1" href="#">
                                <a role="menuitem" tabindex="-1" href="<?php echo url('news/index'); ?>">
                                    <div>
                                        <span class="glyphicon glyphicon-th-list pull-left"></span>
                                        <div class="pull-left">
                                            <h4>New新闻管理</h4>
                                            <p>企业内进行新闻或信息公告，响应信息化时代</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                           
                        </ul>
                        <?php endif; if(\think\Session::get('user_cate')!='管理员'): ?>
                         <div class="title pull-left">
                    <div class="dropdown btn_bg">
                        <button type="button" class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">
                            <span>{{cur}}</span>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="<?php echo url('crm/index'); ?>">
                                    <div>
                                        <span class="glyphicon glyphicon-user pull-left"></span>
                                        <div class="pull-left">
                                            <h4>CRM客户管理关系</h4>
                                            <p>给销售团队一颗云大脑</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="<?php echo url('map/index'); ?>">
                                    <div>
                                        <span class="glyphicon glyphicon-map-marker pull-left"></span>
                                        <div class="pull-left">
                                            <h4>LBS打天下</h4>
                                            <p>基于定位的外勤管理</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="<?php echo url('task/index'); ?>">
                                    <div>
                                        <span class="glyphicon glyphicon-list-alt pull-left"></span>
                                        <div class="pull-left">
                                            <h4>Task汇报管理</h4>
                                            <p>员工汇报提交和审核</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="<?php echo url('gongdan/index'); ?>">
                                    <div>
                                        <span class="glyphicon glyphicon-list-alt pull-left"></span>
                                        <div class="pull-left">
                                            <h4>外勤工单管理</h4>
                                            <p>员工外勤工单提交和审核</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="<?php echo url('information/index'); ?>">
                                    <div>
                                        <span class="glyphicon glyphicon-list-alt pull-left"></span>
                                        <div class="pull-left">
                                            <h4>个人信息管理</h4>
                                            <p>员工资料修改和查看</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="<?php echo url('bumen/index'); ?>">
                                    <div>
                                        <span class="glyphicon glyphicon-list-alt pull-left"></span>
                                        <div class="pull-left">
                                            <h4>公司部门管理</h4>
                                            <p>公司部门增删改查</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
               
                        </ul>
                         <?php endif; ?>
                    </div>
                </div>
               
            </div>
            <div class="col-md-5 pull-right user_info" style="margin-top: 0px;">

            <div class="user_info">
                
                <div class="bell" @click='bell'>
                    消息
                    <img src="__STATIC__/admin/msg.png">
                    <div class="nnum" v-if='num!=0'></div>
                </div>
                <div class="bell" @click="setting">
                    设置
                    <img src="__STATIC__/admin/setting.png">
                </div>
                <div class="bell" @click='exit'>
                        退出
                        <img src="__STATIC__/admin/exit.png">
                    </div>
               
            </div>
            <audio src="" controls="controls" preload id="music1" hidden>
        </div>
    </header>
    <div class="top" style="height: 60px;width: 100%;"></div>
<script type="text/javascript">
 new Vue({
        el:'#top_menu',
        data:{
           controller:"Index",
           cur:'',
           num:0
        },
        created(){
            this.init();
            this.red();
            var music= new Audio('__STATIC__/admin/9337.mp3');
            setInterval( () =>{

                $.get('<?php echo url("admin/index/prompt"); ?>',
                    (rtnData)=>{
                    
                        for (var i = 0; i < rtnData.length; i++) {
                            <?php if(\think\Session::get('user_cate')=='老板'): ?>
                               if(rtnData[i].prompt==0){
                                if(rtnData[i].zhoujihua==1){
                                     this.$notify({
                                          title: '提示',
                                          message: rtnData[i].user_name+'员工添加了一个新的周计划',
                                          duration: 0
                                        });
                                     music.play();
                                 }else{
                                    this.$notify({
                                          title: '提示',
                                          message: rtnData[i].user_name+'员工添加了一个新的工作任务',
                                          duration: 0
                                        });
                                   
                                   music.play();
                                 }
                               }else if(rtnData[i].prompt==2){
                                  if(rtnData[i].zhoujihua==1){
                                      this.$notify({
                                          title: '提示',
                                          message: rtnData[i].user_name+'员工完成了一个周计划任务',
                                          duration: 0
                                        });
                                      music.play();
                                  }else{
                                     this.$notify({
                                          title: '提示',
                                          message: rtnData[i].user_name+'员工完成了一个工作任务',
                                          duration: 0
                                        });
                                     music.play();
                                  }
                               }
                               
                            <?php endif; if(\think\Session::get('user_cate')=='员工'): ?>
                                this.$notify({
                                  title: '提示',
                                  message: rtnData[i].user_name+'老板发布了一个新的工作任务',
                                  duration: 0
                                });
                                music.play();
                            <?php endif; ?>
                        }
                       
                });
            },2000);
            
        },
        methods:{
            bell(){
                window.location.href='<?php echo url('admin/bell/index'); ?>'
            },
            setting(){
                window.location.href='<?php echo url('admin/information/index'); ?>'
            },
            exit(){
                window.location.href='<?php echo url('index/login/logout'); ?>'
            },
            red(){
                $.get('<?php echo url("admin/index/red"); ?>',
                    (rtnData)=>{
                        this.num=rtnData;
                });
            },
            init(){
                this.controller="<?php echo request()->controller(); ?>";
                console.log(this.controller);
                if(this.controller=='Index' || this.controller=='Crm'){
                    this.cur='OA办公';
                }else if(this.controller=='Map' ){
                    this.cur='LBS';
                }else if(this.controller=='Task' ){
                    this.cur='TASK';
                }else if(this.controller=='Build' ){
                    this.cur='集客';
                }else if(this.controller=='News' ){
                    this.cur='News';
                }else if(this.controller=='Information' ){
                    this.cur='信息管理';
                }else if(this.controller=='Gongdan' ){
                    this.cur='工单管理';
                }else if(this.controller=='Bumen' ){
                    this.cur='部门管理';
                }else{
                    this.cur='OA办公';
                }
            }
        }
    })
</script>
  <!DOCTYPE html>
<html>
	<head>
<script src="__STATIC__/admin/echarts.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="__STATIC__/library/element-ui.min.css">
    <!-- 引入组件库 -->
    <script src="__STATIC__/library/element-ui.min.js"></script>
		<meta charset="UTF-8">
		<title></title>
	</head>
<!-- 	<body>
		<div class="page" style="z-index: 99;background:#fff;padding-left: 0%;height:100%">
			<div class="Score">
				<div class="fens">
					<img class="se" style="height:100%;background: #00adc7;" :src="week_user">
					<div class="fen">{{week}}分</div>
				</div>
			</div>
			<div class="font">本周</div>

			<div class="Score">
				<div class="fens">
					<img class="se" style="height:100%;text-align: center;background: #87d7a5;" :src="month_user">
					<div class="fen">{{month}}分</div>
				</div>
			</div>
			<div class="font">本月</div>

			<div class="Score">
				<div class="fens">
					<img class="se" style="height:100%;background: #fbad4c;" :src="year_user">
					<div class="fen">{{year}}分</div>
				</div>
			</div>
			<div class="font">本年</div>
			<div>
				积分规则：<br>
				1小时10分<br>
				   1天的分数是80分<br>
				   每周的优秀员工 加80 分  <br>
   每月的优秀员工 加400分<br>
   一年的优秀员工 加800分<br>
				
</div>	
		</div>
	</body> -->
	<script>
	new Vue({
		el:'.page',
		data:{
			 week:0,
			 month:0,
			 year:0,
			 week_user:'',
			 month_user:'',
			 year_user:'',
			 prompt:[]
		},
		created(){
        	$.get('<?php echo url("admin/index/right"); ?>',
                    (rtnData)=>{
                         this.week=rtnData.week
						 this.month=rtnData.month
						 this.year=rtnData.year
						 this.week_user='__UPLOADS__'+rtnData.week_user
						 this.month_user='__UPLOADS__'+rtnData.month_user
						 this.year_user='__UPLOADS__'+rtnData.year_user
                });

        	
        	
        },
        methods:{
                }
	})
</script>
</html>





<style type="text/css">
.page{
	border-left: 1px solid #eee;
	position:fixed ;
	right: 0;
	color: #404040;
}
.Score{
		float: left;
		width: 100px;
		height: 100px;
		margin:20px 20px 5px 20px;
		padding: 1.5px;
		line-height: 100px;
		border: 1px solid rgb(76,113,153);
		border-radius: 100%;
		text-align: center;
	}
	.Score .fens{
		width: 95px;
		height: 95px;
		border: 1px solid rgb(76,113,153);
		border-radius: 100%;
		overflow: hidden;
		position: relative;
	}
	.Score .fens .se{
		width: 110%;
		height: 66.6%;
		margin:auto;
		border-radius: 0;
		background: rgb(217,150,148);
		position: absolute;
		bottom: 0;
		left: -4px;
	}
	 .Score .fens  .fen{
			position: absolute;
			top:0;
			width: 100%;
			height: 100%;
			color: red;
			text-align: center;
	}
	.font{
		width: 100px;
		margin:0 20px;
		text-align: center;
	}
</style> 
  <link rel="stylesheet" type="text/css" href=" __STATIC__/admin/iconfont_left.css"/>
<link rel="stylesheet" type="text/css" href=" __STATIC__/admin/iconfont_left_there.css"/>
<link rel="stylesheet" type="text/css" href=" __STATIC__/admin/iconfont_left_two.css"/>
<link rel="stylesheet" type="text/css" href=" __STATIC__/admin/iconfont_left_proche.css"/>
 <style>
 header {

left: 202px !important;

}
.write_box {
    width: 85% !important;
    margin: 10px 0 0 210px !important;
    background-color: #fff;
    padding: 10px;
}
.is-active{background-color: rgb(67, 74, 80) !important;}
.cjp_box {

margin-left: 173px;margin-top: 10px !important;
width: 85.5% !important;
height: auto;
background-color: #fff;
margin-left: 212px !important;
padding: 0 !important;

} .cjp_choose {

margin-left: 0 !important;
margin-top: 10px;

} 
.cjp_content {

    margin-left: 12px !important;
    margin-top: 10px;
    width: auto;
    height: auto;
    background-color: #f4f8fb;

}
.cjp_head {

    font-size: 22px;
    margin-left: 20px !important;
    margin-top: 10px;
    padding-top: 10px;

}
 </style>
<div class="left_menu lbs" id="left_menu" style="z-index: 99;">
    <div class="f_headerphoto">
        <div class="f_photo" @mouseover='hidyin(true)' @mouseout='hidyin(false)'>
            <!-- __UPLOADS__<?php echo \think\Session::get('imageUrl'); ?> -->
             
         </div>
        <div class="f_intro">
            <p><?php echo \think\Session::get('user_name'); ?></p>
            <p>管理员</p>
        </div> 
    </div>
<el-col :span="12">
    <el-menu
      :default-active="menu_index"
      class="el-menu-vertical-demo"
      @open="handleOpen"
      @close="handleClose"
      background-color="#545c64"
      text-color="#fff"
      active-text-color="white">
      <div onclick="jump()">
       <el-menu-item index="1" >
        <i class="glyphicon glyphicon-home"></i>
        <span slot="title">我的工作台</span>
      </el-menu-item>
      </div>
            <el-submenu index="2" >
            <template slot="title" >
              <!-- <i class="el-icon-location"></i> -->
              <span class="glyphicon glyphicon-folder-open"></span>
              <span>办公管理</span>
            </template>
            <div onclick="jump_qt()">
              <el-menu-item index="2-1"><span class="glyphicon glyphicon-stats"></span>工作报表</el-menu-item>
            </div>
            <div onclick="jump_twe()" >
                <el-menu-item index="2-2"><span class="glyphicon glyphicon-book"></span>统计报表</el-menu-item>
            </div>
            <div onclick="jump_seven()">
                <el-menu-item index="2-3"><span class="glyphicon glyphicon-time"></span>考勤管理</el-menu-item>
            </div>
            <div onclick="jump_eight()" >
                <el-menu-item index="2-4"><span class="glyphicon glyphicon-pushpin"></span>指派</el-menu-item>
            </div>
            <div onclick="jump_three()">
                <el-menu-item index="2-5"><span class="glyphicon glyphicon-bell"></span>消息</el-menu-item>
            </div>
          </el-submenu>
            <el-submenu index="3" >
            <template slot="title" >
              <!-- <i class="el-icon-location"></i> -->
              <span class="glyphicon glyphicon-cog"></span>
              <span>生产管理</span>
            </template>
            <div onclick="jump_four()">

              <el-menu-item index="3-1"><span class="glyphicon glyphicon-stats"></span>生产报表</el-menu-item>
            </div>
            <div onclick="jump_five()" >
                <el-menu-item index="3-2"><span class="glyphicon glyphicon-eye-open"></span>问题巡查</el-menu-item>
            </div>
            <div onclick="jump_cjg()">
                <el-menu-item index="3-3"><span class="glyphicon glyphicon-usd"></span>计价单</el-menu-item>
            </div>
          </el-submenu>
            <el-submenu index="4" >
            <template slot="title" >
              <!-- <i class="el-icon-location"></i> -->
              <span class="glyphicon glyphicon-shopping-cart"></span>
              <span>库存管理</span>
            </template>
            <div onclick="jump_six()">
              <el-menu-item index="4-1"><span class="glyphicon glyphicon-paperclip"></span>钢材库存</el-menu-item>
            </div>
            <div onclick="jump_rcl()" class="f_box">
                <el-menu-item index="4-2"><span class="glyphicon glyphicon-save"></span>物资库存</el-menu-item>
            </div>
            
          </el-submenu>
          <el-submenu index="5" >
            <template slot="title" >
              <!-- <i class="el-icon-location"></i> -->
              <span class="glyphicon glyphicon-repeat"></span>
              <span>系统管理</span>
            </template>
            <div onclick="jump_yggl()">
              <el-menu-item index="5-1"><span class="glyphicon glyphicon-user"></span>用户管理</el-menu-item>
            </div>
            <div onclick="jump_jjg()" class="f_box">
                <el-menu-item index="5-2"><span class="glyphicon glyphicon-road"></span>权限管理</el-menu-item>
            </div>
            
          </el-submenu>
     
     
  
    </el-menu>
  </el-col>
 
</div>
<script type="text/javascript">

 new Vue({
        el:'#left_menu',
        data:{
        	six:false,
           controller:"Index",
           hid:false,
           action:'',
           f_six:false,
           menu_index:'1',

        },
        created(){
        	this.init();

            this.action = '<?php echo request()->action(); ?>' 
            if(this.action == 'index' && this.controller == 'Index'){
                this.menu_index = '1'
            }else if ( this.controller == 'Task') {
                this.menu_index = '2-1'
            }else if ( this.controller == 'Index' && this.action == 'work') {
                this.menu_index = '2-2'
            }else if (this.action == 'kaoqing') {
                this.menu_index = '2-3'
            }else if ( this.action == 'zhipan') {
                this.menu_index = '2-4'
            }else if ( this.controller == 'message') {
                this.menu_index = '2-5'
            }else if (this.controller == 'Product') {
                this.menu_index = '3-1'
            }else if (this.controller == 'Question') {
                this.menu_index = '3-2'
            }else if (this.action == 'gc_djb' || this.action == 'gc_rk' || this.action == 'gc_ck') {
                this.menu_index = '4-1'
            }else if (this.controller == 'Information') {
                this.menu_index = '5-1'
            }
        },
        methods:{
        	init(){
                this.controller="<?php echo request()->controller(); ?>";
        	},
        	 isShow(){
        	this.six=!this.six;
        },
         f_isShow(){
            this.f_six=!this.f_six
        },
        handleOpen(key, keyPath) {
        console.log(key, keyPath);
      },
      handleClose(key, keyPath) {
        console.log(key, keyPath);
      },
      getcallback() {
        console.log(22)
      }
     
        }
    })
 function jump(){
 	 window.location.href='<?php echo url('admin/index/index'); ?>'
 }
 function jump_twe(){
 	window.location.href='<?php echo url('admin/index/work'); ?>'
    // $('.container').load('../index/work.html .container' )
 }

 function jump_three(){
 	window.location.href='<?php echo url('admin/baobiao/message'); ?>'
 }
 function jump_four (){
 	window.location.href='<?php echo url('admin/product/index'); ?>'
 }
 function jump_five(){
 	window.location.href='<?php echo url('admin/question/index'); ?>'
 }
  function jump_six(){
 	window.location.href='<?php echo url('admin/stock/gc_djb'); ?>'
 }
 function jump_cjg(){
    window.location.href='<?php echo url('admin/index/proche_cjg'); ?>'
 }
 function jump_rcl(){
    window.location.href='<?php echo url('admin/index/proche_rcl'); ?>'
 }
 function jump_dzcj(){
    window.location.href='<?php echo url('admin/index/proche_dzcj'); ?>'
 }
 function jump_bzjy(){
    window.location.href='<?php echo url('admin/index/proche_bzjy'); ?>'
 }
 function jump_jjg(){
    window.location.href='<?php echo url('admin/index/proche_jjg'); ?>'
 }
 function jump_qt(){
    window.location.href='<?php echo url('admin/task/index'); ?>'
 }
 function jump_seven(){
    window.location.href='<?php echo url('admin/baobiao/kaoqing'); ?>'
 }
 function jump_eight(){
    window.location.href='<?php echo url('admin/baobiao/zhipan'); ?>'
 }

 function jump_yggl(){
    window.location.href='<?php echo url('admin/information/index'); ?>'
 }
</script>

<div class="container">
<div class="index_content_center" style="display:flex;">
    <div class="center_3" style="display:inline-block">
        <table class="table table-bordered" style="text-align: center;border-spacing:3px;border-collapse:separate; ">
            <h1>基本的表格布局</h1>
            <thead style="background-color:#1570B6;color:#fff;text-align: center; border-collapse:separate;
            border-spacing:5px">
              <tr >
                <td style="padding: 25px 0;">出库时间</td>
                <td style="padding: 25px 0;">名称</td>
                <td style="padding: 25px 0;">详情</td>
                <td style="padding: 25px 0;">单位</td>
                <td style="padding: 25px 0;">出库数量</td>
                <td style="padding: 25px 0;">备注</td>
                <td style="padding: 25px 0;">出库员</td>
              </tr>
            </thead>
            <tbody>
                <tr style="background-color:#cfd7f7">
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    
                  </tr>
                  <tr style="background-color:#e9ecfb">
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                  </tr>
                  <tr style="background-color:#cfd7f7">
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    
                  </tr>
                  <tr style="background-color:#e9ecfb">
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                  </tr>
                  <tr style="background-color:#cfd7f7">
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    
                  </tr>
                  <tr style="background-color:#e9ecfb">
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                  </tr>
                  <tr style="background-color:#cfd7f7">
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    
                  </tr>
                  <tr style="background-color:#e9ecfb">
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                    <td>Bangalore</td>
                    <td>Tanmay</td>
                  </tr>
            </tbody>
          </table>
          <div style="display:flex;justify-content: space-around;width: 100%;">
            <div>
                <select name="" id="">
                    <option value="2019">2019</option>
                </select>
            </div>
          <el-pagination
          background
          layout="prev, pager, next"
          :total="1000">
        </el-pagination>
        <div>
            <span class="xialiaobtn">打印</span>
            <span class="xialiaobtn">确认</span>
        </div>
            
        </div>
    </div>
    <div class="center_4">
        <h1>物品出库登记表</h1>
        <ul>
            <li><span class="biaoti">出库时间</span><span style="background:#dee8fb;flex:1"></span></li>
            <li><span class="biaoti">名称</span><span style="background:#dee8fb;flex:1"></span></li>
            <li><span class="biaoti">详情</span><span style="background:#dee8fb;flex:1"></span></li>
            <li><span class="biaoti">单位</span><span style="background:#dee8fb;flex:1"></span></li>
            <li><span class="biaoti">出库数量</span><span style="background:#dee8fb;flex:1"></span></li>
            <li><span class="biaoti">备注</span><span style="background:#dee8fb;flex:1"></span></li>
            <li><span class="biaoti">出库员</span><span style="background:#dee8fb;flex:1"></span></li>
        </ul>
        <div style="margin:20px">
            <span class="xialiaobtn">查询</span>
            <span class="xialiaobtn">出库</span>
        </div>
    </div>
</div>
    
    
  
        </div>
     
  
    
 
<script type="text/javascript" src="__STATIC__/admin/index/js/index.js?126">
</script>
<script type="text/javascript" src="__STATIC__/admin/index/js/index2.js"></script>


<!-- 改 -->
<footer class="footer" style="text-align: center;position: fixed;bottom: 0;right: 45px;">
	 
	Copyright © 2004-2019 &nbsp;  gz mogut Information Technology Co.,ltd
</footer>
<!-- 底部 -->
<script type="text/javascript">
$(document).ready(function(){
	$(".left_menu ul li").click(function(event){
		event.preventDefault();
		console.log($(this).siblings().find('a,p'))
		$(this).css({"background":"#5E5B5B","border-left":"green 4px solid",
			"color":"#5d9cec"})
		.siblings().css({"background":"#36404a","border-left":"#36404a 4px solid"})
		$(this).find('a,p').css("color","#5d9cec")
		$(this).siblings().find('a,p').css("color","white")
	})
});
</script>
</body>
</html>
<script type="text/javascript">
 






     
var mv =  new Vue({
    el: ".container",
    data: {
     
    },
    filters:{
     
    },
    created(){
        
            
        },
     mounted(){
     
     
    }, 
    methods:{
  
    }
  })

</script>



