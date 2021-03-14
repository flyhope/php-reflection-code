<?php
/**
 * Swoole\Database\MysqliPool Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Database;
class MysqliPool extends \Swoole\ConnectionPool {

const DEFAULT_SIZE = 64;
protected $config;
protected $pool;
protected $constructor;
protected $size;
protected $num;
protected $proxy;

public function __construct($config, $size = null) {}
public function fill() {}
public function get() {}
public function put($connection) {}
public function close() {}
protected function make() {}
}
