<?php
namespace app\index\model;
use think\Model;

/**
 * 主表model
 */
class activity_main extends Model
{

    // 设置当前模型对应的完整数据表名称
    protected $table = 'activity_main';
    // 设置当前模型的数据库连接
    protected $connection = [
        // 数据库类型
        'type'        => 'mysql',
        // 服务器地址
        'hostname'    => '47.94.100.200',
        // 数据库名
        'database'    => 'pinhui_activity',
        // 数据库用户名
        'username'    => 'root',
        // 数据库密码
        'password'    => 'deng5311623',
        // 数据库编码默认采用utf8
        'charset'     => 'utf8',
        // 数据库表前缀
        'prefix'      => '',
        // 数据库调试模式
        'debug'       => false,
    ];
}
