<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:81:"G:\wamp3.1.7\www\oa\oa_yxs\public/../application/admin\view\index\proche_cjg.html";i:1551350420;s:68:"G:\wamp3.1.7\www\oa\oa_yxs\public/../application/admin\view\top.html";i:1552961967;s:69:"G:\wamp3.1.7\www\oa\oa_yxs\public/../application/admin\view\left.html";i:1552962429;s:70:"G:\wamp3.1.7\www\oa\oa_yxs\public/../application/admin\view\right.html";i:1552459927;}*/ ?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/finance/finance.css" />
<link href="https://cdn.bootcss.com/bootstrap-fileinput/4.5.1/css/fileinput.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="__STATIC__/library/bootstrap/bootstrap-datetimepicker.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/library/bootstrap/bootstrap-select.min.css" />
<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="__STATIC__/library/dropify-master/dist/css/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/library/laydate/layui/css/layui.css">
    <!-- 引入jquery -->
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.0.0/jquery.min.js"></script>
    <!-- 引入bootstarpJS -->
    <script type="text/javascript" src="https://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
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
</head>
<style>
#return{
    color:inherit;
}
#return:hover{
   color:#84c1ff;
   text-decoration: underline!important;
}
header{background-color: #1570B6;}
#top_menu,#top_menu span,#exit{    color: #fff !important}
#top_menu button{   border-radius: 0 !important;}
.bell{width: 68px !important;cursor: pointer}
.bell img {

width: 25px !important;
height: auto !important;
cursor: pointer;
position: absolute;
top: -3px !important;

}
header .user_info{display: flex;width: 268px !important;}
.bell .nnum{right: 18px !important;}
</style>
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
            }else if (this.action == 'lookattendance') {
                this.menu_index = '2-3'
            }else if ( this.controller == 'Bell') {
                this.menu_index = '2-5'
            }else if (this.controller == 'Product') {
                this.menu_index = '3-1'
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
 	window.location.href='<?php echo url('admin/bell/index'); ?>'
 }
 function jump_four (){
 	window.location.href='<?php echo url('admin/product/index'); ?>'
 }
 function jump_five(){
 	window.location.href='<?php echo url('admin/index/information'); ?>'
 }
  function jump_six(){
 	window.location.href='<?php echo url('admin/index/stock'); ?>'
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
    window.location.href='<?php echo url('admin/index/lookAttendance'); ?>'
 }
 function jump_eight(){
    window.location.href='<?php echo url('admin/index/toupiao'); ?>'
 }

 function jump_yggl(){
    window.location.href='<?php echo url('admin/information/index'); ?>'
 }
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
    <div class="cjp_box">
        <div class="cjp_head">
            粗加工
        </div>
        <div class="cjp_choose">
            <button class="btn btn-default" style="outline: none;" data-toggle="modal" data-target="#addwindow">添加信息</button>
            <button class=" btn btn-default" style="outline: none;" @click="deleteChoose">删除选中项</button>
            <button class="btn btn-default" style="outline: none;" @click="preview">打印选中项</button>
            <a href="<?php echo url('exportDayInner',['proche_type'=>'rough']); ?>" class="btn btn-default" onclick="return educe()">导出Excel</a>
            <button class="btn btn-default" style="outline: none;" @click="goRecycle">回收站</button>
            <div class="col-lg-6" style="width: 160px;">
                <div class="input-group">
                    <select id="selectchoose" class="selectpicker ab" @change="selectChange">
                        <option value="-1">请选择搜索分类</option>
                        <option value="name">姓名</option>
                        <option value="time">时间</option>
                        <option value="title">产品名称</option>
                        <option value="describes">问题描述</option>
                        <option value="modify">整改情况</option>
                        <option value="workshop">对应车间</option>
                    </select>
                </div><!-- /input-group -->
            </div>
            <div id="selecttime" class="col-lg-6" style="width: 230px;">
                <div class='input-group date' style="width:200px" id='datetimepicker2'>
                    <input id="sel_time_con" type='text' class="form-control" name="time" />
                    <span class="input-group-addon" style="margin-left: -200px;">
                    <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    <span class="input-group-btn">
                        <button class="btn btn-info" type="button" style="outline: none;" @click="select">搜索!</button>
                    </span>
                </div>
            </div>
            <div id="selectother" class="col-lg-6" style="width: 300px;">
                <div class="input-group">
                    <input id="sel_other_con" type="text" class="form-control" placeholder="请输入搜索内容">
                    <span class="input-group-btn">
                        <button class="btn btn-info" type="button" style="outline: none;" @click="select">搜索!</button>
                    </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div>
        <div class="cjp_content">
            <!-- 添加工作框 -->
            <div class="modal fade" id="addwindow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">
                                添加
                            </h4>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo url('addwork'); ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group" style="display: none;">
                                    <label for="name">产品检查类型</label>
                                    <input type="text" class="form-control" id="" name="proche_type" placeholder="请输入姓名" value="rough">
                                </div>
                                <div class="form-group" style="display: none;">
                                    <label for="name">图片路径</label>
                                    <input type="text" class="form-control" id="uploadimgPath" name="img_path" placeholder="请输入姓名" value="">
                                </div>
                                <div class="form-group">
                                    <label>时间</label>
                                    <div class='input-group date' style="width:200px" id='datetimepicker'>
                                        <input id="time" type='text' class="form-control" name="time" required="required" />
                                        <span class="input-group-addon" style="margin-left: -200px;">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">姓名</label>
                                    <input type="text" class="form-control" id="" name="name" placeholder="请输入姓名" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="name">产品名称</label>
                                    <input type="text" class="form-control" id="" name="title" placeholder="请输入产品名称" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="name">产品尺寸</label>
                                    <input type="text" class="form-control" id="" name="size" placeholder="请输入产品尺寸" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="name">问题描述</label>
                                    <input type="text" class="form-control" id="" name="describes" placeholder="请输入问题描述" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="name">整改情况</label>
                                    <input type="text" class="form-control" id="" name="modify" placeholder="请输入整改情况" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="name">对应车间</label>
                                    <input type="text" class="form-control" id="" name="workshop" placeholder="请输入对应车间" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="name">备注</label>
                                    <input type="text" class="form-control" id="" name="remarks" placeholder="请输入备注" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="name">状态</label>
                                    <select class="form-control" name="status">
                                        <option>未解决</option>
                                        <option>已完成</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="name">上传图片</label>
                                    <input id="input-id" name="work_require[]" class="file-loading" type="file" multiple> -->
                                    <label for="name">上传图片</label>
                                    <el-upload ref='uploadPic' name='pic[]' action="<?php echo url('uploadPic'); ?>" :on-success='picPath1' list-type="picture-card" :auto-upload='false' multiple='true'>
                                        <i class="el-icon-plus"></i>
                                    </el-upload>
                                    <el-dialog :visible.sync="dialogVisible">
                                        <img width="100%" :src="dialogImageUrl" alt="">
                                    </el-dialog>
                                </div>
                                <div class="form-group">
                                    <button type="button"  class="btn btn-primary" @click="uploadPic">
                                    图片上传
                                    </button>
                                </div>
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    关闭
                                </button>
                                <button type="submit"  class="btn btn-primary" >
                                    提交
                                </button>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal -->
            </div>
            <!-- 查看图片框-->
            <div class="modal fade" id="picwindow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">
                                查看图片
                            </h4>
                        </div>
                        <div class="modal-body" id="piclist">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal -->
            </div>
            <!-- 修改框 -->
            <div class="modal fade" id="updatewindow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">
                                修改
                            </h4>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo url('updatework'); ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group" style="display: none;">
                                    <label for="name">产品检查类型</label>
                                    <input type="text" class="form-control" id="" name="proche_type" value="rough">
                                </div>
                                <div class="form-group" style="display: none;">
                                    <label for="name">图片路径</label>
                                    <input type="text" class="form-control" id="updateimgPath" name="img_path" placeholder="请输入姓名" value="">
                                </div>
                                <div class="form-group">
                                    <label>时间</label>
                                    <div class='input-group date rl_time' style="width:200px" id='datetimepicker1'>
                                        <input id="time" type='text' class="form-control" name="time" :value="message.time" />
                                        <span class="input-group-addon" style="margin-left: -200px;">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group" style="display: none;">
                                    <label for="name">id</label>
                                    <input type="text" class="form-control" id="" name="id" :value="message.id">
                                </div>
                                <div class="form-group">
                                    <label for="name">姓名</label>
                                    <input type="text" class="form-control" id="" name="name" :value="message.name">
                                </div>
                                <div class="form-group">
                                    <label for="name">产品名称</label>
                                    <input type="text" class="form-control" id="" name="title" :value="message.title"></input>
                                </div>
                                <div class="form-group">
                                    <label for="name">产品尺寸</label>
                                    <input type="text" class="form-control" id="" name="size" :value="message.size">
                                </div>
                                <div class="form-group">
                                    <label for="name">问题描述</label>
                                    <input type="text" class="form-control" id="" name="describes" :value="message.describes">
                                </div>
                                <div class="form-group">
                                    <label for="name">整改情况</label>
                                    <input type="text" class="form-control" id="" name="modify" :value="message.modify">
                                </div>
                                <div class="form-group">
                                    <label for="name">对应车间</label>
                                    <input type="text" class="form-control" id="" name="workshop" :value="message.workshop">
                                </div>
                                <div class="form-group">
                                    <label for="name">备注</label>
                                    <input type="text" class="form-control" id="" name="remarks" :value="message.remarks">
                                </div>
                                <div class="form-group">
                                    <label for="name">状态</label>
                                    <select class="form-control" name="status" :value="message.status">
                                        <option>未解决</option>
                                        <option>已完成</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">重新上传图片</label>
                                    <el-upload ref='updatepic' name='pic[]' action="<?php echo url('uploadPic'); ?>" :on-success='picPath2' list-type="picture-card" :auto-upload='false' multiple='true'>
                                        <i class="el-icon-plus"></i>
                                    </el-upload>
                                    <el-dialog :visible.sync="dialogVisible">
                                        <img width="100%" :src="dialogImageUrl" alt="">
                                    </el-dialog>
                                </div>
                                <div class="form-group">
                                    <button type="button"  class="btn btn-primary" @click="updatePic">
                                    图片上传
                                    </button>
                                </div>
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    关闭
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    提交修改
                                </button>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal -->
            </div>
            <!-- 异常情况框 -->
            <div class="modal fade" id="abnormal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">
                                异常情况
                            </h4>
                        </div>
                        <div class="modal-body" id="piclist">
                            <form action="<?php echo url('updateAbnormal'); ?>" method="post">
                                <div class="form-group" style="display: none;">
                                    <label for="name">产品检查类型</label>
                                    <input type="text" class="form-control" id="" name="proche_type" value="rough">
                                </div>
                                <div class="form-group" style="display: none;">
                                    <label for="name">id</label>
                                    <input type="text" class="form-control" id="" name="id" :value="abnormalMessage.id">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" style="height: 300px;" name="abnormalMessage" :value="abnormalMessage.why"></textarea>
                                </div>
                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                <button type="submit" class="btn btn-default">提交异常</button>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal -->
            </div>
            <table class="table table-bordered table-hover" style="text-align: center;">
                <tr>
                    <th>序列</th>
                    <th>
                        <input type="checkbox" value="" name="checkall" />
                    </th>
                    <th style="width: 6%;">时间</th>
                    <th style="width: 6%;">姓名</th>
                    <th style="width: 7%;">产品名称</th>
                    <th style="width: 7%;">产品尺寸</th>
                    <th>问题描述</th>
                    <th>整改情况</th>
                    <th style="width: 5%;">对应车间</th>
                    <th>备注</th>
                    <th style="width: 5%;">状态</th>
                    <th style="width: 20%;">操作</th>
                </tr>
                <?php foreach($cjg_list as $key=>$info): ?>
                <tr>
                    <td><?php echo $key+1; ?></td>
                    <td>
                        <input type="checkbox" value="<?php echo $info['id']; ?>" name="checkbox" />
                    </td>
                    <td><?php echo $info['time']; ?></td>
                    <td><?php echo $info['name']; ?></td>
                    <td><?php echo $info['title']; ?></td>
                    <td><?php echo $info['size']; ?></td>
                    <td><?php echo $info['describes']; ?></td>
                    <td><?php echo $info['modify']; ?></td>
                    <td><?php echo $info['workshop']; ?></td>
                    <td><?php echo $info['remarks']; ?></td>
                    <?php if($info['status']=="已完成"): ?>
                    <td style="color: red;">已完成</td>
                    <?php endif; if($info['status']=="未解决"): ?>
                    <td>未解决</td>
                    <?php endif; ?>
                    <td>
                        <button class="btn btn-danger btn-xs" style="outline: none;" @click="finish(<?php echo $info['id']; ?>)">已解决</button>
                        <button class="btn btn-info btn-xs" style="outline: none;" @click="unFinish(<?php echo $info['id']; ?>)">未解决</button>
                        <button class="btn btn-info btn-xs" style="outline: none;" data-toggle="modal" data-target="#picwindow" @click="getPic(<?php echo $info['id']; ?>)">查看图片</button>
                        <button class="btn btn-info btn-xs" style="outline: none;" data-toggle="modal" data-target="#updatewindow" @click="updateWork(<?php echo $info['id']; ?>)">修改</button>
                        <button class="btn btn-info btn-xs" style="outline: none;" data-toggle="modal" data-target="#abnormal" @click="getAbnormal(<?php echo $info['id']; ?>)">异常情况</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <div style="text-align: center;"><?php echo $cjg_list->render(); ?></div>
        </div>
        <!--startprint-->
        <!--打印内容开始-->
        <div style="display: none;" id="start">
            <table border="1" cellspacing="0" style="text-align: center;">
                <tr>
                    <th>序列</th>
                    <th style="width: 10%;">时间</th>
                    <th style="width: 8%;">姓名</th>
                    <th style="width: 7%;">产品名称</th>
                    <th style="width: 7%;">产品尺寸</th>
                    <th>问题描述</th>
                    <th>整改情况</th>
                    <th style="width: 6%;">对应车间</th>
                    <th>备注</th>
                    <th style="width: 6%;">状态</th>
                    <th>异常情况</th>
                </tr>
                <tr>
                    <td>{{printMessage.id}}</td>
                    <td>{{printMessage.time}}</td>
                    <td>{{printMessage.name}}</td>
                    <td>{{printMessage.title}}</td>
                    <td>{{printMessage.size}}</td>
                    <td>{{printMessage.describes}}</td>
                    <td>{{printMessage.modify}}</td>
                    <td>{{printMessage.workshop}}</td>
                    <td>{{printMessage.remarks}}</td>
                    <td>{{printMessage.status}}</td>
                    <td>{{printMessage.why}}</td>
                </tr>
            </table>
            <!--打印内容结束-->
            <!--endprint-->
            <div id="end"></div>
        </div>
    </div>
    <script src="https://cdn.bootcss.com/bootstrap-fileinput/4.5.1/js/fileinput.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap-fileinput/4.3.5/js/locales/zh.min.js"></script>
    <script type="text/javascript" src="__STATIC__/library/bootstrap/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="__STATIC__/library/bootstrap/bootstrap-datetimepicker.zh-CN.js"></script>
    <script type="text/javascript" src="__STATIC__/library/bootstrap/bootstrap-select.min.js"></script>
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
</body>

