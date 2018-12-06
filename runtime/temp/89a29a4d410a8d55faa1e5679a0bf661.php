<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"D:\wamp64\www\OAZ\oa_yxs\public/../application/index\view\login\index.html";i:1544063215;s:66:"D:\wamp64\www\OAZ\oa_yxs\public/../application/index\view\top.html";i:1544063215;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>云登录--企业智慧云6项全能尽在掌控！</title>
  
    <meta name="keywords" Content="CRM客户关系管理系统,CRM客户管理系统,CRM销售管理软件">
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <script src="__PUBLIC__static/index/login/js/jquery.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="__PUBLIC__static/index/login/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="__PUBLIC__static/index/login/css/free.css"/>
    <link rel="stylesheet" href="__PUBLIC__static/index/login/css/css.css"/>
    <script type="text/javascript" src="https://cdn.bootcss.com/vue/2.5.13/vue.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
</head>

<link rel="stylesheet" type="text/css"  href="__PUBLIC__static/index/common/css/top.css">
<div id="top" class="top">
    <a href="<?php echo url('index/index'); ?>" class="logo"><img src="__PUBLIC__static/index/index/images/logo.png" alt=""></a>
    <a href="#" class="contact-btn">免费注册</a>
    <ul>
        <li><a href="<?php echo url('business/index'); ?>">产品</a></li>
        <li><a href="<?php echo url('news/index'); ?>">新闻</a></li>
        <li><a href="javascript:;">租用</a></li>
        <li><a href="javascript:;">关于</a></li>
        <li><a href="<?php echo url('login/index'); ?>" style="color: #618ccc;">云登陆</a></li>
    </ul>
</div>
<header id="one">
	<div id="container-fluid">
		<div class="col-sm-5 col-lg-offset-4">
			<p class="text-center m-t-65 m-b-35">
				<img src="__PUBLIC__static/index/login/img/login_img.png"></p>
			<div class="login-box">
				<ul class="nav nav-tabs" role="tablist" id="myTabs">
					<li role="presentation" class="active">
						<a href="#form_1" aria-controls="form_1" role="tab" data-toggle="tab">账号登陆</a>
					</li>
					<li role="presentation" class="">
						<a href="#form_2" aria-controls="form_2" role="tab" data-toggle="tab">老板注册</a>
					</li>
					<li role="presentation" class="">
						<a href="#form_3" aria-controls="form_3" role="tab" data-toggle="tab">员工注册</a>
					</li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="form_1">
						<form action="<?php echo url('index/login/loginin'); ?>" method="POST" id="login" autocomplete="off" onsubmit="return false">
						
							<input type="hidden" value="">
							<input type="hidden" value="">
							<div class="form-group">
								<input type="text" class="form-control" id="user" name="user_name" v-model="logininfo" placeholder="用户名" autocomplete="off"></div>
							<!-- <div class="form-group">
                <input type="text" class="form-control" id="com" name="company_name" v-model="logincompany" placeholder="公司登录名" autocomplete="off"></div> -->
							<div class="form-group">
								<input type="text" onfocus='this.type="password"' class="form-control" id="pass" name="password" placeholder="密码" onpaste="return false;" autocomplete="off" v-model="loginpassword"></div>
							<div class="text-left">
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" checked value="1" >保存用户信息</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2"  value="1">登录后先测速</label>
							</div>
							<button @click="loginin()" class="btn btn-blue" id="B1" >登录</button>
							<span class="colorTip colorTip1">
								<span style="display: none;" id="error_1">
									错误提示
									<br>
									错误提示
									<br>错误提示</span>
								<span class="pointyTipShadow"></span>
								<span class="pointyTip"></span>
							</span>
						</form>
						<p >
							<a href="http://www.xtcrm.com/qqconnect/oauth/index.xt" target="_blank" class="qq">
								<img src="__PUBLIC__static/index/login/img/cus_icon4.png"></a>
							<a href="http://www.xtcrm.com/weixin/wxlogin.xt" target="_blank" class="wx">
								<img src="__PUBLIC__static/index/login/img/cus_icon6.png"></a>
					</p>
				</div>
				<div role="tabpanel" class="tab-pane" id="form_2">
					<form id="login2" action="<?php echo url('index/login/reg'); ?>" method="POST"   onsubmit="return false">
						<div class="form-group">
							<input type="text" class="form-control" id="user2" name="user_name" v-model="reginfo" placeholder="用户名" autocomplete="off"></div>
						<div class="form-group">
							<input type="text" class="form-control" id="com2" name="company_name" v-model="regcompany"
							value="" placeholder="公司登录名" autocomplete="off">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="pass2" name="password" placeholder="密码" onpaste="return false;" v-model="regpassword">
							<input v-model='boss' name="user_cate" style="display: none"></div>
						<div class="form-group">
							<input type="password" class="form-control" id="pass3"  placeholder="再次输入密码" onpaste="return false;" v-model="regpassword2"></div>
						<button type="submit" class="btn btn-blue"  value="" @click="doreg1()">注册</button>
						<span class="colorTip colorTip2">
							<span style="display: none;" id="error_2">
								错误提示
								<br>
								错误提示
								<br>错误提示</span>
							<span class="pointyTipShadow"></span>
							<span class="pointyTip"></span>
						</span>
					</form>
				</div>
				<div role="tabpanel" class="tab-pane" id="form_3">
					<form id="login2" action="<?php echo url('index/login/reg'); ?>" method="POST"   onsubmit="return false">
						<div class="form-group">
							<input type="text" class="form-control" id="user2" name="user_name" v-model="reginfo" placeholder="用户名" autocomplete="off"></div>
						<div class="form-group">
							<input type="text" class="form-control" id="com2" name="belong" v-model="regcompanyid"
							value="" placeholder="公司ID" autocomplete="off">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="pass2" name="password" placeholder="密码" onpaste="return false;" v-model="regpassword"></div>
						<div class="form-group">
							<input type="password" class="form-control" id="pass3"  placeholder="再次输入密码" onpaste="return false;" v-model="regpassword2">
						</div>
                        <div class="form-group">
							<input v-model="employee" name="user_cate" type="hidden">
						</div>
						<button type="submit" class="btn btn-blue"  value="" @click="doreg2()">注册</button>
						<span class="colorTip colorTip2">
							<span style="display: none;" id="error_2">
								错误提示
								<br>
								错误提示
								<br>错误提示</span>
							<span class="pointyTipShadow"></span>
							<span class="pointyTip"></span>
						</span>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</header>
 



