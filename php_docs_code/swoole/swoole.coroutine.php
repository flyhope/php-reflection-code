<?php
/**
 * Swoole\Coroutine Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Coroutine {


    /**
     * Description
     *
     * @return ReturnType
     */
    static public function create($func) {}
    
    static public function exec($command) {}
    
    static public function set($options) {}
    
    static public function yield() {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    static public function suspend() {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    static public function resume($uid) {}
    
    static public function stats() {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    static public function getuid() {}
    
    static public function sleep($seconds) {}
    
    static public function fread($handle, $length = null) {}
    
    static public function fgets($handle) {}
    
    static public function fwrite($handle, $string, $length = null) {}
    
    static public function readFile($filename) {}
    
    static public function writeFile($filename, $data, $flags = null) {}
    
    static public function gethostbyname($domain_name, $family = null) {}
    
    static public function getaddrinfo($hostname, $family = null, $socktype = null, $protocol = null, $service = null) {}
    
    static public function getBackTrace($cid, $options = null, $limit = null) {}
    
    static public function listCoroutines() {}
    
}
