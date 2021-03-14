<?php
/**
 * Co\fastcgi\proxy Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace co\fastcgi;
class proxy {

protected $host;
protected $port;
protected $timeout = -1;
protected $documentRoot;
protected $https = false;
protected $index = 'index.php';
protected $params = array (
);
protected $staticFileFilter;

public function __construct($url, $documentRoot = null) {}
public function withTimeout($timeout) {}
public function withHttps($https) {}
public function withIndex($index) {}
public function getParam($name) {}
public function withParam($name, $value) {}
public function withoutParam($name) {}
public function getParams() {}
public function withParams($params) {}
public function withAddedParams($params) {}
public function withStaticFileFilter($filter) {}
public function translateRequest($userRequest) {}
public function translateResponse($response, $userResponse) {}
public function pass($userRequest, $userResponse) {}
public function staticFileFiltrate($request, $userResponse) {}
}
