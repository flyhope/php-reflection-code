<?php
/**
 * Swoole\FastCGI\Record\EndRequest Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\FastCGI\Record;
class EndRequest extends \Swoole\FastCGI\Record implements \Stringable {

protected $appStatus = 0;
protected $protocolStatus = 0;
protected $reserved1;
protected $version = 1;
protected $type = 11;
protected $requestId = 1;
protected $reserved = 0;

public function __construct($protocolStatus = null, $appStatus = null, $reserved = null) {}
public function getAppStatus() {}
public function getProtocolStatus() {}
static protected function unpackPayload($self, $data) {}
protected function packPayload() {}
public function __toString() {}
static public function unpack($data) {}
public function setContentData($data) {}
public function getContentData() {}
public function getVersion() {}
public function getType() {}
public function getRequestId() {}
public function setRequestId($requestId) {}
public function getContentLength() {}
public function getPaddingLength() {}
}
