<?php
/**
 * Swoole_http_client Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_http_client {

public $type = 0;
public $errCode = 0;
public $sock = 0;
public $statusCode = 0;
public $host;
public $port = 0;
public $requestMethod;
public $requestHeaders;
public $requestBody;
public $uploadFiles;
public $set_cookie_headers;
public $downloadFile;
public $headers;
public $cookies;
public $body;
public $onConnect;
public $onError;
public $onMessage;
public $onClose;

public function __construct($host, $port = null, $ssl = null) {}
public function __destruct() {}
public function set($settings) {}
public function setMethod($method) {}
public function setHeaders($headers) {}
public function setCookies($cookies) {}
public function setData($data) {}
public function addFile($path, $name, $type = null, $filename = null, $offset = null, $length = null) {}
public function execute($path, $callback) {}
public function push($data, $opcode = null, $finish = null) {}
public function get($path, $callback) {}
public function post($path, $data, $callback) {}
public function upgrade($path, $callback) {}
public function download($path, $file, $callback, $offset = null) {}
public function isConnected() {}
public function close() {}
public function on($event_name, $callback) {}
}
