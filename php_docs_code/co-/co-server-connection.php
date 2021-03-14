<?php
/**
 * Co\server\connection Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace co\server;
class connection {

protected $socket;

public function __construct($conn) {}
public function recv($timeout = null) {}
public function send($data) {}
public function close() {}
public function exportSocket() {}
}
