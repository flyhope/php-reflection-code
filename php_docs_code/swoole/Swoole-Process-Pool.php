<?php
/**
 * Swoole\Process\Pool Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Process;
class Pool {


public function __construct($worker_num, $ipc_type = null, $msgqueue_key = null) {}
public function __destruct() {}
public function on($event_name, $callback) {}
public function listen($host, $port = null, $backlog = null) {}
public function write($data) {}
public function start() {}
}
