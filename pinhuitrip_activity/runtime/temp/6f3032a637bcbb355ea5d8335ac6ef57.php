<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"C:\wamp64\www\pinhuitrip_activity\public/../application/index\view\article\index.html";i:1503908731;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title" content="游品慧">
    <meta name="description" content="游品慧">
    <meta name="keywords" content="游品慧">
    <title>游品慧</title>


    <link rel="stylesheet" href="http://lib.diygw.com/static/lib/weui/css/weui.css"/>
    <!--css文件-->
    <link rel="stylesheet" href="__STATIC__/index/css/common/base.css">
    <link rel="stylesheet" href="__STATIC__/index/css/common/swiper.min.css">
    <link rel="stylesheet" href="__STATIC__/index/css/common/bottom.css">

    <!--js文件-->
    <script src="__STATIC__/index/js/jquery/jquery-3.2.1.min.js"></script>
    <script src="__STATIC__/index/js/common/swiper.jquery.min.js"></script>
    <script src="__STATIC__/index/js/common/common.js"></script>
    <script src="__STATIC__/index/js/common/slowSlide.js"></script>

    <style>
        body{
            background: #faf8f8;
        }
        .swiper-container {
           height: 200px;
        }

        #select_div{
            text-align: center;
        }
        #select_div li {
            width: 33.3333%;
            float: left;
            background: #fff;
            padding: 7px 0px;
            border-bottom: 1px solid #efeaea;
        }
        .padding-bot-50{
            padding-bottom:60px ;
        }
    </style>
</head>
<body>

<!--主要问题框-->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="__STATIC__/index/images/index/dxtx.png" width="100%" alt=""></div>
        <div class="swiper-slide"><img src="__STATIC__/index/images/index/dizhi.png" width="100%" alt=""></div>
        <div class="swiper-slide"><img src="__STATIC__/index/images/index/whxly.png" width="100%" alt=""></div>
    </div>
    <div class="swiper-scrollbar"></div>
</div>


<div id="select_div">
    <li>研学科考</li>
    <li>海外游学</li>
    <li>科普讲座</li>
</div>



<div class="white-card padding-bot-50">
    <a id="datatemplate583986" page="" href="#" class="weui-media-box weui-media-box_appmsg">
        <div class="weui-media-box__hd"> <img class="weui-media-box__thumb" src="__STATIC__/index/images/content/chuizi.jpg" alt="标题一"> </div>
        <div class="weui-media-box__bd">
            <h4 class="weui-media-box__title">地质科考锤</h4>
            <p class="weui-media-box__desc">铁锤子平头地质勘探锤专业地质锤地</p>
            <p>￥23</p>
        </div>
    </a>
    <a page="" href="#" class="weui-media-box weui-media-box_appmsg">
        <div class="weui-media-box__hd"> <img class="weui-media-box__thumb" src="__STATIC__/index/images/content/shoutao.jpg" alt="标题二"> </div>
        <div class="weui-media-box__bd">
            <h4 class="weui-media-box__title">科考手套</h4>
            <p class="weui-media-box__desc">铁锤子平头地质</p>
            <p>￥18</p>
        </div>
    </a>
    <a page="" href="#" class="weui-media-box weui-media-box_appmsg">
        <div class="weui-media-box__hd"> <img class="weui-media-box__thumb" src="__STATIC__/index/images/content/fangdajing.jpg" alt="标题三"> </div>
        <div class="weui-media-box__bd">
            <h4 class="weui-media-box__title">科考放大镜</h4>
            <p class="weui-media-box__desc">铁锤子平头地质勘探锤专业</p>
            <p>￥33</p>
        </div>
    </a>
</div>




<!--底部通栏-->
<div class="bottom">
    <ul class="clearfix">
        <li>
            <a href="#">
                <img src="__STATIC__/index/images/images/activeC.png" alt="">
                <p style="color: #17AFFF">附近活动</p>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="__STATIC__/index/images/images/shop.png" alt="">
                <p>周边产品</p>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="__STATIC__/index/images/images/person.png" alt="">
                <p>我</p>
            </a>
        </li>
    </ul>
</div>


</body>
</html>
<script type="text/javascript">
    var mySwiper = new Swiper('.swiper-container',{
        scrollbar:'.swiper-scrollbar',
        autoplay: 5000,
    });
</script>