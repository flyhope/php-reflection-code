<?php
/**
 * Swoole\Http\Request Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Http;
class Request {

    public $fd = 0;
    
    public $header;
    
    public $server;
    
    public $request;
    
    public $cookie;
    
    public $get;
    
    public $files;
    
    public $post;
    
    public $tmpfiles;
    

    /**
     * Get the raw HTTP POST body.
     *
     * @return string
     */
    public function rawcontent() {}
    
    public function getData() {}
    
    /**
     * Destruct the HTTP request.
     *
     * @return void
     */
    public function __destruct() {}
    
}
