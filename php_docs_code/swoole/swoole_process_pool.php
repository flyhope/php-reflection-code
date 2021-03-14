<?php
/**
 * Swoole_process_pool Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_process_pool {

public $master_pid = -1;
public $workers;

public function __construct($worker_num, $ipc_type = null, $msgqueue_key = null, $enable_coroutine = null) {}
public function __destruct() {}
public function set($settings) {}
public function on($event_name, $callback) {}
public function getProcess($worker_id = null) {}
public function listen($host, $port = null, $backlog = null) {}
public function write($data) {}
public function start() {}
public function shutdown() {}
}
