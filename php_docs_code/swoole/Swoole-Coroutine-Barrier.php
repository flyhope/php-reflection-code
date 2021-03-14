<?php
/**
 * Swoole\Coroutine\Barrier Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine;
class Barrier {

private $cid = -1;
private $timer = -1;
private static $cancel_list = array (
);

public function __destruct() {}
static public function make() {}
static public function wait(& $barrier, $timeout = null) {}
}
