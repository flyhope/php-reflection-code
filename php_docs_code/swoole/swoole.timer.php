<?php
/**
 * Swoole\Timer Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Timer {


    /**
     * Repeats a given function at every given time-interval.
     *
     * @param integer $interval_ms 
     * @param callable $callback 
     * @param string $param 
     *
     * @return void
     */
    static public function tick($ms, $callback) {}
    
    /**
     * Trigger a callback function after a period of time.
     *
     * @param int $after_time_ms 
     * @param callable $callback 
     *
     * @return void
     */
    static public function after($ms, $callback, $param = null) {}
    
    /**
     * Check if a timer is existed.
     *
     * @param integer $timer_id 
     *
     * @return boolean
     */
    static public function exists($timer_id) {}
    
    /**
     * Delete a timer by timer ID.
     *
     * @param integer $timer_id 
     *
     * @return void
     */
    static public function clear($timer_id) {}
    
}
