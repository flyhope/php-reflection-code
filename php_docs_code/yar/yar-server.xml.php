<?php
/**
 * @package yar
 * @author Leelmes <i@chengxuan.li> (DOC Only)
 */
class Yar_Server {

    protected $_executor;

    /**
     * 创建一个HTTP RPC Server
     *
     * @param Object $obj 一个对象实例, 这个对象的所有公开方法都会被注册为服务函数.
     */
    final public function __construct($obj) {}

    /**
     * 启动HTTP RPC Server
     *
     * @return boolean
     */
    public function handle() {}


}