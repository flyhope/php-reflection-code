<?php
/**
 * Swoole\Server\Task Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Server;
final class Task {

public $data;
public $id = -1;
public $worker_id = -1;
public $flags = 0;

public function finish($data) {}
static public function pack($data) {}
}
