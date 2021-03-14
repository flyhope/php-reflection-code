<?php
/**
 * Swoole\FastCGI\Record Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\FastCGI;
class Record implements \Stringable {

protected $version = 1;
protected $type = 11;
protected $requestId = 1;
protected $reserved = 0;
private $contentLength = 0;
private $paddingLength = 0;
private $contentData = '';
private $paddingData = '';

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
