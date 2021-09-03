<?php
/**
 * Co\iterator Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace co;
class iterator extends \ArrayIterator implements \Countable,\Serializable,\SeekableIterator,\ArrayAccess,\Traversable,\Iterator {

const STD_PROP_LIST = 1;
const ARRAY_AS_PROPS = 2;

public function __construct($array = null, $flags = null) {}
public function offsetExists($index) {}
public function offsetGet($index) {}
public function offsetSet($index, $newval) {}
public function offsetUnset($index) {}
public function append($value) {}
public function getArrayCopy() {}
public function count() {}
public function getFlags() {}
public function setFlags($flags) {}
public function asort() {}
public function ksort() {}
public function uasort($cmp_function) {}
public function uksort($cmp_function) {}
public function natsort() {}
public function natcasesort() {}
public function unserialize($serialized) {}
public function serialize() {}
public function __unserialize($serialized) {}
public function __serialize() {}
public function __debugInfo() {}
public function rewind() {}
public function current() {}
public function key() {}
public function next() {}
public function valid() {}
public function seek($position) {}
}
