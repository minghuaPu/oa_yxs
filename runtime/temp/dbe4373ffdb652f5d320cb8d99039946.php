<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:76:"D:\wampserver\wamp64\www\oa\public/../application/admin\view\index\work.html";i:1546652743;s:69:"D:\wampserver\wamp64\www\oa\public/../application/admin\view\top.html";i:1546932386;s:70:"D:\wampserver\wamp64\www\oa\public/../application/admin\view\left.html";i:1545118183;s:71:"D:\wampserver\wamp64\www\oa\public/../application/admin\view\right.html";i:1544610348;}*/ ?>
	<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="__STATIC__/admin/work/work.css"/>

<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
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
    <!-- 引入jquery -->
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.0.0/jquery.min.js"></script>
    <!-- 引入bootstarpJS -->
    <script type="text/javascript" src="https://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- 引入vue.js -->
    <script type="text/javascript" src="https://cdn.bootcss.com/vue/2.5.13/vue.min.js"></script>
    <!-- 引入样式 -->
    <link rel="stylesheet" href="__STATIC__/library/element-ui.min.css">
    <!-- 引入组件库 -->
    <script src="__STATIC__/library/element-ui.min.js"></script>
    <!-- 引入 vue路由-->
    <script src="__STATIC__/library/vue-router.min.js"></script>
    <script type="text/javascript" src="__STATIC__/library/dropify-master/dist/js/dropify.min.js"></script>
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
</style>
<body>
    <header id="top_menu">
        <div class="row">
            <div class="left col-md-9">
                <div class="logo pull-left">
                    <a href="<?php echo url('index/index'); ?>">
                        <img src="__STATIC__/admin/index/images/logo.png" alt=""></a>
                </div>
                <?php if(\think\Session::get('user_cate')=='管理员'): ?>
                <div class="title pull-left">
                    <div class="dropdown">
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
                           <!--  <li role="presentation" tabindex="-1" href="#">
                               <a role="menuitem" tabindex="-1" href="<?php echo url('draw/index'); ?>">
                                   <div>
                                       <span class="glyphicon glyphicon-asterisk pull-left"></span>
                                       <div class="pull-left">
                                           <h4>玩转抽奖</h4>
                                           <p>设置抽奖规则，查看中奖信息</p>
                                       </div>
                                   </div>
                               </a>
                           </li> -->
<!--                             <li role="presentation" tabindex="-1" href="#">
                                <a role="menuitem" tabindex="-1" href="#">
                                    <div>
                                        <span class="glyphicon glyphicon-phone pull-left"></span>
                                        <div class="pull-left">
                                            <h4>CTI集信</h4>
                                            <p>固话、手机、邮件全通信采集</p>
                                        </div>
                                    </div>
                                </a>
                            </li> -->
                            <!-- <li role="presentation" tabindex="-1" href="#">
                                <a role="menuitem" tabindex="-1" href="<?php echo url('build/index'); ?>">
                                    <div>
                                        <span class="glyphicon glyphicon-globe pull-left"></span>
                                        <div class="pull-left">
                                            <h4>集客</h4>
                                            <p>自动化生成H5页面,用集客为自己扩展客源</p>
                                        </div>
                                    </div>
                                </a>
                            </li> -->
