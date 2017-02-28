<?php
/**
 * Yaf_Session Document
 *
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
final class Yaf_Session implements Iterator,Traversable,ArrayAccess,Countable {

    protected static $_instance;
    
    protected $_session;
    
    protected $_started = false;
    

    /**
     * The __construct purpose
     */
    private function __construct() {}
    
    /**
     * The __clone purpose
     *
     * @return void
     */
    private function __clone() {}
    
    /**
     * The __sleep purpose
     *
     * @return void
     */
    private function __sleep() {}
    
    /**
     * The __wakeup purpose
     *
     * @return void
     */
    private function __wakeup() {}
    
    /**
     * The getInstance purpose
     *
     * @return void
     */
    static public function getInstance() {}
    
    /**
     * The start purpose
     *
     * @return void
     */
    public function start() {}
    
    public function get($name) {}
    
    /**
     * The has purpose
     *
     * @param string $name 
     *
     * @return void
     */
    public function has($name) {}
    
    public function set($name, $value) {}
    
    /**
     * The del purpose
     *
     * @param string $name 
     *
     * @return void
     */
    public function del($name) {}
    
    /**
     * The count purpose
     *
     * @return void
     */
    public function count() {}
    
    /**
     * The rewind purpose
     *
     * @return void
     */
    public function rewind() {}
    
    /**
     * The next purpose
     *
     * @return void
     */
    public function next() {}
    
    /**
     * The current purpose
     *
     * @return void
     */
    public function current() {}
    
    /**
     * The key purpose
     *
     * @return void
     */
    public function key() {}
    
    /**
     * The valid purpose
     *
     * @return void
     */
    public function valid() {}
    
    public function clear() {}
    
    /**
     * The offsetGet purpose
     *
     * @param string $name 
     *
     * @return void
     */
    public function offsetGet($name) {}
    
    /**
     * The offsetSet purpose
     *
     * @param string $name 
     * @param string $value 
     *
     * @return void
     */
    public function offsetSet($name, $value) {}
    
    /**
     * The offsetExists purpose
     *
     * @param string $name 
     *
     * @return void
     */
    public function offsetExists($name) {}
    
    /**
     * The offsetUnset purpose
     *
     * @param string $name 
     *
     * @return void
     */
    public function offsetUnset($name) {}
    
    /**
     * The __get purpose
     *
     * @param string $name 
     *
     * @return void
     */
    public function __get($name) {}
    
    /**
     * The __isset purpose
     *
     * @param string $name 
     *
     * @return void
     */
    public function __isset($name) {}
    
    /**
     * The __set purpose
     *
     * @param string $name 
     * @param string $value 
     *
     * @return void
     */
    public function __set($name, $value) {}
    
    /**
     * The __unset purpose
     *
     * @param string $name 
     *
     * @return void
     */
    public function __unset($name) {}
    
}
