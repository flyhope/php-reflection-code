<?php
/**
 * Swoole\Coroutine\Client Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine;
class Client {

    const MSG_OOB = 1;
    const MSG_PEEK = 2;
    const MSG_DONTWAIT = 64;
    const MSG_WAITALL = 256;
    public $errCode = 0;
    
    public $sock = 0;
    
    public $type = 0;
    
    public $setting;
    
    public $connected = false;
    

    public function __construct($type) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function __destruct() {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function set($settings) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function connect($host, $port = null, $timeout = null) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function recv($timeout = null) {}
    
    public function peek($length = null) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function send($data) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function sendfile($filename, $offset = null, $length = null) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function sendto($address, $port, $data) {}
    
    public function recvfrom($length, & $address, & $port = null) {}
    
    public function enableSSL() {}
    
    public function getPeerCert() {}
    
    public function verifyPeerCert() {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function isConnected() {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function getsockname() {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function getpeername() {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function close() {}
    
    public function getSocket() {}
    
}
