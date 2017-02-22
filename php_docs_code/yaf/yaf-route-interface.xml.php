<?php
/**
 * Yaf_Route_Interface是Yaf路由协议的标准接口, 它的存在使得用户可以自定义路由协议
 * 
 * @package yaf
 * @author Leelmes <i@chengxuan.li> (DOC Only)
 */
abstract class Yaf_Route_Interface {
    /**
     * 将指定路由规则组合成一个url
     *
     * @param array $info 
     * @param array $query 
     *
     * @return string
     */
    abstract public function assemble($info, $query = null) ;

    /**
     * route a request
     *
     * @param Yaf_Request_Abstract $request A Yaf_Request_Abstract instance.
     *
     * @return bool
     */
    abstract public function route($request) ;


}