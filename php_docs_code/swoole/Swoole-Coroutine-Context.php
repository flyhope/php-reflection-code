<?php
/**
 * Swoole\Coroutine\Context Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine;
class Context extends \ArrayObject implements \Countable,\Serializable,\ArrayAccess,\Traversable,\IteratorAggregate {

const STD_PROP_LIST = 1;
const ARRAY_AS_PROPS = 2;

public function __construct($input = null, $flags = null, $iterator_class = null) {}
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
public function getIterator() {}
public function exchangeArray($input) {}
public function setIteratorClass($iteratorClass) {}
public function getIteratorClass() {}
}
