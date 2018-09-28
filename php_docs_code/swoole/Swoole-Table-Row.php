<?php
/**
 * Swoole\Table\Row Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Table;
class Row implements \ArrayAccess {

public $key;
public $value;

public function offsetExists($offset) {}
public function offsetGet($offset) {}
public function offsetSet($offset, $value) {}
public function offsetUnset($offset) {}
public function __destruct() {}
}
