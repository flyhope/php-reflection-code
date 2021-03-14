<?php
/**
 * Swoole\FastCGI\Record\Params Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\FastCGI\Record;
class Params extends \Swoole\FastCGI\Record implements \Stringable {

protected $values = array (
);
protected $version = 1;
protected $type = 11;
protected $requestId = 1;
protected $reserved = 0;

public function __construct($values = null) {}
public function getValues() {}
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
