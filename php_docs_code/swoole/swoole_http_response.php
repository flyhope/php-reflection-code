<?php
/**
 * Swoole_http_response Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_http_response {

public $fd = 0;
public $header;
public $cookie;
public $trailer;

public function initHeader() {}
public function cookie($name, $value = null, $expires = null, $path = null, $domain = null, $secure = null, $httponly = null) {}
public function rawcookie($name, $value = null, $expires = null, $path = null, $domain = null, $secure = null, $httponly = null) {}
public function status($http_code, $reason = null) {}
public function gzip($compress_level = null) {}
public function header($key, $value, $ucwords = null) {}
public function write($content) {}
public function end($content = null) {}
public function sendfile($filename, $offset = null, $length = null) {}
public function redirect($location, $http_code = null) {}
public function detach() {}
static public function create($fd) {}
public function __destruct() {}
}
