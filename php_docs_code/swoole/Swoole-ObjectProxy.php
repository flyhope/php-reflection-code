<?php
/**
 * Swoole\ObjectProxy Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class ObjectProxy {

protected $__object;

public function __construct($object) {}
public function __getObject() {}
public function __get($name) {}
public function __set($name, $value) {}
public function __isset($name) {}
public function __unset($name) {}
public function __call($name, $arguments) {}
public function __invoke($arguments = null) {}
}
