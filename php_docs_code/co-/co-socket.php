<?php
/**
 * Co\socket Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace co;
class socket {

public $fd = -1;
public $errCode = 0;
public $errMsg = '';

public function __construct($domain, $type, $protocol = null) {}
public function bind($address, $port = null) {}
public function listen($backlog = null) {}
public function accept($timeout = null) {}
public function connect($host, $port = null, $timeout = null) {}
public function recv($length = null, $timeout = null) {}
public function recvPacket($timeout = null) {}
public function send($data, $timeout = null) {}
public function sendFile($filename, $offset = null, $length = null) {}
public function recvAll($length = null, $timeout = null) {}
public function sendAll($data, $timeout = null) {}
public function recvfrom(& $peername, $timeout = null) {}
public function sendto($addr, $port, $data) {}
public function getOption($level, $opt_name) {}
public function setProtocol($settings) {}
public function setOption($level, $opt_name, $opt_value) {}
public function shutdown($how = null) {}
public function cancel($event = null) {}
public function close() {}
public function getpeername() {}
public function getsockname() {}
}
