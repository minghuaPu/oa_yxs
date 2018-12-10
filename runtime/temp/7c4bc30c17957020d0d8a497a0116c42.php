<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\wamp64\www\OAZ\oa_yxs\public/../application/admin\view\crm\editstudentinfo.html";i:1544063215;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <script type="text/javascript" src="https://cdn.bootcss.com/vue/2.5.13/vue.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/admin/crm/css/editstudentinfo.css?299">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.0.0/jquery.min.js"></script>
</head>

<body>
    <div class="title">
        <h1><?php echo $info['name']; ?>  <?php echo $shixiinfo['courses']; ?></h1></div>
    <div class="container">
    	<form action="<?php echo url('score'); ?>" class="form" method="post">
        <h1 class="text-center">实习审核</h1>
        <div class="fraction">
            <div class="edit" id="element1">
                <div class="title form-inline">
                    <input type="text" class="form-control" v-model="renwu" placeholder="实习任务" style="width: 40%; height: 40px;" name="courses">
                    <input type="text" class="form-control" placeholder="实习评价" v-model="pingjia" style="width: 40%; height: 40px;" name="mark">
                    <div class="form-group">
                        <template>
                            <div class="block">
                                <el-date-picker style="width: 150px;" v-model="value1" type="date" placeholder="选择日期" name="time">
                                </el-date-picker>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
                        <input type="hidden" name="user_id" value="<?php echo $info['uid']; ?>">
                        <input type="submit" class="btn btn-primary btn-block"></div>
                    </div>
                </form>
    </div>
    </div>
</body>
<script type="text/javascript">
new Vue({
    el: ".container",
    data: {
        renwu: '<?php echo $shixiinfo['courses']; ?>',
        pingjia: '<?php echo $shixiinfo['mark']; ?>',
        value1: '<?php echo $shixiinfo['time']; ?>',
        value2: '',
        dinxin: '不确定'
    },

})

var a=UE.getEditor("myEditor");
</script>

</html>