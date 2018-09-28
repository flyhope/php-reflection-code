<?php
/**
 * Swoole\Coroutine\Socket Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine;
final class Socket {

public $errCode = 0;

public function __construct($domain, $type, $protocol) {}
public function bind($address, $port = null) {}
public function listen($backlog = null) {}
public function accept($timeout = null) {}
public function connect($host, $port = null, $timeout = null) {}
public function recv($timeout = null) {}
public function send($data, $timeout = null) {}
public function recvfrom(& $peername, $timeout = null) {}
public function sendto($addr, $port, $data) {}
public function getpeername() {}
public function getsockname() {}
public function getSocket() {}
public function close() {}
}
