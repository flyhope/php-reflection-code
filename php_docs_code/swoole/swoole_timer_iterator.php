<?php
/**
 * Swoole_timer_iterator Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_timer_iterator extends \ArrayIterator implements \Countable,\Serializable,\SeekableIterator,\ArrayAccess,\Traversable,\Iterator {

const STD_PROP_LIST = 1;
const ARRAY_AS_PROPS = 2;

public function __construct($array = null, $flags = null) {}
public function offsetExists($key) {}
public function offsetGet($key) {}
public function offsetSet($key, $value) {}
public function offsetUnset($key) {}
public function append($value) {}
public function getArrayCopy() {}
public function count() {}
public function getFlags() {}
public function setFlags($flags) {}
public function asort($flags = null) {}
public function ksort($flags = null) {}
public function uasort($callback) {}
public function uksort($callback) {}
public function natsort() {}
public function natcasesort() {}
public function unserialize($data) {}
public function serialize() {}
public function __serialize() {}
public function __unserialize($data) {}
public function rewind() {}
public function current() {}
public function key() {}
public function next() {}
public function valid() {}
public function seek($offset) {}
public function __debugInfo() {}
}
