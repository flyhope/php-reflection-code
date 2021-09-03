<?php
/**
 * Swoole\Database\PDOStatementProxy Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Database;
class PDOStatementProxy extends \Swoole\ObjectProxy {

protected $__object;
protected $setAttributeContext;
protected $setFetchModeContext;
protected $bindParamContext;
protected $bindColumnContext;
protected $bindValueContext;
protected $parent;
protected $parentRound;

public function __construct($object, $parent) {}
public function __call($name, $arguments) {}
public function setAttribute($attribute, $value) {}
public function setFetchMode($mode, $classNameObject = null, $ctorarfg = null) {}
public function bindParam($parameter, & $variable, $data_type = null, $length = null, $driver_options = null) {}
public function bindColumn($column, & $param, $type = null, $maxlen = null, $driverdata = null) {}
public function bindValue($parameter, $value, $data_type = null) {}
public function __getObject() {}
public function __get($name) {}
public function __set($name, $value) {}
public function __isset($name) {}
public function __unset($name) {}
public function __invoke($arguments = null) {}
}
