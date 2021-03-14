<?php
/**
 * Swoole_event Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_event {


static public function add($fd, $read_callback, $write_callback = null, $events = null) {}
static public function del($fd) {}
static public function set($fd, $read_callback = null, $write_callback = null, $events = null) {}
static public function isset($fd, $events = null) {}
static public function dispatch() {}
static public function defer($callback) {}
static public function cycle($callback, $before = null) {}
static public function write($fd, $data) {}
static public function wait() {}
static public function rshutdown() {}
static public function exit() {}
}
