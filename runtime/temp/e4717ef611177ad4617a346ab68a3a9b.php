<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:73:"D:\wamp64\www\oa\oa_yxs\public/../application/admin\view\index\index.html";i:1559006423;s:65:"D:\wamp64\www\oa\oa_yxs\public/../application/admin\view\top.html";i:1559006423;s:67:"D:\wamp64\www\oa\oa_yxs\public/../application/admin\view\right.html";i:1559006423;s:66:"D:\wamp64\www\oa\oa_yxs\public/../application/admin\view\left.html";i:1559006423;s:66:"D:\wamp64\www\oa\oa_yxs\public/../application/admin\view\foot.html";i:1559006423;}*/ ?>
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
<div class="index_content_center">
    <div class="center_1" style="display:inline-block">

    <!--   <div class="center_1a">
         <img src="__STATIC__/admin/index/images/20181206171359.jpg" alt="">
         <div class="rounded" @mouseover='hidyin(true)' @mouseout='hidyin(false)'>
            
           <img :src="'__UPLOADS__'+user.imageUrl" alt="">
           <div class="yin"  v-show='hid' data-toggle="modal" data-target="#myModal">更换头像</div>
         </div>
      </div> -->
      
      <el-row  class="mb_10">
        <el-col :span="4" style="text-align:left" class="box_title">考勤签到</el-col>
        <el-col class="huise" :span="3" :offset="11">
            {{week}}
         
          </el-col>
        <el-col class="huise"  :span="3"> {{nowtime}}</el-col>
        <el-col :span="3" style="position:relative">   <i style="padding-top: 3px;" class="el-icon-date"></i> 
          <el-date-picker 
          @change="has_choise_time"
          v-model="choise_time"
          type="date"
          class="ycshij"
          placeholder="选择日期">
        </el-date-picker>
        
        </el-col>
      

    </el-row>
    <div class="clear"></div>
 <div class="f_center_1_left">
  <!--  <p style="font-size: 1em;"><strong>{{user.user_cate}}</strong></p>
       <h3 style="margin-bottom: 0.1em;"><strong>{{user.user_name}}</strong></h3>
   -->
   <div class="f_am_time">
     <div class="f_am_right">上午</div>
     <div class="f_am_left">
       <div><span class="glyphicon glyphicon-upload"></span> <b v-if="clock.forenoon_shang">{{clock.forenoon_shang|timeToHm("上班打卡时间")}}</b> <b v-else>暂无打卡记录</b> </div>
       <div><span class="glyphicon glyphicon-download"></span><b v-if="clock.forenoon_xia">{{clock.forenoon_xia|timeToHm("下班打卡时间")}}</b> <b v-else>暂无打卡记录</b> </div>
     </div>
   </div>
   <div class="f_am_time f_margin_bottom">
     <div class="f_am_right">下午</div>
     <div class="f_am_left">
       <div><span class="glyphicon glyphicon-upload"></span><b v-if="clock.afternoon_shang">{{clock.afternoon_shang|timeToHm("上班打卡时间")}}</b> <b v-else>暂无打卡记录</b> </div>
       <div><span class="glyphicon glyphicon-download"></span><b v-if="clock.afternoon_xia">{{clock.afternoon_xia|timeToHm("下班打卡时间")}}</b> <b v-else>暂无打卡记录</b> </div>
     </div>
   </div>
    <el-button type="primary" :disabled='disabled' @click="submitForm" >打卡 {{shi_fen_miao}}</el-button>
    
  
    <!-- <a href="<?php echo url('task/index'); ?>" class="btn btn-lg btn-info " style="margin-top: 12px;width: 100%;">任务管理</a> -->
 </div> 
