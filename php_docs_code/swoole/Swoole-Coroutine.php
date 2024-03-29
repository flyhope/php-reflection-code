<?php
/**
 * Swoole\Coroutine Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Coroutine {


static public function create($func, $params = null) {}
static public function defer($callback) {}
static public function set($options) {}
static public function exists($cid) {}
static public function yield() {}
static public function suspend() {}
static public function resume($cid) {}
static public function stats() {}
static public function getCid() {}
static public function getuid() {}
static public function getPcid($cid = null) {}
static public function getContext($cid = null) {}
static public function getBackTrace($cid = null, $options = null, $limit = null) {}
static public function list() {}
static public function listCoroutines() {}
static public function enableScheduler() {}
static public function disableScheduler() {}
static public function gethostbyname($domain_name, $family = null, $timeout = null) {}
static public function dnsLookup($domain_name, $timeout = null) {}
static public function exec($command, $get_error_stream = null) {}
static public function sleep($seconds) {}
static public function fread($handle, $length = null) {}
static public function fgets($handle) {}
static public function fwrite($handle, $string, $length = null) {}
static public function readFile($filename) {}
static public function writeFile($filename, $data, $flags = null) {}
static public function getaddrinfo($hostname, $family = null, $socktype = null, $protocol = null, $service = null, $timeout = null) {}
static public function statvfs($path) {}
}
