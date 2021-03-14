<?php
/**
 * Yaf_Request_Abstract Document
 *
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
abstract class Yaf_Request_Abstract {

    const SCHEME_HTTP = 'http';
    const SCHEME_HTTPS = 'https';

    /**
     * The isGet purpose
     *
     * @return void
     */
    public function isGet() {}
    
    /**
     * The isPost purpose
     *
     * @return void
     */
    public function isPost() {}
    
    public function isDelete() {}
    
    public function isPatch() {}
    
    /**
     * The isPut purpose
     *
     * @return void
     */
    public function isPut() {}
    
    /**
     * The isHead purpose
     *
     * @return void
     */
    public function isHead() {}
    
    /**
     * The isOptions purpose
     *
     * @return void
     */
    public function isOptions() {}
    
    /**
     * The isCli purpose
     *
     * @return void
     */
    public function isCli() {}
    
    /**
     * The isXmlHttpRequest purpose
     *
     * @return void
     */
    public function isXmlHttpRequest() {}
    
    public function getQuery($name = null, $default = null) {}
    
    public function getRequest($name = null, $default = null) {}
    
    public function getPost($name = null, $default = null) {}
    
    public function getCookie($name = null, $default = null) {}
    
    public function getRaw() {}
    
    public function getFiles($name = null, $default = null) {}
    
    public function get($name = null, $default = null) {}
    
    /**
     * 返回SERVER变量的值
     *
     * @param string $name the variable name
     * @param string $default 如果提供这个参数，在没找到变量值时候此参数的值将被返回
     *
     * @return void
     */
    public function getServer($name = null, $default = null) {}
    
    /**
     * 取得ENV变量的值
     *
     * @param string $name the variable name
     * @param string $default 如果这个参数被提供了，当参数找不到的时候它将被返回
     *
     * @return void
     */
    public function getEnv($name = null, $default = null) {}
    
    /**
     * The setParam purpose
     *
     * @param string $name 
     * @param string $value 
     *
     * @return void
     */
    public function setParam($name, $value = null) {}
    
    /**
     * The getParam purpose
     *
     * @param string $name 
     * @param string $default 
     *
     * @return void
     */
    public function getParam($name = null, $default = null) {}
    
    /**
     * The getParams purpose
     *
     * @return void
     */
    public function getParams() {}
    
    public function clearParams() {}
    
    /**
     * The getException purpose
     *
     * @return void
     */
    public function getException() {}
    
    /**
     * The getModuleName purpose
     *
     * @return void
     */
    public function getModuleName() {}
    
    /**
     * The getControllerName purpose
     *
     * @return void
     */
    public function getControllerName() {}
    
    /**
     * The getActionName purpose
     *
     * @return void
     */
    public function getActionName() {}
    
    /**
     * The setModuleName purpose
     *
     * @param string $module 
     *
     * @return void
     */
    public function setModuleName($module, $format_name = null) {}
    
    /**
     * The setControllerName purpose
     *
     * @param string $controller 
     *
     * @return void
     */
    public function setControllerName($controller, $format_name = null) {}
    
    /**
     * The setActionName purpose
     *
     * @param string $action 
     *
     * @return void
     */
    public function setActionName($action, $format_name = null) {}
    
    /**
     * The getMethod purpose
     *
     * @return void
     */
    public function getMethod() {}
    
    /**
     * The getLanguage purpose
     *
     * @return void
     */
    public function getLanguage() {}
    
    /**
     * The setBaseUri purpose
     *
     * @param string $uir 
     *
     * @return void
     */
    public function setBaseUri($uri) {}
    
    /**
     * The getBaseUri purpose
     *
     * @return void
     */
    public function getBaseUri() {}
    
    /**
     * The getRequestUri purpose
     *
     * @return void
     */
    public function getRequestUri() {}
    
    /**
     * The setRequestUri purpose
     *
     * @param string $uir 
     *
     * @return void
     */
    public function setRequestUri($uri) {}
    
    /**
     * The isDispatched purpose
     *
     * @return void
     */
    public function isDispatched() {}
    
    /**
     * The setDispatched purpose
     *
     * @return void
     */
    public function setDispatched($dispatched) {}
    
    /**
     * The isRouted purpose
     *
     * @return void
     */
    public function isRouted() {}
    
    /**
     * The setRouted purpose
     *
     * @param string $flag 
     *
     * @return void
     */
    public function setRouted($flag) {}
    
}
