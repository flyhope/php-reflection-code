<?php
/**
 * Swoole\Async Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Async {


static public function read($filename, $callback, $chunk_size = null, $offset = null) {}
static public function write($filename, $content, $offset = null, $callback = null) {}
static public function readFile($filename, $callback) {}
static public function writeFile($filename, $content, $callback = null, $flags = null) {}
static public function dnsLookup($hostname, $callback) {}
static public function dnsLookupCoro($domain_name) {}
static public function set($settings) {}
static public function exec($command, $callback) {}
}
