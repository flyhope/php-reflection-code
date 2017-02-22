<?php
/**
 * @package yaf
 * @author Leelmes <i@chengxuan.li> (DOC Only)
 */
abstract class Yaf_Config_Abstract {

    protected $_config;

    protected $_readonly;

    /**
     * 转换为数组
     *
     * @return array
     */
    abstract public function toArray() ;

    /**
     * 寻找只读配置
     *
     * @return bool
     */
    abstract public function readonly() ;

    /**
     * Getter
     *
     * @param string $name 
     * @param mixed $value 
     *
     * @return mixed
     */
    abstract public function get($name, $value) ;

    /**
     * Setter
     *
     * @return Yaf_Config_Abstract
     */
    abstract public function set() ;


}