<!--                             <li role="presentation" tabindex="-1" href="#">
                                <a role="menuitem" tabindex="-1" href="#">
                                    <div>
                                        <span class="glyphicon glyphicon-asterisk pull-left"></span>
                                        <div class="pull-left">
                                            <h4>SFA：销售自动化</h4>
                                            <p>主动推进和人工推进的完美结合</p>
                                        </div>
                                    </div>
                                </a>
                            </li> -->
                        </ul>
                        <?php endif; if(\think\Session::get('user_cate')!='管理员'): ?>
                         <div class="title pull-left">
                    <div class="dropdown">
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
              <!--               <li role="presentation" tabindex="-1" href="#">
                  <a role="menuitem" tabindex="-1" href="<?php echo url('news/index'); ?>">
                      <div>
                          <span class="glyphicon glyphicon-th-list pull-left"></span>
                          <div class="pull-left">
                              <h4>New新闻管理</h4>
                              <p>企业内进行新闻或信息公告，响应信息化时代</p>
                          </div>
                      </div>
                  </a>
              </li> -->
                           <!--  <li role="presentation" tabindex="-1" href="#">
                               <a role="menuitem" tabindex="-1" href="<?php echo url('draw/index'); ?>">
                                   <div>
                                       <span class="glyphicon glyphicon-asterisk pull-left"></span>
                                       <div class="pull-left">
                                           <h4>玩转抽奖</h4>
                                           <p>设置抽奖规则，查看中奖信息</p>
                                       </div>
                                   </div>
                               </a>
                           </li> -->
<!--                             <li role="presentation" tabindex="-1" href="#">
                                <a role="menuitem" tabindex="-1" href="#">
                                    <div>
                                        <span class="glyphicon glyphicon-phone pull-left"></span>
                                        <div class="pull-left">
                                            <h4>CTI集信</h4>
                                            <p>固话、手机、邮件全通信采集</p>
                                        </div>
                                    </div>
                                </a>
                            </li> -->
                            <!-- <li role="presentation" tabindex="-1" href="#">
                                <a role="menuitem" tabindex="-1" href="<?php echo url('build/index'); ?>">
                                    <div>
                                        <span class="glyphicon glyphicon-globe pull-left"></span>
                                        <div class="pull-left">
                                            <h4>集客</h4>
                                            <p>自动化生成H5页面,用集客为自己扩展客源</p>
                                        </div>
                                    </div>
                                </a>
                            </li> -->
<!--                             <li role="presentation" tabindex="-1" href="#">
                                <a role="menuitem" tabindex="-1" href="#">
                                    <div>
                                        <span class="glyphicon glyphicon-asterisk pull-left"></span>
                                        <div class="pull-left">
                                            <h4>SFA：销售自动化</h4>
                                            <p>主动推进和人工推进的完美结合</p>
                                        </div>
                                    </div>
                                </a>
                            </li> -->
                        </ul>
                         <?php endif; ?>
                    </div>
                </div>
                <!-- <div class="breach pull-left col-lg-3" v-if="controller=='Index' || controller=='Crm'">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                客户
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">客户</a>
                                </li>
                                <li>
                                    <a href="#">联系人</a>
                                </li>
                                <li>
                                    <a href="#">设置</a>
                                </li>
                            </ul>
                        </div>
                        <input type="text" class="form-control" aria-label="..." placeholder="支持拼音字头"></div>
                </div> -->
            </div>
            <div class="col-md-2 pull-left user_info" style="margin-top: 0px;">

            <div class="user_info">
                <div class="user">
                    <span class="glyphicon glyphicon-user"></span>
                </div>
               <form action="<?php echo url('index/login/logout'); ?>" method="post" class="form" style="margin-left:-100px">
                <span class="user_name">公司id:<?php echo \think\Session::get('u_belong'); ?> <?php echo \think\Session::get('u_company'); ?> <?php echo \think\Session::get('user_name'); ?>(<?php echo \think\Session::get('user_cate'); ?>)</span>
                <span> <a href="<?php echo url('admin/index/index'); ?>"  id="return">返回主页</a></span>
                <input id="exit" type="submit" value= "安全退出" class="btn btn-default" style="margin-left:0px;margin-bottom: 5px;padding:0;margin-top:2px"></input>

               </form>
            </div>

        </div>
    </header>
    <div class="top" style="height: 60px;width: 100%;"></div>
<script type="text/javascript">
 new Vue({
        el:'#top_menu',
        data:{
           controller:"Index",
           cur:''
        },
        created(){
            this.init();
        },
        methods:{
            init(){
                this.controller="<?php echo request()->controller(); ?>";
                
                if(this.controller=='Index' || this.controller=='Crm'){
                    this.cur='CRM';
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
                }
            }
        }
    })
