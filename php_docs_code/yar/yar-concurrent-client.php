<?php
/**
 * Yar_Concurrent_Client Document
 *
 * @package Yar 
 * @author Leelmes <i@chengxuan.li>
 */
class Yar_Concurrent_Client {

    protected static $_callstack;
    
    protected static $_callback;
    
    protected static $_error_callback;
    
    protected static $_start = false;
    

    /**
     * 注册一个并行的服务调用
     *
     * @param string $uri RPC 服务的 URI(http 或 tcp).
     * @param string $method 调用的服务名字(也就是服务方法名).
     * @param array $parameters 调用的参数.
     * @param callable $callback 回调函数, 在远程服务的返回到达的时候被Yar调用, 从而可以处理返回内容.
     *
     * @return int
     */
    static public function call($uri, $method, $parameters, $callback = null) {}
    
    /**
     * 发送所有注册的并行调用
     *
     * @param callable $callback 如果这个回掉函数被设置, 那么Yar在发送出所有的请求之后立即调用一次这个回掉函数(此时还没有任何请求返回), 调用的时候$callinfo参数是NULL. 如果在注册并行调用的时候制定了callback, 那么那个callback有更高的优先级.
     * @param callable $error_callback 错误回掉函数, 如果设置了, 那么Yar在出错的时候会调用这个回掉函数.
     *
     * @return boolean
     */
    static public function loop($callback = null, $error_callback = null) {}
    
    static public function reset() {}
    
}
