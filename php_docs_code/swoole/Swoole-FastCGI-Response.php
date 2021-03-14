<?php
/**
 * Swoole\FastCGI\Response Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\FastCGI;
class Response extends \Swoole\FastCGI\Message {

protected $params = array (
);
protected $body = '';
protected $error = '';

public function __construct($records = null) {}
static public function verify($records) {}
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
