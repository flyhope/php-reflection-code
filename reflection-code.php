<?php
/**
 * 程序主入口
 * 
 * @package Controller
 * @author  Leelmes <i@chengxuan.li>
 */
  
define('APP_PATH', __DIR__ . '/');
define('LIBRARY_PATH', APP_PATH . 'library/');
define('VIEW_PATH', LIBRARY_PATH . 'view/');

//获取文档
$class_name = isset($argv[1]) ? $argv[1] : '';
if(!$class_name) {
    include VIEW_PATH . 'help.php';
} else {
    include LIBRARY_PATH . 'model/parse.php';
    echo Model_Parse::showDoc($class_name);
}

