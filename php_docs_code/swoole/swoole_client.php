<?php
/**
 * Swoole_client Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_client {

const MSG_OOB = 1;
const MSG_PEEK = 2;
const MSG_DONTWAIT = 64;
const MSG_WAITALL = 256;
public $errCode = 0;
public $sock = 0;
public $reuse = false;
public $reuseCount = 0;

public function __construct($type, $async = null) {}
public function __destruct() {}
public function set($settings) {}
public function connect($host, $port = null, $timeout = null, $sock_flag = null) {}
public function recv($size = null, $flag = null) {}
public function send($data, $flag = null) {}
public function pipe($dst_socket) {}
public function sendfile($filename, $offset = null) {}
public function sendto($ip, $port, $data) {}
public function sleep() {}
public function wakeup() {}
public function pause() {}
public function resume() {}
public function isConnected() {}
public function getsockname() {}
public function getpeername() {}
public function close($force = null) {}
public function on($event_name, $callback) {}
public function getSocket() {}
}
