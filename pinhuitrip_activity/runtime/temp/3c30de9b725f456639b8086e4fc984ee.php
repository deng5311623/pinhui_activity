<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"C:\wamp64\www\pinhuitrip_activity\public/../application/index\view\nearby\index.html";i:1503976396;s:85:"C:\wamp64\www\pinhuitrip_activity\public/../application/index\view\common\header.html";i:1503975719;s:85:"C:\wamp64\www\pinhuitrip_activity\public/../application/index\view\common\footer.html";i:1503976200;}*/ ?>
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
    <link rel="stylesheet" href="http://lib.diygw.com/static/lib/weui/css/weui.css"/>
    <link rel="stylesheet" href="http://jqweui.com/dist/css/jquery-weui.css">

    <link rel="stylesheet" href="__STATIC__/index/css/common/slide.css">
    <!--自身css-->
    <link rel="stylesheet" href="__STATIC__/index/css/activity_point.css">
    <!--图片查看-->
    <script src="__STATIC__/index/js/jquery/jquery-weui.js"></script>
    <script src="__STATIC__/index/js/common/swiper.js"></script>
    <!--滑动插件-->
    <script src="__STATIC__/index/js/common/slowSlide.js"></script>

    <!--自身交互-->
    <script src="__STATIC__/index/js/activity_point.js"></script>


    <!-- 引入公共地图文件  -->
    <script src="http://webapi.amap.com/maps?v=1.3&amp;key=604d7204977a4b484ceb5ea62b8e0c4d"></script>
    <script src="__STATIC__/index/js/map/map.js"></script>


</head>
<body data-ride="animatebox" >
<div class="container">

    <!--地图框-->
    <div id="mapDiv" ></div>



    <!--图标信息框-->
    <div class="drag_list" style="bottom: 42px;">


    </div>



    <!--视频播放-->
    <div id="video_div">
        <h3>化石小猎人 <span></span></h3>
        <video controls id="myVideo" >
            <source src="video/huashi20161112.mov" type="video/mp4">
        </video>
    </div>


    <!--音频播放-->
    <div id="music_div">
        <h4>化石林介绍</h4>
        <audio controls>
            <source src="http://www.runoob.com/try/demo_source/horse.mp3" type="audio/mpeg">
            <source src="horse.ogg" type="audio/ogg">
            <embed  src="http://www.runoob.com/try/demo_source/horse.mp3">
        </audio>
    </div>


    <!--底部菜单-->
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
 

</div>
</div>
</body>
</html>


<script>
    var  mapDiv = document.getElementById('mapDiv');
    mapDiv.style.height = document.documentElement.clientHeight - 100 +"px";


</script>


<script charset="utf-8" type="text/javascript" src="http://lib.diygw.com/static/lib/jquery.js"></script>
<script src="http://jqweui.com/dist/lib/fastclick.js"></script>
<script>
    $(function() {
        FastClick.attach(document.body);
    });
</script>



<!-- 引入公共地图文件  -->
<script src="http://webapi.amap.com/maps?v=1.3&amp;key=604d7204977a4b484ceb5ea62b8e0c4d"></script>
<script src="__STATIC__/index/js/map/map.js"></script>
<script>





    //***************************************************************     地图   ********************************************************************************//

    //初始化地图
    map_init.init([114.403679,30.519014],16);



    /*
     * 显示定位
     * @param Boolean panToLocation  //定位成功后将定位到的位置作为地图中心点，默认：true
     * @param number setZoom         //设置地图放大级别
     * */
    //'Geolocation':function(panToLocation,setZoom){
    map_init.Geolocation(false);


    var poi_data = [
        {
            'id':"1",
            'title':"化石林",
            'content':"缅甸木化石是由亿万年前树木经过地壳运动演变而来的。",
            'img':'images/huashi/IMG_3091.JPG',
            'lnglat':"114.403689,30.519016"
        },
        {
            'id':"2",
            'title':"博物馆",
            'content':"距今两亿至一亿多年。",
            'img':'images/huashi/IMG_3083.JPG',
            'lnglat':"114.400349,30.517377"
        },
        {
            'id':"3",
            'title':"茅店山",
            'content':"缅甸木化石是由亿万年前树木经过地壳运动演变而来的，而且还具有镇宅驱邪、保平安之意义。",
            'img':'images/huashi/IMG_3085.JPG',
            'lnglat':"114.396306,30.463972"
        },
        {
            'id':"4",
            'title':"龙泉山",
            'content':"缅甸，是不可再生资源，不仅具有较高的考古价值和民间收藏价值，而且还具有镇宅驱邪、保平安之意义。",
            'img':'images/huashi/IMG_3084.JPG',
            'lnglat':"114.517062,30.411791"
        },
        {
            'id':"5",
            'title':"南望山",
            'content':"缅甸木化石是由亿万年前树木经过地壳运动演变而来的，是不可再生资源，不仅具有较高的考古价值和民间收藏价值，而且还具有镇宅驱邪、保平安之意义。",
            'img':'images/huashi/IMG_3086.JPG',
            'lnglat':"114.39708,30.52544"
        }
    ]

                    var img_path = '__STATIC__/index/' 
                // 给图片添加 绝对路径地址
                    for (var i = 0; i < poi_data.length; i++) {
                        poi_data[i].img = img_path + poi_data[i].img;
                    }



    function onComplete(data){
        map_init.myGeolocation = data.position.getLng()+','+data.position.getLat();

        for(var i = 0 ; i < poi_data.length; i++){
            poi_data[i].distance =  map_init.calcDistance(poi_data[i].lnglat);

            console.log(poi_data[i].distance);

        }

        console.log(poi_data)

    }





    var str = '<ul class="clearfix" style="width: '+poi_data.length*93+'% ;transition:all .3s"> ';

    var l = "";
    for(var i = 0 ; i < poi_data.length; i++){

        //添加地图 poi 圆点
        var lnglat =  poi_data[i].lnglat.split(',');
        //添加 标注点 的顺序
        poi_data[i].index = i;
        map_init.add_circle_makder(lnglat,poi_data[i].img,poi_data[i]);

        l += '   <li   lonlat = "'+poi_data[i].lnglat+'" style="width: '+(1/poi_data.length*100)+'%">'
        l += '         <div>'
        l += '         <img src="'+poi_data[i].img+'"  alt="" style="height: 120px;"  >'
        l += '             <p class="p_title">'+poi_data[i].title+'<a href="http://uri.amap.com/navigation?from,startpoint&to='+poi_data[i].lnglat+',endpoint&mode=car&policy=1&src=mypage&coordinate=gaode&callnative=0"><img src="__STATIC__/index/images/amap-nav.png" alt=""></a></p>'
        l += '            <p>'+poi_data[i].content+'</p>'
        l += '         </div>'
        l += '     </li>'


    }
    str += l + '</ul>';

    $('.drag_list').html(str);


    slideFunction_poi($('.drag_list'),document.body.offsetWidth);




    //    点击定位图标  定位并平移为中心
    //    参数为  地图缩进级别
    $('.amap-geolocation-con').click(function(){
        map_init.set_center(16)
    })


    map_init.getMarkersById(3);

   // map_init.math_line([[114.403689,30.519016],[114.403479,30.519182],[114.403914,30.51915],[114.403887,30.518716],[114.403522,30.518748]]);






</script>
