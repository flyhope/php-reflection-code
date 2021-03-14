<?php
/**
 * Swoole\Coroutine\FastCGI\Client Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine\FastCGI;
class Client {

protected $af;
protected $host;
protected $port;
protected $ssl;
protected $socket;

public function __construct($host, $port = null, $ssl = null) {}
public function execute($request, $timeout = null) {}
static public function parseUrl($url) {}
static public function call($url, $path, $data = null, $timeout = null) {}
protected function ioException($errno = null) {}
}