</script> 
	
<link rel="stylesheet" type="text/css" href=" __STATIC__/admin/iconfont_left.css"/>

<link rel="stylesheet" type="text/css" href=" __STATIC__/admin/iconfont_left_two.css"/>
<link rel="stylesheet" type="text/css" href=" __STATIC__/admin/iconfont_left_proche.css"/>
<div class="left_menu lbs" id="left_menu" style="z-index: 99;">
	<ul v-if="controller!='Map'">
		<li onclick="jump()"><a href="#" class="iconfont icon-geren"><p>个人管理</p></a></li>
		<li onclick="jump_two()"><a href="#" class="iconfont icon-gongzuo" style="padding-top:-2px"><p>工作管理</p></a></li>
		  <li @click="isShow"><a class="iconfont icon-jiedianguanli" style="padding-top:-2px;"><p>产品检查</p></a>
            <ul v-if="six">
                <li onclick="jump_cjg()">
                    <a  class="iconfont icon-bianji" style="padding-top:-2px"><p>粗加工</p></a>
                </li>
                <li onclick="jump_rcl()">
                    <a href="#" class="iconfont icon-guanlianshebei" style="padding-top:-2px"><p>热处理</p></a>
                </li>
                <li onclick="jump_dzcj()">
                    <a href="#" class="iconfont icon-guanfangbanben" style="padding-top:-2px"><p>锻造车间</p></a>
                </li>
                <li onclick="jump_bzjy()">
                    <a href="#" class="iconfont icon-gongnengdingyi" style="padding-top:-2px"><p>包装检验</p></a>
                </li>
                <li onclick="jump_jjg()">
                    <a href="#" class="iconfont icon-jichuguanli" style="padding-top:-2px"><p>精加工</p></a>
                </li>
                <li onclick="jump_qt()">
                    <a href="#" class="iconfont icon-jishufuwu" style="padding-top:-2px"><p>其他</p></a>
                </li>
            </ul>
        </li>
		<li onclick="jump_three()"><a href="#" class="iconfont icon-caiwuguanli"><p>财务管理</p></a></li>
		<li onclick="jump_four()"><a href="#" class="iconfont icon-group"><p>部门管理</p></a></li>
		<li onclick="jump_five()"><a href="#" class="iconfont icon-iconset0337"><p>信息中心</p></a></li>
	    <li onclick="jump_six()"><a href="#" class="iconfont icon-kucun"><p>钢材库存</p></a></li>
	</ul>
	<!--<ul v-if="controller=='Map'" class="Maplist">
		<li><a href="<?php echo url('admin/map/index'); ?>" class="glyphicon glyphicon-home"><p>工作台</p></a></li>
		<li><a href="<?php echo url('admin/map/visit'); ?>" class="glyphicon glyphicon-user"><p>客户拜访</p></a></li>
		<li><a href="<?php echo url('admin/map/field'); ?>" class="glyphicon glyphicon-inbox"><p>外勤工单</p></a></li>
		<li><a href="<?php echo url('admin/map/business'); ?>" class="glyphicon glyphicon-plane"><p>出差管理</p></a></li>
		<li><a href="<?php echo url('admin/map/photo'); ?>" class="glyphicon glyphicon-camera"><p>实景照片</p></a></li>
		<li><a href="<?php echo url('admin/map/check'); ?>" class="glyphicon glyphicon-map-marker"><p>轨迹查询</p></a></li>
		<li><a href="<?php echo url('admin/map/sign'); ?>" class="glyphicon glyphicon-star"><p>考勤</p></a></li>
		<li><a href="<?php echo url('admin/map/set'); ?>" class="glyphicon glyphicon-cog"><p>设置</p></a></li>
	</ul>-->
