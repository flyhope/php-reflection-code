<?php
/**
 * Swoole\FastCGI\HttpRequest Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\FastCGI;
class HttpRequest extends \Swoole\FastCGI\Request implements \Stringable {

protected $params = array (
  'REQUEST_SCHEME' => 'http',
  'REQUEST_METHOD' => 'GET',
  'DOCUMENT_ROOT' => '',
  'SCRIPT_FILENAME' => '',
  'SCRIPT_NAME' => '',
  'DOCUMENT_URI' => '/',
  'REQUEST_URI' => '/',
  'QUERY_STRING' => '',
  'CONTENT_TYPE' => 'text/plain',
  'CONTENT_LENGTH' => '0',
  'GATEWAY_INTERFACE' => 'CGI/1.1',
  'SERVER_PROTOCOL' => 'HTTP/1.1',
  'SERVER_SOFTWARE' => 'swoole/4.6.3',
  'REMOTE_ADDR' => 'unknown',
  'REMOTE_PORT' => '0',
  'SERVER_ADDR' => 'unknown',
  'SERVER_PORT' => '0',
  'SERVER_NAME' => 'Swoole',
  'REDIRECT_STATUS' => '200',
);
protected $keepConn = false;
protected $body = '';
protected $error = '';

public function getScheme() {}
public function withScheme($scheme) {}
public function withoutScheme() {}
public function getMethod() {}
public function withMethod($method) {}
public function withoutMethod() {}
public function getDocumentRoot() {}
public function withDocumentRoot($documentRoot) {}
public function withoutDocumentRoot() {}
public function getScriptFilename() {}
public function withScriptFilename($scriptFilename) {}
public function withoutScriptFilename() {}
public function getScriptName() {}
public function withScriptName($scriptName) {}
public function withoutScriptName() {}
public function withUri($uri) {}
public function getDocumentUri() {}
public function withDocumentUri($documentUri) {}
public function withoutDocumentUri() {}
public function getRequestUri() {}
public function withRequestUri($requestUri) {}
public function withoutRequestUri() {}
public function withQuery($query) {}
public function getQueryString() {}
public function withQueryString($queryString) {}
public function withoutQueryString() {}
public function getContentType() {}
public function withContentType($contentType) {}
public function withoutContentType() {}
public function getContentLength() {}
public function withContentLength($contentLength) {}
public function withoutContentLength() {}
public function getGatewayInterface() {}
public function withGatewayInterface($gatewayInterface) {}
public function withoutGatewayInterface() {}
public function getServerProtocol() {}
public function withServerProtocol($serverProtocol) {}
public function withoutServerProtocol() {}
public function withProtocolVersion($protocolVersion) {}
public function getServerSoftware() {}
public function withServerSoftware($serverSoftware) {}
public function withoutServerSoftware() {}
public function getRemoteAddr() {}
public function withRemoteAddr($remoteAddr) {}
public function withoutRemoteAddr() {}
public function getRemotePort() {}
public function withRemotePort($remotePort) {}
public function withoutRemotePort() {}
public function getServerAddr() {}
public function withServerAddr($serverAddr) {}
public function withoutServerAddr() {}
public function getServerPort() {}
public function withServerPort($serverPort) {}
public function withoutServerPort() {}
public function getServerName() {}
public function withServerName($serverName) {}
public function withoutServerName() {}
public function getRedirectStatus() {}
public function withRedirectStatus($redirectStatus) {}
public function withoutRedirectStatus() {}
public function getHeader($name) {}
public function withHeader($name, $value) {}
public function withoutHeader($name) {}
public function getHeaders() {}
public function withHeaders($headers) {}
public function withBody($body) {}
static protected function convertHeaderNameToParamName($name) {}
static protected function convertParamNameToHeaderName($name) {}
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
public function getError() {}
public function withError($error) {}
}
