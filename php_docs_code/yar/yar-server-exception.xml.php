<?php
/**
 * If service threw exceptions, A Yar_Server_Exception will be threw in
 * client side.
 * 
 * @package yar
 * @author Leelmes <i@chengxuan.li> (DOC Only)
 */
class Yar_Server_Exception extends Exception {

    protected $_type;

    /**
     * 获取异常的原始类型
     *
     * @return string
     */
    public function getType() {}


}