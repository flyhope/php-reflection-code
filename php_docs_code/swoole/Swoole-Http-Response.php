<?php
/**
 * Swoole\Http\Response Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Http;
class Response {

public $fd = 0;
public $socket;
public $header;
public $cookie;

public function initHeader() {}
public function cookie($name, $value = null, $expires = null, $path = null, $domain = null, $secure = null, $httponly = null, $samesite = null) {}
public function setCookie($name, $value = null, $expires = null, $path = null, $domain = null, $secure = null, $httponly = null, $samesite = null) {}
public function rawcookie($name, $value = null, $expires = null, $path = null, $domain = null, $secure = null, $httponly = null, $samesite = null) {}
public function status($http_code, $reason = null) {}
public function setStatusCode($http_code, $reason = null) {}
public function header($key, $value, $ucwords = null) {}
public function setHeader($key, $value, $ucwords = null) {}
public function write($content) {}
public function end($content = null) {}
public function sendfile($filename, $offset = null, $length = null) {}
public function redirect($location, $http_code = null) {}
public function detach() {}
static public function create($fd) {}
public function upgrade() {}
public function push($data, $opcode = null, $flags = null) {}
public function recv() {}
public function close() {}
public function __destruct() {}
}
