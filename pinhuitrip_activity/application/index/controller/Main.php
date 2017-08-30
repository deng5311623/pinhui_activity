<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
use think\View;
use think\Cache;
use \think\Request;


class Main extends Controller
{
	
	/**
     * 获取每一个活动数据   例如：化石小猎人
     * @return   array             $data                      活动数据  
     */
    public function get_activity(){

    	$user = Db::name('activity_main');

      	$data = $user->select();

        return  $data;
    }


   /**
     * 获取每一个活动点的数据   例如：化石林
     * @param    string           $activity_site_str            活动顺序字符串
     * @return   array             $data                      活动点的数据  
     */
    public function get_active_site(){
        $activity_site_str =  request()->param();

        // var_dump($activity_site_str['site']);die;
        $activity_site_arr = preg_split('/,/',$activity_site_str['site']);
        $user = Db::name('activity_site');

        foreach ($activity_site_arr as  $value) {
            $data[] =  $user ->where('id',$value)->find();
        }

        return  $data;
    }

     /**
     * 获取每一个具体活动点的数据  例如：化石林下的 所有点
     * @param    string           $site_details_str            活动顺序字符串
     * @return   array             $data                      活动点的数据  
     */
    public function get_active_site_poi(){
        $site_details_str =  request()->param();


        $activity_site_arr = preg_split('/,/',$site_details_str['poi']);
        $user = Db::name('site_details');

        foreach ($activity_site_arr as  $value) {
            
            $data[] =  $user ->where('id',$value)->find();
        }

        return  $data;
    }

}
?>
