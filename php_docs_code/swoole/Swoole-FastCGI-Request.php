<?php
/**
 * Swoole\FastCGI\Request Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\FastCGI;
class Request extends \Swoole\FastCGI\Message implements \Stringable {

protected $keepConn = false;
protected $params = array (
);
protected $body = '';
protected $error = '';

public function __toString() {}
public function getKeepConn() {}
public function withKeepConn($keepConn) {}
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
