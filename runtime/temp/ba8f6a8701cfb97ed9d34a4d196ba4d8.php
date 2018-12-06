<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:81:"D:\wampserver\wamp64\www\oa_yxs\public/../application/admin\view\index\index.html";i:1544063398;s:73:"D:\wampserver\wamp64\www\oa_yxs\public/../application/admin\view\top.html";i:1544063398;s:74:"D:\wampserver\wamp64\www\oa_yxs\public/../application/admin\view\left.html";i:1544063398;s:74:"D:\wampserver\wamp64\www\oa_yxs\public/../application/admin\view\foot.html";i:1544063398;}*/ ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <!-- 引入组件库 -->
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
    <!-- 引入 vue路由-->
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <script type="text/javascript" src="__STATIC__/library/dropify-master/dist/js/dropify.min.js"></script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="__STATIC__/library/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="__STATIC__/library/ueditor/ueditor.all.min.js"></script>    
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
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/index/css/index.css?9"> <div class="left_menu lbs" id="left_menu">
	<ul v-if="controller!='Map'">
		<li><a href="#" class="glyphicon glyphicon-calendar"><p>工作台</p></a></li>
		<li><a href="#" class="glyphicon glyphicon-cog"><p>设置</p></a></li>
		<li><a href="#"><p>全功能</p></a></li>
		<li style="margin-top: 150px;"><a href="#" class="glyphicon glyphicon-tasks"><p>综合报表</p></a></li>
		<li><a href="#"><p>APP</p></a></li>
		<li><a href="#" class="glyphicon glyphicon-download-alt"><p>下载</p></a></li>
	</ul>
	<ul v-if="controller=='Map'" class="Maplist">
		<li><a href="<?php echo url('admin/map/index'); ?>" class="glyphicon glyphicon-home"><p>工作台</p></a></li>
		<li><a href="<?php echo url('admin/map/visit'); ?>" class="glyphicon glyphicon-user"><p>客户拜访</p></a></li>
		<li><a href="<?php echo url('admin/map/field'); ?>" class="glyphicon glyphicon-inbox"><p>外勤工单</p></a></li>
		<li><a href="<?php echo url('admin/map/business'); ?>" class="glyphicon glyphicon-plane"><p>出差管理</p></a></li>
		<li><a href="<?php echo url('admin/map/photo'); ?>" class="glyphicon glyphicon-camera"><p>实景照片</p></a></li>
		<li><a href="<?php echo url('admin/map/check'); ?>" class="glyphicon glyphicon-map-marker"><p>轨迹查询</p></a></li>
		<li><a href="<?php echo url('admin/map/sign'); ?>" class="glyphicon glyphicon-star"><p>考勤</p></a></li>
		<li><a href="<?php echo url('admin/map/set'); ?>" class="glyphicon glyphicon-cog"><p>设置</p></a></li>
	</ul>
</div>
<script type="text/javascript">
 new Vue({
        el:'#left_menu',
        data:{
           controller:"Index"
        },
        created(){
        	this.init();
        },
        methods:{
        	init(){
                this.controller="<?php echo request()->controller(); ?>";
        	}
        }
    })
</script>
 <?php if(\think\Session::get('user_cate')=='学生'): ?>
