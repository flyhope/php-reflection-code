<?php
/**
 * Yac Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class yac {

protected $_prefix = '';

public function __construct($prefix = null) {}
public function add($keys, $value = null, $ttl = null) {}
public function set($keys, $value = null, $ttl = null) {}
public function __set($key, $value) {}
public function get($keys) {}
public function __get($key) {}
public function delete($keys, $ttl = null) {}
public function flush() {}
public function info() {}
public function dump() {}
}
