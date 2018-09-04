<?php
/**
 * Swoole_coroutine Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_coroutine {


static public function create($func) {}
static public function exec($command) {}
static public function set($options) {}
static public function yield() {}
static public function suspend() {}
static public function resume($uid) {}
static public function stats() {}
static public function getuid() {}
static public function sleep($seconds) {}
static public function fread($handle, $length = null) {}
static public function fgets($handle) {}
static public function fwrite($handle, $string, $length = null) {}
static public function readFile($filename) {}
static public function writeFile($filename, $data, $flags = null) {}
static public function gethostbyname($domain_name, $family = null) {}
static public function getaddrinfo($hostname, $family = null, $socktype = null, $protocol = null, $service = null) {}
static public function getBackTrace($cid, $options = null, $limit = null) {}
static public function listCoroutines() {}
}
