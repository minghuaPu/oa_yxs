<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:74:"G:\wamp3.1.7\www\oa\oa_yxs\public/../application/admin\view\crm\index.html";i:1551350420;s:68:"G:\wamp3.1.7\www\oa\oa_yxs\public/../application/admin\view\top.html";i:1553224508;s:69:"G:\wamp3.1.7\www\oa\oa_yxs\public/../application/admin\view\left.html";i:1553846133;s:69:"G:\wamp3.1.7\www\oa\oa_yxs\public/../application/admin\view\foot.html";i:1552960724;}*/ ?>
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
</script> <link rel="stylesheet" type="text/css" href=" __STATIC__/admin/iconfont_left.css"/>
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

<!-- 页面css样式 -->
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/crm/css/index.css?199">
<style type="text/css">
    .three_one_fade-enter-active {
  animation: bounce-in 1s;
}
.three_one_fade-leave-active {
  animation: bounce-in 1s reverse;
}
@keyframes bounce-in {
  0% {
    transform: translate(0px,-500px);
  }
  
  100% {
    transform: translate(0px,0px);
  }
}
</style>
<div class="container" id="mtk" style="width: 78%;">
    <!-- <div class="title row">
        <div class="col-md-1">
            <a href="javascript:" style="border-bottom: 2px gray solid">全部客户</a>
        </div>
        <div class="col-md-1">
            <a href="javascript:">潜在客户</a>
        </div>
        <div class="col-md-1">
            <a href="javascript:">签约客户</a>
        </div>
        <div class="col-md-1">
            <a href="javascript:">重复购买</a>
        </div>
        <div class="col-md-1">
            <a href="javascript:">失效客户</a>
        </div>
    </div> -->
    <!-- 客户模态框开始 -->
