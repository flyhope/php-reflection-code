<?php
/**
 * Swoole\FastCGI\HttpResponse Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\FastCGI;
class HttpResponse extends \Swoole\FastCGI\Response {

protected $statusCode;
protected $reasonPhrase;
protected $headers = array (
);
protected $headersMap = array (
);
protected $setCookieHeaderLines = array (
);
protected $params = array (
);
protected $body = '';
protected $error = '';

public function __construct($records = null) {}
public function getStatusCode() {}
public function withStatusCode($statusCode) {}
public function getReasonPhrase() {}
public function withReasonPhrase($reasonPhrase) {}
public function getHeader($name) {}
public function getHeaders() {}
public function withHeader($name, $value) {}
public function withHeaders($headers) {}
public function getSetCookieHeaderLines() {}
public function withSetCookieHeaderLine($value) {}
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
