<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"D:\wampserver\wamp64\www\oa\public/../application/admin\view\task\index.html";i:1544433122;s:69:"D:\wampserver\wamp64\www\oa\public/../application/admin\view\top.html";i:1544404632;s:70:"D:\wampserver\wamp64\www\oa\public/../application/admin\view\foot.html";i:1544063398;}*/ ?>
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
							<div><span>日期:</span><span><?php echo $date; ?></span></div>
							
						</div>

					</div>
					<div class="Employee_right">
						<div class="font">完成情况</div>
						<div class="Score"><div class="fens"><div class="se" :style="'height:'+zongshu+'%'"></div><div class="fen">{{zongshu}}分</div></div></div>
						
					</div>
					<table class="aa" style="text-align: center;" border='1px' width="1000px">
				<tr bgcolor="#31869b" align="center" style="color: #fff;font-size: 12px;">
					<th width="50px">序号</th>
					<th width="100px">主分类</th>
					<th width="100px">细分类</th>
					<th width="60px">数量/时间</th>
					<th width="200px">工作内容</th>
					<th width="50px"></th>
					<th width="50px">是否完成</th>
					<th width="150px">未完成原因</th>
					<th width="150px">备注</th>
					<th width="100px">统计分数</th>
					<th width="50px">操作</th>
				</tr>
				

				<tr :bgcolor="index%2 ==0?'':'#fff'" v-for='(item,index) in worksheet'>
					<td>
					  {{index+1}}
					</td>
					<td>
						<select :style="index%2 ==0?'background: #b7dee8;':''" v-model='item.primary' @change='zhuclassify(index)' >
					
						  <option  v-for="(i,l) in primary"  :value="i" style="text-align: center;">{{i.type}}</option>
					
					  </select>
					</td>
					<td>
						<select :style="index%2 ==0?'background: #b7dee8;':''"  v-model='item.secondary' @change='ciclassify(index)'>
					    
						  <option v-for="(c,cl) in secondary[index]" :value ="c" style="text-align: center;">{{c.type}}</option>
						 
					  </select>
					</td>
					<td quantity>
						<input type="text" :style="index%2 ==0?'background: #b7dee8;':''" v-model='item.quantity' @blur='liang(index)'>
						
						 
					</td>
					<td><input type="text" :style="index%2 ==0?'background: #b7dee8;':''" @blur='job(index)' v-model="item.job"></td>
					<td></td>
					<td>
						<select :style="index%2 ==0?'background: #b7dee8;':''" v-model='item.whether' @change='whether(index)'>
						
						  <option value ="0" >是</option>
						  <option value ="1" >否</option>
					  </select>

					</td>
					<td><input type="text" :style="index%2 ==0?'background: #b7dee8;':''" v-model='item.reasons' @blur='reasons(index)'></td>
					<td><input type="text" :style="index%2 ==0?'background: #b7dee8;':''" v-model='item.remark' @blur='remark(index)'></td>
					<td><div :style="index%2 ==0?'background: #b7dee8;':''" >{{item.score}}</td>
					<td></td>
				</tr>
				<?php foreach($bossfenprw as $val): ?>
				<tr >
					<td>
					  2
					</td>
					<td>
						<select >
					
						  <option  style="text-align: center;"></option>
					
					  </select>
					</td>
					<td>
						<select  >
					    
						  <option  style="text-align: center;"></option>
						 
					  </select>
					</td>
					<td >
						<select   >
					    
						  <option  style="text-align: center;"></option>
						 
					</td>
					<td><input type="text" value="<?php echo $val['work_name']; ?>"></td>
					<td></td>
					<td>
						<select >
						
						  <option value ="0" >是</option>
						  <option value ="1" >否</option>
					  </select>

					</td>
					<td><input type="text"  ></td>
					<td><input type="text" ></td>
					<td><input type="text"  ></td>
					<td><a href="<?php echo url('check',['id'=>$val['id']]); ?>">查看详情</a></td>
				</tr>
				<?php endforeach; ?>
				
				
			</table>
			<div class="backlog">待办工作</div>
			<table class="aa" style="text-align: center;" border='1px' width="1000px">
				<tr bgcolor="#31869b" align="center" style="color: #fff;font-size: 12px;">
					<th width="50px">序号</th>
					<th width="150px">开始时间</th>
					<th width="300px">任务名称</th>
					<th width="150px">要求完成时间</th>
					<th width="250px">备注</th>
					<th ></th>
					<th ></th>
				</tr>
				<?php foreach($daibanwork as $key=>$val): ?>
				<tr>
					<td> <?php echo $key+1; ?></td>
					<td ><?php echo date("Y-m-d  H:i:s",$val['time']); ?></td>
					<td ><?php echo $val['work_name']; ?></td>
					<td ><?php echo date("Y-m-d  H:i:s",$val['lasttime']); ?></td>
					<td >任务类别：<?php echo $val['work_rank']; ?></td>
					<td ></td>
					<td ></td>
				</tr>
				<?php endforeach; ?>
			</table>
				</div>
			
			</div>
			<?php endif; ?>
			<!-- 非学生身份管理作业 -->
			<?php if($userdata['user_cate']=='老板'): ?>
			<ul class="list_top">
				<li><a href="<?php echo url('arrange'); ?>"><span class="glyphicon glyphicon-list"></span>布置任务</a></li>
				
				<!-- <li style="width: 0%;">
					 <form action="<?php echo url('select'); ?>" class="form">
					 	<div class="input-group pull-left">
					 		<input type="text" class="form-control pull-left" placeholder="输入任务名称" name="selectinfo">
					 	</div>
					 	<input type="submit" class="btn btn-group pull-left" style="cursor: pointer;width: 70px;outline: none;" @click="select" value="搜索">
					 </form>
				</li> -->
			</ul>

			<!-- <div v-if="ok"> -->
			<button class="btn btn-default" @click="turn1">待我处理(<?php echo $work_listnu; ?>)</button>
			<button class="btn btn-default" @click="turn1">我发布的任务(<?php echo $work_listnu; ?>)</button>
			<button class="btn btn-default" @click="turn2">已结束的任务(<?php echo $unfinish_listnu; ?>)</button>
			
			<table v-if="con == 1" class="table" style="text-align: center;"  >
				<tr>
					<th>排序</th>
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
				</tr>
				
				<?php foreach($work_list as $key=>$info): ?>
					<tr >
						<td>50</td>
						<td><?php echo $info['id']; ?></td>
						
						<td><?php echo $info['execute_id']; ?></td>
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
					</tr>			
				<?php endforeach; ?>
				
				
				
			</table>
			<table v-if="con == 2" class="table" style="text-align: center;"  >
				<tr>
					<th>排序</th>
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
				</tr>
				
				<?php foreach($unfinish_list as $info): ?>
					<tr >
						<td>2</td>
						<td><?php echo $info['id']; ?></td>
						
						<td><?php echo $info['execute_id']; ?></td>
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
					</tr>			
				<?php endforeach; ?>
				
				
				
			</table>
			<!-- </div> -->
			
			
			<div v-if="pageshow" style="text-align: center;"><?php echo $work_list->render(); ?></div>
			<div v-else style="text-align: center;"><?php echo $unfinish_list->render(); ?></div>
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
</div>

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

