<?php
/**
 * Yaf_Route_Regex Document
 *
 * Yaf_Route_Regex 是Yaf内置的路由中最灵活的。
 * 
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
final class Yaf_Route_Regex implements Yaf_Route_Interface {

    protected $_route;
    
    protected $_default;
    
    protected $_maps;
    
    protected $_verify;
    
    protected $_reverse;
    

    /**
     * The __construct purpose
     *
     * @param string $match 一个完整的正则表达式，用来匹配一个请求的uri，如果不能匹配，Yaf_Route_Regex 将返回FALSE。
     * @param array $route 当路由正则匹配成功请求uri时，Yaf_Route_Regex将会用它来决定哪一个m/c/a被路由。 在这个数组中无论是m/c/a都是最优的，如果你没有提供一个明确的值，它将会以默认方式被路由。 另外, 你也可以使用map的结果作为m/c/a的结果.
     * @param array $map 将匹配到的结果捕捉放到一个已经命名好的数组中。
     * @param array $verify 
     */
    public function __construct($match, $route, $map = null, $verify = null, $reverse = null) {}
    
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
     * @param array $info 需要传入一个数组，数组的key可以为:a、:c、:m，:a表示action，:c表示controller，:m表示module。
     * @param array $query 用户自定义的query string，将根据此路由规则拼接在url中
     *
     * @return string
     */
    public function assemble($info, $query = null) {}
    
}
