<?php
/**
 * Yaf_Route_Rewrite Document
 *
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
final class Yaf_Route_Rewrite implements Yaf_Route_Interface {

    protected $_route;
    
    protected $_default;
    
    protected $_verify;
    

    /**
     * The __construct purpose
     *
     * @param string $match 一个类似正则表达式，会被用来匹配一个请求的uri，如果匹配失败，Yaf_Route_Rewrite 会返回FALSE。
     * @param array $route 当路由正则匹配成功请求uri时，Yaf_Route_Rewrite 将会用它来决定哪一个m/c/a被路由。 在这个数组中无论是m/c/a都是最优的，如果你没有提供一个明确的值，它将会以默认方式被路由。
     * @param array $verify 
     */
    public function __construct($match, $route, $verify = null) {}
    
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
     * @param array $info 需要传入一个数组，数组中每个key必须和初始化rewrite route时$match参数中的带冒号的参数名一致
     * @param array $query 用户自定义的query string，将根据此路由规则拼接在url中
     *
     * @return string
     */
    public function assemble($info, $query = null) {}
    
}
