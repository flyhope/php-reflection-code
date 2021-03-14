<?php
/**
 * Swoole\Database\MysqliConfig Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Database;
class MysqliConfig {

protected $host = '127.0.0.1';
protected $port = 3306;
protected $unixSocket = '';
protected $dbname = 'test';
protected $charset = 'utf8mb4';
protected $username = 'root';
protected $password = 'root';
protected $options = array (
);

public function getHost() {}
public function withHost($host) {}
public function getPort() {}
public function getUnixSocket() {}
public function withUnixSocket($unixSocket) {}
public function withPort($port) {}
public function getDbname() {}
public function withDbname($dbname) {}
public function getCharset() {}
public function withCharset($charset) {}
public function getUsername() {}
public function withUsername($username) {}
public function getPassword() {}
public function withPassword($password) {}
public function getOptions() {}
public function withOptions($options) {}
}
