<?php
/**
 * Yar_Server_Exception Document
 *
 * If service threw exceptions, A Yar_Server_Exception will be threw in
 * client side.
 * 
 * @package Yar 
 * @author Leelmes <i@chengxuan.li>
 */
class Yar_Server_Exception extends Exception implements Throwable {

    protected $message = '';
    
    protected $code = 0;
    
    protected $file;
    
    protected $line;
    
    protected $_type = 'Yar_Exception_Server';
    

    /**
     * 获取异常的原始类型
     *
     * @return string
     */
    public function getType() {}
    
    private function __clone() {}
    
    public function __construct($message = null, $code = null, $previous = null) {}
    
    public function __wakeup() {}
    
    public function getMessage() {}
    
    public function getCode() {}
    
    public function getFile() {}
    
    public function getLine() {}
    
    public function getTrace() {}
    
    public function getPrevious() {}
    
    public function getTraceAsString() {}
    
    public function __toString() {}
    
}
