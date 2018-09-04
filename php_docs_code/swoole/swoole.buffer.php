<?php
/**
 * Swoole\Buffer Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Buffer {


    public function __construct($size = null) {}
    
    /**
     * Destruct the Swoole memory buffer.
     *
     * @return void
     */
    public function __destruct() {}
    
    /**
     * Get the string value of the memory buffer.
     *
     * @return string
     */
    public function __toString() {}
    
    /**
     * Read data from the memory buffer based on offset and length. Or remove data from the memory buffer.
     *
     * @param integer $offset The offset.
     * @param integer $length The length.
     * @param bool $remove Whether to remove the data from the memory buffer.
     *
     * @return string
     */
    public function substr($offset, $length = null, $seek = null) {}
    
    /**
     * Write data to the memory buffer. The memory allocated for the buffer will not be changed.
     *
     * @param integer $offset The offset.
     * @param string $data The data to write to the memory buffer.
     *
     * @return void
     */
    public function write($offset, $data) {}
    
    /**
     * Read data from the memory buffer based on offset and length.
     *
     * @param integer $offset The offset.
     * @param integer $length The length.
     *
     * @return string
     */
    public function read($offset, $length) {}
    
    /**
     * Append the string or binary data at the end of the memory buffer and return the new size of memory allocated.
     *
     * @param string $data The string or binary data to append at the end of the memory buffer.
     *
     * @return integer
     */
    public function append($data) {}
    
    /**
     * Expand the size of memory buffer.
     *
     * @param integer $size The new size of the memory buffer.
     *
     * @return integer
     */
    public function expand($size) {}
    
    /**
     * Release the memory to OS which is not used by the memory buffer.
     *
     * @return void
     */
    public function recycle() {}
    
    /**
     * Reset the memory buffer.
     *
     * @return void
     */
    public function clear() {}
    
}
