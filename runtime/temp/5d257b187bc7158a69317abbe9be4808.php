<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\wamp64\www\OAZ\oa_yxs\public/../application/index\view\news\index.html";i:1544063215;s:66:"D:\wamp64\www\OAZ\oa_yxs\public/../application/index\view\top.html";i:1544063215;s:69:"D:\wamp64\www\OAZ\oa_yxs\public/../application/index\view\footer.html";i:1544063215;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php foreach($news_cate as $name): if(!input('cate')): ?>新闻中心<?php endif; if(input('cate')==$name['id']): ?><?php echo $name['name']; endif; endforeach; ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"  href="__PUBLIC__static/index/news/css/news.css">
    <link rel="stylesheet" href="__STATIC__/index/news/css/swiper.min.css">
    <link rel="stylesheet" href="__STATIC__/index/news/css/certify.css">
    <script src="__STATIC__/index/news/js/swiper.min.js"></script>

</head>
<body>

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

<div id="certify" style="top: 120px">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach($news_list as $info): ?>
            <div class="swiper-slide"><a href="<?php echo url('news'); ?>?id=<?php echo $info['id']; ?>"><img src="__UPLOADS__<?php echo $info['thumb']; ?>"></a><p><?php echo $info['title']; ?></div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>


<div class="content"  style="width: 1200px; margin: 100px auto 0;">
    <ul class="cate" style="margin-top: 30px;">
        <?php foreach($news_cate as $name): ?>
        <li><a href="<?php echo url('index'); ?>?cate=<?php echo $name['id']; ?>"><?php echo $name['name']; ?></a></li>
        <?php endforeach; ?>
    </ul>
    <div class="content_left">
        <p class="cate_title"><?php foreach($news_cate as $name): if(input('cate')==$name['id']): ?><?php echo $name['name']; endif; endforeach; ?></p>
        <?php foreach($news_list as $info): ?>
        <div class="new">
            <div class="left">
                <a href="<?php echo url('news'); ?>?id=<?php echo $info['id']; ?>">
                    <img src="__UPLOADS__<?php echo $info['thumb']; ?>">
                </a>
            </div>
            <div class="right">
                <a href="<?php echo url('news'); ?>?id=<?php echo $info['id']; ?>" class="title"><?php echo $info['title']; ?></a>
                <p class="time"><?php echo $info['time']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
        <div>
            <?php echo $news_list->render(); ?>
        </div>
    </div>

    <div class="content_right">
        <p class="cate_title">热点</p>
        <?php foreach($news_list2 as $key => $info2): if($key<10): ?>
        <div class="hotspot">
            <div class="left">
                <a href="<?php echo url('news'); ?>?id=<?php echo $info2['id']; ?>">
                    <img src="__UPLOADS__<?php echo $info2['thumb']; ?>">
                </a>
            </div>
            <div class="right">
                <a href="<?php echo url('news'); ?>?id=<?php echo $info2['id']; ?>" class="title"><?php echo $info2['title']; ?></a>
                <p class="time"><?php echo $info2['time']; ?></p>
            </div>
        </div>
        <?php endif; endforeach; ?>
    </div>
</div>

<link rel="stylesheet" type="text/css"  href="__PUBLIC__static/index/common/css/footer.css?4">
<div class="footer">
    <div id="lj">
        <div class="container">
            <ul class="lj_link">
                <li>
                    <p>新手上路</p>
                    <p><a href="tech/index.html" class="color6">视频讲堂</a><br><a href="/news/prall.html">功能全图</a></p>
                </li>
                <li>
                    <p>关于产品</p>
                    <p><a href="chanpin/crm.html">产品简介</a><br><a href="/demo" target="_blank">产品演示</a><br><a href="privacy/index.html">数据安全</a><br><a href="product/update.html" class="color6">升级历史</a><br><a href="/special/arc-922.html">行业应用</a><br><a href="video/index.html">视频案例</a></p>
                </li>
                <li>
                    <p>关于我们</p>
                    <p><a href="honor/index.html" class="color6">品牌荣誉</a><br><a href="about/index.html#02" class="color6">成长历史</a><br><a href="about/index.html">关于我们</a><br><a href="tech/cctv10.html">央视报道</a><br><a href="about/index.html#01">联系我们</a></p>
                </li>
                <li>
                    <p>培训服务</p>
                    <p><a href="tech/index.html#01">电话培训</a><br><a href="tech/index.html#02">在线培训</a><br><a href=" ">视频会议培训</a><br><a href="tech/index.html#03">flash应用教程</a></p>
                </li>
                <li>
                    <p>如何租用</p>
                    <p><a href="buy/index.html" class="color6">购买/续费</a></p>
                </li>
                <li>
                    <p>加盟合作</p>
                    <p><a href="cooperate/zhaoshang/index.html">代理分销</a><br><a href="cooperate/index.html">业务合作</a></p>
                </li>

                <li>
                    <a class="bton" href="/login.xt">个人版登录</a>
                    <a class="bton" href="">企业版登录</a>
                </li>
            </ul>
        </div>
    </div>
    <footer>
        广州蒲明软件技术 GZ Volitation Information Technology Co., Ltd <br>
         <br>
        6项全能的企业智慧云 
    </footer>
</div>
</body>
</html>
<script>
    certifySwiper = new Swiper('#certify .swiper-container', {
        watchSlidesProgress: true,
        slidesPerView: 'auto',
        centeredSlides: true,
        loop: true,
        loopedSlides: 5,
        autoplay: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            //clickable :true,
        },
        on: {
            progress: function(progress) {
                for (i = 0; i < this.slides.length; i++) {
                    var slide = this.slides.eq(i);
                    var slideProgress = this.slides[i].progress;
                    modify = 1;
                    if (Math.abs(slideProgress) > 1) {
                        modify = (Math.abs(slideProgress) - 1) * 0.3 + 1;
                    }
                    translate = slideProgress * modify * 260 + 'px';
                    scale = 1 - Math.abs(slideProgress) / 5;
                    zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
                    slide.transform('translateX(' + translate + ') scale(' + scale + ')');
                    slide.css('zIndex', zIndex);
                    slide.css('opacity', 1);
                    if (Math.abs(slideProgress) > 3) {
                        slide.css('opacity', 0);
                    }
                }
            },
            setTransition: function(transition) {
                for (var i = 0; i < this.slides.length; i++) {
                    var slide = this.slides.eq(i)
                    slide.transition(transition);
                }

            }
        }

    })

</script>