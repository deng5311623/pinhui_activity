<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:94:"C:\wamp64\www\pinhuitrip_activity\public/../application/index\view\index\activity_content.html";i:1504000918;s:85:"C:\wamp64\www\pinhuitrip_activity\public/../application/index\view\common\footer.html";i:1503976200;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title" content="游品慧">
    <meta name="description" content="游品慧">
    <meta name="keywords" content="游品慧">
    <title><?php echo $day_data['a_title']; ?></title>
    <meta name="author" content="DIY官网 http://www.diygw.com" />

    <link rel="stylesheet" href="http://lib.diygw.com/static/lib/weui/css/weui.css"/>
    <link rel="stylesheet" href="http://lib.diygw.com/static/lib/weui/css/weui-extend.css"/>
    <script charset="utf-8" type="text/javascript" src="http://lib.diygw.com/static/lib/jquery.js"></script>

    <!--<link rel="stylesheet" href="css/base.css"/>-->
    <link rel="stylesheet" href="__STATIC__/index/css/activity_content.css"/>
    <link rel="stylesheet" href="__STATIC__/index/css/common/bottom.css">
    <link rel="stylesheet" href="__STATIC__/index/css/common/base.css">
    <style>

    </style>
</head>
<body data-ride="animatebox" style="">



<div class="container">

    <div class="page" id="page" >

        <!--地图框-->
        <div id="mapDiv" ></div>
        <!--购买窗口-->
        <div class="white-card">
                <div id="label_title" >
                    【<?php echo $day_data['a_title']; ?>】<?php echo $day_data['a_title']; ?>
                </div>
                <p class="click-apply"> <a href="<?php echo $day_data['apply']; ?>" id="click-to-buy" class="float-right color-ff">点击前往报名 >>></a></p>
        </div>

        <div class="button_sp_area " >
            
            <ul id="active_day" class="clearfix">
<!--                 <li><a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_default current">第一天</a></li>
                <li><a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_default">第二天</a></li>
                <li><a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_default">第三天</a></li>
                <li><a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_default">第四天</a></li>
                <li><a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_default">第五天</a></li>
                <li><a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_default">第六天</a></li>
                <li><a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_default">第七天</a></li> -->
            </ul>

        </div>


        <div class="white-card margin-top-10">
            <a id="datatemplate583986" page="" href="<?php echo $day_data['a_purpose']; ?>" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box__hd"> <img class="weui-media-box__thumb" src="__STATIC__/index/images/images/icon01.png" alt="标题一"> </div>
                <div class="weui-media-box__bd">
                    <h4 class="weui-media-box__title">活动目的</h4>
                    <p class="weui-media-box__desc">观察化石，了解化石的形成，亲自挖掘化石！</p>
                </div>
            </a>
            <a page="" href="<?php echo url('index/content/content_task',['atask'=>$day_data['a_task']]); ?>" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box__hd"> <img class="weui-media-box__thumb" src="__STATIC__/index/images/images/icon02.png" alt="标题二"> </div>
                <div class="weui-media-box__bd">
                    <h4 class="weui-media-box__title">科学任务</h4>
                    <p class="weui-media-box__desc"></p>
                </div>
            </a>
            <a page="" href="<?php echo url('index/content/content_tool',['tool'=>'1,2,3']); ?>" class="weui-media-box weui-media-box_appmsg">
                <div class="weui-media-box__hd"> <img class="weui-media-box__thumb" src="__STATIC__/index/images/images/icon03.png" alt="标题三"> </div>
                <div class="weui-media-box__bd">
                    <h4 class="weui-media-box__title">科考工具</h4>
                    <p class="weui-media-box__desc">游玩必带工具</p>
                </div>
            </a>
        </div>

      <?php if($video_data): ?>   
       <div id="video">
           <img class="icon" src="__STATIC__/index/images/common/video.png" alt="">
           精彩视频
                 <!--视频播放-->
           
                    <div id="video_div">
                     <p class="title menu"><?php echo $video_data['video_title']; ?></p>
                        <video controls id="myVideo" >
                            <source class="video" src="__STATIC__/<?php echo $video_data['video']; ?>" type="video/mp4">
                        </video>
                    </div>
                
           
        </div>
       <?php else: ?> 
                 <!--    <p>视频不存在</p> -->
        <?php endif; ?>
        <!--分割线-->
        <div class="cut_off_rule"> </div>


        <div id="active_path">
            <p>活动路线</p>
                <ul class="clearfix" id="active_path_list" >
                   

                </ul>
        </div>


        <!--底部通栏-->
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
<script src="http://webapi.amap.com/maps?v=1.3&amp;key=604d7204977a4b484ceb5ea62b8e0c4d"></script>
<!--引入UI组件库（1.0版本） -->
<script src="http://webapi.amap.com/ui/1.0/main.js"></script>


