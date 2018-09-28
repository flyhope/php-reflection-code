<?php
/**
 * Co\client Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace co;
class client {

const MSG_OOB = 1;
const MSG_PEEK = 2;
const MSG_DONTWAIT = 64;
const MSG_WAITALL = 256;
public $errCode = 0;
public $sock = 0;
public $type = 0;
public $setting;
public $connected = false;

public function __construct($type) {}
public function __destruct() {}
public function set($settings) {}
public function connect($host, $port = null, $timeout = null) {}
public function recv($timeout = null) {}
public function peek($length = null) {}
public function send($data) {}
public function sendfile($filename, $offset = null, $length = null) {}
public function sendto($address, $port, $data) {}
public function recvfrom($length, & $address, & $port = null) {}
public function enableSSL() {}
public function getPeerCert() {}
public function verifyPeerCert() {}
public function isConnected() {}
public function getsockname() {}
public function getpeername() {}
public function close() {}
public function getSocket() {}
}
