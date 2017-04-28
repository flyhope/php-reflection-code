<?php
/**
 * 获取指定配置的数据
 *
 * @author  Leelmes <i@chengxuan.li>
 * @since 2017年2月21日
 */
define('APP_PATH', __DIR__ . '/');
define('LIBRARY_PATH', APP_PATH . 'library/');
define('VIEW_PATH', LIBRARY_PATH . 'view/');
include LIBRARY_PATH . 'model/parse.php';
include LIBRARY_PATH . 'model/manual.php';
include LIBRARY_PATH . 'model/refdoc.php';
include LIBRARY_PATH . 'model/doc_fetch.php';

$config = include APP_PATH . 'conf/fetch.php';
$output_dir = APP_PATH . 'php_docs_code/';

// shell_exec("rm -Rf {$output_dir}");
// shell_exec("rm -Rf " . APP_PATH . 'docs_xml_dir');

$docs_fetch = new DocsFetch($output_dir);
foreach ($config as $type => $values) {
    foreach ($values as $value) {
        switch ($type) {
            case 'eq' :
            case 'prefix' :
            case 'manual' :
            case 'funcs' :
                printf("[%s] %s\n", $type, $value);
                $method = 'process' . ucfirst($type);
                $docs_fetch->$method($value);
                break;
        }
    }
}
printf("[Finish] %s\n", date('Y-m-d H:i:s'));
