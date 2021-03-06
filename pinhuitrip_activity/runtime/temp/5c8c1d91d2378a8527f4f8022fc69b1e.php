<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:92:"C:\wamp64\www\pinhuitrip_activity\public/../application/index\view\index\activity_point.html";i:1503916658;}*/ ?>
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
    <link rel="stylesheet" href="http://lib.diygw.com/static/lib/weui/css/weui.css"/>

    <!--拓展组件是官方WeUI中暂时没有的组件。这些组件全部都是jQuery WeUI新增的-->
    <link rel="stylesheet" href="http://jqweui.com/dist/lib/weui.min.css">
    <link rel="stylesheet" href="http://jqweui.com/dist/css/jquery-weui.css">

    <link rel="stylesheet" href="__STATIC__/index/css/common/slide.css">
    <!--自身css-->
    <link rel="stylesheet" href="__STATIC__/index/css/activity_point.css">
    
    <style>
        #bottom_menu{
            background:url('__STATIC__/index/images/common/u327.png');
            width: 80px;
            background-size:100% 100%;
            }
        #photo_browser{
            width:100%;
            position: absolute;
            z-index: 999!important;
        }
    </style>
</head>
<body data-ride="animatebox">
<div class="container">

    <!--地图框-->
    <div id="mapDiv" ></div>



    <!--图标信息框-->
    <div class="drag_list">


    </div>



</div>
</div>
</body>
</html>


<script>
    var  mapDiv = document.getElementById('mapDiv');
    var  photo_browser = document.getElementById('photo_browser');
    mapDiv.style.height = document.documentElement.clientHeight  +"px";


</script>


<script charset="utf-8" type="text/javascript" src="http://lib.diygw.com/static/lib/jquery.js"></script>
<script src="http://jqweui.com/dist/lib/fastclick.js"></script>

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
<script>




    var img_path = '__STATIC__/index/';
    //***************************************************************     地图   ********************************************************************************//




    var a_path   = '<?php echo $site_data['a_path']; ?>';
    var map_data = '<?php echo $site_data['map_conter']; ?>';
    var lonlat = map_data.split(';')[0];
    //初始化地图

    map_init.init([Number(lonlat.split(',')[0]),Number(lonlat.split(',')[1])],Number(map_data.split(';')[1]));






    /*
     * 显示定位
     * @param Boolean panToLocation  //定位成功后将定位到的位置作为地图中心点，默认：true
     * @param number setZoom         //设置地图放大级别
     * */
    //'Geolocation':function(panToLocation,setZoom){
    map_init.Geolocation(false);



    // 请求地址
    var request_url = "<?php echo url('index/main/get_active_site_poi'); ?>";
    var request_url = request_url.split('.')[0];

    var img_base_path    = '__STATIC__/index/images/';


    $.ajax({  
        url:request_url,
        dataType : "json",
        type:'post',
        data:{poi:'<?php echo $site_data['site_details']; ?>'},
         success : function(data) {
            console.log(data);
            // 生成poi 点列表
            generate_list(data);


        }

    });



    // 生成poi 点列表
     function generate_list(poi_data){
         var str = '<ul class="clearfix"  id="point_page" style="width: '+poi_data.length*93+'% ;transition:all .3s"> ';

        var l = "";
        var path = "";
        var poi_url = "";
        for(var i = 0 ; i < poi_data.length; i++){


            // 请求地址
            var poi_url = "<?php echo url('index/point/index'); ?>";
            var poi_url = poi_url.split('.')[0] + '/id/'+ poi_data[i].id;

            //添加地图 poi 圆点
            var lnglat =  poi_data[i].details_lonlat.split(',');
            //添加 标注点 的顺序
            poi_data[i].index = i;
            var img = '__STATIC__/index/' + poi_data[i].title_img;


            map_init.add_circle_makder(lnglat,img,poi_data[i]);

            l += '   <li url="'+poi_url+'" lonlat = "'+poi_data[i].details_lonlat+'" style="width: '+(1/poi_data.length*100)+'%">'
            l += '         <div>'
            l += '         <img src="__STATIC__/index/'+poi_data[i].title_img+'" alt="" style="height: 120px;"  >'
            l += '             <p class="p_title">'+poi_data[i].details_name+'<a href="http://uri.amap.com/navigation?from,startpoint&to='+poi_data[i].details_lonlat+',endpoint&mode=car&policy=1&src=mypage&coordinate=gaode&callnative=0"><img src="__STATIC__/index/images/amap-nav.png" alt=""></a></p>'
            l += '            <p>'+poi_data[i].details_intro+'</p>'
            l += '         </div>'
            l += '     </li>'

                    // 组合坐标点

                path   +=   poi_data[i].details_lonlat + ';';
                   
        }
        str += l + '</ul>';

        $('.drag_list').html(str);


        slideFunction_poi($('.drag_list'),document.body.offsetWidth);

        map_init.draw_path(path); 



        href_poi_page();

     }


     // 跳转 poi  页面
     function href_poi_page(){
        $('li').on('click',function(){
            window.location.href =  $(this).attr('url');

        })
     }



   // 选中第一个poi点 放大 
    var time =  setInterval(function(){
        if($('.amap-icon').length > 0){
            $('.amap-icon:eq(0)').addClass('active');
            clearInterval(time)
        }
    }, 1000);



    //    点击定位图标  定位并平移为中心
    //    参数为  地图缩进级别
    $('.amap-geolocation-con').click(function(){
        map_init.set_center(17)
    })








  

 
</script>
