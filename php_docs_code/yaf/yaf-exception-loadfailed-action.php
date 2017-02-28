<?php
/**
 * Yaf_Exception_LoadFailed_Action Document
 *
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
class Yaf_Exception_LoadFailed_Action extends Yaf_Exception_LoadFailed implements Throwable {

    protected $file;
    
    protected $line;
    
    protected $message;
    
    protected $code = 0;
    
    protected $previous;
    

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
