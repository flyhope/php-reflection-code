<?php
/**
 * Yaf_Registry Document
 *
 * Yaf_Registry, 对象注册表(或称对象仓库)是一个用于在整个应用空间(application space)内存储对象和值的容器. 通过把对象存储在其中,我们可以在整个项目的任何地方使用同一个对象.这种机制相当于一种全局存储. 我们可以通过Yaf_Registry类的静态方法来使用对象注册表. 另外,由于该类是一个数组对象,你可以使用数组形式来访问其中的类方法
 * 
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
final class Yaf_Registry {

    protected static $_instance;
    
    protected $_entries;
    

    /**
     * Yaf_Registry implements singleton
     */
    private function __construct() {}
    
    /**
     * The __clone purpose
     *
     * @return void
     */
    private function __clone() {}
    
    /**
     * Retrieve an item from registry
     *
     * @param string $name 
     *
     * @return mixed
     */
    static public function get($name) {}
    
    /**
     * Check whether an item exists
     *
     * @param string $name 
     *
     * @return bool
     */
    static public function has($name) {}
    
    /**
     * Add an item into registry
     *
     * @param string $name 
     * @param string $value 
     *
     * @return bool
     */
    static public function set($name, $value) {}
    
    /**
     * Remove an item from registry
     *
     * @param string $name 
     *
     * @return void
     */
    static public function del($name) {}
    
}
