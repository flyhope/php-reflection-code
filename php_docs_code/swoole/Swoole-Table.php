<?php
/**
 * Swoole\Table Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Table implements \Iterator,\Traversable,\Countable {

const TYPE_INT = 1;
const TYPE_STRING = 7;
const TYPE_FLOAT = 6;

public function __construct($table_size) {}
public function column($name, $type, $size = null) {}
public function create() {}
public function destroy() {}
public function set($key, $value) {}
public function get($key) {}
public function count() {}
public function del($key) {}
public function exist($key) {}
public function incr($key, $column, $incrby = null) {}
public function decr($key, $column, $decrby = null) {}
public function rewind() {}
public function next() {}
public function current() {}
public function key() {}
public function valid() {}
}
