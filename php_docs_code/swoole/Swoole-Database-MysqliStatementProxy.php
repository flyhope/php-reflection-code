<?php
/**
 * Swoole\Database\MysqliStatementProxy Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Database;
class MysqliStatementProxy extends \Swoole\Database\ObjectProxy {

const IO_METHOD_REGEX = '/^close|execute|fetch|prepare$/i';
protected $__object;
protected $queryString;
protected $attrSetContext;
protected $bindParamContext;
protected $bindResultContext;
protected $parent;
protected $parentRound;

public function __construct($object, $queryString, $parent) {}
public function __call($name, $arguments) {}
public function attr_set($attr, $mode) {}
public function bind_param($types, & $arguments = null) {}
public function bind_result(& $arguments = null) {}
public function __clone() {}
public function __getObject() {}
public function __get($name) {}
public function __set($name, $value) {}
public function __isset($name) {}
public function __unset($name) {}
public function __invoke($arguments = null) {}
}