<script src="__PUBLIC__static/index/login/js/jquery-1.8.2.min.js"></script>
<script src="__PUBLIC__static/index/login/js/bootstrap.min.js"></script>
<script type="text/javascript">
var login = new Vue({
   el: '#container-fluid',
   data: {
   	logininfo:'',
   	logincompany:'',
   	loginpassword:'',
   	reginfo:'',
   	regcompany:'',
   	regcate:'',
   	regpassword:'',
   	regpassword2:'',
   	regcompanyid:'',
   	boss:'老板',
   	employee:'员工',
   },
   methods:
   {
   	loginin:function(){
      $.get('<?php echo url("index/login/loginin"); ?>',{user_name:this.logininfo,password:this.loginpassword},(rtnData)=>{
      	if(rtnData===true){
      		this.$alert('登录成功，点击确定即将跳转到CRM界面......',  {
          confirmButtonText: '确定',
          callback: action => {
            this.$message({
              type: 'info',
              center:true,
              showClose:false,
            });
            window.location.href="<?php echo url('admin/index/index'); ?>";
          }

        });
      	}
      	else
      		this.$message.error('账号或密码错误，请重新输入');
      });
   	},
   	//老板专用接口
   	doreg1:function(){

    if(this.reginfo ==  null || this.reginfo == ''){
         this.$message.error('账号名不能为空');
         return false;
    }
    if(this.regcompany ==  null || this.regcompany == ''){
         this.$message.error('公司名不能为空');
         return false;
    }
    if(this.regpassword ==  null || this.regpassword == ''){
         this.$message.error('密码不能为空');
         return false;
    }
    if(this.regpassword !=  this.regpassword2){
         this.$message.error('两次密码不一致');
         return false;
    }
    else{
       $.get('<?php echo url("index/login/reg"); ?>',{user_name:this.reginfo,company_name:this.regcompany,password:this.regpassword,user_cate:this.boss},(rtnData)=>{
      	if(rtnData.msg=='还没有这家公司并没有重复账号，注册成功'){
      		this.$alert('注册成功，点击确定即将跳转到登录界面......',  {
          confirmButtonText: '确定',
          callback: action => {
            this.$message({
              type: 'info',
              center:true,
              showClose:false,
            });
            window.location.href="<?php echo url('index/login/index'); ?>";
          }
        });
      	}
      	else
      		{
            this.$message.error(rtnData.msg);
          }
      });
    }
   		
   	},
        //员工专用接口
    	doreg2:function(){

    if(this.reginfo ==  null || this.reginfo == ''){
         this.$message.error('账号名不能为空');
         return false;
    }
    if(this.regcompanyid ==  null || this.regcompanyid == ''){
         this.$message.error('公司名不能为空');
         return false;
    }
    if(this.regpassword ==  null || this.regpassword == ''){
         this.$message.error('密码不能为空');
         return false;
    }
    if(this.regpassword !=  this.regpassword2){
         this.$message.error('两次密码不一致');
         return false;
    }
    else{
       $.get('<?php echo url("index/login/reg"); ?>',{user_name:this.reginfo,belong:this.regcompanyid,password:this.regpassword,user_cate:this.employee},(rtnData)=>{
      	if(rtnData.msg=='找到公司并没有重复账号,注册成功'){
      		this.$alert('注册成功，点击确定即将跳转到登录界面......',  {
          confirmButtonText: '确定',
          callback: action => {
            this.$message({
              type: 'info',
              center:true,
              showClose:false,
            });
            window.location.href="<?php echo url('index/login/index'); ?>";
          }
        });
      	}
      	else
      		this.$message.error(rtnData.msg);
      });
    }
   		
   	},


   }
})

    $(function () {
        var errorinfo = '';
        var login_type = '';
		
        if (errorinfo != '') {
            if (login_type == 'opt') {
                $('#error_2').html(errorinfo);
                $('#error_2').css({"display": "block"});
            } else {
                $('#error_1').html(errorinfo);
                $('#error_1').css({"display": "block"});
            }
        }
    });



     
</script>

</body>

</html>
