<?php
/**
 * Swoole\Server\Port Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Server;
class Port {

    public $onConnect;
    
    public $onReceive;
    
    public $onClose;
    
    public $onPacket;
    
    public $onBufferFull;
    
    public $onBufferEmpty;
    
    public $onRequest;
    
    public $onHandShake;
    
    public $onMessage;
    
    public $onOpen;
    
    public $host;
    
    public $port = 0;
    
    public $type = 0;
    
    public $sock = 0;
    
    public $setting;
    
    public $connections;
    

    private function __construct() {}
    
    /**
     * Destory server port
     *
     * @return void
     */
    public function __destruct() {}
    
    /**
     * Set protocol of the server port.
     *
     * @param array $settings 
     *
     * @return void
     */
    public function set($settings) {}
    
    /**
     * Register callback functions by event.
     *
     * @param string $event_name 
     * @param callable $callback 
     *
     * @return ReturnType
     */
    public function on($event_name, $callback) {}
    
    public function getSocket() {}
    
}
