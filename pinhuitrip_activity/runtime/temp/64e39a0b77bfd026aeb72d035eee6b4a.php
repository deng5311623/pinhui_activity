<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"C:\wamp64\www\pinhuitrip_activity\public/../application/index\view\index\index.html";i:1503915707;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title" content="游品慧">
    <meta name="description" content="游品慧">
    <meta name="keywords" content="游品慧">
    <title>游品慧</title>
    <link rel="stylesheet" href="__STATIC__/index/css/common/base.css">
    <link rel="stylesheet" href="__STATIC__/index/css/common/swiper.min.css">

    <!--js文件-->
    <script src="__STATIC__/index/js/jquery/jquery-3.2.1.min.js"></script>
    <script src="__STATIC__/index/js/common/swiper.jquery.min.js"></script>
<body>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"> <img src="__STATIC__/index/images/images/banner03.jpg" width="100%" /> </div>
            <div class="swiper-slide"> <img src="__STATIC__/index/images/images/banner02.jpg" width="100%"/> </div>
            <div class="swiper-slide"> <img src="__STATIC__/index/images/images/banner04.jpg" width="100%"/> </div>
        </div>

        
        <!-- 如果需要滚动条 -->
        <div class="swiper-scrollbar"></div>
    </div>
</body>
</html>


<script language="javascript"> 
        var mySwiper = new Swiper('.swiper-container',{
        effect : 'fade',
        autoplay : 3000,
        speed:300,
        })
</script>
<script>


    var oBody = document.getElementsByTagName('body')[0];
    oBody.onclick = function(){
        window.location.href = "<?php echo url('index/index/main'); ?>";
    }

    setTimeout(function () {
        window.location.href = "<?php echo url('index/index/main'); ?>";
    },90000)
</script>