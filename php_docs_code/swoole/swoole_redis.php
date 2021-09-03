<?php
/**
 * Swoole_redis Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_redis {

const STATE_CONNECT = 0;
const STATE_READY = 1;
const STATE_WAIT_RESULT = 2;
const STATE_SUBSCRIBE = 3;
const STATE_CLOSED = 4;
public $onConnect;
public $onClose;
public $onMessage;
public $setting;
public $host;
public $port;
public $sock;
public $errCode;
public $errMsg;

public function __construct($setting = null) {}
public function __destruct() {}
public function on($event_name, $callback) {}
public function connect($host, $port, $callback) {}
public function close() {}
public function getState() {}
public function __call($command, $params) {}
}
