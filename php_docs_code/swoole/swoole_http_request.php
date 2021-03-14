<?php
/**
 * Swoole_http_request Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_http_request {

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