</div>
<script type="text/javascript">
 new Vue({
        el:'#left_menu',
        data:{
        	six:false,
           controller:"Index"
        },
        created(){
        	this.init();
        },
        methods:{
        	init(){
                this.controller="<?php echo request()->controller(); ?>";
        	},
        	 isShow(){
        	this.six=!this.six;
        }
        }
    })
 function jump(){
 	 window.location.href='<?php echo url('admin/index/index'); ?>'
 }
 function jump_two(){
 	window.location.href='<?php echo url('admin/index/work'); ?>'
 }
 function jump_three(){
 	window.location.href='<?php echo url('admin/index/finance'); ?>'
 }
 function jump_four (){
 	window.location.href='<?php echo url('admin/index/department'); ?>'
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
    window.location.href='<?php echo url('admin/index/proche_qt'); ?>'
 }

</script>
 
	<!DOCTYPE html>
<html>
	<head>
<script src="__STATIC__/admin/echarts.min.js" type="text/javascript" charset="utf-8"></script>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<div class="page" style="z-index: 99;background:white;padding-left: 10px;height:100%">
			<div class="search_box">
				<div class="iconfont icon-fangdajing"></div>
				<input type="text" name="search" class="search" placeholder="搜索" />
			</div>
			<div class="people_box">
				<div class="icon">
					<div class="iconfont icon-geren"></div>
					<div class="iconfont icon-iconset0337"></div>
					<div class="iconfont icon-group"></div>
				</div>
				<div class="name_box">
					<div class="people">
						<img src="__STATIC__/admin/tx.jpg"/>
						<p>张总</p>
					</div>
					
					<div class="people">
						<img src="__STATIC__/admin/tx.jpg"/>
						<p>张总</p>
					</div>
					
					<div class="people">
						<img src="__STATIC__/admin/tx.jpg"/>
						<p>张总</p>
					</div>
					<div class="people">
						<img src="__STATIC__/admin/tx.jpg"/>
						<p>张总</p>
					</div>
					<div class="people">
						<img src="__STATIC__/admin/tx.jpg"/>
						<p>张总</p>
					</div>
					
					<div class="people">
						<img src="__STATIC__/admin/tx.jpg"/>
						<p>张总</p>
					</div>
				</div>
			</div>
			<div  class="notice_title">
				公告栏
			</div>
			<div class="notice_box">
				<div class="notice">
					<div class="notice_dian"></div>
					<div class="notice_content">oa系统正式上线</div>
				</div>
			</div>
			<div  class="notice_title">
				新闻
			</div>
		</div>
	</body>
</html>





