<?php
/**
 * Swoole\Process Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Process {

    const IPC_NOWAIT = 256;
    const PIPE_MASTER = 1;
    const PIPE_WORKER = 2;
    const PIPE_READ = 3;
    const PIPE_WRITE = 4;
    public $pipe;
    
    public $callback;
    
    public $msgQueueId;
    
    public $msgQueueKey;
    
    public $pid;
    
    public $id;
    

    public function __construct($callback, $redirect_stdin_and_stdout = null, $pipe_type = null) {}
    
    /**
     * Destory the process.
     *
     * @return void
     */
    public function __destruct() {}
    
    /**
     * Wait for the events of child processes.
     *
     * @param boolean $blocking 
     *
     * @return array
     */
    static public function wait($blocking = null) {}
    
    /**
     * Send signal to the child processes.
     *
     * @param string $signal_no 
     * @param callable $callback 
     *
     * @return void
     */
    static public function signal($signal_no, $callback) {}
    
    /**
     * High precision timer which triggers signal with fixed interval.
     *
     * @param integer $interval_usec 
     *
     * @return void
     */
    static public function alarm($usec) {}
    
    /**
     * Send signal to the child process.
     *
     * @param integer $pid 
     * @param string $signal_no 
     *
     * @return void
     */
    static public function kill($pid, $signal_no = null) {}
    
    /**
     * Change the process to be a daemon process.
     *
     * @param boolean $nochdir 
     * @param boolean $noclose 
     *
     * @return void
     */
    static public function daemon($nochdir = null, $noclose = null) {}
    
    static public function setaffinity($cpu_settings) {}
    
    public function setTimeout($seconds) {}
    
    public function setBlocking($blocking) {}
    
    /**
     * Create a message queue as the communication method between the parent process and child processes.
     *
     * @param integer $key 
     * @param integer $mode 
     *
     * @return boolean
     */
    public function useQueue($key = null, $mode = null) {}
    
    /**
     * Get the stats of the message queue used as the communication method between processes.
     *
     * @return array
     */
    public function statQueue() {}
    
    /**
     * Destory the message queue created by swoole_process::useQueue.
     *
     * @return void
     */
    public function freeQueue() {}
    
    /**
     * Start the process.
     *
     * @return void
     */
    public function start() {}
    
    /**
     * Write data into the pipe and communicate with the parent process or child processes.
     *
     * @param string $data 
     *
     * @return integer
     */
    public function write($data) {}
    
    /**
     * Close the pipe to the child process.
     *
     * @return void
     */
    public function close() {}
    
    /**
     * Read data sending to the process.
     *
     * @param integer $maxsize 
     *
     * @return string
     */
    public function read($size = null) {}
    
    /**
     * Write and push data into the message queue.
     *
     * @param string $data 
     *
     * @return boolean
     */
    public function push($data) {}
    
    /**
     * Read and pop data from the message queue.
     *
     * @param integer $maxsize 
     *
     * @return mixed
     */
    public function pop($size = null) {}
    
    /**
     * Stop the child processes.
     *
     * @param string $exit_code 
     *
     * @return void
     */
    public function exit($exit_code = null) {}
    
    /**
     * Execute system commands.
     *
     * @param string $exec_file 
     * @param string $args 
     *
     * @return ReturnType
     */
    public function exec($exec_file, $args) {}
    
    /**
     * Set name of the process.
     *
     * @param string $process_name 
     *
     * @return void
     */
    public function name($process_name) {}
    
}
