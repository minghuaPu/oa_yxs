<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"D:\wamp64\www\oa\public/../application/admin\view\task\look.html";i:1545362516;s:58:"D:\wamp64\www\oa\public/../application/admin\view\top.html";i:1544798596;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/task/css/look.css?3">

<div class="container" id="container">
	<div class="title" style="margin: 10px 30px;">
		<a href=" <?php echo url('index'); ?>" class="glyphicon glyphicon-chevron-left return">返回工作台</a>
	</div>

<div class="table_box">
				<div class="Employee_box">
					<div class="Employee_left">
						
						<div class="Employee_head">工作表</div>
						<div class="wire"></div>
						<div class="Employee_footer">
							<div>
								<span>负责人:</span>
								
									<select  style="width: 150px" v-model='xzheyuangong_id' @change='xzheyuangong'>
										<option  v-for="(i,g) in yuangong" :value="i.id">{{i.user_name}}</option>
									</select>
								
							</div>
							<div><span>日期:</span><input type="date" v-model='DATE' style="width: 150px" @change='xzheyuangong'></div>
							
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
					<th width="200px">工作内容</th>
				
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
					<td :style="index%2 ==0?'background: #b7dee8;':''" >
						<div v-if='item.primary'>{{item.primary.type}}</div>
					  
					  
					</td>
					<td>
						<div v-if='item.secondary'>{{item.secondary.type}}</div>
						
					</td>
					<td >
						
						{{item.quantity}}
						 
					</td>
					<td :style="index%2 ==0?'background: #b7dee8;':''" >
						{{item.job}}
						
						
					</td>

				
					<td>
						  <div v-if="item.whether==0" :style="index%2 ==0?'background: #b7dee8;':''">是</div>
						  <div v-else :style="index%2 ==0?'background: #b7dee8;':''">否</div>
					  </select>
					</td>
					<td>
						 {{item.reasons}}
						
					<td>
						{{item.remark}}
						

					</td>
					<td><div :style="index%2 ==0?'background: #b7dee8;':''" >{{item.score}}</td>
					<td>
						<a @click='viewDetails(item.boss_rwid,index)' v-if='item.boss_rwid' style="cursor: pointer;">查看详情</a>
						<a @click='viewDetails(item.id,index)'  v-else style="cursor: pointer;">查看详情</a>
					</td>
					
				</tr>
				
				
				
			</table>
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
						<div>{{item.time}}</div>
						
					</td>
					<td>
						<div>{{item.job}}</div>
					
					</td>
					<td>
						<div>{{item.lasttime}}</div>
						
					</td>
					<td>
					
						<div>{{item.remark}}</div>
						
					</td>
					<td>
						<div >{{item.reasons}}</div>
						
					</td>
					
					<td>
						
					</td>
				</tr>
			</table>
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
					<td>
						<div>{{item.job}}</div>
					</td>
					<td>
						<div>{{item.time}}</div>
						
					</td>
					<td>
						<div>{{item.lasttime}}</div>
						
					<td>
						<div>{{item.remark}}</div>
					</td>
					<td></td>
				</tr>
			</table>


<script>
	new Vue({
    el: ".table_box",
    data: {
        worksheet:[],
        yuangong:<?php echo $yuangong; ?>,
        daibanwork:[],
        zhoujihua:[],
        zongshu:0,
        xzheyuangong_id:'',
        DATE:'<?php echo $date; ?>'
    },
    
mounted(){
	console.log(this.yuangong);
},
       	
     methods:{
 
     	
     
     	xzheyuangong(){
     			$.get('<?php echo url("admin/task/lookyuangong"); ?>',
        	    	{
        	    		yuangong_id:this.xzheyuangong_id,
        	    		selectDate:this.DATE,},
        	    		(rtnData)=>{
        	    			    this.zongshu=rtnData.zongshu;
                     			this.worksheet=rtnData.data;
                     			this.zhoujihua=rtnData.zhoujihua;
                     			this.daibanwork=rtnData.daibanwork
     					});
     	},
     	  viewDetails: function(e,index) {
        	if(this.worksheet[index].boss_id){
        		window.location.href = 'check.html?id=' + e
        	}else{
        		window.location.href = 'check.html?staff_id=' + e
        	}
            
        }



    }
})
 
</script>