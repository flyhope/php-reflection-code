<?php
/**
 * Co\context Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace co;
class context extends \ArrayObject implements \Countable,\Serializable,\ArrayAccess,\Traversable,\IteratorAggregate {

const STD_PROP_LIST = 1;
const ARRAY_AS_PROPS = 2;

public function __construct($array = null, $flags = null, $iteratorClass = null) {}
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
public function getIterator() {}
public function exchangeArray($array) {}
public function setIteratorClass($iteratorClass) {}
public function getIteratorClass() {}
public function __debugInfo() {}
}
