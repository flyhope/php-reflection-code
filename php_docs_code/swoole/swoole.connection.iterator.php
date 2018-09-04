<?php
/**
 * Swoole\Connection\Iterator Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Connection;
class Iterator implements Iterator,Traversable,ArrayAccess,Countable {


    /**
     * Rewinds iterator
     *
     * @return void
     */
    public function rewind() {}
    
    /**
     * Move to the next connection.
     *
     * @return Connection
     */
    public function next() {}
    
    /**
     * Return current connection entry.
     *
     * @return Connection
     */
    public function current() {}
    
    /**
     * Return key of the current connection.
     *
     * @return int
     */
    public function key() {}
    
    /**
     * Check if current position is valid.
     *
     * @return boolean
     */
    public function valid() {}
    
    /**
     * Count connections.
     *
     * @return int
     */
    public function count() {}
    
    public function __destruct() {}
    
    /**
     * Check if offet exists.
     *
     * @param int $index The offset being checked.
     *
     * @return boolean
     */
    public function offsetExists($fd) {}
    
    /**
     * Offset to retrieve.
     *
     * @param string $index The offset to retrieve.
     *
     * @return Connection
     */
    public function offsetGet($fd) {}
    
    /**
     * Assign a Connection to the specified offset.
     *
     * @param int $offset The offset to assign the Connection to.
     * @param mixed $connection The connection to set.
     *
     * @return void
     */
    public function offsetSet($fd, $value) {}
    
    /**
     * Unset an offset.
     *
     * @param int $offset The offset to unset.
     *
     * @return void
     */
    public function offsetUnset($fd) {}
    
}
