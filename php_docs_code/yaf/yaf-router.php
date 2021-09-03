<?php
/**
 * Yaf_Router Document
 *
 * Yaf_Router是标准的框架路由.路由是一个拿到URI端点（URL中的URI的一部分）然后分解参数得到哪一个module, controller, 和action需要接受请求。module, controller, 和action，还有一些其他的参数是打包在一个Yaf_Request_Abstract的对象中，然后通过Yaf_Dispatcher来处理的。路由只发生一次:最初接到请求并且在第一个controller分发之前。
 * Yaf_Router 是设计来允许使用纯PHP结构的类似功能模块的跳转。它非常松散的基于Ruby on Rails的路由，并且不需要你提前就知道webserver URL跳转的相关知识。它是设计来处理一个Apache 跳转模块的规则（一个）
 * Yaf_Router是设计来允许mod_rewrite
 * Apache的跳转规则
 * or (preferred):
 * Apache的跳转规则
 * 如果使用Lighttpd，下面的跳转规则是有效的：
 * Lighttpd的跳转规则
 * "/index.php?$1",
 * ".*\.(js|ico|gif|jpg|png|css|html)$" => "$0",
 * "" => "/index.php"
 * )
 * 如果使用Nginx，下面的跳转规则是有效的：
 * Nginx的跳转规则
 * 
 * 
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
final class Yaf_Router {

    protected $_routes;
    
    protected $_current;
    

    /**
     * Yaf_Router constructor
     */
    public function __construct() {}
    
    /**
     * 往Router中添加新的路由
     *
     * @param string $name 
     * @param Yaf_Route_Abstract $route 
     *
     * @return Yaf_Router
     */
    public function addRoute() {}
    
    /**
     * 向Router中添加配置文件中定义的路由
     *
     * @param Yaf_Config_Abstract $config 
     *
     * @return void
     */
    public function addConfig() {}
    
    /**
     * The route purpose
     *
     * @param Yaf_Request_Abstract $request 
     *
     * @return bool
     */
    public function route() {}
    
    /**
     * The getRoute purpose
     *
     * @param string $name 
     *
     * @return void
     */
    public function getRoute() {}
    
    /**
     * The getRoutes purpose
     *
     * @return void
     */
    public function getRoutes() {}
    
    /**
     * 取得当前有效的路由名
     *
     * @return string
     */
    public function getCurrentRoute() {}
    
}
