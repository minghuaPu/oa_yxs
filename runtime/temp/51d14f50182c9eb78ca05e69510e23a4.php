<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"G:\wamp3.1.7\www\oa\oa_yxs\public/../application/admin\view\baobiao\kaoqing.html";i:1553764838;s:68:"G:\wamp3.1.7\www\oa\oa_yxs\public/../application/admin\view\top.html";i:1553224508;s:69:"G:\wamp3.1.7\www\oa\oa_yxs\public/../application/admin\view\left.html";i:1553846133;s:70:"G:\wamp3.1.7\www\oa\oa_yxs\public/../application/admin\view\right.html";i:1552459927;}*/ ?>
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
            }else if (this.action == 'gc_djb') {
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
<style>
  

    .riqi_box {
        width: 14%;
        height: 105px;
        background-color: #d4d4d4;
        float: left;
        text-align: center;
        border: 1px solid #fff;
    }

    .wk_title {
        text-align: center;
        width: 14%;
        background-color: #477dea;
        color: #fff;
        border: 1px solid #fff;
        height: 30px;
        line-height: 30px;
    }

    .has {
        background-color: #b5cbf7;
        color: #fff;
        padding: 5px 0;
    }

    .zw {
        font-size: 12px
    }

    .zw span {
        background-color: transparent !important
    }

    .sxwu {
        background-color: #e6e4e4;
        padding: 5px 0;
    }

    .sxwu p {
        height: 17px;
        overflow: hidden;
    }

    .qdtj_box li {
        display: flex;
    }

    .qdtj_box b {
        width: 10px;
        height: 10px;
        margin-top: 5px;
        display: inline-block;
        margin-right: 30px;
    }

    .qdtj_title {
        color: #999;
        margin: 10px 0
    }

    .qd_cd {
        background-color: #e9403c;
        color: #e9403c
    }

    .qd_zt {
        background-color: #84120f;
        color: #84120f
    }

    .qd_kg {
        background-color: #f3b745;
        color: #f3b745
    }

    .qd_qj {
        background-color: #477dea;
        color: #477dea
    }

    .qd_jb {
        background-color: #4ba151;
        color: #4ba151
    }

   

    .el-input__icon {
        display: none;
    }

    .el-input--prefix .el-input__inner {
  color: #888;
  padding-left: 15px !important;
}



.el-select .el-input__inner {
  color: #888;
  margin-bottom: 20px !important;
}
  
</style>
<div class="container">

    <el-row>
        <el-col class="rl_box" :span="18">
            <el-row>
                <el-col :span="18">
                    <el-row  class="lanmu_title">员工签到表 </el-row>
                    <el-row>
                        <el-col class="wk_title" :span="3" v-for="wk in week_a">{{wk}}</el-col>
                    </el-row>
                    <div>
                        <div v-for="num in 42" v-if="num-1 >= cur_m_first_d && num<=cur_m_total_d+cur_m_first_d"
                            class="riqi_box ">
                            <div class="has"> {{num-cur_m_first_d}}</div>
                            <el-row class="sxwu">
                                <el-col :span="12">
                                    <p>08:30 </p>
                                    <p> 12:30</p>
                                    <p> 14:30</p>
                                    <p> 19:00</p>
                                </el-col>
                                <el-col :span="12" class="zw">
                                    <p v-html="baobiao_data[num-cur_m_first_d]['forenoon_shang']"> </p>
                                    <p v-html="baobiao_data[num-cur_m_first_d]['forenoon_xia']"> </p>
                                    <p v-html="baobiao_data[num-cur_m_first_d]['afternoon_shang']"> </p>
                                    <p v-html="baobiao_data[num-cur_m_first_d]['afternoon_xia']"> </p>
                                </el-col>
                            </el-row>
                        </div>
                        <div v-else class="riqi_box" style="padding: 5px 0;"></div>
                    </div>
                </el-col>
                <el-col :span="6" style="padding-top:53px">
                    <?php if(\think\Session::get('user_cate') == '老板'): ?>
                    <el-select v-model='user_id' @change="choise_user">
                        <el-option v-for="user in user_a" :label="user.user_name" :value="user.id"></el-option>
                    </el-select>
                    <?php endif; ?>
                    <el-date-picker v-model="chnage_rq" type="month" @change="choise_it" placeholder="选择日期">
                    </el-date-picker>
                    <div>
                        <p class="qdtj_title">月度签到统计</p>
                        <ul class="qdtj_box">
                            <li> <b class="qd_cd"></b>迟到 {{num_a['cd_num']}}</li>
                            <li> <b class="qd_zt"></b>早退 {{num_a['zt_num']}}</li>
                            <li> <b class="qd_qj"></b>请假 {{num_a['qj_num']}}</li>
                            <li> <b class="qd_kg"></b>旷工 {{num_a['kg_num']}}</li>
                            <li> <b class="qd_jb"></b>加班 {{num_a['jb_num']}}</li>
                        </ul>
                    </div>
                </el-col>
            </el-row>

        </el-col>
        <el-col :span="6">
            <div class="box_white">
                <div class="qdtj_title">年度签到</div>
                <ul class="qdtj_box">
                    <li> <b class="qd_cd"></b>迟到 {{year_a['cd_num']}}</li>
                    <li> <b class="qd_zt"></b>早退 {{year_a['zt_num']}}</li>
                    <li> <b class="qd_qj"></b>请假 {{year_a['qj_num']}}</li>
                    <li> <b class="qd_kg"></b>旷工 {{year_a['kg_num']}}</li>
                    <li> <b class="qd_jb"></b>加班 {{year_a['jb_num']}}</li>
                </ul>
            </div>
            <div class="box_white" style="height:320px">
                <div class="qdtj_title" style="font-size: 20px;">请假</div>
                <el-row>
                    <el-col :span="4" style="padding-top: 10px;">开始</el-col>
                    <el-col :span="12">
                        <el-date-picker v-model="qj_data.qj_ks_time" type="date"  placeholder="选择日期">
                        </el-date-picker>
                    </el-col>
                    <el-col :span="8">
                        <el-select v-model='qj_data.qj_ks_jd'>
                            <el-option v-for="times in shang_xia" :label="times.label" :value="times.value"></el-option>
                        </el-select>
                    </el-col>
                </el-row>
                <el-row>
                    <el-col :span="4" style="padding-top: 10px;">结束</el-col>
                    <el-col :span="12">
                        <el-date-picker v-model="qj_data.qj_js_time" type="date"  placeholder="选择日期">
                        </el-date-picker>
                    </el-col>
                    <el-col :span="8">
                        <el-select v-model='qj_data.qj_js_jd'>
                            <el-option v-for="times in shang_xia" :label="times.label" :value="times.value"></el-option>
                        </el-select>
                    </el-col>
                </el-row>
                <div>
                    <el-input type="textarea" v-model="qj_data.qj_thing" placeholder="请输入内容"></el-input>
                </div>
                <el-row class="mt_10">
                    <el-col :span="6" :offset="18">
                    <el-button type="primary" @click="do_qingjia">确定</el-button>

                    </el-col>
                </el-row>
            </div>
        </el-col>

    </el-row>
</div>

<script>

    new Vue({
        el: '.container',
        data: {
            week_a: ['日', '一', '二', '三', '四', '五', '六'],
            cur_m_first_d: 0,//一个月第一天从星期几开始
            cur_m_total_d: 0,//当月总天数
            chnage_rq: '',
            num_a: [],
            baobiao_data: [],
            year_a: [],
            qj_data:{
                qj_js_time: '',
                qj_js_jd: '',
                qj_ks_time: '',
                qj_ks_jd: '',
                qj_thing: '',
            },
            user_id: <?php echo $user_id; ?>,
            user_a: <?php echo $user_a; ?>,
            shang_xia:[
                {
                    label:'上午',
                    value:'上午'
                },
                {
                    label:'下午',
                    value:'下午'
                }
            ],
            cur_time: ''
        },
        created() {
            var d = new Date()
            this.cur_time = d
            this.set_time(d)
        },
        methods: {
            set_time(d) {

                var y = d.getFullYear()
                var m = d.getMonth()
                var cur_m_first_d = new Date(y, m, 1)
                this.cur_m_first_d = cur_m_first_d.getDay()
                this.chnage_rq = d
                //    通告获取上一个月的最后一天，获取当月总共有多少条，
                // date的第三个参数为0就是获取第二个参数月份的上一个月
                // 第二个参数+1就是下一个月，
                this.cur_m_total_d = new Date(y, m + 1, 0).getDate()
                var that = this

                $.get("<?php echo url('get_baobiao_data'); ?>", { time: y + '-' + Appendzero(m + 1), user_id: this.user_id }, function (res) {
                    that.baobiao_data = res.data
                    if (res.year_a) {
                        that.year_a = res.year_a
                    }
                    that.num_a = res.num_a
                })
            },
            choise_it(val) {

                var d = new Date(val)
                this.cur_time = d

                this.set_time(d)
            },
            choise_user() {
                // this.user_id
                this.set_time(this.cur_time)

            },
            do_qingjia(){
                var that =this
                $.post("<?php echo url('qingjia'); ?>",{qj_data:JSON.stringify(this.qj_data)},function (res) {
                    that.$message({
                        type:"success",
                        message:'提交成功！'
                    })
                    that.qj_data ={
                qj_js_time: '',
                qj_js_jd: '',
                qj_ks_time: '',
                qj_ks_jd: '',
                qj_thing: '',
            }
                })
            }
        }
    })
</script>