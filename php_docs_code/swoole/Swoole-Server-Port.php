<?php
/**
 * Swoole\Server\Port Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Server;
class Port {

public $onConnect;
public $onReceive;
public $onClose;
public $onPacket;
public $onBufferFull;
public $onBufferEmpty;
public $onRequest;
public $onHandShake;
public $onMessage;
public $onOpen;
public $host;
public $port = 0;
public $type = 0;
public $sock = 0;
public $setting;
public $connections;

private function __construct() {}
public function __destruct() {}
public function set($settings) {}
public function on($event_name, $callback) {}
public function getSocket() {}
}
