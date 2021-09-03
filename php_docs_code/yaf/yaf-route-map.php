<?php
/**
 * Yaf_Route_Map Document
 *
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
final class Yaf_Route_Map implements Yaf_Route_Interface {

    protected $_ctl_router = false;
    
    protected $_delimiter;
    

    /**
     * The __construct purpose
     *
     * @param string $controller_prefer 结果是否应该考虑作为controller或action
     * @param string $delimiter 
     */
    public function __construct($controller_prefer = false, $delimiter = '') {}
    
    /**
     * The route purpose
     *
     * @param Yaf_Request_Abstract $request 
     *
     * @return bool
     */
    public function route($request) {}
    
    /**
     * 组合url
     *
     * @param array $info 需要传入一个数组，数组的key可以为:a或者:c，:a表示action，:c表示controller。 当map route初始化时，controller_prefer为false时，这个参数需要传入:c。当controller_prefer 为true时，这个参数需要传入:a。
     * @param array $query 用户自定义的query string，将根据此路由规则拼接在url中
     *
     * @return string
     */
    public function assemble($info, $query = null) {}
    
}
