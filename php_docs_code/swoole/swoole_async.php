<?php
/**
 * Swoole_async Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_async {


static public function read($filename, $callback, $chunk_size = null, $offset = null) {}
static public function write($filename, $content, $offset = null, $callback = null) {}
static public function readFile($filename, $callback) {}
static public function writeFile($filename, $content, $callback = null, $flags = null) {}
static public function dnsLookup($domain_name, $content) {}
static public function set($settings) {}
}
