<?php
/**
 * Co\http\server Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace co\http;
final class server {

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
private function onAccept() {}
public function start() {}
public function shutdown() {}
}
