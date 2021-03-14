<?php
/**
 * Swoole\Coroutine\Server Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine;
class Server {

public $host = '';
public $port = 0;
public $type = 2;
public $fd = -1;
public $errCode = 0;
public $setting = array (
);
protected $running = false;
protected $fn;
protected $socket;

public function __construct($host, $port = null, $ssl = null, $reuse_port = null) {}
public function set($setting) {}
public function handle($fn) {}
public function shutdown() {}
public function start() {}
}
