<?php
/**
 * Swoole\Http\Response Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Http;
class Response {

    public $fd = 0;
    
    public $header;
    
    public $cookie;
    
    public $trailer;
    

    /**
     * Init the HTTP response header.
     *
     * @return ReturnType
     */
    public function initHeader() {}
    
    /**
     * Set the cookies of the HTTP response.
     *
     * @param string $name 
     * @param string $value 
     * @param string $expires 
     * @param string $path 
     * @param string $domain 
     * @param string $secure 
     * @param string $httponly 
     *
     * @return string
     */
    public function cookie($name, $value = null, $expires = null, $path = null, $domain = null, $secure = null, $httponly = null) {}
    
    /**
     * Set the raw cookies to the HTTP response.
     *
     * @param string $name 
     * @param string $value 
     * @param string $expires 
     * @param string $path 
     * @param string $domain 
     * @param string $secure 
     * @param string $httponly 
     *
     * @return ReturnType
     */
    public function rawcookie($name, $value = null, $expires = null, $path = null, $domain = null, $secure = null, $httponly = null) {}
    
    /**
     * Set the status code of the HTTP response.
     *
     * @param string $http_code 
     *
     * @return ReturnType
     */
    public function status($http_code, $reason = null) {}
    
    /**
     * Enable the gzip of response content.
     *
     * @param string $compress_level 
     *
     * @return ReturnType
     */
    public function gzip($compress_level = null) {}
    
    /**
     * Set the HTTP response headers.
     *
     * @param string $key 
     * @param string $value 
     * @param string $ucwords 
     *
     * @return void
     */
    public function header($key, $value, $ucwords = null) {}
    
    /**
     * Append HTTP body content to the HTTP response.
     *
     * @param string $content 
     *
     * @return void
     */
    public function write($content) {}
    
    /**
     * Send data for the HTTP request and finish the response.
     *
     * @param string $content 
     *
     * @return void
     */
    public function end($content = null) {}
    
    /**
     * Send file through the HTTP response.
     *
     * @param string $filename 
     * @param int $offset 
     *
     * @return ReturnType
     */
    public function sendfile($filename, $offset = null, $length = null) {}
    
    public function redirect($location, $http_code = null) {}
    
    public function detach() {}
    
    static public function create($fd) {}
    
    /**
     * Destruct the HTTP response.
     *
     * @return void
     */
    public function __destruct() {}
    
}
