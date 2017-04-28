<?php
/**
 * Swoole_process Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_process {

const IPC_NOWAIT = 256;

public function __construct($callback, $redirect_stdin_and_stdout = null, $pipe_type = null) {}
public function __destruct() {}
static public function wait($blocking = null) {}
static public function signal($signal_no, $callback) {}
static public function alarm($usec) {}
static public function kill($pid, $signal_no = null) {}
static public function daemon($nochdir = null, $noclose = null) {}
static public function setaffinity($cpu_settings) {}
public function useQueue($key, $mode = null) {}
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
public function name($process_name) {}
}
