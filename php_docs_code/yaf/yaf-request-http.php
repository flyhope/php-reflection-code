<?php
/**
 * Yaf_Request_Http Document
 *
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
class Yaf_Request_Http extends Yaf_Request_Abstract {


    /**
     * The __construct purpose
     */
    public function __construct($request_uri = null, $base_uri = null) {}
    
    public function isGet() {}
    
    public function isPost() {}
    
    public function isDelete() {}
    
    public function isPatch() {}
    
    public function isPut() {}
    
    public function isHead() {}
    
    public function isOptions() {}
    
    public function isCli() {}
    
    /**
     * 是否为Ajax请求
     *
     * @return bool
     */
    public function isXmlHttpRequest() {}
    
    /**
     * fetch a query parameter
     *
     * @param string $name the variable name
     * @param string $default 如果提供了此参数，当变量在未被找到的情况下，提供的参数将被返回
     *
     * @return mixed
     */
    public function getQuery($name = null, $default = null) {}
    
    /**
     * The getRequest purpose
     *
     * @return void
     */
    public function getRequest($name = null, $default = null) {}
    
    /**
     * 返回POST变量
     *
     * @param string $name the variable name
     * @param string $default 如果提供了此参数，当变量在未被找到的情况下，提供的参数将被返回
     *
     * @return mixed
     */
    public function getPost($name = null, $default = null) {}
    
    /**
     * 返回Cookie变量
     *
     * @param string $name the cookie name
     * @param string $default 如果提供了此参数，当变量在未被找到的情况下，提供的参数将被返回
     *
     * @return mixed
     */
    public function getCookie($name = null, $default = null) {}
    
    public function getRaw() {}
    
    /**
     * The getFiles purpose
     *
     * @return void
     */
    public function getFiles($name = null, $default = null) {}
    
    /**
     * 从客户端返回变量
     *
     * @param string $name the variable name
     * @param string $default 如果提供了此参数，当变量在未被找到的情况下，它将被返回
     *
     * @return mixed
     */
    public function get($name = null, $default = null) {}
    
    public function getServer($name = null, $default = null) {}
    
    public function getEnv($name = null, $default = null) {}
    
    public function setParam($name, $value = null) {}
    
    public function getParam($name = null, $default = null) {}
    
    public function getParams() {}
    
    public function clearParams() {}
    
    public function getException() {}
    
    public function getModuleName() {}
    
    public function getControllerName() {}
    
    public function getActionName() {}
    
    public function setModuleName($module, $format_name = null) {}
    
    public function setControllerName($controller, $format_name = null) {}
    
    public function setActionName($action, $format_name = null) {}
    
    public function getMethod() {}
    
    public function getLanguage() {}
    
    public function setBaseUri($uri) {}
    
    public function getBaseUri() {}
    
    public function getRequestUri() {}
    
    public function setRequestUri($uri) {}
    
    public function isDispatched() {}
    
    public function setDispatched($dispatched) {}
    
    public function isRouted() {}
    
    public function setRouted($flag) {}
    
}
