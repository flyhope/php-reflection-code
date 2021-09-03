<?php
/**
 * Yaf_Response_Cli Document
 *
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
class Yaf_Response_Cli extends Yaf_Response_Abstract {

    const DEFAULT_BODY = 'content';
    protected $_header;
    
    protected $_body;
    
    protected $_sendheader = false;
    

    public function __construct() {}
    
    public function __destruct() {}
    
    private function __clone() {}
    
    public function __toString() {}
    
    public function setBody($body, $name = null) {}
    
    public function appendBody($body, $name = null) {}
    
    public function prependBody($body, $name = null) {}
    
    public function clearBody($name = null) {}
    
    public function getBody($name = null) {}
    
    public function response() {}
    
}
