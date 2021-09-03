<?php
/**
 * Yaf_Route_Supervar Document
 *
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
final class Yaf_Route_Supervar implements Yaf_Route_Interface {

    protected $_var_name;
    

    /**
     * The __construct purpose
     *
     * @param string $supervar_name 键名
     */
    public function __construct($supervar_name) {}
    
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
     * @param array $info 需要传入一个数组，数组中每个key可为:m、:c、:a，:m代表module，:c代表controller, :a代表action
     * @param array $query 用户自定义的query string，将根据此路由规则拼接在url中
     *
     * @return string
     */
    public function assemble($info, $query = null) {}
    
}
