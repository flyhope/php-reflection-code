<?php
/**
 * Swoole_lock Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_lock {

const FILELOCK = 2;
const MUTEX = 3;
const SEM = 4;
const RWLOCK = 1;
const SPINLOCK = 5;
public $errCode = 0;

public function __construct($type = null, $filename = null) {}
public function __destruct() {}
public function lock() {}
public function lockwait($timeout = null) {}
public function trylock() {}
public function lock_read() {}
public function trylock_read() {}
public function unlock() {}
public function destroy() {}
}