</html>
<script type="text/javascript">
new Vue({
    el: ".cjp_box",
    data: {
        rlShow: false,
        printMessage: {},
        message: {},
        abnormalMessage: {},
        dialogImageUrl: '',
        dialogVisible: false,
        imgPath:''
    },
    watch: {

    },
    created: function() {
        $('#selecttime').hide();
        $('#selectother').show();
    },
    methods: {
        picPath1(res, file, fileList) {
            var path = []
            fileList.forEach(function(value, i) {
                path.push(value.response);
                var aa = JSON.stringify(path);
                $("#uploadimgPath").attr("value",aa);
            })

        },
        picPath2(res, file, fileList) {
            var path = []
            fileList.forEach(function(value, i) {
                path.push(value.response);
                var aa = JSON.stringify(path);
                $("#updateimgPath").attr("value",aa);
            })

        },
        uploadPic(){
            this.$refs.uploadPic.submit();
        },
        updatePic(){
            this.$refs.updatepic.submit();
        },
        //删除选中信息
        deleteChoose() {
            var len = $('input[type=checkbox]:checked').length;
            if (len == "") {
                return false;
            } else {
                var con = confirm('确定要删除选中项吗');
                if (con == true) {
                    var list = [];
                    $.each($('input:checkbox:checked'), function() {
                        list.push($(this).val());

                    });
                    $.post("<?php echo url('goRecycle'); ?>", {
                        proche_type: "rough",
                        list: JSON.stringify(list),

                    }, function(e) {
                        window.location.reload();
                    });

                } else {
                    return false;
                };
            }

        },
        //更改已完成
        finish(re) {
            $.get("<?php echo url('changeIsfinsih'); ?>", {
                proche_type: "rough",
                id: re,
                num: 1
            }, function() {
                window.location.reload();
            })

        },
        //更改未完成
        unFinish(re) {
            $.get("<?php echo url('changeIsfinsih'); ?>", {
                proche_type: "rough",
                id: re,
                num: 2
            }, function() {
                window.location.reload();
            })

        },
        //获取图片  
        getPic(re) {
            $.get("<?php echo url('getPic'); ?>", {
                proche_type: "rough",
                id: re,
            }, function(e) {
                var a = "";
                $.each(e, function(i, n) {
                    option = "<div class='picwindow_img'><img src='__UPLOADS__" + n + "'></div>";
                    a = a + option;
                });
                $("#piclist").html(a);
            })
        },
        //获取异常
        getAbnormal(re) {
            var that = this;
            $.get("<?php echo url('getAbnormal'); ?>", {
                proche_type: "rough",
                id: re,
            }, function(e) {
                console.log(e);
                that.abnormalMessage = e;
            })
        },
        //获取修改框信息
        updateWork(re) {
            var that = this;
            $.get("<?php echo url('getWork'); ?>", {
                proche_type: "rough",
                id: re,
            }, function(e) {
                that.message = e;
            })

        },
        //跳转回收站
        goRecycle() {
            var selinfo = 'rough';
            window.location.href = "recycle.html?info=" + selinfo;
        },
        //打印选中项
        preview() {
            var len = $('input[type=checkbox]:checked').length;
            if (len != 1) {
                alert('注意！只能选择一个打印项');
            } else {
                var con = confirm('是否要打印选择项');
                if (con == true) {
                    console.log($('input[type=checkbox]:checked').length);
                    that = this;
                    var list = "";
                    $.each($('input:checkbox:checked'), function() {
                        list = $(this).val();
                    });
                    $.get("<?php echo url('getPrintMessage'); ?>", {
                        proche_type: "rough",
                        id: list,
                    }, function(e) {
                        that.printMessage = e;
                        that.$nextTick(function() {
                            bdhtml = window.document.body.innerHTML; //获取当前页的html代码
                            console.log(bdhtml);
                            sprnstr = "start"; //设置打印开始区域
                            eprnstr = "end"; //设置打印结束区域
                            prnhtml = bdhtml.substring(bdhtml.indexOf(sprnstr) + 30); //从开始代码向后取html
                            prnhtml = prnhtml.substring(0, prnhtml.indexOf(eprnstr)); //从结束代码向前取html
                            window.document.body.innerHTML = prnhtml;
                            window.print();
                            window.document.body.innerHTML = bdhtml;
                            window.location.reload();
                        });

                    });
                } else {
                    return false;
                };
            }

        },
        //下拉搜索框改变
        selectChange() {
            var val = $('#selectchoose').val();
            if (val == 'time') {
                $('#selecttime').show();
                $('#selectother').hide();
            } else {
                $('#selecttime').hide();
                $('#selectother').show();
            }

        },
        //搜索
        select() {
            var proche_type = "rough";
            var time = $('#sel_time_con').val();
            var content = $('#sel_other_con').val();
            var type = $('#selectchoose').val();
            if (typeof(Storage) !== "undefined") {
                sessionStorage.content = content;
                sessionStorage.type = type;
                sessionStorage.time = time;

            }
            if (type == 'time') {
                if (time == '') {
                    alert('搜索内容不能为空');
                } else {
                    url = "proche_select.html?proche_type=" + proche_type + "&time=" + time + "&content=" + content + "&type=" + type;
                    window.location.href = url;
                }
            } else {
                if (content == '') {
                    alert('搜索内容不能为空');
                } else {
                    url = "proche_select.html?proche_type=" + proche_type + "&time=" + time + "&content=" + content + "&type=" + type;
                    window.location.href = url;
                }
            }
        }
    }

})
//初始化bootstrap上传图片
$("#input-id").fileinput({
    language: 'zh', //设置语言
    uploadAsync: false, //默认异步上传
    showUpload: false, //是否显示上传按钮
    showRemove: true, //显示移除按钮
    showPreview: true, //是否显示预览
    showCaption: true, //是否显示标题
    browseClass: "btn btn-primary", //按钮样式     
    dropZoneEnabled: true, //是否显示拖拽区域
    maxFileCount: 10, //表示允许同时上传的最大文件个数
    enctype: 'multipart/form-data',
    validateInitialCount: true,
    previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
    msgFilesTooMany: "选择上传的文件数量({n}) 超过允许的最大数值{m}！",
});
$("#input-id1").fileinput({
    language: 'zh', //设置语言
    uploadAsync: false, //默认异步上传
    showUpload: false, //是否显示上传按钮
    showRemove: true, //显示移除按钮
    showPreview: true, //是否显示预览
    showCaption: true, //是否显示标题
    browseClass: "btn btn-primary", //按钮样式     
    dropZoneEnabled: true, //是否显示拖拽区域
    maxFileCount: 10, //表示允许同时上传的最大文件个数
    enctype: 'multipart/form-data',
    validateInitialCount: true,
    previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
    msgFilesTooMany: "选择上传的文件数量({n}) 超过允许的最大数值{m}！",
});


