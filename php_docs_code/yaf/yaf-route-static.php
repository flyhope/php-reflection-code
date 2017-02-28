<?php
/**
 * Yaf_Route_Static Document
 *
 * 默认的，Yaf_Router 只有一个Yaf_Route_Static 作为它默认的路由
 * Yaf_Route_Static 旨在处理80%的要求。
 * 请注意：实例化 Yaf_Route_Static 是没有必要的，也没必要将它加入Yaf_Router的路由堆栈，因为在Yaf_Router的路由堆栈中总是存在它的一个实例，并且总是在最后被调用。
 * 
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
class Yaf_Route_Static implements Yaf_Route_Interface {


    /**
     * The match purpose
     *
     * @param string $uri 
     *
     * @return void
     */
    public function match($uri) {}
    
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
