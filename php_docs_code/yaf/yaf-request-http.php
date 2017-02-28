<?php
/**
 * Yaf_Request_Http Document
 *
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
class Yaf_Request_Http extends Yaf_Request_Abstract {

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
     * fetch a query parameter
     *
     * @param string $name the variable name
     * @param string $default 如果提供了此参数，当变量在未被找到的情况下，提供的参数将被返回
     *
     * @return mixed
     */
    public function getQuery() {}
    
    /**
     * The getRequest purpose
     *
     * @return void
     */
    public function getRequest() {}
    
    /**
     * 返回POST变量
     *
     * @param string $name the variable name
     * @param string $default 如果提供了此参数，当变量在未被找到的情况下，提供的参数将被返回
     *
     * @return mixed
     */
    public function getPost() {}
    
    /**
     * 返回Cookie变量
     *
     * @param string $name the cookie name
     * @param string $default 如果提供了此参数，当变量在未被找到的情况下，提供的参数将被返回
     *
     * @return mixed
     */
    public function getCookie() {}
    
    /**
     * The getFiles purpose
     *
     * @return void
     */
    public function getFiles() {}
    
    /**
     * 从客户端返回变量
     *
     * @param string $name the variable name
     * @param string $default 如果提供了此参数，当变量在未被找到的情况下，它将被返回
     *
     * @return mixed
     */
    public function get() {}
    
    /**
     * 是否为Ajax请求
     *
     * @return bool
     */
    public function isXmlHttpRequest() {}
    
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
