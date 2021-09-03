<?php
/**
 * Swoole\ArrayObject Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class ArrayObject implements \ArrayAccess,\Serializable,\Countable,\Iterator,\Traversable {

protected $array;

public function __construct($array = null) {}
public function __toArray() {}
public function isEmpty() {}
public function count() {}
public function current() {}
public function key() {}
public function valid() {}
public function rewind() {}
public function next() {}
public function get($key) {}
public function set($key, $value) {}
public function delete($key) {}
public function remove($value, $strict = null, $loop = null) {}
public function clear() {}
public function offsetGet($key) {}
public function offsetSet($key, $value) {}
public function offsetUnset($key) {}
public function offsetExists($key) {}
public function exists($key) {}
public function contains($value, $strict = null) {}
public function indexOf($value, $strict = null) {}
public function lastIndexOf($value, $strict = null) {}
public function search($needle, $strict = null) {}
public function join($glue = null) {}
public function serialize() {}
public function unserialize($string) {}
public function sum() {}
public function product() {}
public function push($value) {}
public function pushBack($value) {}
public function insert($offset, $value) {}
public function pop() {}
public function popFront() {}
public function slice($offset, $length = null, $preserve_keys = null) {}
public function randomGet() {}
public function each($fn) {}
public function map($fn) {}
public function reduce($fn) {}
public function keys($search_value = null, $strict = null) {}
public function values() {}
public function column($column_key, $index = null) {}
public function unique($sort_flags = null) {}
public function reverse($preserve_keys = null) {}
public function chunk($size, $preserve_keys = null) {}
public function flip() {}
public function filter($fn, $flag = null) {}
public function multiSort($sort_order = null, $sort_flags = null) {}
public function asort($sort_flags = null) {}
public function arsort($sort_flags = null) {}
public function krsort($sort_flags = null) {}
public function ksort($sort_flags = null) {}
public function natcasesort() {}
public function natsort() {}
public function rsort($sort_flags = null) {}
public function shuffle() {}
public function sort($sort_flags = null) {}
public function uasort($value_compare_func) {}
public function uksort($value_compare_func) {}
public function usort($value_compare_func) {}
static protected function detectType($value) {}
static protected function detectStringType($value) {}
static protected function detectArrayType($value) {}
}
