<?php
/**
 * Swoole\Coroutine\MySQL\Statement Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine\MySQL;
class Statement {

public $id = 0;
public $affected_rows = 0;
public $insert_id = 0;
public $error = '';
public $errno = 0;

public function execute($params = null, $timeout = null) {}
public function fetch($timeout = null) {}
public function fetchAll($timeout = null) {}
public function nextResult($timeout = null) {}
public function recv($timeout = null) {}
public function close() {}
}
