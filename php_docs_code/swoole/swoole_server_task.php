<?php
/**
 * Swoole_server_task Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
final class swoole_server_task {

public $data;
public $dispatch_time = 0.0;
public $id = -1;
public $worker_id = -1;
public $flags = 0;

public function finish($data) {}
static public function pack($data) {}
}
