<?php
/**
 * Swoole_websocket_closeframe Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_websocket_closeframe extends \Swoole\WebSocket\Frame {

public $fd = 0;
public $data = '';
public $flags = 1;
public $finish;
public $opcode = 8;
public $code = 1000;
public $reason = '';

public function __toString() {}
static public function pack($data, $opcode = null, $flags = null) {}
static public function unpack($data) {}
}
