<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:66:"D:\wamp64\www\oa\public/../application/admin\view\index\index.html";i:1547883356;s:58:"D:\wamp64\www\oa\public/../application/admin\view\top.html";i:1547709787;s:60:"D:\wamp64\www\oa\public/../application/admin\view\right.html";i:1547630952;s:59:"D:\wamp64\www\oa\public/../application/admin\view\left.html";i:1547883014;s:59:"D:\wamp64\www\oa\public/../application/admin\view\foot.html";i:1544063215;}*/ ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/index/css/index.css?9">
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/index/css/index2.css">

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
                    <!-- <span class="glyphicon glyphicon-user"> -->
                        <img src="__UPLOADS__<?php echo \think\Session::get('imageUrl'); ?>">
                    
                </div>
               <form action="<?php echo url('index/login/logout'); ?>" method="post" class="form" style="margin-left:-100px">
                <span class="user_name">公司id:<?php echo \think\Session::get('u_belong'); ?> <?php echo \think\Session::get('u_company'); ?> <?php echo \think\Session::get('user_name'); ?>(<?php echo \think\Session::get('user_cate'); ?>)</span>
                <span class="user_name"> <a href="<?php echo url('admin/index/index'); ?>"  id="return">返回主页</a></span>
                <input id="exit" type="submit" value= "安全退出" class="btn btn-default" style="margin:4px;padding:0;"></input>
                <div class="bell" @click='bell'>
                    <img src="__STATIC__/admin/bell.png"></a>
                    <div v-if='num!=0'></div>
                </div>
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
           cur:'',
           num:0
        },
        created(){
            this.init();
            this.red();
            
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
                                 }else{
                                    this.$notify({
                                          title: '提示',
                                          message: rtnData[i].user_name+'员工添加了一个新的工作任务',
                                          duration: 0
                                        });
                                 }
                               }else if(rtnData[i].prompt==2){
                                  if(rtnData[i].zhoujihua==1){
                                      this.$notify({
                                          title: '提示',
                                          message: rtnData[i].user_name+'员工完成了一个周计划任务',
                                          duration: 0
                                        });
                                  }else{
                                     this.$notify({
                                          title: '提示',
                                          message: rtnData[i].user_name+'员工完成了一个工作任务',
                                          duration: 0
                                        });
                                  }
                               }
                               
                            <?php endif; if(\think\Session::get('user_cate')=='员工'): ?>
                                this.$notify({
                                  title: '提示',
                                  message: rtnData[i].user_name+'老板发布了一个新的工作任务',
                                  duration: 0
                                })
                            <?php endif; ?>
                        }
                       
                });
            },2000);
            
        },
        methods:{
            bell(){
                window.location.href='<?php echo url('admin/bell/index'); ?>'
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
	<body>
		<div class="page" style="z-index: 99;background:#fff;padding-left: 0%;height:100%">
			<div class="Score">
				<div class="fens">
					<div class="se" style="height:100%;background: #00adc7;"></div>
					<div class="fen">{{week}}分</div>
				</div>
			</div>
			<div class="font">本周</div>

			<div class="Score">
				<div class="fens">
					<div class="se" style="height:100%;text-align: center;background: #87d7a5;"></div>
					<div class="fen">{{month}}分</div>
				</div>
			</div>
			<div class="font">本月</div>

			<div class="Score">
				<div class="fens">
					<div class="se" style="height:100%;background: #fbad4c;"></div>
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
	</body>
	<script>
	new Vue({
		el:'.page',
		data:{
			 week:0,
			 month:0,
			 year:0,
			 prompt:[]
		},
		created(){
        	$.get('<?php echo url("admin/index/right"); ?>',
                    (rtnData)=>{
                         this.week=rtnData.week
						 this.month=rtnData.month
						 this.year=rtnData.year
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
        <li onclick="jump_seven()"><a href="#" class="iconfont icon-kaoqindaqia"><p>员工考勤</p></a></li>
        <li onclick="jump_eight()"><a href="#" class="iconfont icon-jichuguanli"><p>投票</p></a></li>
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
 function jump_seven(){
    window.location.href='<?php echo url('admin/index/lookAttendance'); ?>'
 }
 function jump_eight(){
    window.location.href='<?php echo url('admin/index/toupiao'); ?>'
 }

</script>

<div class="container">
<div class="index_content_center">
    <div class="center_1">

      <div class="center_1a">
<img src="__STATIC__/admin/index/images/20181206171359.jpg" alt="">
         <div class="rounded" @mouseover='hidyin(true)' @mouseout='hidyin(false)'>
            
           <img :src="'__UPLOADS__'+user.imageUrl" alt="">
           <div class="yin"  v-show='hid' data-toggle="modal" data-target="#myModal">更换头像</div>
         </div>
      </div>
      
    <!-- <img src="__STATIC__/admin/index/images/20181206171359.jpg" alt="" > -->

<!--     <img src="__STATIC__/admin/index/images/20181206171360.jpg" alt="" class="center_1b">
 --> 

    <p style="font-size: 1em;"><strong>{{user.user_cate}}</strong></p>
       <h3 style="margin-bottom: 0.1em;"><strong>{{user.user_name}}</strong></h3>
    <!-- <button class="button1"><strong>打卡</strong></button> -->
    <!-- <form action="<?php echo url('clock'); ?>"> -->
      <!-- <button class="button2" style="margin-left:32%;" ><strong>打卡</strong></button> -->
      <el-button type="primary" :disabled='disabled' @click="submitForm">打卡</el-button>
    <!-- </form> -->
    
    <a href="<?php echo url('task/index'); ?>" class="btn btn-lg btn-info " style="margin-top: 12px;width: 100%;">任务管理</a>
    </div>
    
    <div class="center_2">
      
          <div class="center_2a" >
              <select  id="Attendance_status" name="Attendance_status">
                  <option value="迟到">迟到</option>
                  <option value="早退">早退</option>
                  <option value="旷工">旷工</option>
              </select>
          </div>
          
          <div class="cneter_2b">
            <span>班次：</span>
            <el-select v-model="value" placeholder="请选择" style='width: 80%;'>
              <el-option
                v-for="item in options"
                :key="item.value"
                :label="item.label"
                :value="item.value">
              </el-option>
            </el-select>
          </div>
          <div class="cneter_2ba"><img src="__STATIC__/admin/index/images/rili.png" alt=""></div>
          <div class="cneter_2b">
            <span>时间：</span>
              <el-date-picker
              v-model="value2"
              type="datetime"
              placeholder="选择日期时间">
            </el-date-picker>
          
          </div>
          <textarea rows="10" cols="30" placeholder="说明原因" name="reason" id="reason"></textarea> 
          <button href="#" class="cneter_2c" @click='holiday'>提交</button>
    
    </div>

    <div class="cneter_3" style="margin-right: 2%">
      <div id="shuliang"   style="width: 100%;height:300px;"></div>
        
    </div>
    <div class="cneter_3">
      <div id="fenshu"   style="width: 100%;height:300px;"></div>
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


<footer class="footer" style="text-align: center;margin-top: 50px;">
	&nbsp;&nbsp;网站: <b><a href="http://xiaomai.zzlic.cn/public/" target="_blank">xiaomai.zzlic.cn</a></b> 
	&nbsp;
	<a class="btn btn-danger btn-xs" href="#" onclick="window.open ('http://xiaomai.zzlic.cn/public//about/tousu.html', 'newwindow', 'height=410, width=540,top=100,left=200;toolbar=no, menubar=no, scrollbars=no, resizable=no,status=no');return false;"> <i class="fa fa-whatsapp m-r-5"></i>
		投诉&amp;问题
	</a>
	&nbsp;&nbsp;
	<a class="btn btn-default btn-xs" href="#" onclick="showWX(0);return false;"> <i class="fa fa-weixin m-r-5"></i>
		微客服
	</a>
	&nbsp;&nbsp;
	<a class="btn btn-primary btn-xs" href="#" onclick="showWX(1);return false;">
		<i class="md md-speaker-notes m-r-5"></i>
		订阅号
	</a>
	<br>
	Copyright © 2004-2017 &nbsp;广州蒲明&nbsp;&nbsp;  gz Volitation Information Technology Co.,ltd
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
new Vue({
    el: ".container",
    data: {

      value:'',
      value2:'',
      hid:false,
      imageUrl: '',
      imgs:'',
      user:<?php echo $users; ?>,
      clock:<?php echo $data; ?>,
      disabled:false,
      options: [{
          value: '0',
          label: '上午'
        },
        {
          value: '1',
          label: '下午'
        }],
    },
     mounted(){
       var now = new Date();
       var ttime= new Date().getTime()
       var year = now.getFullYear(); //得到年份
       var month = now.getMonth()+1;//得到月份
       var date = now.getDate();//得到日期
       var shijian=year+'/'+month+'/'+date+''
       var  forenoonshang=new Date(shijian +' 08:30').getTime();
       var forenoonxia=new Date(shijian +' 12:30:00').getTime();;
       var afternoonshang=new Date(shijian +' 14:30:00').getTime();;
       var afternoonxia=new Date(shijian +' 19:00:00').getTime();;
     
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
     
    
    },
    methods:{
      submitForm(e){
        window.location.href='<?php echo url('clock'); ?>'
      },
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
      if(this.value1==''||this.value2==''){
        this.$message('请选择时间');
        return;
      }

        var Attendance_status=$('#Attendance_status').val();
        var reason=$('#reason').val();
        var classes=new  Date(this.value1).getTime()/1000;
        var time=new  Date(this.value2).getTime()/1000;
        
         $.get('<?php echo url("Attendance"); ?>',
          {
            Attendance_status:Attendance_status,
            classes:this.value,
            time:time,
            reason:reason

          },(rtnData)=>{
               $('#reason').val('');
                      this.value1='';
                      this.value2='';
                        this.$message({
                          message: '申请成功！',
                          type: 'success'
                });
          });
      }
    }
  })

</script>




 <script type="text/javascript">

        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('shuliang'));
         
        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '本月工作任务数量'
            },
            color: ['#3398DB'],
            tooltip : {
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
            legend: {
                data:['数量']
            },
            xAxis : [
                {
                    type : 'category',
                    data : <?php echo $zhouci; ?>,
                    axisTick: {
                        alignWithLabel: true
                    }
                }
            ],
            yAxis : [
                {
                    type : 'value'
                }
            ],
            series : [
                {
                    name:'数量',
                    type:'bar',
                    barWidth: '60%',
                    data:<?php echo $shuliang; ?>
                }
            ]
};

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);

                // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('fenshu'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '本月工作任务分数'
            },
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
            legend: {
                data:['总分']
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
                data: <?php echo $zongfen; ?>
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>