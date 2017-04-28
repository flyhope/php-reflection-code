<?php
/**
 * Yar_Server_Output_Exception Document
 *
 * @package Yar 
 * @author Leelmes <i@chengxuan.li>
 */
class Yar_Server_Output_Exception extends Yar_Server_Exception implements Throwable {

    protected $message = '';
    
    protected $code = 0;
    
    protected $file;
    
    protected $line;
    

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
