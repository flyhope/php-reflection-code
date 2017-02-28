<?php
/**
 * Yaf_Config_Abstract Document
 *
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
abstract class Yaf_Config_Abstract {

    protected $_config;
    
    protected $_readonly = true;
    

    /**
     * Getter
     *
     * @param string $name 
     * @param mixed $value 
     *
     * @return mixed
     */
    abstract public function get();
    
    /**
     * Setter
     *
     * @return Yaf_Config_Abstract
     */
    abstract public function set();
    
    /**
     * 寻找只读配置
     *
     * @return bool
     */
    abstract public function readonly();
    
    /**
     * 转换为数组
     *
     * @return array
     */
    abstract public function toArray();
    
}
