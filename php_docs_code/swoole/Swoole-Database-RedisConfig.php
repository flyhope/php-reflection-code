<?php
/**
 * Swoole\Database\RedisConfig Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Database;
class RedisConfig {

protected $host = '127.0.0.1';
protected $port = 6379;
protected $timeout = 0.0;
protected $reserved = '';
protected $retry_interval = 0;
protected $read_timeout = 0.0;
protected $auth = '';
protected $dbIndex = 0;

public function getHost() {}
public function withHost($host) {}
public function getPort() {}
public function withPort($port) {}
public function getTimeout() {}
public function withTimeout($timeout) {}
public function getReserved() {}
public function withReserved($reserved) {}
public function getRetryInterval() {}
public function withRetryInterval($retry_interval) {}
public function getReadTimeout() {}
public function withReadTimeout($read_timeout) {}
public function getAuth() {}
public function withAuth($auth) {}
public function getDbIndex() {}
public function withDbIndex($dbIndex) {}
}
