<?php
/**
 * Yaf_Request_Simple Document
 *
 * Yaf_Request_Simple 特别的被用于测试。例如：CLI模式下模拟一些特殊的要求
 * 
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
final class Yaf_Request_Simple extends Yaf_Request_Abstract {

    const SCHEME_HTTP = 'http';
    const SCHEME_HTTPS = 'https';
    public $module;
    
    public $controller;
    
    public $action;
    
    public $method;
    
    protected $params;
    
    protected $language;
    
    protected $_exception;
    
    protected $_base_uri = '';
    
    protected $uri = '';
    
    protected $dispatched = false;
    
    protected $routed = false;
    

    /**
     * The __construct purpose
     */
    public function __construct() {}
    
    /**
     * The __clone purpose
     *
     * @return void
     */
    private function __clone() {}
    
    /**
     * The getQuery purpose
     *
     * @return void
     */
    public function getQuery() {}
    
    /**
     * The getRequest purpose
     *
     * @return void
     */
    public function getRequest() {}
    
    /**
     * The getPost purpose
     *
     * @return void
     */
    public function getPost() {}
    
    /**
     * The getCookie purpose
     *
     * @return void
     */
    public function getCookie() {}
    
    /**
     * The getFiles purpose
     *
     * @return void
     */
    public function getFiles() {}
    
    /**
     * The get purpose
     *
     * @return void
     */
    public function get() {}
    
    /**
     * The isXmlHttpRequest purpose
     *
     * @return void
     */
    public function isXmlHttpRequest() {}
    
    public function isGet() {}
    
    public function isPost() {}
    
    public function isPut() {}
    
    public function isHead() {}
    
    public function isOptions() {}
    
    public function isCli() {}
    
    public function getServer($name, $default = null) {}
    
    public function getEnv($name, $default = null) {}
    
    public function setParam($name, $value = null) {}
    
    public function getParam($name, $default = null) {}
    
    public function getParams() {}
    
    public function getException() {}
    
    public function getModuleName() {}
    
    public function getControllerName() {}
    
    public function getActionName() {}
    
    public function setModuleName($module) {}
    
    public function setControllerName($controller) {}
    
    public function setActionName($action) {}
    
    public function getMethod() {}
    
    public function getLanguage() {}
    
    public function setBaseUri($uri) {}
    
    public function getBaseUri() {}
    
    public function getRequestUri() {}
    
    public function setRequestUri($uri) {}
    
    public function isDispatched() {}
    
    public function setDispatched() {}
    
    public function isRouted() {}
    
    public function setRouted($flag = null) {}
    
}
