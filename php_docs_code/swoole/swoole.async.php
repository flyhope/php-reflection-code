<?php
/**
 * Swoole\Async Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Async {


    /**
     * Read file stream asynchronously.
     *
     * @param string $filename The name of the file.
     * @param callable $callback The name of the file.
     * @param integer $chunk_size The chunk length.
     * @param integer $offset The offset.
     *
     * @return bool
     */
    static public function read($filename, $callback, $chunk_size = null, $offset = null) {}
    
    /**
     * Write data to a file stream asynchronously.
     *
     * @param string $filename The filename being written.
     * @param string $content The content writing to the file.
     * @param integer $offset The offset.
     * @param callable $callback 
     *
     * @return void
     */
    static public function write($filename, $content, $offset = null, $callback = null) {}
    
    /**
     * Read a file asynchronously.
     *
     * @param string $filename The filename of the file being read.
     * @param callable $callback The name of the file.
     *
     * @return void
     */
    static public function readFile($filename, $callback) {}
    
    /**
     * Description
     *
     * @param string $filename The filename being written.
     * @param string $content The content writing to the file.
     * @param callable $callback 
     * @param string $flags 
     *
     * @return void
     */
    static public function writeFile($filename, $content, $callback = null, $flags = null) {}
    
    /**
     * Async and non-blocking hostname to IP lookup.
     *
     * @param string $hostname The host name.
     * @param callable $callback The host name.
     *
     * @return void
     */
    static public function dnsLookup($hostname, $callback) {}
    
    static public function dnsLookupCoro($domain_name) {}
    
    /**
     * Update the async I/O options.
     *
     * @param array $settings 
     *
     * @return void
     */
    static public function set($settings) {}
    
    static public function exec($command, $callback) {}
    
}