<style type="text/css">
.page{
	width:172px;
	position:fixed ;
	right: 0;
	
	
}
.search_box{
	display: flex;
	margin-top:9px;
	background: #e6e6e6;
	
}
.search_box input{
	background: #e6e6e6;
	border: 0px;
	outline:none 
}
.icon{
	display: flex;
	margin: 6px 20px ;
	
}
.icon div{
	font-size: 23px;
	flex: 1;
	text-align: center;
}
.people{
	display: flex;
	align-items: center;
}
.name_box{
	height: 250px;
	overflow:scroll;
	overflow-x:visible;
}
.people img{
	width: 26px;
	height: 26px;
	border-radius: 26px;	
}
.people p{
    margin-top: 13px;
    margin-left: 3px;
}
.notice_title{
	text-align: center;
    padding: 4px 0;
    font-size: 16px;
    border-top: 1px solid #cccccc;
    border-bottom:1px solid #cccccc;
    font-weight: bold;
}
.notice{
	display: flex;
}
.notice_dian{
	width: 4px;
    height: 4px;
    border-radius: 50%;
    background: red;
    margin-top: 5px;
    margin-left: 7px;
}
.notice_box{
	height: 143px;
}
.notice_content{
	margin-left: 10px;
    font-size: 11px;
}
</style> 
	</head>
	<body>
	<?php if($user_data['user_cate']=='员工'): ?>
	<div class="container">
		<div class="row">
			<div class=" col-md-6"> 
				<div class="week_title">本周工作</div>
				<div class="img_box" id="main" ></div>
		    </div>
		    <div class=" col-md-6">
		    	 <div class="week_title">本月汇总</div>
		    	 <div class="img_box" id="main_two" ></div>
		    </div>     
		</div>
		<div class="row">
			<div class="bottom_title ">
				<div class="title_one">工作文档</div>
				<div class="title_two">新建文档 +</div>
				<div class="title_two">本地上传 +</div>
			</div> 
			<div class="bottom_table">
				<table class="table" border="" cellspacing="" cellpadding="">
					<tr>
					  <th>全选<input type="checkbox" /></th>
					  <th>时间</th>
					  <th>主题</th>
					  <th>内容</th>
					  <th>分类</th>
					  <th>查询</th>
					  <th>操作</th>
					</tr>
					<tr><td>Data</td></tr>
				</table>
			</div>
		</div>
		
	</div>
	<?php endif; if($user_data['user_cate']=='老板'): ?>
	<div class="container">
		<div class="lefts">
			<div class="title">年度统计总览-点击行查看</div>
			<div class="con_bian">
			<table class="table table-striped table-bordered table-hover table-condensed" >
				<tr >
						<th style="text-align: center!important; " width="100px">姓名</th>
						<th style="text-align: center!important;">数量</th>
						<th style="text-align: center!important;">总分</th>
					</tr>
			</table>
			<div v-for='(item,index) in user_statistics' >
			<div style="cursor: pointer;" @click='btns(index)'>
				<span class="btns" v-if="item.hidden==false">+</span>
				<span class="btns " v-if="item.hidden==true">-</span>{{item.year}}年</div>
			<table class="table table-striped table-bordered table-hover table-condensed" v-if="item.hidden">
				<thead>
					
				</thead>
				<tbody>
					
						<tr v-for='(i,ind) in item.data' style="text-align: center!important;" @click='examineuser(index,ind)'>
							<td width="100px">{{i.user_name}}</td>
							<td>{{i.liang}}</td>
							<td>{{i.zong}}</td>
						</tr>
						
				</tbody>
			</table>
		</div>
			</div>
		</div>
		<div class="lefts">
			<div class="title">{{nian}}月度{{name}}</div>
			<div class="img_box" id="yuedu" style="width: 350px;height: 300px"></div>
			<div>数量总计：{{shuliang}}</div>
			<div style="height: 1px;background: #eee;margin-bottom: 5px"></div>
			<div class="img_box" id="zongfen" style="width: 350px;height: 300px"></div>
			<div>总分总计：{{fenshu}}</div>
		</div>
		<div class="lefts">
			<div class="title">{{nian}}类别{{name}}</div>
		<div class="img_box" id="mains"  style="width: 350px;height: 300px"></div>
		<div>数量总计：{{shuliang}}</div>
			<div style="height: 1px;background: #eee"></div>
		<div class="img_box" id="mains_2"  style="width: 350px;height: 300px"></div>
		<div>总分总计：{{fenshu}}</div>
	</div>
  	</div>
  	<?php endif; ?>
	</body>
</html>
<?php if($user_data['user_cate']=='员工'): ?>
<script type="text/javascript">
	    var myChart = echarts.init(document.getElementById('main'));
        var option = {
            title: {
                text: '完成度%',
               textStyle:{fontSize:10},
               padding: [ 30,0,0,33]
            },
            tooltip: {},
            legend: {
                data:['销量']
            },
            xAxis: {
                data: ["星期一","星期二","星期三","星期四","星期五","星期六"]
            },
            yAxis: {
            	max:100
            },
            series: [{
                color:'#28d2ae',
                type: 'bar',
                data: <?php echo $week; ?>
            }]
        };
        myChart.setOption(option);// 使用刚指定的配置项和数据显示图表。
        
        var myChart = echarts.init(document.getElementById('main_two'));
	    var   option = {
	    xAxis: {
	        type: 'category',
	        data: ['第一周', '第二周', '第三周', '第四周']
	    },
	     tooltip: {}, //提示
	    yAxis: {
	        type: 'value',
	        max:100
	    },
	    series: [{
	    	 color:'#28d2ae',
	        data: <?php echo $month; ?>,
	        type: 'line',
	        smooth: true
	    }]
	    };
       myChart.setOption(option);
