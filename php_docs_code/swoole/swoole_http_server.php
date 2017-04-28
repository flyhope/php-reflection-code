<?php
/**
 * Swoole_http_server Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_http_server extends \Swoole\Server {

private $global = 0;

public function on($event_name, $callback) {}
public function start() {}
public function __construct($host, $port = null, $mode = null, $sock_type = null) {}
public function listen($host, $port, $sock_type) {}
public function addlistener($host, $port, $sock_type) {}
public function set($settings) {}
public function send($fd, $send_data, $reactor_id = null) {}
public function sendto($ip, $port, $send_data, $server_socket = null) {}
public function sendwait($conn_fd, $send_data) {}
public function exist($fd) {}
public function protect($fd, $is_protected = null) {}
public function sendfile($conn_fd, $filename, $offset = null) {}
public function close($fd, $reset = null) {}
public function confirm($fd) {}
public function pause($fd) {}
public function resume($fd) {}
public function task($data, $worker_id = null, $finish_callback = null) {}
public function taskwait($data, $timeout = null, $worker_id = null) {}
public function taskWaitMulti($tasks, $timeout = null) {}
public function finish($data) {}
public function reload() {}
public function shutdown() {}
public function stop($worker_id = null) {}
public function getLastError() {}
public function heartbeat($reactor_id) {}
public function connection_info($fd, $reactor_id = null) {}
public function connection_list($start_fd, $find_count = null) {}
public function getClientInfo($fd, $reactor_id = null) {}
public function getClientList($start_fd, $find_count = null) {}
public function after($ms, $callback, $param = null) {}
public function tick($ms, $callback) {}
public function clearTimer($timer_id) {}
public function defer($callback) {}
public function sendMessage($dst_worker_id, $data) {}
public function addProcess($process) {}
public function stats() {}
public function getSocket($port = null) {}
public function bind($fd, $uid) {}
}
