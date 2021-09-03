<?php
/**
 * Yaf_Config_Ini Document
 *
 * Yaf_Config_Ini允许开发者通过嵌套的对象属性语法在应用程序中用熟悉的INI格式存储和读取配置数据。
 * INI格式在提供拥有配置数据键的等级结构和配置数据节之间的继承能力方面具有专长。
 * 配置数据等级结构通过用点或者句号(.)分离键值。
 * 一个节可以扩展或者通过在节的名称之后带一个冒号(:)和被继承的配置数据的节的名称来从另一个节继承。
 * Yaf_Config_Ini利用PHP的函数parse_ini_file()来解析配置文件的。
 * 请仔细查看这个函数的文档，注意它的一些特殊用途。以及它传递给Yaf_Config_Ini的一些比如
 * "TRUE", "FALSE","yes", "no", 和"NULL"的特殊值的处理方式
 * 
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
final class Yaf_Config_Ini extends Yaf_Config_Abstract implements Iterator,Traversable,ArrayAccess,Countable {

    protected $_config;
    
    protected $_readonly = true;
    

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
     * 转换为数组的格式
     *
     * @return void
     */
    public function toArray() {}
    
    /**
     * 检查配置是否只读
     *
     * @return void
     */
    public function readonly() {}
    
    /**
     * 复位一个偏移位置的值
     *
     * @param string $name 
     *
     * @return void
     */
    public function offsetUnset($name) {}
    
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
    
    /**
     * 读取节点配置
     *
     * @param string $name 
     *
     * @return void
     */
    public function __get($name = null) {}
    
    /**
     * The __set purpose
     *
     * @param string $name 
     * @param mixed $value 
     *
     * @return void
     */
    public function __set($name, $value) {}
    
}
