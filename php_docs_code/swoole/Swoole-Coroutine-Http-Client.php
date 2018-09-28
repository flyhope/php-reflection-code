<?php
/**
 * Swoole\Coroutine\Http\Client Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine\Http;
class Client {

public $errCode = 0;
public $sock = 0;
public $type = 0;
public $setting;
public $connected = false;
public $statusCode = 0;
public $host;
public $port = 0;
public $requestMethod;
public $requestHeaders;
public $requestBody;
public $uploadFiles;
public $downloadFile;
public $headers;
public $set_cookie_headers;
public $cookies;
public $body;

public function __construct($host, $port = null, $ssl = null) {}
public function __destruct() {}
public function set($settings) {}
public function setMethod($method) {}
public function setHeaders($headers) {}
public function setCookies($cookies) {}
public function setData($data) {}
public function execute($path) {}
public function get($path) {}
public function post($path, $data) {}
public function download($path, $file, $offset = null) {}
public function upgrade($path) {}
public function addFile($path, $name, $type = null, $filename = null, $offset = null, $length = null) {}
public function addData($path, $name, $type = null, $filename = null) {}
public function isConnected() {}
public function close() {}
public function setDefer($defer = null) {}
public function getDefer() {}
public function recv($timeout = null) {}
public function push($data, $opcode = null, $finish = null) {}
}
