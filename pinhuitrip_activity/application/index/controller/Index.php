<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
use think\View;
use think\Cache;
use \think\Request;


class Index extends Controller
{
	// 活动首页 轮播页面
   public function index(){
        return $this->fetch();
   }



   // 首页 展示页面 
   public function main(){

      return $this->fetch();
   }


   // 活动详细页面 页面  
   public function activity_content(){

   		
   	$url_get =  request()->param();

      $user = Db::name('activity_day');

      $activity_day_arr = preg_split('/,/',$url_get['activity_day']);



      $where['id'] = $activity_day_arr[$url_get['day']-1];
      $where['day'] = $url_get['day'];

      $day_data = $user->where($where)->find();

      // 查询活动对应的视频
      $user_video = Db::name('video');
     if($url_get['video_id'] != 0){
         $video_data = $user_video->where('id',$url_get['video_id'])->find();
     }else{
         $video_data = false;
     }
      


      $this->assign('day_data',$day_data);
      $this->assign('video_data',$video_data);
      return $this->fetch();
   }


   // 活动详细地点 页面  
   public function activity_point(){

   		
   	$url_get =  request()->param();

      $user  = Db::name('activity_site');

      $where['id'] = $url_get['id'];
      $site_data = $user->where($where)->find();
      $this->assign('site_data',$site_data);

    
      return $this->fetch();
   }

 


   
}
?>
