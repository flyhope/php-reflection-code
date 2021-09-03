<?php
/**
 * Yaf_Config_Simple Document
 *
 * Yaf_Config_Simple 是 Yad_Config_ini 的简洁版本，只允许传入数组进行初始化，并提供了设置readonly的参数。
 * 
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
final class Yaf_Config_Simple extends Yaf_Config_Abstract implements Iterator,Traversable,ArrayAccess,Countable {

    protected $_config;
    
    protected $_readonly = false;
    

    /**
     * 构造函数
     *
     * @param string $config_file 
     * @param string $section 
     */
    public function __construct($config_file, $section = null) {}
    
    /**
     * 检查节点是否存在
     *
     * @param string $name 
     *
     * @return void
     */
    public function __isset($name) {}
    
    public function get($name = null) {}
    
    public function set($name, $value) {}
    
    /**
     * 返回配置的节数量
     *
     * @return void
     */
    public function count() {}
    
    /**
     * 复位一个偏移位置的值
     *
     * @param string $name 
     *
     * @return void
     */
    public function offsetUnset($name) {}
    
    /**
     * 检查当前位置是否有效
     *
     * @return void
     */
    public function rewind() {}
    
    /**
     * 返回当前节点
     *
     * @return void
     */
    public function current() {}
    
    /**
     * 向前移动到下一个元素
     *
     * @return void
     */
    public function next() {}
    
    /**
     * 检查迭代器是否有效
     *
     * @return void
     */
    public function valid() {}
    
    /**
     * 返回当前元素的键
     *
     * @return void
     */
    public function key() {}
    
    /**
     * 检查配置是否只读
     *
     * @return void
     */
    public function readonly() {}
    
    /**
     * 转换为数组的格式
     *
     * @return void
     */
    public function toArray() {}
    
    /**
     * 设置节点配置
     *
     * @param string $name 
     * @param string $value 
     *
     * @return void
     */
    public function __set($name, $value) {}
    
    /**
     * 读取节点配置
     *
     * @param string $name 
     *
     * @return void
     */
    public function __get($name = null) {}
    
    /**
     * 获取一个偏移位置的值
     *
     * @param string $name 
     *
     * @return void
     */
    public function offsetGet($name) {}
    
    /**
     * 检查一个偏移位置是否存在
     *
     * @param string $name 
     *
     * @return void
     */
    public function offsetExists($name) {}
    
    /**
     * 设置一个偏移位置的值
     *
     * @param string $name 
     * @param string $value 
     *
     * @return void
     */
    public function offsetSet($name, $value) {}
    
}
