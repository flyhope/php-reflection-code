<?php
/**
 * Swoole\Lock Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Lock {

    const FILELOCK = 2;
    const MUTEX = 3;
    const SEM = 4;
    const RWLOCK = 1;
    const SPINLOCK = 5;
    public $errCode = 0;
    

    public function __construct($type = null, $filename = null) {}
    
    /**
     * Destory a Swoole memory lock.
     *
     * @return void
     */
    public function __destruct() {}
    
    /**
     * Try to acquire the lock. It will block if the lock is not available.
     *
     * @return void
     */
    public function lock() {}
    
    public function lockwait($timeout = null) {}
    
    /**
     * Try to acquire the lock and return straight away even the lock is not available.
     *
     * @return void
     */
    public function trylock() {}
    
    /**
     * Lock a read-write lock for reading.
     *
     * @return void
     */
    public function lock_read() {}
    
    /**
     * Try to lock a read-write lock for reading and return straight away even the lock is not available.
     *
     * @return void
     */
    public function trylock_read() {}
    
    /**
     * Release the lock.
     *
     * @return void
     */
    public function unlock() {}
    
    public function destroy() {}
    
}
