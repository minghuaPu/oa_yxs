<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"D:\wampserver\wamp64\www\oa\public/../application/admin\view\index\proche_bzjy.html";i:1545115582;s:69:"D:\wampserver\wamp64\www\oa\public/../application/admin\view\top.html";i:1544610348;s:70:"D:\wampserver\wamp64\www\oa\public/../application/admin\view\left.html";i:1545118183;}*/ ?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/finance/finance.css" />
<link href="https://cdn.bootcss.com/bootstrap-fileinput/4.5.1/css/fileinput.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="__STATIC__/library/bootstrap/bootstrap-datetimepicker.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/library/bootstrap/bootstrap-select.min.css" />
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

    <div class="cjp_box">
        <div class="cjp_head">
            包装检验
        </div>
        <div class="cjp_choose">
            <button class="btn btn-default" style="outline: none;" data-toggle="modal" data-target="#addwindow">添加信息</button>
            <button class=" btn btn-default" style="outline: none;" @click="deleteChoose">删除选中项</button>
            <button class="btn btn-default" style="outline: none;" @click="preview">打印选中项</button>
            <a href="<?php echo url('exportDayInner',['proche_type'=>'packaging']); ?>" class="btn btn-default" onclick="return educe()">导出Excel</a>
            <button class="btn btn-default" style="outline: none;" @click="goRecycle">回收站</button>
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
                                    <input type="text" class="form-control" id="" name="proche_type" placeholder="请输入姓名" value="packaging">
                                </div>
                                <div class="form-group">
                                    <label>时间</label>
                                    <div class='input-group date' style="width:200px" id='datetimepicker'>
                                        <input id="time" type='text' class="form-control" name="time" required="required"/>
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
                                    <input type="text" class="form-control" id="" name="remarks" placeholder="请输入备注" required="required" >
                                </div>
                                <div class="form-group">
                                    <label for="name">状态</label>
                                    <select class="form-control" name="status">
                                        <option>未解决</option>
                                        <option>已完成</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">上传图片</label>
                                    <input id="input-id" name="work_require[]" class="file" type="file" multiple>
                                </div>
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    关闭
                                </button>
                                <button type="submit" class="btn btn-primary">
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
                                    <input type="text" class="form-control" id="" name="proche_type" value="packaging">
                                </div>
                                <div class="form-group">
                                    <label>时间</label>
                                    <div class='input-group date' style="width:200px" id='datetimepicker1'>
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
                                    <label for="name">上传图片</label>
                                    <input id="input-id" name="work_require[]" class="file" type="file" multiple>
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
                                    <input type="text" class="form-control" id="" name="proche_type" value="packaging">
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
            <table class="table" style="text-align: center;">
                <tr>
                    <th>序列</th>
                    <th>
                        <input type="checkbox" value="" name="checkall" />
                    </th>
                    <th>时间</th>
                    <th>姓名</th>
                    <th>产品名称</th>
                    <th>产品尺寸</th>
                    <th>问题描述</th>
                    <th>整改情况</th>
                    <th>对应车间</th>
                    <th>备注</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                <?php foreach($bzjy_list as $key=>$info): ?>
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
            <div style="text-align: center;"><?php echo $bzjy_list->render(); ?></div>
        </div>
        <!--startprint-->
        <!--打印内容开始-->
        <div style="display: none;" id="start">
            <table border="1" cellspacing="0" style="text-align: center;">
                <tr>
                    <th>序列</th>
                    <th>时间</th>
                    <th>姓名</th>
                    <th>产品名称</th>
                    <th>产品尺寸</th>
                    <th>问题描述</th>
                    <th>整改情况</th>
                    <th>对应车间</th>
                    <th>备注</th>
                    <th>状态</th>
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
    <script type="text/javascript" src="__STATIC__/library/bootstrap/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="__STATIC__/library/bootstrap/bootstrap-select.min.js"></script>
</body>

</html>
<script type="text/javascript">
new Vue({
    el: ".cjp_box",
    data: {
        printMessage: {},
        message: {},
        abnormalMessage: {}
    },
    methods: {
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
                        proche_type:"packaging",
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
                proche_type:"packaging",
                id: re,
                num: 1
            }, function() {
                window.location.reload();
            })
            
        },
        //更改未完成
        unFinish(re) {
            $.get("<?php echo url('changeIsfinsih'); ?>", {
                proche_type:"packaging",
                id: re,
                num: 2
            }, function() {
                window.location.reload();
            })
            
        },
        //获取图片  
        getPic(re) {
            $.get("<?php echo url('getPic'); ?>", {
                proche_type:"packaging",
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
                 proche_type:"packaging",
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
                proche_type:"packaging",
                id: re,
            }, function(e) {
                that.message = e;
            })

        },
        //跳转回收站
        goRecycle() {
            var selinfo = 'packaging';
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
                        proche_type:"rough",
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

        }
    }

})
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
    language:  'zh-CN',
    format: 'yyyy-mm-dd',
    todayBtn:  1,
    autoclose: 1,

});
$('#datetimepicker1').datetimepicker({
    minView: "month", //选择日期后，不会再跳转去选择时分秒 
    language:  'zh-CN',
    format: 'yyyy-mm-dd',
    todayBtn:  1,
    autoclose: 1,

});
</script>
<style type="text/css">
.cjp_box {
    margin-left: 173px;
    width: 100%;
    height: auto;
}

.cjp_head {
    font-size: 22px;
    margin-left: 20px;
    margin-top: 10px;
}

.cjp_content {
    margin-left: 20px;
    margin-top: 10px;
    width: auto;
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
    height: 250px;

}

.picwindow_img img {
    width: 100%;
    height: 100%;
}
</style>