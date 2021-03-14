<?php
/**
 * Yaf_Session Document
 *
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
abstract final class Yaf_Session implements Iterator,Traversable,ArrayAccess,Countable {


    /**
     * The __construct purpose
     */
    private function __construct() {}
    
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
    
    /**
     * The current purpose
     *
     * @return void
     */
    abstract public function current();
    
    /**
     * The next purpose
     *
     * @return void
     */
    abstract public function next();
    
    /**
     * The key purpose
     *
     * @return void
     */
    abstract public function key();
    
    /**
     * The valid purpose
     *
     * @return void
     */
    abstract public function valid();
    
    /**
     * The rewind purpose
     *
     * @return void
     */
    abstract public function rewind();
    
}
