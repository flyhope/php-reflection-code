<?php
/**
 * Swoole\ConnectionPool Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class ConnectionPool {

const DEFAULT_SIZE = 64;
protected $pool;
protected $constructor;
protected $size;
protected $num;
protected $proxy;

public function __construct($constructor, $size = null, $proxy = null) {}
public function fill() {}
public function get() {}
public function put($connection) {}
public function close() {}
protected function make() {}
}
