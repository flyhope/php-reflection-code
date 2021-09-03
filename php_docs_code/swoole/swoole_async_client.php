<?php
/**
 * Swoole_async_client Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_async_client {

const MSG_OOB = 1;
const MSG_PEEK = 2;
const MSG_DONTWAIT = 64;
const MSG_WAITALL = 256;
const SHUT_RDWR = 2;
const SHUT_RD = 0;
const SHUT_WR = 1;
public $errCode = 0;
public $sock = -1;
public $type = 0;
public $setting;
private $onConnect;
private $onError;
private $onReceive;
private $onClose;
private $onBufferFull;
private $onBufferEmpty;
private $onSSLReady;

public function __construct($type) {}
public function __destruct() {}
public function set($settings) {}
public function connect($host, $port = null, $timeout = null, $sock_flag = null) {}
public function send($data, $flag = null) {}
public function sendfile($filename, $offset = null, $length = null) {}
public function sendto($ip, $port, $data) {}
public function sleep() {}
public function wakeup() {}
public function pause() {}
public function resume() {}
public function shutdown($how) {}
public function enableSSL($callback) {}
public function getPeerCert() {}
public function verifyPeerCert() {}
public function isConnected() {}
public function getsockname() {}
public function getpeername() {}
public function close($force = null) {}
public function on($event_name, $callback) {}
public function getSocket() {}
}
