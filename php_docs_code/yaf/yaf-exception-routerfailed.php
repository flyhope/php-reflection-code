<?php
/**
 * Yaf_Exception_RouterFailed Document
 *
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
class Yaf_Exception_RouterFailed extends Yaf_Exception {

    protected $file;
    
    protected $line;
    
    protected $message;
    
    protected $code = 0;
    
    protected $previous;
    

    private function __clone() {}
    
    public function __construct($message = null, $code = null, $previous = null) {}
    
    public function getMessage() {}
    
    public function getCode() {}
    
    public function getFile() {}
    
    public function getLine() {}
    
    public function getTrace() {}
    
    public function getPrevious() {}
    
    public function getTraceAsString() {}
    
    public function __toString() {}
    
}
