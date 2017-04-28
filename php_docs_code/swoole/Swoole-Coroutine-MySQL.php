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
public function connect() {}
public function query() {}
public function recv() {}
public function setDefer() {}
public function getDefer() {}
public function close() {}
}
