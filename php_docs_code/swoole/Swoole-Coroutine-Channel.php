<?php
/**
 * Swoole\Coroutine\Channel Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine;
class Channel {

public $capacity = 0;
public $errCode = 0;

public function __construct($size = null) {}
public function __destruct() {}
public function push($data) {}
public function pop($timeout) {}
public function isEmpty() {}
public function isFull() {}
public function close() {}
public function stats() {}
public function length() {}
}