<div class="center_2">
    <div class="left_mb_10_titile">异常情况</div>
      <div class="f_layout">
        <div class="cneter_2b" > 
              <el-select v-model="yc_type" >
                  <el-option
                    v-for="item in exception"
                    :key="item.value"
                    :label="item.label"
                    :value="item.value">
                  </el-option>
                </el-select>
          </div>
          
          <div class="cneter_2b" >
            <!-- <span>班次：</span> -->
            <el-select v-model="yc_jd" >
              <el-option
                v-for="item in options"
                :key="item.value"
                :label="item.label"
                :value="item.value">
              </el-option>
            </el-select>
           
          </div>
      </div>
          
         <!--  改 -->
          <!-- <div class="cneter_2ba"><img src="__STATIC__/admin/index/images/rili.png" alt=""></div> -->
          <!-- <div class="cneter_2b">
            <span>时间：</span>
              <el-date-picker
              v-model="value2"
              type="datetime"
              placeholder="选择日期时间">
            </el-date-picker>
          
          </div> -->
          <textarea rows="10" cols="20" placeholder="说明原因" name="reason" id="reason"></textarea> 
          <button href="#" class="cneter_2c btn btn-primary pull-right" @click='holiday'>确认</button>
    
    </div>
</div>
    
    
    <div class="f_center_4">
      <div class="f_title">
        <h4  class="box_title">代办事宜</h4>
        <div class="f_title_right">
        <div><span class="f_bg_color f_bg_color_one"></span>着急(<span>2</span>)</div>
        <div><span class="f_bg_color f_bg_color_twe"></span>重要(<span>2</span>)</div>
        <div><span class="f_bg_color f_bg_color_three"></span>一般(<span>2</span>)</div>
          
        </div>
      </div>
      <div class="f_message">
        <ul>
          <li v-for='(item,index) in daibanwork' ><span class="glyphicon glyphicon-tag " id="f_bg_color_one"></span>{{item.job}}</li>
          <!-- <li><span class="glyphicon glyphicon-tag " id="f_bg_color_twe"></span>锻件网手机加满人</li>
          <li><span class="glyphicon glyphicon-tag " id="f_bg_color_three"></span>整理全部产品照片</li> -->
          <li v-if="daibanwork == ''">今日事今日毕，很优秀！</li>
        </ul>
      </div>
    </div>
    <div class="f_center_5">
      <h4>优秀员工</h4>
      <div class="f_week_good">
        <div class="f_week_circle">
          <img :src="week_user">
        </div>
        <div>本周</div>
      </div>
      <div class="f_week_good">
        <div class="f_week_circle">
          <img :src="month_user">
        </div>
        <div>本月</div>
      </div>
       <div class="f_week_good">
        <div class="f_week_circle">
          <img :src="year_user">
        </div>
        <div>本年</div>
      </div>
    </div>


    
    <div class="f_buttom_box">
      <div>
         <div style="display: block;" id="f_box_one">
           
        <div class="cneter_3" >
            <el-row>
                <el-col :span="4" style="text-align:left" class="box_title">工作统计</el-col>
            </el-row>
            <el-row class="align-center">
              <el-col :span="12" >工作得分：{{fenshu}}</el-col>
              <el-col :span="12" >工作数量</el-col>
          </el-row>
            <div class="clear"></div>
          <div id="fenshu"  class="fl"  style="width: 50%;height:288px;"></div>
          <div id="shuliang" class="fl"   style="width: 50%;height:288px;"></div>

        </div>
      </div>
        <!-- <div style="display: none;" id="f_box_twe">
          <div class="cneter_3 f_center_3" >
            <div class="f_left_box">
              <h4>建议</h4>
              <form action="" >
                <div class="f_form">
                  <div>匿名&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" value="匿名" name="one" checked="checked">
                </div>
                <div class="f_input_m">
                  实名&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" value="实名" name="one" >
                </div>
                </div>
                <textarea name="" id="f_area_box" cols="35" rows="9" placeholder="请输入内容"></textarea>
                <input type="submit" value="确认" class="btn btn-primary f_btn_bottom">
              </form>
              
            </div>
            <div class="f_left_box f_left_box_one">
              <h4>投票</h4>
              <el-select v-model="value_one" placeholder="请选择">
                      <el-option
                        v-for="item in options_one"
                        :key="item.value"
                        :label="item.label"
                        :value="item.value">
                      </el-option>
                </el-select>
                <el-input
                    type="textarea"
                    :rows="2"
                    placeholder="请输入内容"
                    v-model="f_textarea_one">
                  </el-input>
                <el-input v-model="f_input_one" placeholder="选项1" style="width: 50%"></el-input>
                <el-input v-model="f_input_twe" placeholder="选项2" style="width: 50%"></el-input>
                <el-input v-model="f_input_three" placeholder="选项3" style="width: 50%"></el-input>
              <input type="submit" value="确认" class="btn btn-primary f_btn_box">
            </div>
          </div>
        </div> -->
      </div>
     
      
    <div class="f_data_box">
      <div class="f_data_left">
        <span id="testView"></span>
        <div id="test2"></div>
        
      
      </div>
      <div class="f_data_right">
        <h4 class="f_data_title_one" style="margin-bottom:10px">事件提醒</h4>
        <div style="width: 214px; height: 85px; border: 1px solid red;padding: 5px;overflow-y: scroll;">
          <p v-for="tx in tx_data">{{tx.tx_title}}</p>
        </div>
        <h4 style="margin-bottom: 10px;margin-top: 30px;">添加事件</h4>
        <textarea rows="4" cols="28" placeholder="请输入内容" v-model="tx_title"></textarea>
        <button class="btn btn-primary pull-right f_data_btn" @click="addTixing">确认</button> 
      </div>

      
    </div>
    </div>
    
  <!-- <div class="cneter_3" style="margin-right: 2%"> -->
    
  <!-- </div> -->
     
        
    

    </div>
   
     
    </div>

   
    
    


    <!-- 模态框（Modal） -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="width: 35%;margin: auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            &times;
          </button> 
        </div>
        
        <div class="modal-body">
          <div>
          <div>
            <el-upload

                class="avatar-uploader"
                action="<?php echo url('update'); ?>"
                :show-file-list="false"
                :on-success="handleAvatarSuccess"
                :before-upload="beforeAvatarUpload">
                <img v-if="imageUrl" :src="imageUrl" class="avatar">
                <i v-else class="el-icon-plus avatar-uploader-icon"></i>
          </el-upload>
          </div>
        </div>
        <div class="modal-footer"> 
          <input type="submit" class="btn btn-primary" value="更改头像" @click='Changepicture'>  
        </div>
      
      </div><!-- /.modal-content -->
    </div><!-- /.modal -->
  </div> 

