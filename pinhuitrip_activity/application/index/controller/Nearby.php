<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
use think\View;
use think\Cache;
use \think\Request;


class Nearby extends Controller
{
	
   /**
     * 附近活动页面
     */
    public function index(){
        
        return $this->fetch();
    }



}
?>