<div class="modal fade" id="clientddd" style="padding: 30px;">
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
    <div class="search row">
        <form action="<?php echo url('index'); ?>" class="form">
        <div class="col-md-3">
            <a href="#clientddd" data-toggle="modal" class="btn btn-primary">添加客户</a>
        </div>
            <div class="col-md-3 form-inline" style="overflow: hidden;">
                <p class="glyphicon glyphicon-glass pull-left" style="margin-top: 8px;"></p>
                <!-- 公司分类选择 -->
                <div class="pull-left">
                    <select class="form-control pull-right" name="companycate_id" onchange="$('#basic-addon2').click()" style="width: 100%;">
                        <option value="">未选择</option>
                        <option :value="inf.id" v-for="inf in c_list">{{inf.company_cate}}</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 form-inline">
                <p class="glyphicon glyphicon-search pull-left" style="margin: 8px 5px 0 0;"></p>
                <div class="input-group pull-left">
                    <input type="text" class="form-control pull-left" placeholder="输入客户名称" aria-describedby="basic-addon2" name="company_name">
                </div>
                <input type="submit" class="btn btn-group pull-left" id="basic-addon2" style="cursor: pointer;" value="搜索" style="margin-left:-100px; ">
            </div>
        </form>
    </div>
    <div class="info">
        <div>
            <div class="pull-left">
                <p class="pull-left" style="margin:5px 0 0 5px;">客户基本信息</p>
                <a href="<?php echo url('index'); ?>" class="btn btn-default">清除搜索</a><span class="glyphicon glyphicon-trash"></span>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr class="success">
            <td>ID</td>
            <th>简称</th>
            <th>客户名称</th>
            <th>种类</th>
            <th>所有者</th>
            <th>电话</th>
            <th>创建日期</th>
            <th>操作</th>
        </tr>
        <?php foreach($list as $info): ?>
        <tr>
            <td><?php echo $info['id']; ?></td>
            <td><?php echo $info['company_name']; ?></td>
            <td><?php echo $info['company_name']; ?></td>
            <td><?php echo $info['company_cate']; ?></td>
            <td><?php echo $info['user_name']; ?></td>
            <td><?php echo $info['user_phone']; ?></td>
            <td><?php echo $info['time']; ?></td>
            <td>
                <!-- <a class="glyphicon glyphicon-list-alt" title="视图" data-placement="bottom" href="<?php echo url('crm/userinfo',['id'=>$info['id']]); ?>" target="view_window"></a> -->
                <a class="glyphicon glyphicon-pencil" title="编辑" data-placement="bottom" data-toggle="modal" href="#client" @click="getInfo(<?php echo $info['id']; ?>)">
                    </a>
                </a>
                <a class="glyphicon glyphicon-remove" title="删除" onclick="return confirm('确定要删除?')" data-placement="bottom" href="<?php echo url('delete',['id'=>$info['id']]); ?>"></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <!-- 编辑模态框开始 -->
    <div class="modal fade" id="client" style="padding: 130px;">
        <div class="modal-dialog text-center" style="width: 90%;">
            <div class="modal-content edit">
                <!-- 模态框标题 -->
                <div class="modal-header">客户基本信息</div>
                <!-- 模态框内容 -->
                <div class="modal-body" style="padding: 31px;">
                        <!-- 基本信息 -->
                         <form action="<?php echo url('update_userinfo'); ?>" class="form" method="post" enctype="multipart/form-data">
                        <p class="text-center">基本信息</p>
                        <div id="text-center-b" style="display: block;height: 1px;width: 40%;background: rgba(0,0,0,0.2);margin-bottom: 10px;margin-left: 30%;"></div>
                        <div class="form-group form-inline" style="margin-bottom: 10px;overflow: hidden;">
                            <label>客户名称</label>
                            <input type="text" v-model="edit.company_name" class="form-control" placeholder="客户名称" name="company_name" style="width: 90%;">
                        </div>
                        <!-- 第二列 -->
                        <div class="row form-inline" style="margin-bottom: 10px;">
                            <div class="form-group col-md-6">
                                <label>简称</label>
                                <input type="text" class="form-control" v-model="edit.company_name" placeholder="请输入姓" name="company_shortname" style="width: 87%;">
                            </div>
                            <!-- 种类 -->
                            <div class="form-group col-md-6">
                                <label for="lastname" class="control-label" style="margin-right: 2%;">种类</label>
                                <select class="form-control" name="companycate_id" style="width: 80%;">
                                    <option value="">未选择</option>
                                    <!-- 编辑时显示客户种类 -->
                                    <option :value="inf.id" v-for="inf in c_list" :selected="inf.id==edit.companycate_id">{{inf.company_cate}}</option>
                                </select>
                                <a class="glyphicon glyphicon-book" title="数据字典" data-placement="bottom" href="<?php echo url('crm/companycate'); ?>"></a>
                            </div>
                        </div>
                        <!-- 第二行结束 -->
                        <!-- 第三行开始 -->
                        <div class="row form-inline row">
                            <div class="form-group col-md-6">
                                <label for="lastname" class="control-label">编号</label>
                                <input type="text"  disabled="disabled" class="form-control" v-model="edit.id" id="lastname" name="id" style="width: 87%;">
                            </div>
                            <!-- 种类 -->
                            <div class="form-group col-md-6">
                                <label for="lastname" class="control-label">上级客户</label>
                                <input type="text" class="form-control" id="lastname"  v-model="edit.up_client" name="up_client" placeholder="上级客户" style="width: 80%;">
                            </div>
                        </div>
                        <!-- 第三行结束 -->
                         <!-- 生命周期 -->
                        <p class="text-center" style="margin-top: 30px;">生命周期</p>
                        <div id="text-center-b" style="display: block;height: 1px;width: 40%;background: rgba(0,0,0,0.2);margin-bottom: 10px;margin-left: 30%;"></div>
                        <div class="form-inline row" style="overflow: hidden;">
                            <div class="pull-left col-md-6" style="margin-top: 8px;">
                                <label class="radio-inline">
                                    <input type="radio" name="state" id="optionsRadios1" value="潜在" >潜在
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="state" id="optionsRadios2" value="签约">签约
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="state" id="optionsRadios3"  value="重复购买">重复购买
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="state" id="optionsRadios4"  value="失效">失效
                                </label>
                            </div>
                            <!-- 时间插件 -->

                            <div class="pull-right col-md-6">
                                <template>
                                    <div class="block">
                                        <span class="demonstration" style="margin-right: 7%;font-weight: bold;">签约</span>
                                        <el-date-picker v-model="edit.time" type="date" placeholder="选择日期" style="width: 80%;" name="sign_time">
                                        </el-date-picker>
                                    </div>
                                </template>
                            </div>
                        </div>
                        <!-- 商务特征开始 -->
                        <p class="text-center" style="margin-top: 30px;">商务特征</p>
                        <div id="text-center-b" style="display: block;height: 1px;width: 40%;background: rgba(0,0,0,0.2);margin-bottom: 10px;margin-left: 30%;"></div>
                        <!-- 第一行 -->
                        <div class="form-inline row">
                            <div class="form-group col-md-6">
                                <label for="lastname" class="control-label">三一客</label>
                                <input type="text" class="form-control" name="three_one_dinxin" style="width:23%;" v-model="dinxin">
                                <input type="text" class="form-control" name="three_one_dinji" style="width: 23%;" v-model="dinji">
                                <input type="text" class="form-control" name="three_one_dinliang" style="width: 23%;" v-model="dinliang">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" @click="threeoneshow=!threeoneshow">选择</button>
  <transition name="three_one_fade">
    <div style="width:120%;z-index: 99;background: #fff;" v-if="threeoneshow">
        <h6 class="text-center">三定</h6>
        <div class="row" style="padding: 5px 0;">
            <p class="col-md-2" style="line-height: 55px;">1.定性</p>
            <div class="col-md-3" @click="dinxin='有价值'"><img src="__PUBLIC__static/admin/crm/images/index/zan.png" style="width: 25px;height: 25px;"><p>有价值</p></div>
            <div class="col-md-3" @click="dinxin='无价值'"><img src="__PUBLIC__static/admin/crm/images/index/cai.png" style="width: 25px;height: 25px;"><p>无价值</p></div>
            <div class="col-md-3" @click="dinxin='不确定'"><img src="__PUBLIC__static/admin/crm/images/index/wen.png" style="width: 25px;height: 25px;"><p>不确定</p></div>
        </div>
        <div class="row" style="padding: 5px 0;">
            <p class="col-md-2" style="line-height: 55px;">2.定级</p>
            <div class="col-md-3" @click="dinji='大单'"><img src="__PUBLIC__static/admin/crm/images/index/daxiao.png" style="width: 25px;height: 25px;"><p>大单</p></div>
            <div class="col-md-3" @click="dinji='正常'"><img src="__PUBLIC__static/admin/crm/images/index/weixiao.png" style="width: 25px;height: 25px;"><p>正常</p></div>
            <div class="col-md-3" @click="dinji='小单'"><img src="__PUBLIC__static/admin/crm/images/index/ku.png" style="width: 25px;height: 25px;"><p>小单</p></div>
        </div>
        <div class="row" style="padding: 5px 0;">
            <p class="col-md-2" style="line-height: 55px;">3.定量</p>
            <div class="col-md-3"  @click="dinliang='本月'"><img src="__PUBLIC__static/admin/crm/images/index/yueliang.png" style="width: 25px;height: 25px;"><p>本月</p></div>
            <div class="col-md-3"  @click="dinliang='本周'"><img src="__PUBLIC__static/admin/crm/images/index/yun.png" style="width: 25px;height: 25px;"><p>本周</p></div>
            <div class="col-md-3"  @click="dinliang='近两天'"><img src="__PUBLIC__static/admin/crm/images/index/yun.png" style="width: 25px;height: 25px;"><p>近两天</p></div>
        </div>
    </div>
  </transition>


                            </div>
                            <div class="form-group pull-right col-md-6">
                                <label for="lastname" class="control-label" style="margin-right: 7%">阶段</label>
                                <select class="form-control" name="companystage_id" style="width: 80%;">
                                    <option value="">未选择</option>
                                    <option :value="infstage.id" v-for="infstage in stage_list" :selected="infstage.id==edit.companystage_id">{{infstage.company_stage}}</option>
                                </select>
                                <a class="glyphicon glyphicon-book" title="数据字典" data-placement="bottom" href="<?php echo url('crm/stagecate'); ?>"></a>
                            </div>
                        </div>
                        <!-- 第二行 -->
                        <div class="form-inline row" style="margin-top:10px;">
                            <div class="form-group col-md-6">
                                <label for="lastname" class="control-label" style="margin-right: 3%">来源</label>
                                <select class="form-control" name="usersource_id" style="width: 84%;">
                                    <option value="">未选择</option>
                                    <option :value="infsource.id" v-for="infsource in source_list" :selected="infsource.id==edit.usersource_id">{{infsource.user_source}}</option>
                                </select>
                                <a class="glyphicon glyphicon-book" title="数据字典" data-placement="bottom" href="<?php echo url('crm/usersource'); ?>"></a>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname" class="control-label">关系等级</label>
                                <select class="form-control" name="relation_id" style="width: 80%;">
                                    <option value="">未选择</option>
                                    <option :value="inf.id" v-for="inf in relation_list" :selected="inf.id==edit.relation_id">{{inf.relation}}</option>
                                </select>
                                <a class="glyphicon glyphicon-book" title="数据字典" data-placement="bottom" href="<?php echo url('crm/relationcate'); ?>"></a>
                            </div>
                        </div>
                        <!-- 第三行 -->
                        <div class="form-inline row" style="overflow: hidden; margin-top:10px;">
                            <div class="pull-left col-md-6" style="margin-top: 8px;">
                                <p class="pull-left">信用等级</p>
                                <label class="radio-inline">
                                    <input type="radio" name="credit_rating" id="optionsRadios_1" value="高">高
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="credit_rating" id="optionsRadios_2" value="中">中
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="credit_rating" id="optionsRadios_3" value="低">低
                                </label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname" class="control-label">结款方式</label>
                                <select class="form-control" name="accountstyle_id" style="width: 80%;">
                                    <option value="">未选择</option>
                                    <option :value="inf.id" v-for="inf in accountstyle_list" :selected="inf.id==edit.accountstyle_id">{{inf.account_style}}</option>
                                </select>
                                <a class="glyphicon glyphicon-book" title="数据字典" data-placement="bottom" href="<?php echo url('crm/accountstylecate'); ?>"></a>
                            </div>
                        </div>
                        
                        <!-- 客观特征 -->
                        <p class="text-center" style="margin-top: 30px;">客观特征</p>
                        <div id="text-center-b" style="display: block;height: 1px;width: 40%;background: rgba(0,0,0,0.2);margin-bottom: 10px;margin-left: 30%;"></div>
                        <div class="form-inline row" style="margin-top:10px;">
                            <div class="form-group col-md-6">
                                <label for="lastname" class="control-label" style="margin-right: 3%">行业</label>
                                <select class="form-control" name="companyindustry_id" style="width: 84%;">
                                    <option value="">未选择</option>
                                    <option :value="inf.id" v-for="inf in industry_list" :selected="inf.id==edit.companyindustry_id">{{inf.industry_name}}</option>
                                </select>
                                <a class="glyphicon glyphicon-book" title="数据字典" data-placement="bottom" href="<?php echo url('crm/industrycate'); ?>"></a>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname" class="control-label">人员规模</label>
                                <select class="form-control" name="companyscale_id" style="width: 80%;">
                                    <option value="">未选择</option>
                                    <option :value="inf.id" v-for="inf in size_list" :selected="inf.id==edit.companyscale_id">{{inf.size}}</option>
                                </select>
                                <a class="glyphicon glyphicon-book" title="数据字典" data-placement="bottom" href="<?php echo url('crm/sizecate'); ?>"></a>
                            </div>
                        </div>
                        <div class="form-inline row" style="margin-top:10px;">
                            <div class="form-group col-md-12">
                                <label for="lastname" class="control-label pull-left">公司简介:</label>
                                <textarea class="form-control" style="width: 93%;margin-left: 5%;" name="remark"  v-model="edit.remark"></textarea>
                            </div>
                        </div>
                        <!-- 联系方式 -->
                        <p class="text-center" style="margin-top: 30px;">联系方式</p>
                        <div id="text-center-b" style="display: block;height: 1px;width: 40%;background: rgba(0,0,0,0.2);margin-bottom: 10px;margin-left: 30%;"></div>
                        <div class="row form-inline" style="margin-bottom: 10px;">
                            <div class="form-group col-md-6">
                                <label for="lastname" class="control-label">电话</label>
                                <input type="text" class="form-control" v-model="edit.user_phone" placeholder="请输入姓" name="user_phone" style="width: 87%;">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname" class="control-label">传真</label>
                                <input type="text" class="form-control" v-model="edit.user_telephone" placeholder="请输座机" name="user_telephone" style="width: 88%;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="control-label pull-left">网址</label>
                            <input type="text" class="form-control pull-left" v-model="edit.company_url" placeholder="http://" name="company_url" style="width: 95%; margin-bottom: 10px;">
                        </div>
                        <!-- 地区选择 -->
                        <div class="form-group form-inline">
                            <label for="address" class="pull-left">地区</label>
                            <div data-toggle="distpicker" class="row" id="diqu">
                                <select class="form-control col-md-2" name="province_address" v-model="provice"></select>
                                <select class="form-control col-md-2" name="city_address" v-model="city"></select>
                                <select class="form-control col-md-2" name="area_address" v-model="area"></select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="lastname" class="control-label pull-left">地址</label>
                            <input type="text" class="form-control pull-left"  placeholder="请输具体地址" name="detailed_address" v-model="edit.detailed_address" style="width: 95%; margin-bottom: 10px;">
                        </div>
                        
                        <div class="form-inline row" style="margin-top:10px;">
                            <div class="form-group col-md-12">
                                <label for="lastname" class="control-label pull-left">备注:</label>
                                <textarea class="form-control" style="width: 95%;margin-left: 5%;" name="qybeizhu" v-model="edit.qybeizhu"></textarea>
                            </div>
                        </div> 
                        <!-- 提交更新表单 -->
                        <div class="form-group">
                        <input type="hidden" name="id" :value="edit.id">
                        <input type="submit" class="btn btn-info"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 编辑模态框结束-->
