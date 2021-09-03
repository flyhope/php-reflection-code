<?php
/**
 * Swoole\Coroutine\Http\Server Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine\Http;
final class Server {

public $fd = -1;
public $host;
public $port = -1;
public $ssl = false;
public $settings;
public $errCode = 0;
public $errMsg = '';

public function __construct($host, $port = null, $ssl = null, $reuse_port = null) {}
public function __destruct() {}
public function set($settings) {}
public function handle($pattern, $callback) {}
public function onAccept() {}
public function start() {}
public function shutdown() {}
}
