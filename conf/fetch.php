<?php
/**
 * 配置获取哪些类文档
 *
 * @author  Leelmes <i@chengxuan.li>
 * @since 2017年2月21日
 */

return array(

    // 函数包含
    'funcs' => array(
        'swoole',
    ),
    
    // 单类
    'eq' => array(
        'redis',
        'yac',
        'yaconf',
    ),

    // 类前缀
    'prefix' => array(
        'memcached',
        'swoole',
    ),

    
    // 从PHP手册获取，确保 http://svn.php.net/repository/phpdoc/zh/trunk/reference/ 存在
    'manual' => array(
        'yar',
        'yaf',
    )
);