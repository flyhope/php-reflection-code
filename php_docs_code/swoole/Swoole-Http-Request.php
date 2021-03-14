<?php
/**
 * Swoole\Http\Request Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Http;
class Request {

public $fd = 0;
public $streamId = 0;
public $header;
public $server;
public $cookie;
public $get;
public $files;
public $post;
public $tmpfiles;

public function rawContent() {}
public function getContent() {}
public function getData() {}
static public function create($options = null) {}
public function parse($data) {}
public function isCompleted() {}
public function getMethod() {}
public function __destruct() {}
}
