<?php
/**
 * 在Yaf中一个action可以采用单独定义Yaf_Action_Abstract来实现。
 * 亦即，一个action方法也可以是一个Yaf_Action_Abstract的派生类
 * Yaf需要一个可以被它所调用的入口点（比如PHP 5.3，它有一个新的魔术方法__invoke，但是Yaf不只支持PHP 5.3+，
 * 所以Yaf需要另一个魔术方法来执行完成这样的任务），所以在你自己的动作类里面必须要实现抽象方法
 * Yaf_Action_Abstract::execute
 * 
 * @package yaf
 * @author Leelmes <i@chengxuan.li> (DOC Only)
 */
abstract class Yaf_Action_Abstract extends Yaf_Controller_Abstract {

    protected $_controller;

    /**
     * 得到控制器实例
     *
     * @return Yaf_Controller_Abstract
     */
    public function getController() {}

    /**
     * 执行动作
     *
     * @param mixed $arg 
     * @param mixed $... 
     *
     * @return mixed
     */
    abstract public function execute($arg = null) ;


}