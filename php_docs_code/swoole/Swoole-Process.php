<?php
/**
 * Swoole\Process Document
 *
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
public $msgQueueId;
public $msgQueueKey;
public $pid;
public $id;
private $callback;

public function __construct($callback, $redirect_stdin_and_stdout = null, $pipe_type = null, $enable_coroutine = null) {}
public function __destruct() {}
static public function wait($blocking = null) {}
static public function signal($signal_no, $callback) {}
static public function alarm($usec, $type = null) {}
static public function kill($pid, $signal_no = null) {}
static public function daemon($nochdir = null, $noclose = null, $pipes = null) {}
static public function setaffinity($cpu_settings) {}
public function set($settings) {}
public function setTimeout($seconds) {}
public function setBlocking($blocking) {}
public function useQueue($key = null, $mode = null, $capacity = null) {}
public function statQueue() {}
public function freeQueue() {}
public function start() {}
public function write($data) {}
public function close() {}
public function read($size = null) {}
public function push($data) {}
public function pop($size = null) {}
public function exit($exit_code = null) {}
public function exec($exec_file, $args) {}
public function exportSocket() {}
public function name($process_name) {}
}
