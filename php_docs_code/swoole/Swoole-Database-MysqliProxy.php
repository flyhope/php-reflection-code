<?php
/**
 * Swoole\Database\MysqliProxy Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Database;
class MysqliProxy extends \Swoole\Database\ObjectProxy {

const IO_METHOD_REGEX = '/^autocommit|begin_transaction|change_user|close|commit|kill|multi_query|ping|prepare|query|real_connect|real_query|reap_async_query|refresh|release_savepoint|rollback|savepoint|select_db|send_query|set_charset|ssl_set$/i';
const IO_ERRORS = array (
  0 => 2002,
  1 => 2006,
  2 => 2013,
);
protected $__object;
protected $charsetContext;
protected $setOptContext;
protected $changeUserContext;
protected $constructor;
protected $round = 0;

public function __construct($constructor) {}
public function __call($name, $arguments) {}
public function getRound() {}
public function reconnect() {}
public function options($option, $value) {}
public function set_opt($option, $value) {}
public function set_charset($charset) {}
public function change_user($user, $password, $database) {}
public function __clone() {}
public function __getObject() {}
public function __get($name) {}
public function __set($name, $value) {}
public function __isset($name) {}
public function __unset($name) {}
public function __invoke($arguments = null) {}
}
