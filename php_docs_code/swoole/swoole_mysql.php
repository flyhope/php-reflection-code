<?php
/**
 * Swoole_mysql Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_mysql {

const STATE_QUERY = 0;
const STATE_READ_START = 1;
const STATE_READ_FIELD  = 2;
const STATE_READ_ROW = 3;
const STATE_READ_END = 5;
const STATE_CLOSED = 6;
public $serverInfo;
public $sock;
public $connected = false;
public $errno = 0;
public $connect_errno = 0;
public $error;
public $connect_error;
public $insert_id;
public $affected_rows;
public $onConnect;
public $onClose;

public function __construct() {}
public function __destruct() {}
public function connect($server_config, $callback) {}
public function begin($callback) {}
public function commit($callback) {}
public function rollback($callback) {}
public function query($sql, $callback) {}
public function close() {}
public function getState() {}
public function on($event_name, $callback) {}
}
