<?php
/**
 * Yaf_View_Simple Document
 *
 * Yaf_View_Simple 这是Yaf内建的一个模板引擎，是个简单而快速的模板引擎，只支持PHP脚本
 * 
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
class Yaf_View_Simple implements Yaf_View_Interface {

    protected $_tpl_vars;
    
    protected $_tpl_dir;
    
    protected $_options;
    

    /**
     * Constructor of Yaf_View_Simple
     *
     * @param string $tempalte_dir 模板的基本路劲，默认为APPLICATOIN . "/views"
     * @param array $options 
     */
    public function __construct($template_dir, $options = null) {}
    
    /**
     * The __isset purpose
     *
     * @param string $name 
     *
     * @return void
     */
    public function __isset($name) {}
    
    public function get($name = null) {}
    
    /**
     * 为视图引擎分配一个模板变量
     *
     * @param string $name 字符串或者数组 如果为字符串, 则$value不能为空
     * @param mixed $value mixed value
     *
     * @return bool
     */
    public function assign($name, $value = null) {}
    
    /**
     * 渲染模板
     *
     * @param string $tpl 
     * @param array $tpl_vars 
     *
     * @return string
     */
    public function render($tpl, $tpl_vars = null) {}
    
    /**
     * 渲染模板
     *
     * @param string $tpl_content string template
     * @param array $tpl_vars 
     *
     * @return string
     */
    public function eval($tpl_str, $vars = null) {}
    
    /**
     * 渲染一个视图模板, 并直接输出给请求端
     *
     * @param string $tpl 
     * @param array $tpl_vars 
     *
     * @return bool
     */
    public function display($tpl, $tpl_vars = null) {}
    
    /**
     * The assignRef purpose
     *
     * @param string $name 一个字符串的名字，被用来传递值给模板。
     * @param mixed $value mixed value
     *
     * @return bool
     */
    public function assignRef($name, & $value) {}
    
    /**
     * Clear Assigned values
     *
     * @param string $name 分派的变量名 如果为空，将会清除所有的变量
     *
     * @return bool
     */
    public function clear($name = null) {}
    
    /**
     * 设置模板的目录
     *
     * @param string $template_dir 
     *
     * @return bool
     */
    public function setScriptPath($template_dir) {}
    
    /**
     * 获取模板目录
     *
     * @return string
     */
    public function getScriptPath() {}
    
    /**
     * 获取视图引擎的一个模板变量值
     *
     * @param string $name 分配的变量名 如果为空，所有传递的变量都会被返回
     *
     * @return void
     */
    public function __get($name = null) {}
    
    /**
     * 为视图引擎分配一个模板变量
     *
     * @param string $name 一个字符串值的名字
     * @param mixed $value Mixed value.
     *
     * @return void
     */
    public function __set($name, $value = null) {}
    
}
