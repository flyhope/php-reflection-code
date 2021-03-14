<?php
/**
 * Swoole\Server\Port Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Server;
class Port {

private $onConnect;
private $onReceive;
private $onClose;
private $onPacket;
private $onBufferFull;
private $onBufferEmpty;
private $onRequest;
private $onHandShake;
private $onOpen;
private $onMessage;
public $host;
public $port = 0;
public $type = 0;
public $sock = -1;
public $setting;
public $connections;

private function __construct() {}
public function __destruct() {}
public function set($settings) {}
public function on($event_name, $callback) {}
public function getCallback($event_name) {}
public function getSocket() {}
}
