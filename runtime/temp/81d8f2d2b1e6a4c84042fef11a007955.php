<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"D:\wamp64\www\oa\public/../application/admin\view\task\index.html";i:1545364588;s:58:"D:\wamp64\www\oa\public/../application/admin\view\top.html";i:1544798596;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/task/css/index.css?3">
<div class="task">

	<div class="task_left"></div>
	<div class="task_box">
		<div class="task_title">
			<span class="glyphicon glyphicon-list-alt pull-left"></span>
			<h4>TASK员工任务管理</h4>
		</div>
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
					<th>未完成原因</th>
					<th>备注</th>
					<th width="100px">统计分数</th>
					<th width="150px">操作</th>
				</tr>
				<tr :bgcolor="index%2 ==0?'':'#fff'" v-for='(item,index) in worksheet'>
					<td>
					  {{index+1}}
					</td>
					<td>
					  <select 
						:style="index%2 ==0?'background: #b7dee8;':''" 
						v-model='item.primary'		 
						 :disabled='item.disabled'
						@change='zhuclassify(index)'>
						  <option  v-for="(i,l) in primary"  :value="i" style="text-align: center;">{{i.type}}</option>
					  </select>
					</td>
					<td>
						<select :style="index%2 ==0?'background: #b7dee8;':''" :disabled='item.disabled' v-model='item.secondary' @change='ciclassify(index)'>
						  <option v-for="(c,cl) in secondary[index]" :value ="c" style="text-align: center;">{{c.type}}</option>
					  </select>
					</td>
					<td quantity>
						<input type="text" :style="index%2 ==0?'background: #b7dee8;':''" :disabled='disabled' v-model='item.quantity' @blur='liang(index)'>	 
					</td>
					<td>
						<div  :style="index%2 ==0?'background: #b7dee8;':''"  v-if='item.boss_id'>{{item.job}}</div>
						<input :disabled='disabled' type="text" :style="index%2 ==0?'background: #b7dee8;':''" @blur='job(index)' v-model="item.job"  v-else>	
					</td>
					<td>
						<select  :disabled='disabled' :style="index%2 ==0?'background: #b7dee8;':''"  v-model='item.whether' @change='whether(index)'>
						  <option value ="0" >是</option>
						  <option value ="1" >否</option>
					  </select>
					</td>
					<td><input type="text" :disabled='disabled' :style="index%2 ==0?'background: #b7dee8;':''" v-model='item.reasons' @blur='reasons(index)'></td>
					<td>
						<div :style="index%2 ==0?'background: #b7dee8;':''"  v-if='item.boss_id'>{{item.remark}}</div>
						<input type="text" :disabled='disabled' :style="index%2 ==0?'background: #b7dee8;':''"   v-model='item.remark' @blur='remark(index)' v-else>
					</td>
					<td><div :style="index%2 ==0?'background: #b7dee8;':''" >{{item.score}}</td>
					<td >
						<div style="display: flex;justify-content: space-around;" v-if='item.id'>
						<a style="cursor: pointer;"  data-toggle="modal" data-target="#myModal" @click='zhipairw(item.id)'>指派任务</a>
						<a @click='viewDetails(item.boss_rwid,index)' v-if='item.boss_rwid' style="cursor: pointer;">点击提交</a>
						<a @click='viewDetails(item.id,index)'  v-else style="cursor: pointer;">点击提交</a>
						<a @click='delrw(item.id)' v-if='!item.boss_rwid'   style="cursor: pointer;">删除</a>
						</div>
					</td>	
				</tr>
			</table>
			 <div class="daiadd" @click='daiadd'>+</div>
			<div class="backlog">待办工作</div>
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
				<tr v-for='(item,index) in daibanwork' :style="index%2 ==0?'background: #b7dee8;':'background: #fff;'" >
					<td>{{index+1}}</td>
					<td>
						<div v-if='item.boss_rwid'>{{item.time}}</div>
						<input v-else type="date" v-model="item.time" @change='starttime(index)' :style="index%2 ==0?'background: #b7dee8;':'background: #fff;'">
					</td>
					<td>
						<div v-if='item.boss_rwid'>{{item.job}}</div>
						<input type="text" v-else v-model='item.job' @blur='daibanjob(index)' :style="index%2 ==0?'background: #b7dee8;':'background: #fff;'">
					</td>
					<td>
						<div v-if='item.boss_rwid'>{{item.lasttime}}</div>
						<input v-else type="date" v-model="item.lasttime" @change='endtime(index)' :style="index%2 ==0?'background: #b7dee8;':'background: #fff;'">
					</td>
					<td>
					
						<div v-if='item.boss_rwid'>{{item.remark}}</div>
						<input type="text" v-else v-model='item.remark' @blur='daibanremark(index)' :style="index%2 ==0?'background: #b7dee8;':'background: #fff;'">
					</td>
					<td>
						<div v-if='item.boss_rwid'>{{item.reasons}}</div>
						<input type="text" v-else v-model='item.reasons' @blur='daibanreasons(index)' :style="index%2 ==0?'background: #b7dee8;':'background: #fff;'">
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
				<tr v-for='(item,index) in zhoujihua' :style="index%2 ==0?'background: #b7dee8;':'background: #fff;'" >
					<td>{{index+1}}</td>
					<td><input type="text" v-model='item.job' @blur='zhoujob(index)' :style="index%2 ==0?'background: #b7dee8;':'background: #fff;'"></td>
					<td><input type="date" v-model="item.time" @change='zhoutime(index)' :style="index%2 ==0?'background: #b7dee8;':'background: #fff;'"></td>
					<td><input type="date" v-model="item.lasttime" @change='zhouendtime(index)' :style="index%2 ==0?'background: #b7dee8;':'background: #fff;'"></td>
					<td><input type="text" v-model="item.remark"  @blur='zhouremark(index)' :style="index%2 ==0?'background: #b7dee8;':'background: #fff;'"></td>
					<td></td>
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
					<th>添加时间</th>
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
						<td>发起人已放弃</td>
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
			<?php endif; if($userdata['user_cate']=='经理'): ?>
			<ul class="list_top">
				<li><a href="<?php echo url('arrange'); ?>"><span class="glyphicon glyphicon-list"></span>布置任务</a></li>
				<li><a href="<?php echo url('read'); ?>"><span class="glyphicon glyphicon-list"></span>查看任务</a></li>
				<li style="width: 0%;">
					 <form action="<?php echo url('index'); ?>" class="form">
					 	<div class="input-group pull-left">
					 		<input type="text" class="form-control pull-left" placeholder="输入员工名称" name="user_name">
					 	</div>
					 	<input type="submit" class="btn btn-group pull-left" style="cursor: pointer;" value="搜索">
					 </form>
				</li>
			</ul>
			<table class="table" style="text-align: center;">
				<tr>
					<th>编号ID</th>
					<th>员工</th>
					<th>名称</th>
					<th>内容</th>
					<th>附件</th>
					<th>部门</th>
					<th>添加时间</th>
					<th>回复</th>
					<th>操作</th>
				</tr>
				<?php foreach($work_list as $info): ?>
					<tr >
						<td><?php echo $info['id']; ?></td>
						<?php foreach($user_list as $user): if($user['id']==$info['u_id']): ?>	
						<td><?php echo $user['user_name']; ?></td>
						<?php endif; endforeach; ?>	
						<td><?php echo $info['title']; ?></td>
						<td><?php echo $info['content']; ?></td>
						<?php if($info['work']!=""): ?>
						<td><a href="__UPLOADS__<td><?php echo $info['bumen']; ?></td><?php echo $info['work']; ?>">点击查看</a></td>
						<?php endif; if($info['work']==""): ?>
						<td>无</td>
						<?php endif; ?>
                        <td><?php echo $info['bumen']; ?></td>
						<td><?php echo $info['time']; ?></td>
						<td><?php echo $info['reply']; ?></td>
						<td><a class="btn btn-default" href="<?php echo url('check',['id'=>$info['id']]); ?>">批改</a></td>
					</tr>			
				<?php endforeach; ?>
			</table>
			<?php echo $work_list->render(); ?>
			<ul class="list_bottom">
				<li><a href="<?php echo url('look'); ?>"><span class="glyphicon glyphicon-folder-open"></span>查看提交情况</a></li>
				<li><a href="javascript:;"><span class="glyphicon glyphicon-list"></span>汇总</a></li>
				<li><a href="javascript:;"><span class="glyphicon glyphicon-download-alt"></span>作业导出</a></li>
			</ul>
			<?php endif; endforeach; ?>
		</div>
	</div>
	<div class="task_right"></div>
		<!-- 模态框（Modal） -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>	
				</div>
				<form action="zhipairw" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div style="width: 100%">
					<div >
						<input type="hidden" v-model='zhipai' name="zhipai">
						<select class="form-control" name="zhipai_id"  @change='aa'>
						  <?php foreach($users as $key=>$val): ?>
							<option value="<?php echo $val['id']; ?>"><?php echo $val['user_name']; ?></option>
						  <?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="modal-footer"> 
					<input type="submit" class="btn btn-primary" value="提交">	
				</div>
			</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal -->
	</div>	
