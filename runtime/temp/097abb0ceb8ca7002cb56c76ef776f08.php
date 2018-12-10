<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:74:"E:\BC\wamp64\www\oa\public/../application/admin\view\index\department.html";i:1544234554;s:61:"E:\BC\wamp64\www\oa\public/../application/admin\view\top.html";i:1544239444;s:62:"E:\BC\wamp64\www\oa\public/../application/admin\view\left.html";i:1544239500;s:63:"E:\BC\wamp64\www\oa\public/../application/admin\view\right.html";i:1544239601;}*/ ?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/department/department.css"/>
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
	<div class="left_menu lbs" id="left_menu" style="z-index: 99;">
	<ul v-if="controller!='Map'">
		<li onclick="jump()"><a href="#" class="iconfont icon-geren"><p>个人管理</p></a></li>
		<li onclick="jump_two()"><a href="#" class="iconfont icon-gongzuo" style="padding-top:-2px"><p>工作管理</p></a></li>
		<li onclick="jump_three()"><a href="#" class="iconfont icon-caiwuguanli"><p>财务管理</p></a></li>
		<li onclick="jump_four()"><a href="#" class="iconfont icon-group"><p>部门管理</p></a></li>
		<li onclick="jump_five()"><a href="#" class="iconfont icon-iconset0337"><p>信息中心</p></a></li>
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
 	window.location.href='<?php echo url('admin/index/index'); ?>'
 }

</script>
 
	<!DOCTYPE html>
<html>
	<head>
<link rel="stylesheet" type="text/css" href=" __STATIC__/admin/iconfont_left.css"/>
<script src="__STATIC__/admin/echarts.min.js" type="text/javascript" charset="utf-8"></script>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<div class="page" style="z-index: 99;background:white;">
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
		<div class="container">
			<div class="top">
				<div class="status"> 
					<div class="status_title">部门概况</div>
					<div class="img_box" id="main" ></div>
			    </div>
			    <div class="excellent">
			    	 <div class="excellent_title">优秀部门TOP3</div>
			    	 <div class="img_box" id="main_two" ></div>
			    </div>     
			</div>
			<div class="bottom">
				<div class="">
					<div class="status_title_two">优秀个人</div>
					<div class="img_box_three" id="main_three" ></div>
				</div>
				<div class="contribution">
					<div class="status_title_two">个人贡献</div>
					<div class="img_box_four" id="main_four" ></div>
				</div>
			</div>
		</div>	
	</body>