</script>
<?php endif; if($user_data['user_cate']=='老板'): ?>
<script type="text/javascript">
	
	new Vue({
    el: ".container",
    data: {
       user_statistics:<?php echo $user_statistics; ?>,
       name:'',
       nian:'',
       shuliang:0,
       fenshu:0
    },
    mounted(){
    	console.log(<?php echo $user_statistics; ?>);
    	console.log(this.users)
    
    },
    methods:{
    	btns(e){
    		this.user_statistics[e].hidden= !this.user_statistics[e].hidden?true:false
    		console.log(this.user_statistics[e].hidden);
    	},
    	examineuser(i,e){
    		this.nian=this.user_statistics[i].year+'年 '
        	this.name=' '+this.user_statistics[i].data[e].user_name
    		$.get('<?php echo url("admin/index/usertask"); ?>',
        	    	{
        	    		year:this.user_statistics[i].year,
        	    		uid:this.user_statistics[i].data[e].id
        	    	},(rtnData)=>{
        	    		this.shuliang=0;
        	    		this.fenshu=0;
        	    		
        	    	 for (var i = 0; i < rtnData.shuliang.length; i++) {
        	    	 	this.shuliang+=rtnData.shuliang[i];
        	    		this.fenshu+=rtnData.fenshu[i];
        	    	 }
                    
        	    	 QuantityChart.setOption({
        	    	 		 series:{ data:rtnData.shuliang},
        	    	 })
        	    	 TotalbarChart.setOption({
        	    	 		 series:{data:rtnData.fenshu,},
        	    	 })
        	    	 totalChart.setOption({
        	    	 	series:[{data:rtnData.mainfenshu,}]
        	    	 })
        	    	  numberChart.setOption({
        	    	 	series:[{data:rtnData.mainshuliang,}]
        	    	 })
     			});
    	}
    },

	})

	// 数量饼图 

	var numberChart = echarts.init(document.getElementById('mains'));
 var 	option = {
    title : {
        text: '',
        subtext: '',
        x:''
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },

    legend: {
     
        left: 'center',
        data: <?php echo $mainclass; ?>
    },
    series : [
        {
            name: '访问来源',
            type: 'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:<?php echo $main; ?>,

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
 numberChart.setOption(option);

 // 总分饼图
	var totalChart = echarts.init(document.getElementById('mains_2'));
 var 	option = {
    title : {
        text: '',
        subtext: '',
        x:''
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },

    legend: {
     
        left: 'center',
        data: <?php echo $mainclass; ?>
    },
    series : [
        {
            name: '访问来源',
            type: 'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:<?php echo $main; ?>,

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
 totalChart.setOption(option);

 // 数量柱状图 
	 var QuantityChart = echarts.init(document.getElementById('yuedu'));
        var option = {
    title : {
        text: '',
        subtext: ''
    },
    tooltip : {
       
    },
    legend: {
        data:['数量',]
    },
   
    calculable : true,
    xAxis : [
        {
            type : 'category',
            data : ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月']
        }
    ],
    yAxis: {
            	max:200
            },
   
    series : 
        {
            name:'数量',
            type:'bar',
            data:[],

        },
        
    
};
        QuantityChart.setOption(option);// 使用刚指定的配置项和数据显示图表。

// 总分柱状图 
	var TotalbarChart = echarts.init(document.getElementById('zongfen'));
        var option = {
            title: {
                text: '完成度%',
               textStyle:{fontSize:10},
               padding: [ 30,0,0,33]
            },
            tooltip: {},
            legend: {
                data:['总分']
            },
            xAxis: {
                data: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月']
            },
            yAxis: {
            	max:1200
            },
            series: [{
                color:'#28d2ae',
                type: 'bar',
                name:'总分',
                data:[]
            }]
        };
        TotalbarChart.setOption(option);
</script>
<?php endif; ?>