<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\wamp64\www\oa\public/../application/admin\view\index\toupiao.html";i:1547280365;s:58:"D:\wamp64\www\oa\public/../application/admin\view\top.html";i:1547264770;s:59:"D:\wamp64\www\oa\public/../application/admin\view\left.html";i:1547280365;}*/ ?>
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
        <li onclick="jump_eight()"><a href="#" class="iconfont icon-kaoqindaqia"><p>投票</p></a></li>
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

    <div class="cjp_box">
        <div class="cjp_head">
            投票
        </div>
        <div class="cjp_choose">
            <button class="btn btn-info" style="outline: none;" data-toggle="modal" data-target="#newtoupiao">发起新投票</button>
        </div>
        <!-- 新建投票框 -->
        <div class="modal fade" id="newtoupiao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                                发起新投票
                            </h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo url('addtoupiao'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">标题</label>
                                <input type="text" class="form-control" id="" name="biaoti" placeholder="请输入标题描述" required="required">
                            </div>
                            <div class="form-group">
                                <label for="name">参与部门</label>
                                <input type="text" name="executerid" id="executer" value="" class="abc" style="display: none;"></input>
                                <select id="approverq" class="selectpicker" multiple name="executor" required="required">
                                    <?php foreach($bumenlist as $key=>$info): ?>
                                    <option value="<?php echo $info['bumen_name']; ?>"><?php echo $info['bumen_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="单选" checked> 单选
                                </label>
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="多选">多选
                                </label>
                            </div>
                            <div class="form-group">
                                <label>截止时间</label>
                                <div class='input-group date' style="width:200px" id='datetimepicker'>
                                    <input id="time" type='text' class="form-control" name="time" required="required" />
                                    <span class="input-group-addon" style="margin-left: -200px;">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">选项</label>
                                <input type="text" name="oplist" id="op" value="" style="display: none;"></input>
                                <input type="text" class="form-control" name="option1" placeholder="选项" style="width: 85%;" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="option2" placeholder="选项" style="width: 85%;" required="required">
                            </div>
                            <div id="addoption">
                            </div>
                            <div class="form-group">
                                <div style="color: blue;cursor:pointer;clear: both" @click="addoption">+添加选项</div>
                            </div>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                关闭
                            </button>
                            <button type="submit" class="btn btn-primary" @click="fun">
                                提交
                            </button>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal -->
        </div>
        <!-- 投票框 -->
        <div class="modal fade" id="gotoupiao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                                投票
                            </h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo url('saveToupiao'); ?>" method="post" enctype="multipart/form-data">
                            <label for="name">标题</label>
                            <div class="form-group">
                                <div>{{message.content}}</div>
                                <input type="text" name="isdan" id="" :value="message.multiple" style="display: none;"></input>
                                <input type="text" name="id" id="" :value="message.id" style="display: none;"></input>
                            </div>
                            <div v-if='message.multiple==1'>
                                <label for="name">单选啊</label>
                                <div class="radio" v-for='(value, key) in message.option'>
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" :value="key" checked> {{key}}
                                    </label>
                                </div>
                            </div>
                            <div v-if='message.multiple==2'>
                                <label for="name">多选啊</label>
                                <div class="checkbox" v-for='(value, key) in message.option'>
                                    <label><input type="checkbox" name="ops[]" :value="key">{{key}}</label>
                                </div>
                            </div>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                关闭
                            </button>
                            <button type="submit" class="btn btn-primary" @click="fun">
                                提交
                            </button>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal -->
        </div>
        <!-- 结果框 -->
        <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                                投票结果
                            </h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <label for="name">标题</label>
                            <div class="form-group">
                                <div>{{detail.content}}</div>
                            </div>
                            <label for="name">投票结果</label>
                            <div class="form-group" v-for='(value, key) in detail.option'>
                                <div>{{key}} : {{value}}票</div>
                            </div>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                关闭
                            </button>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal -->
        </div>
        <div class="cjp_content">
            <table class="table table-bordered table-hover" style="text-align: center; ">
                <tr>
                    <th style="width: 5%;">序列</th>
                    <th style="width: 60%;">标题</th>
                    <th style="width: 15%;">截止时间</th>
                    <th style="width: 10%;">状态</th>
                    <th style="width: 10%;">投票情况</th>
                </tr>
                <?php foreach($toupiaolist as $key=>$info): ?>
                <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo $info['content']; ?></td>
                    <td><?php echo date('Y-m-d H:i',$info['lasttime']); ?></td>
                    <td>
                            <?php if(in_array(($User['u_id']), is_array($info['yitoupiao'])?$info['yitoupiao']:explode(',',$info['yitoupiao']))): if($info['lasttime'] < time()): ?> 已过期 <?php endif; if($info['lasttime']> time()): ?>
                            你已经投过了
                            <?php endif; endif; if(!in_array(($User['u_id']), is_array($info['yitoupiao'])?$info['yitoupiao']:explode(',',$info['yitoupiao']))): if($info['lasttime'] < time()): ?> 已过期 <?php endif; if($info['lasttime']> time()): ?>
                                <button class="btn btn-info btn-xs" style="outline: none;" data-toggle="modal" data-target="#gotoupiao" @click='getToupiao(<?php echo $info['id']; ?>)'>去投票</button>
                                <?php endif; endif; ?>
                    </td>
                    <td>
                        <button class="btn btn-info btn-xs" style="outline: none;" data-toggle="modal" data-target="#detail" @click='getDetail(<?php echo $info['id']; ?>)'>详情</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.bootcss.com/bootstrap-fileinput/4.5.1/js/fileinput.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap-fileinput/4.3.5/js/locales/zh.min.js"></script>
    <script type="text/javascript" src="__STATIC__/library/bootstrap/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="__STATIC__/library/bootstrap/bootstrap-datetimepicker.zh-CN.js"></script>
    <script type="text/javascript" src="__STATIC__/library/bootstrap/bootstrap-select.min.js"></script>
</body>

</html>
<script type="text/javascript">
new Vue({
    el: ".cjp_box",
    data: {
        opnum: 2,
        message: {},
        detail: {}
    },
    created: function() {

    },
    methods: {
        getToupiao: function(re) {
            var that = this;
            $.get("<?php echo url('getToupiao'); ?>", {
                id: re,
            }, function(e) {
                that.message = e;
            })
        },
        getDetail: function(re) {
            var that = this;
            $.get("<?php echo url('getDetail'); ?>", {
                id: re,
            }, function(e) {
                that.detail = e;
            })
        },
        fun: function() {
            var str = [];
            var obj = document.getElementById("approverq");
            for (var i = 0; i < obj.options.length; i++) {
                if (obj.options[i].selected) {
                    str.push(obj.options[i].value); // 收集选中项
                }
            }
            $("#executer").val(str);
            var chil = $("#addoption").children();
            var optionlist = ["option1", "option2"];
            var len = chil.length;
            for (var i = 0; i < len; i++) {
                optionlist.push(chil[i].id)
            }
            var optionlistStr = JSON.stringify(optionlist);
            $("#op").val(optionlistStr);
        },
        addoption: function() {
            this.opnum = this.opnum + 1;
            var num = "option" + this.opnum;
            var html = "";
            html += '<div  class="form-group" id="' + num + '">';
            html += '<input type="text" class="form-control"  name="' + num + '" placeholder="选项" style="width: 85%;float: left;" required="required">';
            html += '<div  class="deoption" onclick="deOption(' + num + ')">x';
            html += '</div>';
            $("#addoption").append(html);
        },
    }

})

function deOption(e) {
    e.remove();
}
//日历初始化
$('#datetimepicker').datetimepicker({
    // minView: "month", //选择日期后，不会再跳转去选择时分秒 
    language:  'zh-CN',
     weekStart: 0, 
        todayBtn:  1, //
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    

});
</script>
<style type="text/css">
.cjp_box {
    margin-left: 173px;
    width: 80%;
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
    height: auto;

}

.picwindow_img img {
    width: 100%;
    height: auto;
}

.ab {
    width: 150px !important;
}

.deoption {
    float: left;
    color: red;
    font-size: 30px;
    font-weight: 800;
    margin-top: -5px;
    margin-left: 20px;
    cursor: pointer;
}
</style>