<div class="container">
    <div class="" style="height: 80px;background: #fff;margin-bottom: 10px 0px;text-align: center;line-height: 80px;color: red;font-size: 18px;">
        <p>提示:第一次登陆请尽快完善信息及修改密码</p>
    </div>
    <div class="title">
        <h3 style="display: inline-block;">工作台</h3>
        <br>
        <p style="display: inline-block;">欢迎您</p><span><?php echo \think\Session::get('user_name'); ?>!</span>
        <p style="font-size: 10px;display: inline-block;">请完善个人信息</p>
    </div>
    <div class="item">
        <ul>
            <li class="animated" style="animation-name: fadeInDown;">
                <a href="javascript:;" data-toggle="modal" data-target="#client1">
                    <img src="__STATIC__/admin/index/images/edit.jpg">
                       <div>
                        <h1>编辑信息</h1>
                        <p>做人要做一个有身份的人</p>
                    </div>
                </a>
                <p style="font-size: 8px;color: #ccc;text-align: center;line-height: 30px;">学生请选择</p>
            </li>
            <li class="animated" style="animation-name: fadeInDown;">
                <a href="<?php echo url('draw/start',['id'=>\think\Session::get('u_id')]); ?>">
                     <img src="__STATIC__/admin/index/images/draw.jpg">
                       <div>
                        <h1>参与抽奖</h1>
                        <p>奖还是要抽的，万一中了呢</p>
                    </div>
                </a>
                <p style="font-size: 8px;color: #ccc;text-align: center;line-height: 30px;">试试手气</p>
            </li>
             <li class="animated" style="animation-name: fadeInDown;">
                <a href="<?php echo url('crm/eachstudentinfo',['id'=>\think\Session::get('u_id')]); ?>">
                  <img src="__STATIC__/admin/index/images/info.jpg">
                       <div>
                        <h1>个人信息</h1>
                        <p>你的全部信息都在这里</p>
                    </div>
                        
                </a>
                <p style="font-size: 8px;color: #ccc;text-align: center;line-height: 30px;">试试手气</p>
            </li>
            <li class="animated" style="animation-name: fadeInDown;">
                <a href="<?php echo url('weekly/index',['id'=>\think\Session::get('u_id')]); ?>">
                  <img src="__STATIC__/admin/index/images/record.jpg">
                       <div>
                        <h1>日报/周报</h1>
                        <p>把你的经历心得都记录下来</p>
                    </div>
                        
                </a>
                <p style="font-size: 8px;color: #ccc;text-align: center;line-height: 30px;">试试手气</p>
            </li>
        </ul>
    </div>
    <div class="content row">
        <div class="news col-md-3 animated" style="animation-name: flipInY;">
            <div class="title">
                <h3>消息</h3>
                <p class="bz pull-left" style="margin:8px 0 0 3px;"><a href="#" class="glyphicon glyphicon-list-alt"></a></p>
                <a href="#" class="glyphicon glyphicon-repeat"></a>
            </div>
            <div class="cont">
                <?php foreach($notice_info as $notice): ?>
                <div class="text" style="width:100%;text-align:left;">
                    <h6>发布时间:<?php echo $notice['time']; ?></h6>
                    <p><?php echo $notice['author']; ?><span style="font-size:18px;">:<?php echo $notice['content']; ?></span></p>
                    <div class="split" style="height:2px;width:100%;background:#ccc"></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="task col-md-3 col-md-offset-1 animated" style="animation-name: flipInY;">
            <div class="title">成绩</div>
            <ul>
                <li><span class="glyphicon glyphicon-star"></span></li>
                <li><span class="glyphicon glyphicon-search"></span></li>
            </ul>
        </div>
        <div class="remind col-md-3 col-md-offset-1 animated" style="animation-name: flipInY;">
            <div class="title">任务活动</div>
            <ul>
            </ul>
            <div class="left">
                <span class="glyphicon glyphicon-cog"></span>
                <span class="glyphicon glyphicon-repeat"></span>
            </div>
        </div>
    </div>
    <div class="add_info">
        <div class="top">
            <h5>速建</h5><a href="#" class="glyphicon glyphicon-minus"></a></div>
        <a href="#client1" data-toggle="modal" class="btn btn-primary">学生</a>
    </div>
