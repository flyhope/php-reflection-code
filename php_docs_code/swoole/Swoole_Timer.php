<?php
/**
 * Swoole\Timer Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Timer {


static public function tick($ms, $callback, $param = null) {}
static public function after($ms, $callback) {}
static public function exists($timer_id) {}
static public function clear($timer_id) {}
}