<!-- 模态框结束 -->
</div>
</div></div></div>
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
  $(function() {

    $('#Attendance_status').change(function() {
      var option = $('#Attendance_status option:selected')
        // alert(option.val())
        if (option.val() == "迟到") {
          $('#f_box_one').show().siblings().hide()
        }else {
          $('#f_box_twe').show().siblings().hide()
        }
    });
  });







     
var mv =  new Vue({
    el: ".container",
    data: {
      week:'',//周
      nowtime:'',//当前月日
      shi_fen_miao:'',//时分秒
      choise_time:'',//自己选择日期
      f_textarea_one:'',
      f_input_one:'',
      yc_type:'迟到',
      yc_jd:'上午',
      f_input_twe:'',
      f_input_three:'',
      value:'',
      value2:'',
      hid:false,
      imageUrl: '',
      imgs:'',
      user:<?php echo $users; ?>,
      clock:<?php echo $data; ?>,
      disabled:false,
      tx_title:'',
      exception: [{
          value: '迟到',
          label: '迟到'
        },{
          value: '早退',
          label: '早退'
        },{
          value: '矿工',
          label: '矿工'
        },
      ],
      options: [{
          value: '0',
          label: '上午'
        },
        {
          value: '1',
          label: '下午'
        }],
        options_one: [{
          value: '选项1',
          label: '黄金糕'
        }, {
          value: '选项2',
          label: '双皮奶'
        }, {
          value: '选项3',
          label: '蚵仔煎'
        }, {
          value: '选项4',
          label: '龙须面'
        }, {
          value: '选项5',
          label: '北京烤鸭'
        }],
        value_one: '',
        week_user:'',
			 month_user:'',
			 year_user:'',
       fenshu:0,
        daibanwork:<?php echo $daibanwork; ?>,
        year:'',
        weeka :new Array("星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"),
        tx_time:'',
        tx_data:[],
    },
    filters:{
      timeToHm:function(t,str){
         if(!isNaN(t*1000) ){
          var d = new Date(t*1000)
          return str+d.getHours()+":"+d.getMinutes()+":"+d.getSeconds()
         }else{
           return t
         }
      
      }
    },
    created(){
        	$.get('<?php echo url("admin/index/right"); ?>',
                    (rtnData)=>{
                      this.week_user='__UPLOADS__'+rtnData.week_user
                      this.month_user='__UPLOADS__'+rtnData.month_user
                      this.year_user='__UPLOADS__'+rtnData.year_user
            });
              
            var zongfen_a  = JSON.parse('<?php echo $zongfen; ?>')
            for (var i = 0; i < zongfen_a.length; i++) {
              this.fenshu+=Number(zongfen_a[i]);
            }

            
               
        },
     mounted(){
     
       var now = new Date();
       var ttime= new Date().getTime()
      var year = now.getFullYear(); //得到年份
      this.year = year
       var month = now.getMonth()+1;//得到月份
       var date = now.getDate();//得到日期
       var shijian=year+'/'+month+'/'+date+''
       var  forenoonshang=new Date(shijian +' 08:30').getTime();
       var forenoonxia=new Date(shijian +' 12:30:00').getTime();;
       var afternoonshang=new Date(shijian +' 14:30:00').getTime();;
       var afternoonxia=new Date(shijian +' 19:00:00').getTime();;
       this.nowtime = month+"月"+date+"日"
       this.week = this.weeka[now.getDay()]
       var that = this
       that.tx_time = year+"-"+ Appendzero(month)+"-"+Appendzero(date)
       setInterval(function () {
        var now = new Date();
          that.shi_fen_miao = now.getHours()+":"+now.getMinutes()+":"+now.getSeconds()
       },1000)
      
     if(forenoonshang<ttime&&forenoonxia>ttime){
            // 上午上班
            if(this.clock.forenoon_shang){this.disabled=true;}
           
        }else if(forenoonxia<ttime&&afternoonshang>ttime){
            // 上午下班
       if(this.clock.forenoon_xia){this.disabled=true;}
        }else if(afternoonshang<ttime&&afternoonxia>ttime){
            // 下午上班
           if(this.clock.afternoon_shang){this.disabled=true;}
        }else if(afternoonxia>ttime){
            // 下午下班
        if(this.clock.afternoon_xia){this.disabled=true;}
        }
        this.getTixing()
        layui.use('laydate', function(){
          var laydate = layui.laydate;
          
          laydate.render({
          elem: '#test2'
          ,mark: <?php echo $laydate_mark; ?>
          ,position: 'static'
          ,change: function(value, date){ //监听日期被切换
            that.tx_time = value
            that.getTixing()
          },
        });
        
        });
    }, 
    methods:{
      
      addTixing(){
        var that = this

          // 添加事件提醒
          console.log(this.tx_title)
          if(this.tx_title == ''){
            that.$message.error('请输入内容');
            return

          }
          $.get("<?php echo url('kaoqin/add_tixing'); ?>",{tx_title:this.tx_title,tx_time:this.tx_time},function (res) {
            that.tx_data.push({tx_title:that.tx_title})
            that.tx_title = ''
            that.$message.success('添加成功！');
        })
      },
      getTixing(){
        var that = this
          // 获取事件提醒
          console.log(this.tx_title)
          $.get("<?php echo url('kaoqin/get_tixing'); ?>",{tx_time:this.tx_time},function (res) {
            if(res){
              that.tx_data = res

            }
        })
      },
      has_choise_time(e){
        // 考勤时间切换后
        var choist_t  = new Date(e)
        this.nowtime = Appendzero(choist_t.getMonth()+1)+"月"+Appendzero(choist_t.getDate())+"日"
        this.week = this.weeka[choist_t.getDay()] 
        this.show_qiandao_data()
      },
      show_qiandao_data(){
        var that = this
        $.get("<?php echo url('kaoqin/list_by_year'); ?>",{time:this.year + "年"+this.nowtime},function (res) {
          console.log(res)
          if (res) {
            that.clock = res
          }else{
            that.clock = {  forenoon_shang: null, forenoon_xia: null, afternoon_shang: null, afternoon_xia: null }
          }
        })
      },
      //绑定打卡按钮函数
      submitForm(e){
        window.location.href='<?php echo url('clock'); ?>'
      },
      //鼠标放上头像显示“更换头像”
      hidyin(e){
        this.hid=e
        console.log(this.value);
      },

       handleAvatarSuccess(res, file) {
        this.imageUrl = URL.createObjectURL(file.raw);
        this.imgs=res;
      },
      beforeAvatarUpload(file) {
        const isJPG = file.type === 'image/jpeg';
        const isLt2M = file.size / 1024 / 1024 < 2;
        console.log(file);
        if (!isJPG) {
          this.$message.error('上传头像图片只能是 JPG 格式!');
        }
        if (!isLt2M) {
          this.$message.error('上传头像图片大小不能超过 2MB!');
        }
        return isJPG && isLt2M;
      },
      Changepicture(e){
        if (this.imgs=='') {
          return
        }
        $.get('<?php echo url("Changepicture"); ?>',
          {
           imgs:this.imgs

          },(rtnData)=>{
             this.user.imageUrl=this.imgs
                 this.$message({
                          message: '更改成功！',
                          type: 'success'
                });
          });
      },


      holiday(){
      if(this.yc_jd==''){
        this.$message('请选择上午还是下午');
        return;
      }

        var reason=$('#reason').val();
        var time=new  Date(this.value2).getTime()/1000;
        
         $.get('<?php echo url("Attendance"); ?>',
          {
            Attendance_status:this.yc_type,
            classes:this.yc_jd,
            time:this.year + "年"+this.nowtime,
            reason:reason

          },(rtnData)=>{
               $('#reason').val('');
                this.yc_jd='';
                this.value2='';
                  this.$message({
                    message: '提交成功！',
                    type: 'success'
                  });
                this.show_qiandao_data()
          });
      }
    }
  })