<script>
 	// 第二步：定义路由，也就是每个路由应该映射一个组件
 	
	new Vue({
        el: ".task",
        data: {
        	pageshow:true,
            worksheet:<?php echo $yuangong; ?>, 
            primary : <?php echo $main; ?>,
            worklist:[<?php echo $work_list; ?>],
            fine:<?php echo $fine; ?>,
            secondary:[],
            zongshu:<?php echo $zongshu; ?>,
            con:1,
          
        },
        mounted(){
        	console.log(this.worksheet);
        	if(this.worksheet.length<8){
        		var num=8-this.worksheet.length;
        		for (var i = 0; i < num; i++) {
        			this.worksheet.push({});
        		}
        		
        		
        	}
        	for (var i = 0; i < this.worksheet.length; i++) {
        	this.secondary.push([])
            
        	this.worksheet[i].primary=JSON.parse(this.worksheet[i].primary);
        	this.worksheet[i].secondary=JSON.parse(this.worksheet[i].secondary);
        		for (var a = 0; a < this.fine.length; a++) {
        	     if(this.worksheet[i].primary.id==this.fine[a].main){
          				this.secondary[i].push(this.fine[a])
        			}
        	    }
        	   
        		
        	}
   
        	console.log(this.secondary);
        	console.log(this.worksheet);
         				
		},
       	
     methods:{
     	select(){
           this.ok=false
     	},
     	turn1(){
     		this.con=1;
     		this.pageshow=true;
     	},
     	turn2(){
     		this.con=2;
     		this.pageshow=false;
     	},
     	// 添加
     	add(){
     		console.log(this.aa)
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
        	    	
        	    			console.log(rtnData)
        	    			if(rtnData!=='false'){
        	    				console.log(1)
        	    			rtnData.primary=JSON.parse(rtnData.primary)
        	    			console.log(rtnData)
        	    				this.worksheet[e]=rtnData
        	    			}
        	    			

        	    			var text=[];
        	    			 for (var a = 0; a < this.fine.length; a++) {
			        	     	if(this.worksheet[e].primary.id==this.fine[a].main){
			          				text.push(this.fine[a])
			        				this.$set(this.secondary,e,text);
			        				}
        	     }
        	    			console.log(this.worksheet);
        	    			
     			});
        },
        // 细分类
        ciclassify(e){ 
        	console.log(this.worksheet[e].id);
        	$.get('<?php echo url("admin/task/classify"); ?>',
        	    	{      	    		
        	    		select:2,
        	    		theme_id:this.worksheet[e].id,
        	    		xuan:this.worksheet[e].secondary,
						
        	    	},(rtnData)=>{
                 	   
				          this.worksheet[e].score=rtnData;
        	    			 // this.$set(this.quantity,e,rtnData) 

     			});

 
        },
        // 时间/数量
        liang(e){
        	console.log(this.worksheet[e].quantity);
        	$.get('<?php echo url("admin/task/classify"); ?>',
        	    	{
        	    		
        	    		select:3,
        	    		theme_id:this.worksheet[e].id,
        	    		liang:this.worksheet[e].quantity
        	    	},(rtnData)=>{
                 	   this.worksheet[e].score=rtnData;
        	    	});
        },
        // 工作内容
        job(e){
        		$.get('<?php echo url("admin/task/classify"); ?>',
        	    	{
        	    		
        	    		select:4,
        	    		theme_id:this.worksheet[e].id,
        	    		job:this.worksheet[e].job
        	    	},(rtnData)=>{
        	    		if(!rtnData){
        	    				console.log(1)
        	    				this.worksheet[e]=rtnData
        	    			}
        	    	});
        },
        // 是否完成
        whether(e){
        		$.get('<?php echo url("admin/task/classify"); ?>',
        	    	{
        	    		
        	    		select:5,
        	    		theme_id:this.worksheet[e].id,
        	    		whether:this.worksheet[e].whether
        	    	},(rtnData)=>{
        	    		this.zongshu=rtnData
        	    	});
        },
        //未完成原因 
        reasons(e){
 				$.get('<?php echo url("admin/task/classify"); ?>',
        	    	{
        	    		
        	    		select:6,
        	    		theme_id:this.worksheet[e].id,
        	    		reasons:this.worksheet[e].reasons
        	    	},(rtnData)=>{
        	    		if(!rtnData){
        	    				console.log(1)
        	    				this.worksheet[e]=rtnData
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
        	    		if(!rtnData){
        	    				console.log(1)
        	    				this.worksheet[e]=rtnData
        	    			}
        	    	});
        },
        // 统计分数
         score(e){
			$.get('<?php echo url("admin/task/classify"); ?>',
   	    			{
       	    		
      	    		select:8,
      	    		theme_id:this.worksheet[e].id,
       	    		score:this.worksheet[e].score
        	    	});
        },
        viewDetails:function(e){
			window.location.href='<?php echo url('check',['id'=>24]); ?>'
        }
        	
         

        }         
    })
</script>
<style>

</style>