//确认导出Excel
function educe() {
    var con = confirm('是否要导出Excel表');
    if (con == true) {
        return true;
    } else {
        return false;
    }
}


//全选反选
$('input[name="checkall"]').on("click", function() {
    if ($(this).is(':checked')) {
        $('input[name="checkbox"]').each(function() {
            $(this).prop("checked", true);
        });
    } else {
        $('input[name="checkbox"]').each(function() {
            $(this).prop("checked", false);
        });
    }
});

//日历初始化
$('#datetimepicker').datetimepicker({
    minView: "month", //选择日期后，不会再跳转去选择时分秒 
    language: 'zh-CN',
    format: 'yyyy-mm-dd',
    todayBtn: 1,
    autoclose: 1,

});
$('#datetimepicker1').datetimepicker({
    minView: "month", //选择日期后，不会再跳转去选择时分秒 
    language: 'zh-CN',
    format: 'yyyy-mm-dd',
    todayBtn: 1,
    autoclose: 1,

});
$('#datetimepicker2').datetimepicker({
    minView: "month", //选择日期后，不会再跳转去选择时分秒 
    language: 'zh-CN',
    format: 'yyyy-mm-dd',
    todayBtn: 1,
    autoclose: 1,

});
</script>
<style type="text/css">
.cjp_box {
    margin: auto;
    width: 78%;
    height: auto;
    overflow-x: scroll; 
}

.cjp_head {
    font-size: 22px;
    margin-left: 20px;
    margin-top: 10px;
}

.cjp_content {
    margin-left: 20px;
    margin-top: 10px;
    width: 200%;
    height: auto;
    background-color: #f4f8fb;
}

.table tr th {
    text-align: center;
}

.cjp_choose {
    margin-left: 20px;
    margin-top: 10px;
}

.picwindow_img {
    margin: 10px auto;
    width: 100%;
    height: auto;

}

.picwindow_img img {
    width: 100%;
    height: auto;
}

.ab {
    width: 150px !important;
}

.el-upload__input {
    display: none !important;
}
</style>