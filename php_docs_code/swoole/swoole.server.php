<?php
/**
 * Swoole\Server Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Server {

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
    
    public $setting;
    
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
    

    public function __construct($host, $port = null, $mode = null, $sock_type = null) {}
    
    public function __destruct() {}
    
    /**
     * Listen on the given IP and port, socket type.
     *
     * @param string $host 
     * @param integer $port 
     * @param string $socket_type 
     *
     * @return boolean
     */
    public function listen($host, $port, $sock_type) {}
    
    /**
     * Add a new listener to the server.
     *
     * @param string $host 
     * @param integer $port 
     * @param string $socket_type 
     *
     * @return void
     */
    public function addlistener($host, $port, $sock_type) {}
    
    /**
     * Register a callback function by event name.
     *
     * @param string $event_name 
     * @param callable $callback 
     *
     * @return void
     */
    public function on($event_name, $callback) {}
    
    /**
     * Set the runtime settings of the swoole server.
     *
     * @param array $settings 
     *
     * @return ReturnType
     */
    public function set($settings) {}
    
    /**
     * Start the Swoole server.
     *
     * @return void
     */
    public function start() {}
    
    /**
     * Send data to the client.
     *
     * @param integer $fd 
     * @param string $data 
     * @param integer $reactor_id 
     *
     * @return boolean
     */
    public function send($fd, $send_data, $reactor_id = null) {}
    
    /**
     * Send data to the remote UDP address.
     *
     * @param string $ip 
     * @param integer $port 
     * @param string $data 
     * @param string $server_socket 
     *
     * @return boolean
     */
    public function sendto($ip, $port, $send_data, $server_socket = null) {}
    
    /**
     * Send data to the remote socket in the blocking way.
     *
     * @param integer $fd 
     * @param string $data 
     *
     * @return boolean
     */
    public function sendwait($conn_fd, $send_data) {}
    
    /**
     * Check if the connection is existed.
     *
     * @param integer $fd 
     *
     * @return boolean
     */
    public function exist($fd) {}
    
    /**
     * Set the connection to be protected mode.
     *
     * @param integer $fd 
     * @param boolean $is_protected 
     *
     * @return void
     */
    public function protect($fd, $is_protected = null) {}
    
    /**
     * Send file to the connection.
     *
     * @param integer $fd 
     * @param string $filename 
     * @param integer $offset 
     *
     * @return boolean
     */
    public function sendfile($conn_fd, $filename, $offset = null, $length = null) {}
    
    /**
     * Close a connection to the client.
     *
     * @param integer $fd 
     * @param boolean $reset 
     *
     * @return boolean
     */
    public function close($fd, $reset = null) {}
    
    /**
     * Check status of the connection.
     *
     * @param integer $fd 
     *
     * @return boolean
     */
    public function confirm($fd) {}
    
    /**
     * Stop receiving data from the connection.
     *
     * @param integer $fd 
     *
     * @return void
     */
    public function pause($fd) {}
    
    /**
     * Start receving data from the connection.
     *
     * @param integer $fd 
     *
     * @return void
     */
    public function resume($fd) {}
    
    /**
     * Send data to the task worker processes.
     *
     * @param string $data 
     * @param integer $dst_worker_id 
     * @param callable $callback 
     *
     * @return mixed
     */
    public function task($data, $worker_id = null, $finish_callback = null) {}
    
    /**
     * Send data to the task worker processes in blocking way.
     *
     * @param string $data 
     * @param float $timeout 
     * @param integer $worker_id 
     *
     * @return void
     */
    public function taskwait($data, $timeout = null, $worker_id = null) {}
    
    /**
     * Execute multiple tasks concurrently.
     *
     * @param array $tasks 
     * @param double $timeout_ms 
     *
     * @return void
     */
    public function taskWaitMulti($tasks, $timeout = null) {}
    
    public function taskCo($tasks, $timeout = null) {}
    
    /**
     * Used in task process for sending result to the worker process when the task is finished.
     *
     * @param string $data 
     *
     * @return void
     */
    public function finish($data) {}
    
    /**
     * Restart all the worker process.
     *
     * @return boolean
     */
    public function reload() {}
    
    /**
     * Shutdown the master server process, this function can be called in worker processes.
     *
     * @return void
     */
    public function shutdown() {}
    
    /**
     * Stop the Swoole server.
     *
     * @param integer $worker_id 
     *
     * @return boolean
     */
    public function stop($worker_id = null) {}
    
    /**
     * Get the error code of the most recent error.
     *
     * @return integer
     */
    public function getLastError() {}
    
    /**
     * Check all the connections on the server.
     *
     * @param boolean $if_close_connection 
     *
     * @return mixed
     */
    public function heartbeat($reactor_id) {}
    
    /**
     * Get the connection info by file description.
     *
     * @param integer $fd 
     * @param integer $reactor_id 
     *
     * @return array
     */
    public function connection_info($fd, $reactor_id = null) {}
    
    /**
     * Get all of the established connections.
     *
     * @param integer $start_fd 
     * @param integer $pagesize 
     *
     * @return array
     */
    public function connection_list($start_fd, $find_count = null) {}
    
    /**
     * Get the connection info by file description.
     *
     * @param integer $fd 
     * @param integer $reactor_id 
     *
     * @return ReturnType
     */
    public function getClientInfo($fd, $reactor_id = null) {}
    
    /**
     * Get all of the established connections.
     *
     * @param integer $start_fd 
     * @param integer $pagesize 
     *
     * @return array
     */
    public function getClientList($start_fd, $find_count = null) {}
    
    /**
     * Trigger a callback function after a period of time.
     *
     * @param integer $after_time_ms 
     * @param callable $callback 
     * @param string $param 
     *
     * @return ReturnType
     */
    public function after($ms, $callback, $param = null) {}
    
    /**
     * Repeats a given function at every given time-interval.
     *
     * @param integer $interval_ms 
     * @param callable $callback 
     *
     * @return void
     */
    public function tick($ms, $callback) {}
    
    /**
     * Stop and destory a timer.
     *
     * @param integer $timer_id 
     *
     * @return void
     */
    public function clearTimer($timer_id) {}
    
    /**
     * Delay execution of the callback function at the end of current EventLoop.
     *
     * @param callable $callback 
     *
     * @return void
     */
    public function defer($callback) {}
    
    /**
     * Send message to worker processes by ID.
     *
     * @param integer $worker_id 
     * @param string $data 
     *
     * @return boolean
     */
    public function sendMessage($message, $dst_worker_id) {}
    
    /**
     * Add a user defined swoole_process to the server.
     *
     * @param swoole_process $process 
     *
     * @return boolean
     */
    public function addProcess($process) {}
    
    /**
     * Get the stats of the Swoole server.
     *
     * @return array
     */
    public function stats() {}
    
    public function getSocket($port = null) {}
    
    /**
     * Bind the connection to a user defined user ID.
     *
     * @param integer $fd 
     * @param integer $uid 
     *
     * @return boolean
     */
    public function bind($fd, $uid) {}
    
}
