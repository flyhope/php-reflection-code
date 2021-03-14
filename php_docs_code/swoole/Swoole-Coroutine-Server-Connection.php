<?php
/**
 * Swoole\Coroutine\Server\Connection Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine\Server;
class Connection {

protected $socket;

public function __construct($conn) {}
public function recv($timeout = null) {}
public function send($data) {}
public function close() {}
public function exportSocket() {}
}
