<?php
/**
 * Swoole\Coroutine\MySQL Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine;
class MySQL {

private $serverInfo = '';
public $sock = 0;
public $connected = false;
public $connect_error = '';
public $connect_errno = 0;
public $affected_rows = 0;
public $insert_id = 0;
public $error = '';
public $errno = 0;

public function __construct() {}
public function __destruct() {}
public function connect($server_config) {}
public function query($sql, $timeout = null) {}
public function recv() {}
public function escape($string, $flags = null) {}
public function begin() {}
public function commit() {}
public function rollback() {}
public function prepare($query, $timeout = null) {}
public function setDefer($defer = null) {}
public function getDefer() {}
public function close() {}
}
