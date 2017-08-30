<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
use think\View;
use think\Cache;
use \think\Request;


class Point extends Controller
{
	
   /**
     * 标注点主页页面
     */
    public function index(){
    	$url_get      = request()->param();

    	// 地点详情表 数据 
    	$site_details = Db::name('site_details');
    	$site_details_data = $site_details->where('id',$url_get['id'])->find();
    	$this->assign('site_details_data',$site_details_data);

        return $this->fetch();
    }

 	
 	/*
 	*获取 图片信息
 	*@param id  标注点ID
 	 */
    public function get_img_info(){
    	$id      = request()->param();

    	// 图片表数据
    	$image        = Db::name('image');
    	$img_id_arr = preg_split('/,/',$id['id']);
    	foreach ($img_id_arr as $img_value) {
    		$img_data[] = $image->where('id',$img_value)->field('image,caption')->find();
    	}
    	return $img_data;
    }


    /*
 	*获取 相关文章
 	*@param id  标注点ID
 	 */
    public function get_article_info(){
    	$id      = request()->param();

    	// 文章表列表
    	$article        = Db::name('article');
    	$article_id_arr = preg_split('/,/',$id['id']);
    	foreach ($article_id_arr as $article_value) {
    		$article_data[] = $article->where('id',$article_value)->find();
    	}
    	return $article_data;
    }

}
?>
