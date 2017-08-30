<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
use think\View;
use think\Cache;
use \think\Request;


class Article extends Controller
{
	
   /**
     * 文章页面
     */
    public function index(){
        
        return $this->fetch();
    }

    /**
     * 文章内容页面
     */
    public function article_content(){
        $url_get = request()->param();

        $user = Db::name('Article');
        $data = $user->where('id',$url_get['id'])->find();
        $this->assign('data',$data);

        return $this->fetch();
    }


    

}
?>
