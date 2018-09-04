<?php
/**
 * Swoole\Http\Client Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Http;
class Client {

    public $type = 0;
    
    public $errCode = 0;
    
    public $sock = 0;
    
    public $statusCode = 0;
    
    public $host;
    
    public $port = 0;
    
    public $requestMethod;
    
    public $requestHeaders;
    
    public $requestBody;
    
    public $uploadFiles;
    
    public $set_cookie_headers;
    
    public $downloadFile;
    
    public $headers;
    
    public $cookies;
    
    public $body;
    
    public $onConnect;
    
    public $onError;
    
    public $onMessage;
    
    public $onClose;
    

    public function __construct($host, $port = null, $ssl = null) {}
    
    /**
     * Destruct the HTTP client.
     *
     * @return void
     */
    public function __destruct() {}
    
    /**
     * Update the HTTP client paramters.
     *
     * @param array $settings 
     *
     * @return void
     */
    public function set($settings) {}
    
    /**
     * Set the HTTP request method.
     *
     * @param string $method 
     *
     * @return void
     */
    public function setMethod($method) {}
    
    /**
     * Set the HTTP request headers.
     *
     * @param array $headers 
     *
     * @return void
     */
    public function setHeaders($headers) {}
    
    /**
     * Set the http request cookies.
     *
     * @param array $cookies 
     *
     * @return void
     */
    public function setCookies($cookies) {}
    
    /**
     * Set the HTTP request body data.
     *
     * @param string $data 
     *
     * @return ReturnType
     */
    public function setData($data) {}
    
    /**
     * Add a file to the post form.
     *
     * @param string $path 
     * @param string $name 
     * @param string $type 
     * @param string $filename 
     * @param string $offset 
     *
     * @return void
     */
    public function addFile($path, $name, $type = null, $filename = null, $offset = null, $length = null) {}
    
    /**
     * Send the HTTP request after setting the parameters.
     *
     * @param string $path 
     * @param string $callback 
     *
     * @return void
     */
    public function execute($path, $callback) {}
    
    /**
     * Push data to websocket client.
     *
     * @param string $data 
     * @param string $opcode 
     * @param string $finish 
     *
     * @return void
     */
    public function push($data, $opcode = null, $finish = null) {}
    
    /**
     * Send GET http request to the remote server.
     *
     * @param string $path 
     * @param callable $callback 
     *
     * @return void
     */
    public function get($path, $callback) {}
    
    /**
     * Send POST http request to the remote server.
     *
     * @param string $path 
     * @param string $data 
     * @param callable $callback 
     *
     * @return void
     */
    public function post($path, $data, $callback) {}
    
    /**
     * Upgrade to websocket protocol.
     *
     * @param string $path 
     * @param string $callback 
     *
     * @return void
     */
    public function upgrade($path, $callback) {}
    
    /**
     * Download a file from the remote server.
     *
     * @param string $path 
     * @param string $file 
     * @param callable $callback 
     * @param integer $offset 
     *
     * @return void
     */
    public function download($path, $file, $callback, $offset = null) {}
    
    /**
     * Check if the HTTP connection is connected.
     *
     * @return boolean
     */
    public function isConnected() {}
    
    /**
     * Close the http connection.
     *
     * @return void
     */
    public function close() {}
    
    /**
     * Register callback function by event name.
     *
     * @param string $event_name 
     * @param callable $callback 
     *
     * @return void
     */
    public function on($event_name, $callback) {}
    
}
