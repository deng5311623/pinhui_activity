<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
use think\View;
use think\Cache;
class index extends Controller
{
   public function index(){
        return $this->fetch();
   }
}
?>
