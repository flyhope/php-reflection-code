<?php
/**
 * Yaf_Route_Simple Document
 *
 * Yaf_Route_Simple 会匹配请求中的query string，然后找到路由信息。
 * 你需要做的只是告诉 Yaf_Route_Simple，在$_GET中哪个是Module，哪个是Controller，哪个是Action。
 * Yaf_Route_Simple::route 总是会返回TRUE，所以把Yaf_Route_Simple放在路由堆栈前面是很重要的，否则其他所有的路由都可能不会被调用到。
 * 
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
final class Yaf_Route_Simple implements Yaf_Route_Interface {

    /**
     * Yaf_Route_Simple 会匹配请求中的query string，然后找到路由信息。
     * 你需要做的只是告诉 Yaf_Route_Simple，在$_GET中哪个是Module，哪个是Controller，哪个是Action。
     * Yaf_Route_Simple::route 总是会返回TRUE，所以把Yaf_Route_Simple放在路由堆栈前面是很重要的，否则其他所有的路由都可能不会被调用到。
     */
    protected $controller;
    
    /**
     * Yaf_Route_Simple 会匹配请求中的query string，然后找到路由信息。
     * 你需要做的只是告诉 Yaf_Route_Simple，在$_GET中哪个是Module，哪个是Controller，哪个是Action。
     * Yaf_Route_Simple::route 总是会返回TRUE，所以把Yaf_Route_Simple放在路由堆栈前面是很重要的，否则其他所有的路由都可能不会被调用到。
     */
    protected $module;
    
    /**
     * Yaf_Route_Simple 会匹配请求中的query string，然后找到路由信息。
     * 你需要做的只是告诉 Yaf_Route_Simple，在$_GET中哪个是Module，哪个是Controller，哪个是Action。
     * Yaf_Route_Simple::route 总是会返回TRUE，所以把Yaf_Route_Simple放在路由堆栈前面是很重要的，否则其他所有的路由都可能不会被调用到。
     */
    protected $action;
    

    /**
     * Yaf_Route_Simple constructor
     *
     * @param string $module_name module信息的键名。
     * @param string $controller_name controller信息的键名。
     * @param string $action_name action信息的键名。
     */
    public function __construct($module_name, $controller_name, $action_name) {}
    
    /**
     * Route a request
     *
     * @param Yaf_Request_Abstract $request 
     *
     * @return bool
     */
    public function route($request) {}
    
    /**
     * 组合url
     *
     * @param array $info 需要传入一个数组，数组中每个key可为:m、:c、:a，:m代表module，:c代表controller, :a代表action
     * @param array $query 用户自定义的query string，将根据此路由规则拼接在url中
     *
     * @return string
     */
    public function assemble($info, $query = null) {}
    
}
