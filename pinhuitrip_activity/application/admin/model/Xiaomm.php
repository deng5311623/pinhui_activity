<?php
namespace app\index\model;

class Xiaomm extends \think\Model
{

    // 设置当前模型对应的完整数据表名称
    protected $table = 'xiaomm';
    // 设置当前模型的数据库连接
    protected $connection = [
        // 数据库类型
        'type'        => 'mysql',
        // 服务器地址
        'hostname'    => '47.94.100.200',
        // 数据库名
        'database'    => 'sys',
        // 数据库用户名
        'username'    => 'root',
        // 数据库密码
        'password'    => '123456',
        // 数据库编码默认采用utf8
        'charset'     => 'utf8',
        // 数据库表前缀
        'prefix'      => '',
        // 数据库调试模式
        'debug'       => false,
    ];
}
