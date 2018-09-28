<?php
/**
 * Co\http\request Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace co\http;
class request {

public $fd = 0;
public $header;
public $server;
public $request;
public $cookie;
public $get;
public $files;
public $post;
public $tmpfiles;

public function rawcontent() {}
public function getData() {}
public function __destruct() {}
}
