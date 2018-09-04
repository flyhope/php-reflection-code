<?php
/**
 * Swoole_websocket_server Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_websocket_server extends \Swoole\Http\Server {

public $onConnect;
public $onReceive;
public $onClose;
public $onPacket;
public $onBufferFull;
public $onBufferEmpty;
public $onStart;
public $onShutdown;
public $onWorkerStart;
public $onWorkerStop;
public $onWorkerExit;
public $onWorkerError;
public $onTask;
public $onFinish;
public $onManagerStart;
public $onManagerStop;
public $onPipeMessage;
public $connections;
public $host;
public $port = 0;
public $type = 0;
public $mode = 0;
public $ports;
public $master_pid = 0;
public $manager_pid = 0;
public $worker_id = -1;
public $taskworker = false;
public $worker_pid = 0;
public $onRequest;
public $onHandshake;
public $setting;

public function on($event_name, $callback) {}
public function push($fd, $data, $opcode = null, $finish = null) {}
public function disconnect($fd, $code = null, $reason = null) {}
public function exist($fd) {}
public function isEstablished($fd) {}
static public function pack($data, $opcode = null, $finish = null, $mask = null) {}
static public function unpack($data) {}
public function start() {}
public function __construct($host, $port = null, $mode = null, $sock_type = null) {}
public function __destruct() {}
public function listen($host, $port, $sock_type) {}
public function addlistener($host, $port, $sock_type) {}
public function set($settings) {}
public function send($fd, $send_data, $reactor_id = null) {}
public function sendto($ip, $port, $send_data, $server_socket = null) {}
public function sendwait($conn_fd, $send_data) {}
public function protect($fd, $is_protected = null) {}
public function sendfile($conn_fd, $filename, $offset = null, $length = null) {}
public function close($fd, $reset = null) {}
public function confirm($fd) {}
public function pause($fd) {}
public function resume($fd) {}
public function task($data, $worker_id = null, $finish_callback = null) {}
public function taskwait($data, $timeout = null, $worker_id = null) {}
public function taskWaitMulti($tasks, $timeout = null) {}
public function taskCo($tasks, $timeout = null) {}
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
public function sendMessage($message, $dst_worker_id) {}
public function addProcess($process) {}
public function stats() {}
public function getSocket($port = null) {}
public function bind($fd, $uid) {}
}