</html>
<script type="text/javascript">
	var myChart = echarts.init(document.getElementById('main'));
	var option = {
    title: {
        text: '人数分布',
        textStyle:{fontSize:10},
        padding: [ 20,0,0,33]
    },
    tooltip: {},
    legend: { },
    radar: {
        // shape: 'circle',
        name: {
            textStyle: {
                color: '#fff',
                backgroundColor: '#999',
                borderRadius: 3,
                padding: [3, 5]
           }
        },
        indicator: [
           { name: '设计部', max: 100},
           { name: '市场部', max: 100},
           { name: '财务部', max: 100},
           { name: '后勤部', max: 100},
           { name: '管理部', max: 100},
           { name: '技术部', max: 100}
        ]
    },
    series: [{
         color:'#28d2ae',
        type: 'radar',
        // areaStyle: {normal: {}},
        data : [
            {
            	
                value : [10, 20, 30, 10, 40, 80],
                
            },
             
        ]
    }]
};
	 myChart.setOption(option);
	
	
	var myChart_two = echarts.init(document.getElementById('main_two'));
	var pathSymbols = {
    reindeer: 'path://M-22.788,24.521c2.08-0.986,3.611-3.905,4.984-5.892 c-2.686,2.782-5.047,5.884-9.102,7.312c-0.992,0.005-0.25-2.016,0.34-2.362l1.852-0.41c0.564-0.218,0.785-0.842,0.902-1.347 c2.133-0.727,4.91-4.129,6.031-6.194c1.748-0.7,4.443-0.679,5.734-2.293c1.176-1.468,0.393-3.992,1.215-6.557 c0.24-0.754,0.574-1.581,1.008-2.293c-0.611,0.011-1.348-0.061-1.959-0.608c-1.391-1.245-0.785-2.086-1.297-3.313 c1.684,0.744,2.5,2.584,4.426,2.586C-8.46,3.012-8.255,2.901-8.04,2.824c6.031-1.952,15.182-0.165,19.498-3.937 c1.15-3.933-1.24-9.846-1.229-9.938c0.008-0.062-1.314-0.004-1.803-0.258c-1.119-0.771-6.531-3.75-0.17-3.33 c0.314-0.045,0.943,0.259,1.439,0.435c-0.289-1.694-0.92-0.144-3.311-1.946c0,0-1.1-0.855-1.764-1.98 c-0.836-1.09-2.01-2.825-2.992-4.031c-1.523-2.476,1.367,0.709,1.816,1.108c1.768,1.704,1.844,3.281,3.232,3.983 c0.195,0.203,1.453,0.164,0.926-0.468c-0.525-0.632-1.367-1.278-1.775-2.341c-0.293-0.703-1.311-2.326-1.566-2.711 c-0.256-0.384-0.959-1.718-1.67-2.351c-1.047-1.187-0.268-0.902,0.521-0.07c0.789,0.834,1.537,1.821,1.672,2.023 c0.135,0.203,1.584,2.521,1.725,2.387c0.102-0.259-0.035-0.428-0.158-0.852c-0.125-0.423-0.912-2.032-0.961-2.083 c-0.357-0.852-0.566-1.908-0.598-3.333c0.4-2.375,0.648-2.486,0.549-0.705c0.014,1.143,0.031,2.215,0.602,3.247 c0.807,1.496,1.764,4.064,1.836,4.474c0.561,3.176,2.904,1.749,2.281-0.126c-0.068-0.446-0.109-2.014-0.287-2.862 c-0.18-0.849-0.219-1.688-0.113-3.056c0.066-1.389,0.232-2.055,0.277-2.299c0.285-1.023,0.4-1.088,0.408,0.135 c-0.059,0.399-0.131,1.687-0.125,2.655c0.064,0.642-0.043,1.768,0.172,2.486c0.654,1.928-0.027,3.496,1,3.514 c1.805-0.424,2.428-1.218,2.428-2.346c-0.086-0.704-0.121-0.843-0.031-1.193c0.221-0.568,0.359-0.67,0.312-0.076 c-0.055,0.287,0.031,0.533,0.082,0.794c0.264,1.197,0.912,0.114,1.283-0.782c0.15-0.238,0.539-2.154,0.545-2.522 c-0.023-0.617,0.285-0.645,0.309,0.01c0.064,0.422-0.248,2.646-0.205,2.334c-0.338,1.24-1.105,3.402-3.379,4.712 c-0.389,0.12-1.186,1.286-3.328,2.178c0,0,1.729,0.321,3.156,0.246c1.102-0.19,3.707-0.027,4.654,0.269 c1.752,0.494,1.531-0.053,4.084,0.164c2.26-0.4,2.154,2.391-1.496,3.68c-2.549,1.405-3.107,1.475-2.293,2.984 c3.484,7.906,2.865,13.183,2.193,16.466c2.41,0.271,5.732-0.62,7.301,0.725c0.506,0.333,0.648,1.866-0.457,2.86 c-4.105,2.745-9.283,7.022-13.904,7.662c-0.977-0.194,0.156-2.025,0.803-2.247l1.898-0.03c0.596-0.101,0.936-0.669,1.152-1.139 c3.16-0.404,5.045-3.775,8.246-4.818c-4.035-0.718-9.588,3.981-12.162,1.051c-5.043,1.423-11.449,1.84-15.895,1.111 c-3.105,2.687-7.934,4.021-12.115,5.866c-3.271,3.511-5.188,8.086-9.967,10.414c-0.986,0.119-0.48-1.974,0.066-2.385l1.795-0.618 C-22.995,25.682-22.849,25.035-22.788,24.521z',
    plane: 'path://M1.112,32.559l2.998,1.205l-2.882,2.268l-2.215-0.012L1.112,32.559z M37.803,23.96 c0.158-0.838,0.5-1.509,0.961-1.904c-0.096-0.037-0.205-0.071-0.344-0.071c-0.777-0.005-2.068-0.009-3.047-0.009 c-0.633,0-1.217,0.066-1.754,0.18l2.199,1.804H37.803z M39.738,23.036c-0.111,0-0.377,0.325-0.537,0.924h1.076 C40.115,23.361,39.854,23.036,39.738,23.036z M39.934,39.867c-0.166,0-0.674,0.705-0.674,1.986s0.506,1.986,0.674,1.986 s0.672-0.705,0.672-1.986S40.102,39.867,39.934,39.867z M38.963,38.889c-0.098-0.038-0.209-0.07-0.348-0.073 c-0.082,0-0.174,0-0.268-0.001l-7.127,4.671c0.879,0.821,2.42,1.417,4.348,1.417c0.979,0,2.27-0.006,3.047-0.01 c0.139,0,0.25-0.034,0.348-0.072c-0.646-0.555-1.07-1.643-1.07-2.967C37.891,40.529,38.316,39.441,38.963,38.889z M32.713,23.96 l-12.37-10.116l-4.693-0.004c0,0,4,8.222,4.827,10.121H32.713z M59.311,32.374c-0.248,2.104-5.305,3.172-8.018,3.172H39.629 l-25.325,16.61L9.607,52.16c0,0,6.687-8.479,7.95-10.207c1.17-1.6,3.019-3.699,3.027-6.407h-2.138 c-5.839,0-13.816-3.789-18.472-5.583c-2.818-1.085-2.396-4.04-0.031-4.04h0.039l-3.299-11.371h3.617c0,0,4.352,5.696,5.846,7.5 c2,2.416,4.503,3.678,8.228,3.87h30.727c2.17,0,4.311,0.417,6.252,1.046c3.49,1.175,5.863,2.7,7.199,4.027 C59.145,31.584,59.352,32.025,59.311,32.374z M22.069,30.408c0-0.815-0.661-1.475-1.469-1.475c-0.812,0-1.471,0.66-1.471,1.475 s0.658,1.475,1.471,1.475C21.408,31.883,22.069,31.224,22.069,30.408z M27.06,30.408c0-0.815-0.656-1.478-1.466-1.478 c-0.812,0-1.471,0.662-1.471,1.478s0.658,1.477,1.471,1.477C26.404,31.885,27.06,31.224,27.06,30.408z M32.055,30.408 c0-0.815-0.66-1.475-1.469-1.475c-0.808,0-1.466,0.66-1.466,1.475s0.658,1.475,1.466,1.475 C31.398,31.883,32.055,31.224,32.055,30.408z M37.049,30.408c0-0.815-0.658-1.478-1.467-1.478c-0.812,0-1.469,0.662-1.469,1.478 s0.656,1.477,1.469,1.477C36.389,31.885,37.049,31.224,37.049,30.408z M42.039,30.408c0-0.815-0.656-1.478-1.465-1.478 c-0.811,0-1.469,0.662-1.469,1.478s0.658,1.477,1.469,1.477C41.383,31.885,42.039,31.224,42.039,30.408z M55.479,30.565 c-0.701-0.436-1.568-0.896-2.627-1.347c-0.613,0.289-1.551,0.476-2.73,0.476c-1.527,0-1.639,2.263,0.164,2.316 C52.389,32.074,54.627,31.373,55.479,30.565z',
    rocket: 'path://M-244.396,44.399c0,0,0.47-2.931-2.427-6.512c2.819-8.221,3.21-15.709,3.21-15.709s5.795,1.383,5.795,7.325C-237.818,39.679-244.396,44.399-244.396,44.399z M-260.371,40.827c0,0-3.881-12.946-3.881-18.319c0-2.416,0.262-4.566,0.669-6.517h17.684c0.411,1.952,0.675,4.104,0.675,6.519c0,5.291-3.87,18.317-3.87,18.317H-260.371z M-254.745,18.951c-1.99,0-3.603,1.676-3.603,3.744c0,2.068,1.612,3.744,3.603,3.744c1.988,0,3.602-1.676,3.602-3.744S-252.757,18.951-254.745,18.951z M-255.521,2.228v-5.098h1.402v4.969c1.603,1.213,5.941,5.069,7.901,12.5h-17.05C-261.373,7.373-257.245,3.558-255.521,2.228zM-265.07,44.399c0,0-6.577-4.721-6.577-14.896c0-5.942,5.794-7.325,5.794-7.325s0.393,7.488,3.211,15.708C-265.539,41.469-265.07,44.399-265.07,44.399z M-252.36,45.15l-1.176-1.22L-254.789,48l-1.487-4.069l-1.019,2.116l-1.488-3.826h8.067L-252.36,45.15z',

};

    var option = {
		    tooltip: {
		        trigger: 'axis',
		        axisPointer: {
		            type: 'none'
		        },
		        formatter: function (params) {
		            return params[0].name + ': ' + params[0].value;
		        }
		    },
		    xAxis: {
		        data: ['技术部', '设计部', '市场部',  ],
		        axisTick: {show: false},
		        axisLine: {show: false},
		        axisLabel: {
		            textStyle: {
		                color: '#28d2ae'
		            }
		        }
		    },
		    yAxis: {
		        splitLine: {show: false},
		        axisTick: {show: false},
		        axisLine: {show: false},
		        axisLabel: {show: false}
		    },
		    color: ['#e54035'],
		    series: [{
		        name: 'hill',
		        type: 'pictorialBar',
		        barCategoryGap: '-130%',
		       
		        symbol: 'path://M0,10 L10,10 C5.5,10 5.5,5 5,0 C4.5,5 4.5,10 0,10 z', //图像
		        itemStyle: {
		            normal: {
		                opacity: 0.5
		            },
		            emphasis: {
		                opacity: 1
		            }
		        },
		        data: [123, 60, 25],  //多少个
		        z: 10
		    }, {
		        name: 'glyph',
		        type: 'pictorialBar',
		        barGap: '-100%',
		        symbolPosition: 'end',
		        symbolSize: 50,
		        symbolOffset: [0, '-120%'],
		        data: [{
		            value: 123,
		            symbol: pathSymbols.reindeer,
		            symbolSize: [60, 60]
		        }, {
		            value: 60,
		            symbol: pathSymbols.rocket,
		            symbolSize: [50, 60]
		        }, {
		            value: 25,
		            symbol: pathSymbols.plane,
		            symbolSize: [65, 35]
		        }]
		    }]
		};
	 myChart_two.setOption(option);
	
	
	
	 var myChart_three = echarts.init(document.getElementById('main_three'));
	 
          var option = {
            title: {},
            tooltip: {},
            legend: {
                data:['业绩']
            },
            xAxis: {
               
            },
            yAxis: {
            	 data: ["设计部  张三","设计部  李四","设计部  王五","设计部  弘毅"]
            },
            grid: {
		        left: '3%',
		        containLabel: true
             },
            series: [{
            	barWidth:'20',
            	color:'#28d2ae',
                name: '销量',
                type: 'bar',
                data: [5, 20, 36, 10]
            }]
        };
        // 使用刚指定的配置项和数据显示图表。
        myChart_three.setOption(option);
	
	
	
	
	
	var myChart_four= echarts.init(document.getElementById('main_four'));
	
	var option = {
    tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b}: {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        x: 'left',
        data:['团队贡献','个人贡献']
    },
    series: [
        {
            name:'访问来源',
            type:'pie',
            radius: ['50%', '70%'],
            avoidLabelOverlap: false,
            label: {
                normal: {
                    show: false,
                    position: 'center'
                },
                emphasis: {
                    show: true,
                    textStyle: {
                        fontSize: '30',
                        fontWeight: 'bold'
                    }
                }
            },
            labelLine: {
                normal: {
                    show: false
                }
            },
            data:[
                {value:10, name:'个人贡献'},
                {value:90, name:'团队贡献'},
               
             
            ]
        }
    ]
};
 myChart_four.setOption(option);
	
	
</script>