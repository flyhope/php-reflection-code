<?php
/**
 * Swoole\FastCGI\Record\AbortRequest Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\FastCGI\Record;
class AbortRequest extends \Swoole\FastCGI\Record implements \Stringable {

protected $version = 1;
protected $type = 11;
protected $requestId = 1;
protected $reserved = 0;

public function __construct($requestId = null) {}
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
static protected function unpackPayload($self, $data) {}
protected function packPayload() {}
}
