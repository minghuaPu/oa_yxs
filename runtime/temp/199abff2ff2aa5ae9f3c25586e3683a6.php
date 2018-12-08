<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"D:\wamp64\www\OAZ\oa_yxs\public/../application/admin\view\crm\studentsinfo.html";i:1544063215;s:66:"D:\wamp64\www\OAZ\oa_yxs\public/../application/admin\view\top.html";i:1544063215;s:67:"D:\wamp64\www\OAZ\oa_yxs\public/../application/admin\view\left.html";i:1544063215;s:67:"D:\wamp64\www\OAZ\oa_yxs\public/../application/admin\view\foot.html";i:1544063215;}*/ ?>
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
</script> <div class="left_menu lbs" id="left_menu">
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

<!-- 页面css样式 -->
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/crm/css/index.css?199">
<div class="container" id="app" style="width: 80%;">
<!--     <div class="title row">
    <div class="col-md-1" >
        <a href="javascript:" style="border-bottom: 2px gray solid">全部数据</a>
    </div>
    
    <div class="col-md-1" >
        <a href="javascript:">前端</a>
    </div>
    <div class="col-md-1">
        <a href="javascript:">全栈</a>
    </div>
    <div class="col-md-1">
        <a href="javascript:">设计</a>
    </div>
    <div class="col-md-1">
        <a href="javascript:">后台</a>
    </div>
</div> -->
    <!-- 全部数据 -->
    
    <div class="all">
    <div class="search row">
        <form action="<?php echo url('studentsinfo'); ?>" class="form">
            <div class="col-md-3 form-inline" style="overflow: hidden;">
                <p class="glyphicon glyphicon-glass pull-left" style="margin-top: 8px;"></p>
                <!-- 课程分类选择 -->
                <div class="pull-left">
                    <select class="form-control pull-right" name="lessonname_id" onchange="$('#basic-addon2').click()" style="width: 100%;">
                        <option value="">课程查询</option>
                         <?php foreach($lesson_name as $info): ?>
                    <option value="<?php echo $info['id']; ?>"><?php echo $info['lesson_name']; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4 form-inline">
                <p class="glyphicon glyphicon-search pull-left" style="margin: 8px 5px 0 0;"></p>
                <div class="input-group pull-left">
                    <input type="text" class="form-control pull-left" placeholder="请输入学校" aria-describedby="basic-addon2" name="school_name">
                </div>
                <input type="submit" class="btn btn-group pull-left" id="basic-addon2" style="cursor: pointer;" value="搜索" style="margin-left:-100px;">
            </div>
        </form>
    </div>
    <div class="info">
        <div>
            <div class="pull-left">
                <p class="pull-left" style="margin:5px 0 0 5px;">学生基本信息</p>
                <span style="color: #ccc">共2条</span>
                <a href="<?php echo url('studentsinfo'); ?>" class="btn btn-default">清除搜索</a><span class="glyphicon glyphicon-trash"></span>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-hover">
        <tr class="warning">
            <td>ID</td>
            <th>姓名</th>
            <th>学校名称</th>
            <th>所学专业</th>
            <th>电话</th>
            <th>微信</th>
            <th>实习岗位</th>
            <th>报名时间</th>
            <th>操作</th>
        </tr>
        <?php foreach($list as $info): ?>
        <tr>
            <td><?php echo $info['id']; ?></td>
            <td><?php echo $info['name']; ?></td>
            <td><?php echo $info['school_name']; ?></td>
            <td><?php echo $info['professio']; ?></td>
            <td><?php echo $info['phone']; ?></td>
             <td><?php echo $info['wecat']; ?></td>
            <td><?php echo $info['lesson_name']; ?></td>
            <td><?php echo $info['time']; ?></td>
            <td>
                <!-- <a class="glyphicon glyphicon-list-alt" title="视图" data-placement="bottom" href="<?php echo url('crm/eachstudentinfo',['id'=>$info['uid']]); ?>" target="view_window"></a> -->
                <a class="glyphicon glyphicon-pencil" title="实习审评" data-placement="bottom"  href="<?php echo url('crm/editstudentinfo',['id'=>$info['uid']]); ?>" target="view_window">
                    </a>
                </a>
                <a class="glyphicon glyphicon-remove" title="删除" data-placement="bottom" onclick="return confirm('确定要删除?')" href="<?php echo url('deletestudentsinfo',['id'=>$info['id']]); ?>" ></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
    
</div>

  <script type="text/javascript">
var app = new Vue({
  el:'#app',
  data: {
  
  },
  methods: {
   
    }
  
})
</script>

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