</div>
<script type="text/javascript" src="__STATIC__/library/address/distpicker.js?126"></script>
<script type="text/javascript">
//时间插件

//编辑框赋值
new Vue({
    el: "#mtk",
    data: {
        edit: [],
        // 显示编辑内容
        c_list: JSON.parse('<?php echo $companycate_list; ?>'),
        stage_list:JSON.parse('<?php echo $companystage_list; ?>'),
        source_list:JSON.parse('<?php echo $usersource_list; ?>'),
        size_list:JSON.parse('<?php echo $size; ?>'),
        industry_list:JSON.parse('<?php echo $industry; ?>'),
        relation_list:JSON.parse('<?php echo $relation; ?>'),
        accountstyle_list:JSON.parse('<?php echo $accountstyle; ?>'),
        // 时间插件
        pickerOptions1: {
            disabledDate(time) {
                return time.getTime() > Date.now();
            }
        },
        value1: '',
        value2: '',
        threeoneshow:false,
        dinxin:'',
        dinji:'',
        dinliang:'',
        three_onechange:'选择',
        city:'',
        area:'',
        provice:'',
    },
    methods: {
        getInfo: function(id) {
            var that = this;
            console.log(this.c_list);
            $.get("<?php echo url('edit'); ?>?id=" + id, function(rtnData) {
                that.edit = rtnData;
                that.dinxin=that.edit.three_one_dinxin;
                that.dinji=that.edit.three_one_dinji;
                that.dinliang=that.edit.three_one_dinliang;
                $('#diqu').distpicker('destroy');
                 $('#diqu').distpicker({   province:that.edit.province_address,   city:that.edit.city_address,   district:that.edit.area_address });
                that.provice=that.edit.province_address;
                that.city=that.edit.city_address;
                that.area=that.edit.area_address;


/*                console.log(that.edit);
                console.log(that.edit.state);*/
                if(that.edit.state=="潜在"){
                    document.getElementById('optionsRadios1').setAttribute('checked','true');                  
                }
                if(that.edit.state=="签约"){
                    document.getElementById('optionsRadios2').setAttribute('checked','true');                   
                }
                if(that.edit.state=="重复购买"){
                   document.getElementById('optionsRadios3').setAttribute('checked','true');                  
                }
                if(that.edit.state=="失效"){
                    document.getElementById('optionsRadios4').setAttribute('checked','true');
                }
            
                if(that.edit.credit_rating=="高"){
                    document.getElementById('optionsRadios_1').setAttribute('checked','true');
                }
                if(that.edit.credit_rating=="中"){
                    document.getElementById('optionsRadios_2').setAttribute('checked','true');
                }
                if(that.edit.credit_rating=="低"){
                    document.getElementById('optionsRadios_3').setAttribute('checked','true');
                }
            });

        }
    }


})
</script>
<!-- 地区选择插件 -->


<!-- 改 -->
<footer class="footer" style="text-align: center;position: fixed;bottom: 0;right: 45px;">
	 
	Copyright © 2004-2019 &nbsp;  gz mogut Information Technology Co.,ltd
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