<?php
/**
 * Swoole\Database\PDOProxy Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Database;
class PDOProxy extends \Swoole\ObjectProxy {

const IO_ERRORS = array (
  0 => 2002,
  1 => 2006,
  2 => 2013,
);
protected $__object;
protected $setAttributeContext;
protected $constructor;
protected $round = 0;

public function __construct($constructor) {}
public function __call($name, $arguments) {}
public function getRound() {}
public function reconnect() {}
public function setAttribute($attribute, $value) {}
public function inTransaction() {}
public function __getObject() {}
public function __get($name) {}
public function __set($name, $value) {}
public function __isset($name) {}
public function __unset($name) {}
public function __invoke($arguments = null) {}
}
