<?php
/**
 * Swoole\Channel Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Channel {


    public function __construct($size) {}
    
    /**
     * Destruct a Swoole channel.
     *
     * @return void
     */
    public function __destruct() {}
    
    /**
     * Write and push data into Swoole channel.
     *
     * @param string $data The data to push into the Swoole channel.
     *
     * @return bool
     */
    public function push($data) {}
    
    /**
     * Read and pop data from swoole channel.
     *
     * @return mixed
     */
    public function pop() {}
    
    public function peek() {}
    
    /**
     * Get stats of swoole channel.
     *
     * @return array
     */
    public function stats() {}
    
}
