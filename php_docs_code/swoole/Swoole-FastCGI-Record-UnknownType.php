<?php
/**
 * Swoole\FastCGI\Record\UnknownType Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\FastCGI\Record;
class UnknownType extends \Swoole\FastCGI\Record implements \Stringable {

protected $type1;
protected $reserved1;
protected $version = 1;
protected $type = 11;
protected $requestId = 1;
protected $reserved = 0;

public function __construct($type = null, $reserved = null) {}
public function getUnrecognizedType() {}
static public function unpackPayload($self, $data) {}
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
