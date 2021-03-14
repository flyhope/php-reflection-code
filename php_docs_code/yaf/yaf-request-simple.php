<?php
/**
 * Yaf_Request_Simple Document
 *
 * Yaf_Request_Simple 特别的被用于测试。例如：CLI模式下模拟一些特殊的要求
 * 
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
class Yaf_Request_Simple extends Yaf_Request_Abstract {

    const SCHEME_HTTP = 'http';
    const SCHEME_HTTPS = 'https';

    /**
     * The __construct purpose
     */
    public function __construct($method = null, $module = null, $controller = null, $action = null, $params = null) {}
    
    /**
     * The isXmlHttpRequest purpose
     *
     * @return void
     */
    public function isXmlHttpRequest() {}
    
    public function isGet() {}
    
    public function isPost() {}
    
    public function isDelete() {}
    
    public function isPatch() {}
    
    public function isPut() {}
    
    public function isHead() {}
    
    public function isOptions() {}
    
    public function isCli() {}
    
    /**
     * The getQuery purpose
     *
     * @return void
     */
    public function getQuery($name = null, $default = null) {}
    
    /**
     * The getRequest purpose
     *
     * @return void
     */
    public function getRequest($name = null, $default = null) {}
    
    /**
     * The getPost purpose
     *
     * @return void
     */
    public function getPost($name = null, $default = null) {}
    
    /**
     * The getCookie purpose
     *
     * @return void
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
     * The get purpose
     *
     * @return void
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
