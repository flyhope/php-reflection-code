<?php
/**
 * Swoole\FastCGI\Message Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\FastCGI;
class Message {

protected $params = array (
);
protected $body = '';
protected $error = '';

public function getParam($name) {}
public function withParam($name, $value) {}
public function withoutParam($name) {}
public function getParams() {}
public function withParams($params) {}
public function withAddedParams($params) {}
public function getBody() {}
public function withBody($body) {}
public function getError() {}
public function withError($error) {}
}
