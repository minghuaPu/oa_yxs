<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:72:"D:\wamp64\www\oa\oa_yxs\public/../application/admin\view\task\index.html";i:1559006423;s:65:"D:\wamp64\www\oa\oa_yxs\public/../application/admin\view\top.html";i:1559006423;s:66:"D:\wamp64\www\oa\oa_yxs\public/../application/admin\view\left.html";i:1559006423;s:67:"D:\wamp64\www\oa\oa_yxs\public/../application/admin\view\right.html";i:1559006423;}*/ ?>
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
<style type="text/css">
	.table_box{background-color: #fff !important}
	.Employee_box .Employee_right .Score .fens .se{background: red  !important;}
	.Employee_box .Employee_right .Score .fens .fen {
    color: #000;}
    input[disabled]{background: #fff!important;}
		.opinion {
    position: absolute;
    top: 69px !important;
    left: 455px !important;
}.task {
    width: 86% !important;    margin-left: 203px;
}
select ,input{

width: 100% !important;}
</style>

<link rel="stylesheet" type="text/css" href="__STATIC__/admin/task/css/index.css?3">
<div class="task">
	<div class="task_left"></div>
	<div class="task_box">
		<!-- <div class="task_title">
			<span class="glyphicon glyphicon-list-alt pull-left"></span>
			<h4>TASK员工任务管理</h4>
			<?php foreach($user as $userdata): if($userdata['user_cate']=='员工'): ?>
			<div class="btn btn-default opinion" @click='open3'>提建议</div>
			
			<?php endif; if($userdata['user_cate']=='老板'): ?>
			<div class="btn btn-default opinion"  data-toggle="modal" data-target="#asdf">查看建议</div>
			<?php endif; endforeach; ?>
		</div> -->
		<div class="task_content">
			<?php foreach($user as $userdata): ?>
			<!-- 学生身份作业管理 -->
			<?php if($userdata['user_cate']=='员工'): ?>
		<!-- 	<ul class="list_top">
				<li><a href="<?php echo url('add'); ?>"><span class="glyphicon glyphicon-pencil"></span>提交汇报</a></li>
				<li><a href="<?php echo url('read'); ?>"><span class="glyphicon glyphicon-pencil"></span>查看任务</a></li>
			</ul> -->
			<div class="table_box">
				<div class="Employee_box">
					<div class="Employee_left">
						<div class="add" @click='add'>+</div>
						<div class="Employee_head">工作表</div>
						<div class="wire"></div>
						<div class="Employee_footer">
							<div><span>负责人:</span><span><?php echo $userdata['user_name']; ?></span></div>
							<div><span>日期:</span><input type="date" v-model='DATE' style="width: 150px" @change='selectDate'></div>
						</div>
					</div>
					<div class="Employee_right">
						<div class="font">完成情况</div>
						<div class="Score"><div class="fens"><div class="se" :style="'height:'+zongshu+'%'"></div><div class="fen">{{zongshu}}分</div></div></div>
					</div>
					<table class="aa" style="text-align: center;" border='1px' width="1000px">
				<tr bgcolor="#0E59B6" align="center" style="color: #fff;font-size: 12px;">
					<th width="50px">序号</th>
					<th width="100px">主分类</th>
					<th width="100px">细分类</th>
					<th width="60px">数量/时间</th>
					<th>工作内容</th>
					<th width="60px">是否完成</th>
					<!-- <th>未完成原因</th> -->
					<th>备注</th>
					<th width="100px">统计分数</th>
					<th width="100px">操作</th>
				</tr>
				<tr :bgcolor="index%2 ==0?'':'#fff'" v-for='(item,index) in worksheet'>
					<td>
					  {{index+1}}
					</td>
					<td>
					  <select 
						
						v-model='item.primary'		 
						 :disabled='item.disabled'
						@change='zhuclassify(index)'>
						  <option  v-for="(i,l) in primary"  :value="i" style="text-align: center;">{{i.type}}</option>
					  </select>
					</td>
					<td>
						<select  :disabled='item.disabled' v-model='item.secondary' @change='ciclassify(index)'>
						  <option v-for="(c,cl) in secondary[index]" :value ="c" style="text-align: center;">{{c.type}}</option>
					  </select>
					</td>
					<td quantity>
						<input type="text"  style="text-align: center;" :disabled='disabled' v-model='item.quantity' @blur='liang(index)'>	 
					</td>
					<td>
						<div  :style="index%2 ==0?'background: #fff;':''"  v-if='item.boss_id'>{{item.job}}</div>
						<input :disabled='disabled' type="text"  style="text-align: center;" @blur='job(index)' v-model="item.job"  v-else>	
					</td>
					 <td>
					 	<div v-if='item.whether==0'>已完成</div>
					 	<div v-if='item.whether==1'>未完成</div>
						<!-- <select  :disabled='disabled'   v-model='item.whether' @change='whether(index)'>
						  <option value ="0" >是</option>
						  <option value ="1" >否</option>
					  </select> -->
					</td>	
 			<!-- 	<td><input type="text" :disabled='disabled'  style="text-align: center;" v-model='item.reasons' @blur='reasons(index)'></td> -->
					<td>
						<div  v-if='item.boss_id'>{{item.remark}}</div>
						<input type="text" :disabled='disabled'   style="text-align: center;" v-model='item.remark' @blur='remark(index)' v-else>
					</td>
					<td><div>{{item.score}}</td>
					<td >
						<div style="display: flex;justify-content: space-around;" v-if='item.id'>
						
						<a @click='viewDetails(item.boss_rwid,index)' v-if='item.boss_rwid' style="cursor: pointer;">查看详情</a>
						<a @click='viewDetails(item.id,index)'  v-else style="cursor: pointer;">查看详情</a>
						<!-- <a @click='delrw(item.id)' v-if='!item.boss_rwid'   style="cursor: pointer;">删除</a> -->
						</div>
					</td>	
				</tr>
			</table>
			<div style="display: flex;justify-content: space-between;">
				<div class="daiadd" @click='daiadd'>+</div>
				<div class="backlog">待办工作</div>
				<div style="line-height: 75px;">
					<a style="cursor: pointer;" class="btn btn-default "  @click='zhipaishow' >指派任务</a>
					<a style="cursor: pointer;" class="btn btn-default "  @click="submitshow" >一键提交</a>
					<a style="cursor: pointer;" class="btn btn-default "  @click="delshow" >一键删除</a>
				</div>
				
			</div>
			 
			
			<table class="aa" style="text-align: center;" border='1px' width="1000px">
				<tr bgcolor="#0E59B6" align="center" style="color: #fff;font-size: 12px;">
					<th width="50px">序号</th>
					<th width="150px">开始时间</th>
					<th>任务名称</th>
					<th width="150px">要求完成时间</th>
					<th width="250px">备注</th>
					<th >未完成</th>
				
					<th width="100px">操作</th>
				</tr>
				<tr v-for='(item,index) in daibanwork' >
					<td>{{index+1}}</td>
					<td>
						<div v-if='item.boss_rwid'>{{item.start_time}}</div>
						<input v-else type="date" v-model="item.start_time" @change='starttime(index)' style="text-align: center;" >
					</td>
					<td>
						<div v-if='item.boss_rwid'>{{item.job}}</div>
						<input type="text" v-else v-model='item.job' @blur='daibanjob(index)' style="text-align: center;" >
					</td>
					<td>
						<div v-if='item.boss_rwid'>{{item.lasttime}}</div>
						<input v-else type="date" v-model="item.lasttime" @change='endtime(index)' >
					</td>
					<td>
					
						<div v-if='item.boss_rwid'>{{item.remark}}</div>
						<input type="text" v-else v-model='item.remark' @blur='daibanremark(index)' style="text-align: center;" >
					</td>
					<td>
						<div v-if='item.boss_rwid'>{{item.reasons}}</div>
						<input type="text" v-else v-model='item.reasons' @blur='daibanreasons(index)' style="text-align: center;" >
					</td>
					
					<td>
						<a @click="accept(item.id)" style="cursor: pointer;">接受任务</a>
						<a @click='delrw(item.id)' v-if='!item.boss_rwid' style="cursor: pointer;">删除</a>
					</td>
				</tr>
			</table>
			<div class="daiadd" @click='zhouadd'>+</div>
				<div class="backlog">周计划</div>
			<table class="aa" style="text-align: center;" border='1px' width="1000px">
				<tr bgcolor="#0E59B6" align="center" style="color: #fff;font-size: 12px;">
					<th width="50px">序号</th>
					<th width="300px">计划内容</th>
					<th width="150px">计划开始时间</th>
					<th width="150px">计划截止时间</th>
					<th width="250px">备注</th>
					<th width="100px">操作</th>
				</tr>
				<tr v-for='(item,index) in zhoujihua' >
					<td>{{index+1}}</td>
					<td><input type="text" v-model='item.job' @blur='zhoujob(index)' style="text-align: center;" ></td>
					<td><input type="date" v-model="item.start_time" @change='zhoutime(index)' style="text-align: center;" ></td>
					<td><input type="date" v-model="item.lasttime" @change='zhouendtime(index)' style="text-align: center;" ></td>
					<td><input type="text" v-model="item.remark"  @blur='zhouremark(index)' style="text-align: center;" ></td>
					<td>
							<a @click="accept(item.id)" style="cursor: pointer;">接受任务</a>
						<a @click='delrw(item.id)' v-if='!item.boss_rwid' style="cursor: pointer;">删除</a>
					</td>
				</tr>
			</table>
				</div>
			</div>
			<?php endif; ?>
			<!-- 非学生身份管理作业 -->
			<?php if($userdata['user_cate']=='老板'): ?>
			<ul class="list_top">
				<li><a href="<?php echo url('arrange'); ?>"><span class="glyphicon glyphicon-list"></span>布置任务</a></li>
				<li style="width: 0%;">
					 	<div class="input-group pull-left">
					 		<input type="text" class="form-control pull-left" placeholder="输入任务名称" id="selectinfo">
					 	</div>
					 	<button class="btn btn-group pull-left" style="cursor: pointer;width: 70px;height: 35px; outline: none;" @click="select" >搜索</button>  
				</li>
			</ul>
				<a class="btn btn-default" style="background-color: #7BB0DE" href="<?php echo url('index'); ?>">待我处理(<?php echo $work_listnu; ?>)</a>
				<a class="btn btn-default" href="<?php echo url('wfb'); ?>">我发布的任务(<?php echo $work_listnu; ?>)</a>
				<a class="btn btn-default" href="<?php echo url('yjs'); ?>">已结束的任务(<?php echo $unfinish_listnu; ?>)</a>						
			<table  class="table" style="text-align: center;"  >
				<tr>
					<th width="50px">排序</th>
					<th>编号ID</th>
					<th>对接人</th>
					<th>任务名称</th>					
					<th>附件</th>
					<th>部门</th>
					<th>开始时间</th>
					<th>截止时间</th>
					<th>任务级别</th>
					<th>状态</th>
					<th>详情</th>
					<th></th>
				</tr>  
				<?php foreach($work_list as $key=>$info): ?>
					<tr>
						<td><input type="text" onblur="paix(<?php echo $info['id']; ?>)" id="pai_<?php echo $info['id']; ?>" value="<?php echo $info['sorts']; ?>" style="text-align: center;background-color: #f4f8fb;" ></td>
						<td><?php echo $info['id']; ?></td>
						<td style="display: flex;justify-content: center;"><?php foreach($info['execute_id'] as $k=>$i): ?><div><?php foreach($i as $a=>$b): ?><?php echo $b; ?>,<?php endforeach; ?></div><?php endforeach; ?></td>
						<td><?php echo $info['work_name']; ?></td>
						<?php if($info['work_file']!=""): ?>
						<td><a href="__UPLOADS__<?php echo $info['work_file']; ?>">点击查看</a></td>
						<?php endif; if($info['work_file']==""): ?>
						<td>无</td>
						<?php endif; ?>
						<td></td>
						<td><?php echo date("Y-m-d  H:i:s",$info['time']); ?></td>
						<td><?php echo date("Y-m-d  H:i:s",$info['lasttime']); ?></td>
						<td><?php echo $info['work_rank']; ?></td>
						<?php if($info['state']=="1"): ?>
						<td>已发布待查阅</td>
						<?php endif; if($info['state']=="2"): ?>
						<td>已查阅</td>
						<?php endif; if($info['state']=="3"): ?>
						<td>未完成</td>
						<?php endif; if($info['state']=="4"): ?>
						<td>任务已完成</td>
						<?php endif; ?>
						<td><a class="btn btn-default" href="<?php echo url('check',['id'=>$info['id']]); ?>">详情</a></td>
						<td ><a class="del" href="<?php echo url('annul',['id'=>$info['id']]); ?>">×</a></td>
					</tr>			
				<?php endforeach; ?>				
			</table>		
			<div  style="text-align: center;"><?php echo $work_list->render(); ?></div>
			<ul class="list_bottom">
				<li><a href="<?php echo url('look'); ?>"><span class="glyphicon glyphicon-folder-open"></span>查看提交情况</a></li>
			</ul>
			<?php endif; endforeach; ?>
		</div>
	</div>
	<div class="task_right"></div>
		<!-- 模态框（Modal）指派任务 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>	
				</div>
				
				<div class="modal-body">
					<div style="width: 100%">
		<table class="table table-striped table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<th style="text-align: center!important;" width="10%">
					<input type="checkbox" id="" style="width:15px;height: 15px;" :checked="fruitIds.length === worksheet_oa.length" @click='checkedAll()'>
					</th>
					<th style="text-align: center!important;">任务名称</th>
					<th style="text-align: center!important;" width="20%">选择员工</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for='(item,index) in worksheet_oa'>
					<td>
						<input type="checkbox" 
						:checked="fruitIds.indexOf(item.id)>=0" 
						style="width:15px;height: 15px;margin-top: 10px;"
						@click='checkedOne(item.id)'>
					</td>
					<td style="line-height: 30px;">{{item.job}}</td>					
					<td>
						<select class="form-control" name="zhipai_id" v-model='item.zhipai'>
					  <?php foreach($users as $key=>$val): ?>
						<option value="<?php echo $val['id']; ?>"><?php echo $val['user_name']; ?></option>
					  <?php endforeach; ?>
						</select>
					</td>
				</tr>			
			</tbody>
		</table>
			</div>
			<div class="modal-footer"> 
				<input type="submit" class="btn btn-primary" value="提交" @click='zhipairw'>	
			</div>		
			</div><!-- /.modal-content -->
		</div><!-- /.modal -->
	</div>		
</div>

	<!-- 模态框（Modal）一键提交 -->
	<div class="modal fade" id="submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>	
				</div>
				
				<div class="modal-body">
					<div style="width: 100%">
		<table class="table table-striped table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<th style="text-align: center!important;" width="10%">
					<input type="checkbox" id="" style="width:15px;height: 15px;" :checked="fruitIds.length === worksheet_oa.length" @click='checkedAll()'>
					</th>
					<th style="text-align: center!important;">任务名称</th>
					<th style="text-align: center!important;" width="15%">是否完成</th>
					<th style="text-align: center!important;" width="20%">未完成原因</th>
					
				</tr>
			</thead>
			<tbody>
				<tr v-for='(item,index) in worksheet_oa' >
					<td>
						<input type="checkbox" 
						:checked="fruitIds.indexOf(item.id)>=0" 
						style="width:15px;height: 15px;margin-top: 10px;"
						@click='checkedOne(item.id)'>
					</td>
					<td style="line-height: 30px;">{{item.job}}</td>					
					<td>
						<select    v-model='item.whether'>
						  <option value ="0" >是</option>
						  <option value ="1" >否</option>
					  </select>
					</td>
					<td>
						<input type="text">
					</td>
					
				</tr>			
			</tbody>
		</table>
			</div>
			<div class="modal-footer"> 
				<input type="submit" class="btn btn-primary" value="一键提交" @click='keysubmit'>	
			</div>		
			</div><!-- /.modal-content -->
		</div><!-- /.modal -->
	</div>		
</div>

		<!-- 模态框（Modal）一键删除 -->
	<div class="modal fade" id="del" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>	
				</div>
				
				<div class="modal-body">
					<div style="width: 100%">
		<table class="table table-striped table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<th style="text-align: center!important;" width="10%">
					<input type="checkbox" id="" style="width:15px;height: 15px;" :checked="fruitIds.length === worksheet_oa.length" @click='checkedAll()'>
					</th>
					<th style="text-align: center!important;">任务名称</th>
					
				</tr>
			</thead>
			<tbody>
				<tr v-for='(item,index) in worksheet_oa'>
					<td>
						<input type="checkbox" 
						:checked="fruitIds.indexOf(item.id)>=0" 
						style="width:15px;height: 15px;margin-top: 10px;"
						@click='checkedOne(item.id)'>
					</td>
					<td style="line-height: 30px;">{{item.job}}</td>					
					
				</tr>			
			</tbody>
		</table>
			</div>
			<div class="modal-footer"> 
				<input type="submit" class="btn btn-primary" value="一键删除" @click='keydel'>	
			</div>		
			</div><!-- /.modal-content -->
		</div><!-- /.modal -->
	</div>		
</div>
<!-- 查看建议 -->
<?php foreach($user as $userdata): if($userdata['user_cate']=='老板'): ?>
	<div class="modal fade" id="asdf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>	
				</div>
				
				<div class="modal-body">
					<div style="width: 100%">
					<div >
						<table  class="table table-striped table-bordered table-hover table-condensed">
							<tr>
							 <th>员工建议</th>
							 <th width="20%">提建议时间</th>
							</tr>
							<?php foreach($advise as $item): ?>
							<tr >
								<td><?php echo $item['advise']; ?></td>
								<td><?php echo date('Y-m-d',$item['time']); ?></td>
							</tr>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
				
			
			</div><!-- /.modal-content -->
		</div><!-- /.modal -->
	</div>
	<?php endif; endforeach; ?>
		</div>
<script>
// 第二步：定义路由，也就是每个路由应该映射一个组件

new Vue({
    el: ".task",
    data: {
        worksheet:<?php echo $yuangong; ?>,
        worksheet_oa:<?php echo $yuangong; ?>,
        primary:<?php echo $main; ?>,
        zhipai:'1',
        fine:<?php echo $fine; ?>,
        secondary:[],
        zongshu:<?php echo $zongshu; ?>,
        daibanwork:<?php echo $daibanwork; ?>,
		zhoujihua:<?php echo $zhoujihua; ?>,
        disabled:false,
        DATE:'<?php echo $date; ?>',
        fruitIds:[],
        isCheckedAll:false
    },
    

        mounted(){
        
        	if(this.worksheet.length<8){
        		var num=8-this.worksheet.length;
        		for (var i = 0; i < num; i++) {
        			this.worksheet.push({});
        		}	
        	}	
        	for (var i = 0; i < this.worksheet.length; i++) {
        		this.secondary.push([])
        		
           		 if(this.worksheet[i].boss_id){
           		 	this.worksheet[i].disabled=true
           		 }else{
           		 	this.worksheet[i].disabled=false
           		 }
        		for (var a = 0; a < this.fine.length; a++) {
        		if (this.worksheet[i].primary) {
        			 if(this.worksheet[i].primary.id==this.fine[a].main){
          				this.secondary[i].push(this.fine[a])
        			}
        		}
        	    }	
        	}
        	for (var i = 0; i < this.worksheet_oa.length; i++) {
        		this.worksheet_oa[i].zhipai='';
        	}
         			
		},
       	
     methods:{
     	selectDate(){ 
     		console.log(this.DATE)
     		$.get('<?php echo url("admin/task/classify"); ?>',
        	    	{select:8,selectDate:this.DATE,},(rtnData)=>{
                     this.zongshu=rtnData.zongshu;
        	    	this.worksheet=rtnData.list;
        	    	for (var i = 0; i < this.worksheet.length; i++) {
        	    		if(this.DATE=='<?php echo $date; ?>'){
        	    		this.disabled=false
                     	this.worksheet[i].disabled=false
                     }else{
                     	this.disabled=true
                     	this.worksheet[i].disabled=true
                     }
        	    		this.worksheet[i].primary=JSON.parse(this.worksheet[i].primary);
        				this.worksheet[i].secondary=JSON.parse(this.worksheet[i].secondary);
        	    	}
        	    	
     			});

     	},
     	// 指派任务
     	zhipairw(e){
     		for (var i = 0; i < this.worksheet_oa.length; i++) {
     			for (var b = 0; b < this.fruitIds.length; b++) {
     				
     			if(this.fruitIds[b]==this.worksheet_oa[i].id){
     			$.get('<?php echo url("admin/task/zhipairw"); ?>',
        	    	{
        	    		zhipai:this.fruitIds[b],
        	    		zhipai_id:this.worksheet_oa[i].zhipai
        	    	},(rtnData)=>{

        	    	});
   		  		}
     		}
    	 }
     		window.location.reload()
     	},
     	// 显示指派任务
     	zhipaishow(){
     		this.fruitIds=[];
     		$('#myModal').modal('show');
     	},
     	// 显示一键提交
     	submitshow(){
     		this.fruitIds=[];
     		$('#submit').modal('show');
     	},
     	// 显示一键删除
     	delshow(){
     		this.fruitIds=[];
     		$('#del').modal('show');
     	},
     	// 一键提交
     	keysubmit(){
     		for (var i = 0; i < this.worksheet_oa.length; i++) {
     			for (var b = 0; b < this.fruitIds.length; b++) {
     				
     			if(this.fruitIds[b]==this.worksheet_oa[i].id){
     			$.get('<?php echo url("admin/task/classify"); ?>',
        	    	{
        	    		select:9,
        	    		id:this.worksheet_oa[i].id,
        	    		whether:this.worksheet_oa[i].whether
        	    	},(rtnData)=>{
									window.location.reload()
        	    	});
   		  		}
     		}
    	 }
    
     	},
     	// 一键删除
		keydel(){
     		for (var i = 0; i < this.worksheet_oa.length; i++) {
     			for (var b = 0; b < this.fruitIds.length; b++) {
     				
     			if(this.fruitIds[b]==this.worksheet_oa[i].id){
     			$.get('<?php echo url("admin/task/classify"); ?>',
        	    	{
        	    		select:10,
        	    		id:this.worksheet_oa[i].id,
        	    	},(rtnData)=>{

        	    	});
   		  		}
     		}
    	 }
    	 window.location.reload()
     	},     	
     	 open3() {
	        this.$prompt('提建议', '', {
	          confirmButtonText: '确定',
	          cancelButtonText: '取消',
	         
	         
	        }).then(({ value }) => {
	      			$.get('<?php echo url("admin/task/advise"); ?>',
        	    	{advise:value,},(rtnData)=>{

        	    	});
	        });
      	},
  
     	select(){

     		var selinfo = $('#selectinfo').val();
     		if(selinfo){
     			window.location.href="select.html?info="+selinfo;
     		}else{
     			return false;
     		}
            
     	},
     	// 添加
     	add(){
     		if(this.disabled){return}
     	
     		// this.worksheet.push({primary:<?php echo $main; ?>,secondary:[]})
     		$.get('<?php echo url("admin/task/classify"); ?>',
        	    	{select:0,},(rtnData)=>{
        	    	   this.worksheet_oa.push(rtnData)
                 	   this.worksheet.push(rtnData)
                 	   	console.log(this.worksheet)
     			});
     	},
        // 主分类
        zhuclassify(e){
     		console.log(this.worksheet[e].primary)
        	    $.get('<?php echo url("admin/task/classify"); ?>',
        	    	{
	        	    	select:1,
	        	    	theme_id:this.worksheet[e].id,
	        	    	xuan:this.worksheet[e].primary.id,
	        	    	type:this.worksheet[e].primary.type
        	    	},(rtnData)=>{             	    	
        	    			if(rtnData.list){
        	    				rtnData.list.primary=JSON.parse(rtnData.list.primary)
        	    				this.$set(this.worksheet,e,rtnData.list)
        	    				this.$set(this.worksheet_oa,e,rtnData.list)
        	    			}
        	    			var text=[];
        	    			 for (var a = 0; a < this.fine.length; a++) {
			        	     	if(this.worksheet[e].primary.id==this.fine[a].main){
			          				text.push(this.fine[a])
			        				this.$set(this.secondary,e,text);
			        				}else{
			        					text.push()
			        					this.$set(this.secondary,e,text);
			        				}
        	     }
        	    			console.log(this.worksheet);     	    			
     			});

        },
        // 细分类
        ciclassify(e) {
            console.log(this.worksheet[e].id);
            $.get('<?php echo url("admin/task/classify"); ?>', {
                select: 2,
                theme_id: this.worksheet[e].id,
                xuan: this.worksheet[e].secondary,
            }, (rtnData) => {
                this.worksheet[e].score = rtnData
                this.$set(this.worksheet[e], "score", rtnData)
				 this.zongshu=0;
				for(var i=0;i<this.worksheet.length;i++){
            	if(this.worksheet[i].whether==0){
            		this.zongshu+=parseFloat(this.worksheet[i].score)
	            	}
	            }
            });
        },
        // 时间/数量
        liang(e) {
           if(this.worksheet[e].quantity){
            $.get('<?php echo url("admin/task/classify"); ?>', {
                select: 3,
                theme_id: this.worksheet[e].id,
                liang: this.worksheet[e].quantity
            }, (rtnData) => {
                // this.zongshu = rtnData.zongshu
                this.$set(this.worksheet[e], "score", rtnData.data)
                this.zongshu=0;
            for(var i=0;i<this.worksheet.length;i++){
            	if(this.worksheet[i].whether==0){
            		this.zongshu+=parseFloat(this.worksheet[i].score)
            	}
            }
            });
            }
        },
        // 工作内容

        job(e){
        	console.log(this.worksheet);
        		$.get('<?php echo url("admin/task/classify"); ?>',
        	    	{
        	    		
        	    		select:4,
        	    		theme_id:this.worksheet[e].id,
        	    		job:this.worksheet[e].job
        	    	},(rtnData)=>{
        	    		if(rtnData){
        	    				console.log(1)
        	    				// this.worksheet[e]=rtnData
        	    				this.$set(this.worksheet,e,rtnData)
        	    				this.$set(this.worksheet_oa,e,rtnData)
        	    			}
        	    			console.log(this.worksheet);
        	    	});

        },
        // 是否完成
        whether(e) {
            $.get('<?php echo url("admin/task/classify"); ?>', {

                select: 5,
                theme_id: this.worksheet[e].id,
                whether: this.worksheet[e].whether
            }, (rtnData) => {
                // this.zongshu = rtnData
                if(this.worksheet[e].zhoujihua==1){
                	this.worksheet[e].score=rtnData
                }
                
            });
            this.zongshu=0;
            for(var i=0;i<this.worksheet.length;i++){
            	if(this.worksheet[i].whether==0){
            		this.zongshu+=parseFloat(this.worksheet[i].score)
            	}
            }
        },
        //未完成原因 

        reasons(e){
        	console.log(this.worksheet[e])
 				$.get('<?php echo url("admin/task/classify"); ?>',
        	    	{
        	    		
        	    		select:6,
        	    		theme_id:this.worksheet[e].id,
        	    		reasons:this.worksheet[e].reasons
        	    	},(rtnData)=>{
        	    		if(rtnData){
        	    		console.log(1)	
        	    				this.$set(this.worksheet,e,rtnData)
        	    			}
        	    		
        	    	});
        },
        // 备注
         remark(e){
         			$.get('<?php echo url("admin/task/classify"); ?>',
        	    	{
        	    		
        	    		select:7,
        	    		theme_id:this.worksheet[e].id,
        	    		remark:this.worksheet[e].remark
        	    	},(rtnData)=>{
        	    		console.log(this.worksheet[e])
        	    		if(rtnData){
        	    				
        	    				this.$set(this.worksheet,e,rtnData)
        	    			}
        	    	});

        },
        // 统计分数
        score(e) {
            $.get('<?php echo url("admin/task/classify"); ?>', {

                select: 8,
                theme_id: this.worksheet[e].id,
                score: this.worksheet[e].score
            });
        },
        viewDetails: function(e,index) {
        	if(this.worksheet[index].boss_id){
        		window.location.href = 'check.html?id=' + e
        	}else{
        		window.location.href = 'check.html?staff_id=' + e
        	}
            
        },
        delrw:function(e){
        	
        	this.$confirm('确认删除吗！',  {
          confirmButtonText: '确定',
          callback: action => {
            if(action=='confirm'){
            	window.location.href='delrw?id='+e
            }
          }

        });
        	
        },
        // 接受任务
        accept:function(e){
        	window.location.href='accept?id='+e
        },
        // 添加代办
        daiadd:function(e){
        	 $.get('<?php echo url("admin/task/daibanwork"); ?>', {
                select: 0,
            },(rtnData)=>{
            	this.daibanwork.push(rtnData)
            });
        	 
        },
        starttime:function(e){
        	$.get('<?php echo url("admin/task/daibanwork"); ?>', {
                select: 1,
                id:this.daibanwork[e].id,
                start_time:this.daibanwork[e].start_time
            });
        },
         endtime:function(e){
        	$.get('<?php echo url("admin/task/daibanwork"); ?>', {
                select: 2,
                id:this.daibanwork[e].id,
                lasttime:this.daibanwork[e].lasttime
            });
        },
        // 任务名称
        daibanjob:function(e){
        	$.get('<?php echo url("admin/task/daibanwork"); ?>', {
                select: 3,
                id:this.daibanwork[e].id,
                job:this.daibanwork[e].job
            });
        },
        // 代办备注
        daibanremark:function(e){
        	$.get('<?php echo url("admin/task/daibanwork"); ?>', {
                select: 4,
                id:this.daibanwork[e].id,
                remark:this.daibanwork[e].remark
            });
        },
        // 代办未完成
        daibanreasons:function(e){
        	$.get('<?php echo url("admin/task/daibanwork"); ?>', {
                select: 5,
                id:this.daibanwork[e].id,
                reasons:this.daibanwork[e].reasons
            });
        },
        // 周计划
        zhouadd:function(e){
        	$.get('<?php echo url("admin/task/zhoujihua"); ?>', {
               select: 0,
            },(rtnData)=>{
            	this.zhoujihua.push(rtnData)
            });
        },
          zhoutime:function(e){
        	$.get('<?php echo url("admin/task/zhoujihua"); ?>', {
                select: 1,
                id:this.zhoujihua[e].id,
                start_time:this.zhoujihua[e].start_time
            });
        },
         zhouendtime:function(e){
        	$.get('<?php echo url("admin/task/zhoujihua"); ?>', {
                select: 2,
                id:this.zhoujihua[e].id,
                lasttime:this.zhoujihua[e].lasttime
            });
        },
        // 周计划内容
        zhoujob:function(e){
        	$.get('<?php echo url("admin/task/zhoujihua"); ?>', {
                select: 3,
                id:this.zhoujihua[e].id,
                job:this.zhoujihua[e].job
            });
        },
        // 周计划备注
        zhouremark:function(e){
        	$.get('<?php echo url("admin/task/zhoujihua"); ?>', {
                select: 4,
                id:this.zhoujihua[e].id,
                remark:this.zhoujihua[e].remark
            });
        },
        checkedOne:function(e){
        	let idIndex = this.fruitIds.indexOf(e);
	        if (idIndex >= 0) {
	          this.fruitIds.splice(idIndex, 1)
	        } else {
	          this.fruitIds.push(e)
	        }
	     console.log(this.worksheet_oa);
        },
        checkedAll () {
		      this.isCheckedAll = !this.isCheckedAll
		      if (this.isCheckedAll) {
		        // 全选时
		        this.fruitIds = []
		        this.worksheet_oa.forEach(function (item) {
		          this.fruitIds.push(item.id)
		        }, this)
		      } else {
		        this.fruitIds = []
		      }

    	},


    }
})

	function paix(e){
      $.get('<?php echo url("admin/task/paix"); ?>', {
      	        id:e,
                sorts: $('#pai_'+e).val()
            },(rtnData)=>{
            	window.location.href='index'
            });
    
	}

</script>

<style>

</style>
