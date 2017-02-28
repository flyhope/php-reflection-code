<?php
/**
 * Yaf_Exception Document
 *
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
class Yaf_Exception extends Exception implements Throwable {

    protected $file;
    
    protected $line;
    
    protected $message;
    
    protected $code = 0;
    
    protected $previous;
    

    private function __clone() {}
    
    /**
     * The __construct purpose
     */
    public function __construct($message = null, $code = null, $previous = null) {}
    
    public function __wakeup() {}
    
    public function getMessage() {}
    
    public function getCode() {}
    
    public function getFile() {}
    
    public function getLine() {}
    
    public function getTrace() {}
    
    /**
     * The getPrevious purpose
     *
     * @return void
     */
    public function getPrevious() {}
    
    public function getTraceAsString() {}
    
    public function __toString() {}
    
}
