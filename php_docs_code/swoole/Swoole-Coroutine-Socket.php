<?php
/**
 * Swoole\Coroutine\Socket Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine;
class Socket {

public $fd = -1;
public $domain = 0;
public $type = 0;
public $protocol = 0;
public $errCode = 0;
public $errMsg = '';

public function __construct($domain, $type, $protocol = null) {}
public function bind($address, $port = null) {}
public function listen($backlog = null) {}
public function accept($timeout = null) {}
public function connect($host, $port = null, $timeout = null) {}
public function checkLiveness() {}
public function peek($length = null) {}
public function recv($length = null, $timeout = null) {}
public function recvAll($length = null, $timeout = null) {}
public function recvLine($length = null, $timeout = null) {}
public function recvWithBuffer($length = null, $timeout = null) {}
public function recvPacket($timeout = null) {}
public function send($data, $timeout = null) {}
public function readVector($io_vector, $timeout = null) {}
public function readVectorAll($io_vector, $timeout = null) {}
public function writeVector($io_vector, $timeout = null) {}
public function writeVectorAll($io_vector, $timeout = null) {}
public function sendFile($filename, $offset = null, $length = null) {}
public function sendAll($data, $timeout = null) {}
public function recvfrom(& $peername, $timeout = null) {}
public function sendto($addr, $port, $data) {}
public function getOption($level, $opt_name) {}
public function setProtocol($settings) {}
public function setOption($level, $opt_name, $opt_value) {}
public function sslHandshake() {}
public function shutdown($how = null) {}
public function cancel($event = null) {}
public function close() {}
public function getpeername() {}
public function getsockname() {}
}
