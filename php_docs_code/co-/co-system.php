<?php
/**
 * Co\system Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace co;
class system {


static public function gethostbyname($domain_name, $family = null, $timeout = null) {}
static public function dnsLookup($domain_name, $timeout = null) {}
static public function exec($command, $get_error_stream = null) {}
static public function sleep($seconds) {}
static public function getaddrinfo($hostname, $family = null, $socktype = null, $protocol = null, $service = null, $timeout = null) {}
static public function statvfs($path) {}
static public function readFile($filename) {}
static public function writeFile($filename, $data, $flags = null) {}
static public function wait($timeout = null) {}
static public function waitPid($pid, $timeout = null) {}
static public function waitSignal($signo, $timeout = null) {}
static public function waitEvent($fd, $events = null, $timeout = null) {}
static public function fread($handle, $length = null) {}
static public function fwrite($handle, $string, $length = null) {}
static public function fgets($handle) {}
}
