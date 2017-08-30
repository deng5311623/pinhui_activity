<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"C:\wamp64\www\pinhuitrip_activity\public/../application/index\view\index\main.html";i:1504003656;s:85:"C:\wamp64\www\pinhuitrip_activity\public/../application/index\view\common\header.html";i:1504003073;s:85:"C:\wamp64\www\pinhuitrip_activity\public/../application/index\view\common\footer.html";i:1503976200;}*/ ?>
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
        <!--css文件-->
    <link rel="stylesheet" href="__STATIC__/index/css/common/base.css">
    <link rel="stylesheet" href="__STATIC__/index/css/common/swiper.min.css">
    <link rel="stylesheet" href="__STATIC__/index/css/common/bottom.css">
    <link rel="stylesheet" href="__STATIC__/index/css/main.css">
    <!--js文件-->
    <script src="__STATIC__/index/js/jquery/jquery-3.2.1.min.js"></script>
    <script src="__STATIC__/index/js/common/swiper.jquery.min.js"></script>
    <script src="__STATIC__/index/js/common/common.js"></script>
    <script src="__STATIC__/index/js/common/slowSlide.js"></script> 

    <title>游品慧</title>
</head>

<body>
    <!--搜索框-->
    <div class="search">
        <input type="text" placeholder="搜索">
    </div>

    <!--轮播图-->
    <div class="swiper-container">
        <!--容器里面的div-->
        <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"> <img src="__STATIC__/index/images/index/huashixiaolieren.png" width="100%" /> </div>
            <div class="swiper-slide"> <img src="__STATIC__/index/images/index/whxly.png" width="100%"/> </div>
            <div class="swiper-slide"> <img src="__STATIC__/index/images/index/huashixiaolieren.png" width="100%"/> </div>
        </div>

    </div>
    </div>

     


    <!--主题活动-->
    <div class="active">
        <h3>主题活动</h3>
        <div class="ulActive">
            <ul class="clearfix">
                <li>
                    <a href="#">
                        <img src="__STATIC__/index/images/index/1.png" alt="">
                        <p>研学探索活动</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="__STATIC__/index/images/index/2.png" alt="">
                        <p>冬夏科考营</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="__STATIC__/index/images/index/3.png" alt="">
                        <p>科普场馆</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
  
    <!--推荐热门路线-->
    <div class="hotActiveDiv">
        <!--主题活动-->
        <h3>推荐热门路线</h3>
        <div class="hotActive">
            <ul class="clearfix" style="width: 465%">
                <li style="width: 20%">
                    <div>
                        <a href="<?php echo url('index/index/activity_content',['active_id' => 1,'day' => 1]); ?>"><img src="__STATIC__/index/images/index/huashixiaolieren.png" alt=""></a>
                        <a href="<?php echo url('index/index/activity_content',['active_id' => 1,'day' => 1]); ?>"><p class="hotActive-title">化石小猎人</p></a>
                        <p class="p-time">活动天数: 1天</p>
                    </div>
                </li>
                <li style="width: 20%">
                    <div>
                        <a href="<?php echo url('index/index/activity_content',['active_id' => 2,'day' => 1]); ?>"><img src="__STATIC__/index/images/index/dhxl.png" alt=""></a>
                        <a href="<?php echo url('index/index/activity_content',['active_id' => 2,'day' => 1]); ?>"><p class="hotActive-title">敦煌夏令营</p></a>
                        <p class="p-time">活动天数: 1天</p>
                    </div>
                </li>
                <li style="width: 20%">
                    <div>
                        <a href="#"><img src="__STATIC__/index/images/index/huashixiaolieren.png" alt=""></a>
                        <a href="#"><p class="hotActive-title">敦煌小猎人</p></a>
                        <p class="p-time">活动天数: 1天</p>
                    </div>
                </li>
                <li style="width: 20%">
                    <div>
                        <a href="#"><img src="__STATIC__/index/images/index/dhxl.png" alt=""></a>
                        <a href="#"><p class="hotActive-title">敦煌夏令营</p></a>
                        <p class="p-time">活动天数: 1天</p>
                    </div>
                </li>
                <li style="width: 20%">
                    <div>
                        <a href="#"><img src="__STATIC__/index/images/index/dhxl.png" alt=""></a>
                        <a href="#"><p class="hotActive-title">邓煌夏令营</p></a>
                        <p class="p-time">活动天数: 1天</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--研学探究活动-->
    <div class="probeActive" >
        <!--主题活动-->
        <h3>研学探索活动</h3>
        <div class="probeActiveDiv">
           
        </div>
    </div>

    <!--底部通栏-->
    <div class="bottom">
        <ul class="clearfix">
            <li>
                <a href="<?php echo url('index/index/main'); ?>">
                    <img src="__STATIC__/index/images/images/activeC.png" alt="">
                    <p style="color: #17AFFF">首页</p>
                </a>
            </li>
            <li>
                <a href="<?php echo url('index/nearby/index'); ?>">
                    <img src="__STATIC__/index/images/images/activeC.png" alt="">
                    <p >附近活动</p>
                </a>
            </li>
            <li>
                <a href="<?php echo url('index/content/content_tool'); ?>">
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
 

    <script src="__STATIC__/index/js/main.js"></script>
<script>
      var mySwiper = new Swiper('.swiper-container',{
        effect : 'slide',
        autoplay : 5000,
        speed:500,
        })





    var get_activity_url =  "<?php echo url('index/main/get_activity'); ?>";
    var img_base_path    = '__STATIC__/index/images/';
    
    var url = "<?php echo url('index/index/activity_content'); ?>";

    var url = url.split('.')[0];
    $.ajax({  
        url:get_activity_url,
        dataType : "json",
        type:'post',
         success : function(data) {
            console.log(data)
        var str = '<ul class="clearfix" style="width:'+(data.length*93)+'%;transition:all .3s">';
        var l   = '';
        for(var i = 0 ; i < data.length; i++){

            var img =  img_base_path + data[i].title_img;



            l += '<li style="width: '+(1/data.length*100)+'%"">'
            l += '        <div>'
            l += '            <a href="'+url+'/activity_day/'+data[i].activity_day+'/day/1/video_id/'+data[i].video_id+'"><img src="'+img+'" alt=""></a>'
            l += '            <a href="'+url+'/activity_day/'+data[i].activity_day+'/day/1/video_id/'+data[i].video_id+'"><p class="hotActive-title">'+data[i].name+'</p></a>'
            l += '            <p class="p-time">活动天数: 2天</p>'
            l += '        </div>'
            l += '    </li>'


        }
        str += l + '</ul>';

        $('.probeActiveDiv').html(str);

        slideFunction_poi($('.probeActiveDiv'),document.body.offsetWidth);
         }
    })



</script>