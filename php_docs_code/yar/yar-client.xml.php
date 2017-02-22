<?php
/**
 * @package yar
 * @author Leelmes <i@chengxuan.li> (DOC Only)
 */
class Yar_Client {

    protected $_protocol;

    protected $_uri;

    protected $_options;

    protected $_running;

    /**
     * 创建一个客户端实例
     *
     * @param string $url 服务端的HTTP URL路径.
     */
    final public function __construct($url) {}

    /**
     * 调用远程服务
     *
     * @param string $method 远程服务的名字.
     * @param array $parameters 调用参数.
     *
     * @return void
     */
    public function __call($method, $parameters) {}

    /**
     * 设置调用的配置
     *
     * @param number $name 可以是: YAR_OPT_PACKAGER, YAR_OPT_PERSISTENT (需要服务端支持keepalive), YAR_OPT_TIMEOUT, YAR_OPT_CONNECT_TIMEOUT
     * @param mixed $value 
     *
     * @return boolean
     */
    public function setOpt($name, $value) {}


}