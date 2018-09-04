<?php
/**
 * Swoole\Event Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Event {


    /**
     * Add new callback functions of a socket into the EventLoop.
     *
     * @param int $fd 
     * @param callable $read_callback 
     * @param callable $write_callback 
     * @param string $events 
     *
     * @return boolean
     */
    static public function add($fd, $read_callback, $write_callback = null, $events = null) {}
    
    /**
     * Remove all event callback functions of a socket.
     *
     * @param string $fd 
     *
     * @return boolean
     */
    static public function del($fd) {}
    
    /**
     * Update the event callback functions of a socket.
     *
     * @param int $fd 
     * @param string $read_callback 
     * @param string $write_callback 
     * @param string $events 
     *
     * @return boolean
     */
    static public function set($fd, $read_callback = null, $write_callback = null, $events = null) {}
    
    /**
     * Exit the eventloop, only available at client side.
     *
     * @return void
     */
    static public function exit() {}
    
    /**
     * Write data to the socket.
     *
     * @param string $fd 
     * @param string $data 
     *
     * @return void
     */
    static public function write($fd, $data) {}
    
    /**
     * Description
     *
     * @return void
     */
    static public function wait() {}
    
    /**
     * Add a callback function to the next event loop.
     *
     * @param mixed $callback 
     *
     * @return void
     */
    static public function defer($callback) {}
    
    static public function cycle($callback, $before = null) {}
    
}
