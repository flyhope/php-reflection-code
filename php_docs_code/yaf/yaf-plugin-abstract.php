<?php
/**
 * Yaf_Plugin_Abstract Document
 *
 * Plugins 可以让你轻松地定制和扩展框架
 * 插件(Plugins)是一个类。
 * 基于组件定义的类会有所变化 -- 你可能需要去实现这些接口。
 * 但实际上，该插件(Plugin)本身就是一个类。
 * 一个插件(plugin)会被Yaf_Dispatcher::registerPlugin加载到Yaf框架中，
 * 在框架注册(registerd)后，插件(plugin)类中定义方法将会在恰当的时间被该接口执行。
 * 
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
abstract class Yaf_Plugin_Abstract {


    /**
     * RouterStartup hook
     *
     * @param Yaf_Request_Abstract $request 
     * @param Yaf_Response_Abstract $response 
     *
     * @return void
     */
    public function routerStartup($request, $response) {}
    
    /**
     * The routerShutdown purpose
     *
     * @param Yaf_Request_Abstract $request 
     * @param Yaf_Response_Abstract $response 
     *
     * @return void
     */
    public function routerShutdown($request, $response) {}
    
    /**
     * The dispatchLoopStartup purpose
     *
     * @param Yaf_Request_Abstract $request 
     * @param Yaf_Response_Abstract $response 
     *
     * @return void
     */
    public function dispatchLoopStartup($request, $response) {}
    
    /**
     * The dispatchLoopShutdown purpose
     *
     * @param Yaf_Request_Abstract $request 
     * @param Yaf_Response_Abstract $response 
     *
     * @return void
     */
    public function dispatchLoopShutdown($request, $response) {}
    
    /**
     * The preDispatch purpose
     *
     * @param Yaf_Request_Abstract $request 
     * @param Yaf_Response_Abstract $response 
     *
     * @return void
     */
    public function preDispatch($request, $response) {}
    
    /**
     * The postDispatch purpose
     *
     * @param Yaf_Request_Abstract $request 
     * @param Yaf_Response_Abstract $response 
     *
     * @return void
     */
    public function postDispatch($request, $response) {}
    
    /**
     * The preResponse purpose
     *
     * @param Yaf_Request_Abstract $request 
     * @param Yaf_Response_Abstract $response 
     *
     * @return void
     */
    public function preResponse($request, $response) {}
    
}
