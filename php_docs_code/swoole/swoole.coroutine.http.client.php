<?php
/**
 * Swoole\Coroutine\Http\Client Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine\Http;
class Client {

    public $errCode = 0;
    
    public $sock = 0;
    
    public $type = 0;
    
    public $setting;
    
    public $connected = false;
    
    public $statusCode = 0;
    
    public $host;
    
    public $port = 0;
    
    public $requestMethod;
    
    public $requestHeaders;
    
    public $requestBody;
    
    public $uploadFiles;
    
    public $downloadFile;
    
    public $headers;
    
    public $set_cookie_headers;
    
    public $cookies;
    
    public $body;
    

    public function __construct($host, $port = null, $ssl = null) {}
    
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
    public function setMethod($method) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function setHeaders($headers) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function setCookies($cookies) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function setData($data) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function execute($path) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function get($path) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function post($path, $data) {}
    
    public function download($path, $file, $offset = null) {}
    
    public function upgrade($path) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function addFile($path, $name, $type = null, $filename = null, $offset = null, $length = null) {}
    
    public function addData($path, $name, $type = null, $filename = null) {}
    
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
    public function close() {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function setDefer($defer = null) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function getDefer() {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function recv($timeout = null) {}
    
    public function push($data, $opcode = null, $finish = null) {}
    
}
