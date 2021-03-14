<?php
/**
 * Swoole_timer Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_timer {


static public function set($settings) {}
static public function tick($ms, $callback, $params = null) {}
static public function after($ms, $callback, $params = null) {}
static public function exists($timer_id) {}
static public function info($timer_id) {}
static public function stats() {}
static public function list() {}
static public function clear($timer_id) {}
static public function clearAll() {}
}
