<?php
/**
 * Yaf_View_Interface Document
 *
 * Yaf给用户提供一个了一个可扩展的、可自定的视图引擎接口，用户可以使用自己的视图引擎来代替Yaf内置的Yaf_View_Simple。下面是一个关于怎么实现的例子，请看Yaf_Dispatcher::setView。
 * 
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
abstract class Yaf_View_Interface {


    /**
     * 为视图引擎分配一个模板变量
     *
     * @param string $name 
     * @param string $value 
     *
     * @return bool
     */
    abstract public function assign($name, $value = null);
    
    /**
     * 渲染一个视图模板, 并直接输出给请求端
     *
     * @param string $tpl 
     * @param array $tpl_vars 
     *
     * @return bool
     */
    abstract public function display($tpl, $tpl_vars = null);
    
    /**
     * 渲染一个视图模板
     *
     * @param string $tpl 
     * @param array $tpl_vars 
     *
     * @return string
     */
    abstract public function render($tpl, $tpl_vars = null);
    
    /**
     * The setScriptPath purpose
     *
     * @param string $template_dir 模板目录的绝对路径，默认的Yaf_Dispatcher会设置此目录为application.directory  . "/views".
     *
     * @return void
     */
    abstract public function setScriptPath($template_dir);
    
    /**
     * The getScriptPath purpose
     *
     * @return void
     */
    abstract public function getScriptPath();
    
}