</div>
</form>

<script>
// 第二步：定义路由，也就是每个路由应该映射一个组件

new Vue({
    el: ".task",
    data: {
        worksheet:<?php echo $yuangong; ?>,
        primary:<?php echo $main; ?>,
        zhipai:'1',
        fine:<?php echo $fine; ?>,
        secondary:[],
        zongshu:<?php echo $zongshu; ?>,
        daibanwork:<?php echo $daibanwork; ?>,
		zhoujihua:<?php echo $zhoujihua; ?>,
        disabled:false,

        DATE:'<?php echo $date; ?>'
    },
    

        mounted(){
        	console.log(<?php echo $zongshu; ?>);
        	console.log( <?php echo $zhoujihua; ?>)	
        	console.log( <?php echo $daibanwork; ?>)	
        	console.log(this.worksheet);
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
   
        	console.log(this.secondary);
        	console.log(this.worksheet);
         			
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
     	zhipairw(e){
     		this.zhipai=e
     		console.log(this.zhipai);
     	},
     	aa(){
     		console.log(this.zhipai);
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


            });


        },
        // 时间/数量
        liang(e) {
            console.log(this.worksheet[e].quantity);
            $.get('<?php echo url("admin/task/classify"); ?>', {

                select: 3,
                theme_id: this.worksheet[e].id,
                liang: this.worksheet[e].quantity
            }, (rtnData) => {
                this.zongshu = rtnData.zongshu
                this.$set(this.worksheet[e], "score", rtnData.data)
            });
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
                this.zongshu = rtnData
            });
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
            // window.location.href="<?php echo url('admin/index/index'); ?>";
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
                time:this.daibanwork[e].time
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
                time:this.zhoujihua[e].time
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
