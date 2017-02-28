<?php
/**
 * Swoole\Lock Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Lock {


public function __construct($type = null, $filename = null) {}
public function __destruct() {}
public function lock() {}
public function trylock() {}
public function lock_read() {}
public function trylock_read() {}
public function unlock() {}
}
