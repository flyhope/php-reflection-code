<?php
/**
 * Swoole\MsgQueue Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class MsgQueue {


public function __construct($len) {}
public function __destruct() {}
public function push($data, $type = null) {}
public function pop($type = null) {}
public function setBlocking($blocking) {}
public function stats() {}
public function destroy() {}
}
