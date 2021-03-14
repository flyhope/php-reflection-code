<?php
/**
 * Swoole\WebSocket\Frame Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\WebSocket;
class Frame {

public $fd = 0;
public $data = '';
public $opcode = 1;
public $flags = 1;
public $finish;

public function __toString() {}
static public function pack($data, $opcode = null, $flags = null) {}
static public function unpack($data) {}
}