</script>




 <script type="text/javascript">

         


                // 基于准备好的dom，初始化echarts实例
        var Chart = echarts.init(document.getElementById('fenshu'));

        // 指定图表的配置项和数据
        var option = {
            
            tooltip: {
                 trigger: 'axis',
                axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                    type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
                }
            },
              grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
           
            xAxis: {
               type : 'category',
                data: <?php echo $zhouci; ?>,
                 axisTick: {
                        alignWithLabel: true
                    }
            },
            yAxis: [
               {
                    type : 'value'
                }
            ],
            series: [{
                name: '总分',
                type: 'bar',
                color:'#477dea',
                
                data: <?php echo $zongfen; ?>
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        Chart.setOption(option);

var myChart = echarts.init(document.getElementById('shuliang'));

option = {
  
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        // orient: 'vertical',
        // top: 'middle',
        bottom: 10,
        left: 'center',
        data: ['产品', '文章','办公','视频','图片','外出','其他'],
    },
    series : [
        {
            type: 'pie',
            radius : '40%',
            center: ['50%', '45%'],
            selectedMode: 'single',
            data:<?php echo $main; ?>,
            // data:[
            //     {value:130,name: '产品',itemStyle:{color:'#477dea'}},
            //     {value:4, name: '文章',itemStyle:{color:'#9b9b9b'}},
            //     {value:10, name: '办公',itemStyle:{color:'#f3b745'}},
            //     {value:4, name: '视频',itemStyle:{color:'#c51a16'}},
            //     {value:20, name: '图片',itemStyle:{color:'#4ba151'}},
            //     {value:6, name: '网维',itemStyle:{color:'#e9403c'}},
            //     {value:60, name: '外出',itemStyle:{color:'#1343a4'}},
            //     {value:36, name: '其他',itemStyle:{color:'#5d5d5d'}}
            // ],
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }
    ]
};

myChart.setOption(option);
    </script>