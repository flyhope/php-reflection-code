<?php
/**
 * Swoole\Coroutine\System Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine;
class System {


static public function gethostbyname($domain_name, $family = null, $timeout = null) {}
static public function dnsLookup($domain_name, $timeout = null) {}
static public function exec($command, $get_error_stream = null) {}
static public function sleep($seconds) {}
static public function fread($handle, $length = null) {}
static public function fwrite($handle, $string, $length = null) {}
static public function fgets($handle) {}
static public function getaddrinfo($hostname, $family = null, $socktype = null, $protocol = null, $service = null, $timeout = null) {}
static public function readFile($filename) {}
static public function writeFile($filename, $data, $flags = null) {}
static public function statvfs($path) {}
}
