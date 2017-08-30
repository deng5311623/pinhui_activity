<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
use think\View;
use think\Cache;
use \think\Request;


class Content extends Controller
{
	
   /**
     * 科学任务页面
     */
    public function content_task(){
        
        return $this->fetch();
    }

    /**
     * 科考工具页面
     */
    public function content_tool(){
        

        return $this->fetch();
    }

}
?>
