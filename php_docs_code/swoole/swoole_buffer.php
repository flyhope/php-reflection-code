<?php
/**
 * Swoole_buffer Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_buffer {

public $capacity = 128;
public $length = 0;

public function __construct($size = null) {}
public function __destruct() {}
public function __toString() {}
public function substr($offset, $length = null, $remove = null) {}
public function write($offset, $data) {}
public function read($offset, $length) {}
public function append($data) {}
public function expand($size) {}
public function recycle() {}
public function clear() {}
}
