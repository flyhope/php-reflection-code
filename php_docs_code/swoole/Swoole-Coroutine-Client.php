<?php
/**
 * Swoole\Coroutine\Client Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine;
class Client {

const MSG_OOB = 1;
const MSG_PEEK = 2;
const MSG_DONTWAIT = 64;
const MSG_WAITALL = 256;
public $errCode = 0;
public $sock = 0;

public function __construct() {}
public function __destruct() {}
public function set() {}
public function connect() {}
public function recv() {}
public function send() {}
public function sendfile() {}
public function sendto() {}
public function isConnected() {}
public function getsockname() {}
public function getpeername() {}
public function close() {}
}
