<?php
/**
 * Yaf_Dispatcher Document
 *
 * Yaf_Dispatcher用于初始化处理请求的运行环境,
 * 它协调路由来的请求, 并分发和执行发现的动作,
 * 然后收集动作产生的响应, 输出响应给请求者, 并在整个过程完成以后返回响应.
 * Yaf_Dispatcher是单例模式运行的,
 * 也就是说自始至终只生成一个Yaf_Dispatcher实例,
 * 因此, 可以把它看成是在分发过程中生成的对象的注册表, 可以从中获取到分发过程中产生的对象.
 * 
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
final class Yaf_Dispatcher {


    /**
     * Yaf_Dispatcher 构造函数
     */
    private function __construct() {}
    
    /**
     * 开启自动渲染
     *
     * @return Yaf_Dispatcher
     */
    public function enableView() {}
    
    /**
     * 关闭自动渲染
     *
     * @return bool
     */
    public function disableView() {}
    
    /**
     * 初始化视图引擎并返回它
     *
     * @param string $templates_dir 
     * @param array $options 
     *
     * @return Yaf_View_Interface
     */
    public function initView($templates_dir, $options = null) {}
    
    /**
     * 设置视图引擎
     *
     * @param Yaf_View_Interface $view A Yaf_View_Interface instance
     *
     * @return Yaf_Dispatcher
     */
    public function setView($view) {}
    
    /**
     * The setRequest purpose
     *
     * @param Yaf_Request_Abstract $request 
     *
     * @return Yaf_Dispatcher
     */
    public function setRequest($request) {}
    
    public function setResponse($response) {}
    
    /**
     * 获取当前的Yaf_Application实例
     *
     * @return Yaf_Application
     */
    public function getApplication() {}
    
    /**
     * 获取路由器
     *
     * @return Yaf_Router
     */
    public function getRouter() {}
    
    public function getResponse() {}
    
    /**
     * 获取当前的请求实例
     *
     * @return Yaf_Request_Abstract
     */
    public function getRequest() {}
    
    public function getDefaultModule() {}
    
    public function getDefaultController() {}
    
    public function getDefaultAction() {}
    
    /**
     * 设置错误处理函数
     *
     * @param call $callback 错误处理的回调函数
     * @param int $error_types 
     *
     * @return Yaf_Dispatcher
     */
    public function setErrorHandler($callback, $error_types = null) {}
    
    /**
     * 设置路由的默认模块
     *
     * @param string $module 
     *
     * @return Yaf_Dispatcher
     */
    public function setDefaultModule($module) {}
    
    /**
     * 设置路由的默认控制器
     *
     * @param string $controller 
     *
     * @return Yaf_Dispatcher
     */
    public function setDefaultController($controller) {}
    
    /**
     * 设置路由的默认动作
     *
     * @param string $action 
     *
     * @return Yaf_Dispatcher
     */
    public function setDefaultAction($action) {}
    
    /**
     * The returnResponse purpose
     *
     * @param bool $flag 
     *
     * @return Yaf_Dispatcher
     */
    public function returnResponse($flag) {}
    
    /**
     * 开启/关闭自动渲染功能
     *
     * @param bool $flag bool
     *
     * @return Yaf_Dispatcher
     */
    public function autoRender($flag = null) {}
    
    /**
     * 打开关闭自动响应
     *
     * @param bool $flag 
     *
     * @return Yaf_Dispatcher
     */
    public function flushInstantly($flag = null) {}
    
    /**
     * 获取当前的Yaf_Dispatcher实例
     *
     * @return Yaf_Dispatcher
     */
    static public function getInstance() {}
    
    /**
     * 分发请求
     *
     * @param Yaf_Request_Abstract $request 
     *
     * @return Yaf_Response_Abstract
     */
    public function dispatch($request) {}
    
    /**
     * 开启/关闭异常抛出
     *
     * @param bool $flag bool
     *
     * @return Yaf_Dispatcher
     */
    public function throwException($flag = null) {}
    
    /**
     * 开启/关闭自动异常捕获功能
     *
     * @param bool $flag bool
     *
     * @return Yaf_Dispatcher
     */
    public function catchException($flag = null) {}
    
    /**
     * 注册一个插件
     *
     * @param Yaf_Plugin_Abstract $plugin 
     *
     * @return Yaf_Dispatcher
     */
    public function registerPlugin($plugin) {}
    
}