<!-- 学生模态框开始 -->
<div class="modal fade" id="client1" style="padding: 30px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">请完善个人信息</div>
            <div class="modal-body">
                <form action="<?php echo url('studentsave'); ?>" class="form" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">学校</span>
                        <select name="schoolname_id" class="form-control" style="width: 95%;">
                            <option value="index.html">请选择学校</option>
                            <?php foreach($school_name as $info): ?>
                            <option value="<?php echo $info['id']; ?>"><?php echo $info['school_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <a class="glyphicon glyphicon-book" title="数据字典" data-placement="bottom" href="<?php echo url('crm/school'); ?>"></a>
                    </div>
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">姓名</span>
                                <input type="text" class="form-control" placeholder="姓名" aria-describedby="basic-addon1" name="name" value="<?php echo \think\Session::get('user_name'); ?>">
                            </div>
                        </div>
                        <div class="col-md-5 pull-right">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">专业</span>
                                <input type="text" class="form-control" placeholder="学校专业" aria-describedby="basic-addon1" name="professio">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">手机</span>
                                <input type="text" class="form-control" placeholder="手机号码" aria-describedby="basic-addon1" name="phone">
                            </div>
                        </div>
                        <div class="col-md-5 pull-right">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">微信</span>
                                <input type="text" class="form-control" placeholder="微信号" aria-describedby="basic-addon1" name="wecat">
                            </div>
                        </div>
                    </div>
                    <div class="input-group" style="margin:25px 0;">
                        <span class="input-group-addon" id="basic-addon1">修改密码</span>
                        <input type="text" class="form-control" placeholder="输入密码" aria-describedby="basic-addon1" name="password">
                    </div>
                    <div class="input-group" style="margin-top: 25px;">
                        <span class="input-group-addon" id="basic-addon1">课程</span>
                        <select name="lessonname_id" class="form-control">
                            <option value="index.html">请选择所报课程</option>
                            <?php foreach($lesson_name as $info): ?>
                            <option value="<?php echo $info['id']; ?>"><?php echo $info['lesson_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group" style="margin:25px 0 0 220px;">
                        <a href="https://y.qq.com/portal/player.html" id="true_tj">
                            <input type="submit" class="btn btn-primary">
                        </a>
                        <a href="" class="btn btn-danger">取消</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endif; if(\think\Session::get('user_cate')!='学生'): ?>
<div class="container">
    <div class="title">
        <h3 style="display: inline-block;">工作台</h3>
        <p style="display: inline-block;">欢迎您,</p><span><?php echo \think\Session::get('u_company'); ?> <?php echo \think\Session::get('user_cate'); ?> <?php echo \think\Session::get('user_name'); ?>!</span>
    </div>
    <div class="item">
        <ul>
           <li class="animated" style="animation-name: fadeInDown;">
                <a href="javascript:;" data-toggle="modal" data-target="#client3">
                     <img src="__STATIC__/admin/crm/images/index/notice.jpg">
                       <div>
                        <h1>发布公告</h1>
                        <p>发布公告给所有成员</p>
                    </div>
                </a>
                <p style="font-size: 8px;color: #ccc;text-align: center;line-height: 30px;">把信息发布给其他成员</p>
            </li>
           <li class="animated" style="animation-name: fadeInDown;">
                <a href="<?php echo url('crm/index'); ?>">
                     <img src="__STATIC__/admin/crm/images/index/user.jpg">
                       <div>
                        <h1>客户</h1>
                        <p>查看所有客户信息</p>
                    </div>
                </a>
                <p style="font-size: 8px;color: #ccc;text-align: center;line-height: 30px;">客户资料查看</p>
            </li>
            <li class="animated" style="animation-name: fadeInDown;">
                     <a href="<?php echo url('crm/studentsinfo'); ?>">
                     <img src="__STATIC__/admin/crm/images/index/student.jpg">
                       <div>
                        <h1>实习</h1>
                        <p>查看所有实习生信息</p>
                    </div>
                </a>
                <p style="font-size: 8px;color: #ccc;text-align: center;line-height: 30px;">实习生资料查看</p>
            </li>
<li class="animated" style="animation-name: fadeInDown;">
                <a href="<?php echo url('gongdan/index'); ?>" data-toggle="modal" >
                    <img src="__STATIC__/admin/index/images/edit.jpg">
                       <div>
                        <h1>外勤工单管理</h1>
                        <p>外勤工单提交和审批</p>
                    </div>
                </a>
                <p style="font-size: 8px;color: #ccc;text-align: center;line-height: 30px;">学生请选择</p>
            </li>
           <!--  <li class="animated" style="animation-name: fadeInDown;">
               <a href="<?php echo url('draw/start',['id'=>\think\Session::get('u_id')]); ?>">
                    <img src="__STATIC__/admin/index/images/draw.jpg">
                      <div>
                       <h1>参与抽奖</h1>
                       <p>奖还是要抽的，万一中了呢</p>
                   </div>
               </a>
               <p style="font-size: 8px;color: #ccc;text-align: center;line-height: 30px;">试试手气</p>
           </li> -->
             <!-- <li class="animated" style="animation-name: fadeInDown;">
                <a href="<?php echo url('crm/eachstudentinfo',['id'=>\think\Session::get('u_id')]); ?>">
                  <img src="__STATIC__/admin/index/images/info.jpg">
                       <div>
                        <h1>个人信息</h1>
                        <p>你的全部信息都在这里</p>
                    </div>
                        
                </a>
                <p style="font-size: 8px;color: #ccc;text-align: center;line-height: 30px;">试试手气</p>
                         </li> -->
            <li class="animated" style="animation-name: fadeInDown;">
                <a href="<?php echo url('Information/index'); ?>">
                  <img src="__STATIC__/admin/index/images/record.jpg">
                       <div>
                        <h1>员工信息管理</h1>
                        <p>员工信息自我修改和BOSS管理</p>
                    </div>
                        
                </a>
                <p style="font-size: 8px;color: #ccc;text-align: center;line-height: 30px;">修改个人信息请选择</p>
            </li>
            <li class="animated" style="animation-name: fadeInDown;">
                <a href="<?php echo url('Bumen/index'); ?>">
                  <img src="__STATIC__/admin/index/images/info.jpg">
                       <div>
                        <h1>公司部门管理</h1>
                        <p>公司部门增删改查</p>
                    </div>
                        
                </a>
                <p style="font-size: 8px;color: #ccc;text-align: center;line-height: 30px;">管理公司部门请选择</p>
            </li>
        </ul>
    </div>
<!-- 公告模态框开始 -->
<div class="modal fade" id="client3" style="padding: 30px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">发布公告</div>
            <div class="modal-body">
                <form action="<?php echo url('noticesave'); ?>" class="form" method="post" enctype="multipart/form-data">
                    <div class="input-group" style="margin:25px 0;">
                        <span class="input-group-addon" id="basic-addon1">公告</span>
                        <textarea class="form-control" name="content"></textarea>
                    </div>
                    <div class="form-group" style="margin:25px 0 0 220px;">
                        <a href="" id="true_tj">
                            <input type="hidden" name="author" value="<?php echo \think\Session::get('user_name'); ?>">
                            <input type="submit" class="btn btn-primary">
                        </a>
                        <a href="" class="btn btn-danger">取消</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="content row">
     <div class="news col-md-3 animated" style="animation-name: flipInY;width: 97.5%;">
        <div class="title">
            <h3>消息</h3>
            <a href="#" class="glyphicon glyphicon-repeat"></a>
        </div>
        <div class="cont">
                <?php foreach($notice_info as $notice): ?>
                <div class="text" style="width:100%;text-align:left;">
                    <h6>发布时间:<?php echo $notice['time']; ?></h6>
                    <p><?php echo $notice['author']; ?><span style="font-size:18px;">:<?php echo $notice['content']; ?></span></p>
                    <div class="split" style="height:2px;width:100%;background:#ccc"></div>
                </div>
                <?php endforeach; ?>
            </div>
    </div>
<!--     <div class="task col-md-3 col-md-offset-1 animated" style="animation-name: flipInY;">
    <div class="title">代办任务</div>
    <ul>
        <li>最近沟通</li>
        <li>to我</li>
        <li><span class="glyphicon glyphicon-star"></span></li>
        <li>超期</li>
        <li><span class="glyphicon glyphicon-search"></span></li>
    </ul>
</div>
<div class="remind col-md-3 col-md-offset-1 animated" style="animation-name: flipInY;">
    <div class="title">提醒</div>
    <ul>
        <li>销售</li>
        <li>客户</li>
        <li>财务</li>
        <li>采购</li>
        <li>库管</li>
        <li>维修</li>
    </ul>
    <div class="left">
        <span class="glyphicon glyphicon-cog"></span>
        <span class="glyphicon glyphicon-repeat"></span>
    </div>
</div> -->
<div class="add">
    <a href="">
        <i class="glyphicon glyphicon-plus"></i>
        <span style="font-size: 12px;" data-toggle="modal">速建</span>
    </a>
</div>
<div class="add_info">
    <div class="top">
        <h5>速建</h5><a href="#" class="glyphicon glyphicon-minus"></a></div>
    <a href="#client" data-toggle="modal" class="btn btn-primary">客户</a>
    <a href="#client1" data-toggle="modal" class="btn btn-primary">实习生</a>
</div>
</div>
<!-- 客户模态框开始 -->
<div class="modal fade" id="client" style="padding: 30px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">创建客户</div>
            <div class="modal-body">
                <form action="<?php echo url('customersave'); ?>" class="form" method="post" enctype="multipart/form-data">
                    <div class="input-group spacing" style="margin-top: 25px;">
                        <span class="input-group-addon" id="basic-addon1">公司</span>
                        <input type="text" class="form-control" placeholder="公司名称" aria-describedby="basic-addon1" name="company_name">
                    </div>
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">姓名</span>
                                <input type="text" class="form-control" placeholder="客户姓名" aria-describedby="basic-addon1" name="user_name">
                            </div>
                        </div>
                        <div class="col-md-5 pull-right">
                            <div class="form-inline">
                                <select name="usersource_id" class="form-control" style="width: 90%;">
                                    <option value="index.html">客户来源</option>
                                    <?php foreach($user_source as $info): ?>
                                    <option value="<?php echo $info['id']; ?>"><?php echo $info['user_source']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <a class="glyphicon glyphicon-book" title="数据字典" data-placement="bottom" href="<?php echo url('crm/usersource'); ?>"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">手机</span>
                                <input type="text" class="form-control" placeholder="手机号码" aria-describedby="basic-addon1" name="user_phone">
                            </div>
                        </div>
                        <div class="col-md-5 pull-right">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">电话</span>
                                <input type="text" class="form-control" placeholder="电话号码" aria-describedby="basic-addon1" name="user_telephone">
                            </div>
                        </div>
                    </div>
                    <div class="input-group" style="margin:25px 0;">
                        <span class="input-group-addon" id="basic-addon1">备注</span>
                        <input type="text" class="form-control" placeholder="备注" aria-describedby="basic-addon1" name="remark">
                    </div>
                    <!-- 选择客户类型 -->
                    <div class="form-inline">
                        <label>选择客户类型</label>
                        <select name="companycate_id" class="form-control" style="width: 95%;">
                            <option value="index.html">请选择</option>
                            <?php foreach($list as $info): ?>
                            <option value="<?php echo $info['id']; ?>"><?php echo $info['company_cate']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <a class="glyphicon glyphicon-book" title="数据字典" data-placement="bottom" href="<?php echo url('crm/companycate'); ?>"></a>
                    </div>
                    <div class="form-group" style="margin:25px 0 0 220px;">
                        <a href="" id="true_tj">
                            <input type="submit" class="btn btn-primary">
                        </a>
                        <a href="" class="btn btn-danger">取消</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- 模态框结束 -->
<!-- 学生模态框开始 -->
<div class="modal fade" id="client1" style="padding: 30px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">录入学生</div>
            <div class="modal-body">
                <form action="<?php echo url('studentsave'); ?>" class="form" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">学校</span>
                        <select name="schoolname_id" class="form-control" style="width: 95%;">
                            <option value="index.html">请选择学校</option>
                            <?php foreach($school_name as $info): ?>
                            <option value="<?php echo $info['id']; ?>"><?php echo $info['school_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <a class="glyphicon glyphicon-book" title="数据字典" data-placement="bottom" href="<?php echo url('crm/school'); ?>"></a>
                    </div>
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">姓名</span>
                                <input type="text" class="form-control" placeholder="姓名" aria-describedby="basic-addon1" name="name">
                            </div>
                        </div>
                        <div class="col-md-5 pull-right">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">专业</span>
                                <input type="text" class="form-control" placeholder="学校专业" aria-describedby="basic-addon1" name="professio">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">手机</span>
                                <input type="text" class="form-control" placeholder="手机号码" aria-describedby="basic-addon1" name="phone">
                            </div>
                        </div>
                        <div class="col-md-5 pull-right">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">微信</span>
                                <input type="text" class="form-control" placeholder="微信号" aria-describedby="basic-addon1" name="wecat">
                            </div>
                        </div>
                    </div>
                    <div class="input-group" style="margin:25px 0;">
                        <span class="input-group-addon" id="basic-addon1">备注</span>
                        <input type="text" class="form-control" placeholder="备注" aria-describedby="basic-addon1" name="remark">
                    </div>
                    <div class="input-group" style="margin-top: 25px;">
                        <span class="input-group-addon" id="basic-addon1">课程</span>
                        <select name="lessonname_id" class="form-control">
                            <option value="index.html">请选择所报课程</option>
                            <?php foreach($lesson_name as $info): ?>
                            <option value="<?php echo $info['id']; ?>"><?php echo $info['lesson_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group" style="margin:25px 0 0 220px;">
                        <a href="" id="true_tj">
                            <input type="submit" class="btn btn-primary">
                        </a>
                        <a href="" class="btn btn-danger">取消</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php endif; ?>
<!-- 模态框结束 -->
<script type="text/javascript" src="__STATIC__/admin/index/js/index.js?126"></script>

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