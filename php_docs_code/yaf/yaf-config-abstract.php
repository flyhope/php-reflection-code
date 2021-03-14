<?php
/**
 * Yaf_Config_Abstract Document
 *
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
abstract class Yaf_Config_Abstract implements Iterator,Traversable,ArrayAccess,Countable {


    /**
     * Getter
     *
     * @param string $name 
     * @param mixed $value 
     *
     * @return mixed
     */
    public function get($name = null) {}
    
    public function count() {}
    
    /**
     * 转换为数组
     *
     * @return array
     */
    public function toArray() {}
    
    public function offsetUnset($name) {}
    
    public function rewind() {}
    
    public function current() {}
    
    public function key() {}
    
    public function next() {}
    
    public function valid() {}
    
    public function __isset($name) {}
    
    public function __get($name = null) {}
    
    public function offsetGet($name = null) {}
    
    public function offsetExists($name) {}
    
    abstract public function offsetSet($name, $value);
    
    /**
     * Setter
     *
     * @return Yaf_Config_Abstract
     */
    abstract public function set($name, $value);
    
    /**
     * 寻找只读配置
     *
     * @return bool
     */
    abstract public function readonly();
    
}
