<?php
/**
 * Swoole_http_request Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_http_request {

public $fd = 0;
public $header;
public $server;
public $cookie;
public $get;
public $files;
public $post;
public $tmpfiles;

public function rawContent() {}
public function getData() {}
public function __destruct() {}
}
