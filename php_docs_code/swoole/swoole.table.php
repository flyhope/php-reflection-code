<?php
/**
 * Swoole\Table Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Table implements Iterator,Traversable,ArrayAccess,Countable {

    const TYPE_INT = 1;
    const TYPE_STRING = 7;
    const TYPE_FLOAT = 6;

    public function __construct($table_size, $conflict_proportion = null) {}
    
    /**
     * Set the data type and size of the columns.
     *
     * @param string $name 
     * @param string $type 
     * @param integer $size 
     *
     * @return ReturnType
     */
    public function column($name, $type, $size = null) {}
    
    /**
     * Create the swoole memory table.
     *
     * @return void
     */
    public function create() {}
    
    /**
     * Destroy the Swoole table.
     *
     * @return void
     */
    public function destroy() {}
    
    /**
     * Update a row of the table by $row_key.
     *
     * @param string $key 
     * @param array $value 
     *
     * @return VOID
     */
    public function set($key, $value) {}
    
    /**
     * Get the value in the Swoole table by $row_key and $column_key.
     *
     * @param string $row_key 
     * @param string $column_key 
     *
     * @return integer
     */
    public function get($key, $field = null) {}
    
    /**
     * Count the rows in the table, or count all the elements in the table if $mode = 1.
     *
     * @return integer
     */
    public function count() {}
    
    /**
     * Delete a row in the Swoole table by $row_key.
     *
     * @param string $key 
     *
     * @return void
     */
    public function del($key) {}
    
    /**
     * Check if a row is existed by $row_key.
     *
     * @param string $key 
     *
     * @return boolean
     */
    public function exist($key) {}
    
    /**
     * Increment the value by $row_key and $column_key.
     *
     * @param string $key 
     * @param string $column 
     * @param integer $incrby 
     *
     * @return void
     */
    public function incr($key, $column, $incrby = null) {}
    
    /**
     * Decrement the value in the Swoole table by $row_key and $column_key.
     *
     * @param string $key 
     * @param string $column 
     * @param integer $decrby 
     *
     * @return ReturnType
     */
    public function decr($key, $column, $decrby = null) {}
    
    public function getMemorySize() {}
    
    public function offsetExists($offset) {}
    
    public function offsetGet($offset) {}
    
    public function offsetSet($offset, $value) {}
    
    public function offsetUnset($offset) {}
    
    /**
     * Rewind the iterator.
     *
     * @return void
     */
    public function rewind() {}
    
    /**
     * Iterator the next row.
     *
     * @return ReturnType
     */
    public function next() {}
    
    /**
     * Get the current row.
     *
     * @return array
     */
    public function current() {}
    
    /**
     * Get the key of current row.
     *
     * @return string
     */
    public function key() {}
    
    /**
     * Check current if the current row is valid.
     *
     * @return boolean
     */
    public function valid() {}
    
}