<!-- 引入公共地图文件  -->
<script src="__STATIC__/index/js/map/map.js"></script>
<script>



    //***************************************************************     地图   ********************************************************************************//

   var map_data = '<?php echo $day_data['map_center']; ?>';
   var a_path   = '<?php echo $day_data['a_path']; ?>'

   var lonlat = map_data.split(';')[0];
    //初始化地图

    map_init.init([Number(lonlat.split(',')[0]),Number(lonlat.split(',')[1])],Number(map_data.split(';')[1]));


    // 获取天数列表  
    function get_active_day_list(){
        var url = "<?php echo url('index/index/activity_content'); ?>";
        var url = url.split('.')[0];
    // <a href="'+url+'/activity_day/'+data[i].activity_day+'/day/1">
        var l = "";
        var day_arr =  "<?php echo \think\Request::instance()->param('activity_day'); ?>".split(',');
    
        var present_day = "<?php echo \think\Request::instance()->param('day'); ?>" - 1;
        for (var i = 0; i < day_arr.length; i++) {
            var d = i+1;
            if(i == present_day){
                l += '<li><a href="'+url+'/activity_day/<?php echo \think\Request::instance()->param('activity_day'); ?>/day/'+d+'" class="weui-btn weui-btn_mini weui-btn_default current">'+day(i)+'</a></li>'
            }else{
                l += '<li><a href="'+url+'/activity_day/<?php echo \think\Request::instance()->param('activity_day'); ?>/day/'+d+'" class="weui-btn weui-btn_mini weui-btn_default ">'+day(i)+'</a></li>'
            }
            

            day_arr[i]
        }
        
        if(day_arr.length == 1){
            l = "";
        }
        $('#active_day').html(l);
        
    }
    get_active_day_list();


    function day(i){
        switch(i)
            {
            case 0:
                return "第一天";
              break;
            case 1:
                return "第二天";
              break;
            case 2:
                return "第三天";
              break;
            case 3:
                return "第四天";
              break;
            case 4:
                return "第五天";
              break;
            case 5:
                return "第六天";
              break;
            case 6:
                return "第七天";
              break;
            case 7:
                return "第八天";
              break;
            case 8:
                return "第九天";
              break;
            case 9:
                return "第十天";
              break;
            case 10:
                return "第十一天";
              break;
            default:
                 return "十一天以上";  
                    
            }
    }


    // 获取活动列表
    // 请求地址
    function get_active_site(){
        var request_url = "<?php echo url('index/main/get_active_site'); ?>";
        var request_url = request_url.split('.')[0];

        var img_base_path    = '__STATIC__/index/images/';


        $.ajax({  
            url:request_url,
            dataType : "json",
            type:'post',
            data:{site:'<?php echo $day_data['activity_site']; ?>'},
             success : function(data) {
                console.log(data);

            
                var url = "";// 生成a标签请求地址
            
                var l = "";  
            for(var i = 0 ; i < data.length; i++){

                // 是否是外部链接地址
                if(data[i].path_type){
                    url = data[i].site_path;
                }else{
                    url = "<?php echo url('index/index/activity_point'); ?>";

                    url = url.split('.')[0] + '/id/' + data[i].id + '/site_details/' + data[i].site_details;
                }


                var img =  img_base_path + data[i].site_img;


                switch(i)
                    {
                    case 0:
                            data[i].poi_img    = img_base_path + 'common/qi.png';
                            data.origin        = data[i].map_lonlat;
                      break;
                    case data.length -1:
                            data[i].poi_img    = img_base_path + 'common/zhong.png';
                            data.destination     = data[i].map_lonlat;
                      break;
                    default:
                            data[i].poi_img    = img_base_path + 'common/tu.png';
                            if(data.waypoints){
                                data.waypoints   +=  ';' + data[i].map_lonlat;
                            }else{
                                data.waypoints   =  data[i].map_lonlat;
                            }
                            
                    }



                l += '<li ><div>'
                l += '   <a href="'+url+'">'
                l += '      <img  class="path-img-title"  src="'+img+'" alt="">'
                l += '    <div class="path-title-div">'
                l += '      <p class="path-title"><img src="'+data[i].poi_img+'"   alt="" class="weui-tabbar__icon " style="">'+data[i].site_name+'</p>'
                l += '      <p class="path-label"><span>户外运动</span> <span>科普</span></p>'
                l += ' </div></a></div></li>'

                $('#active_path_list').html(l);

                // 添加poi点
                map_init.add_makder(data[i].map_lonlat,data[i].poi_img,'<a href="'+url+'">'+data[i].site_name+'</a>');

                    
                

             }//for循环结束


                    // 判断是否有存储好的路线
             if(a_path){
                    map_init.math_line('传入路线的数组');
                    //从高德API 去请求路线
                }else{

                     map_init.select_path(data.origin,data.destination,data.waypoints);
                }


                   
               
                }
         
        })
    }
    get_active_site();




    //    点击定位图标  定位并平移为中心
    //    参数为  地图缩进级别
    $('.amap-geolocation-con').click(function(){
        map_init.set_center(17)
    })




</script>