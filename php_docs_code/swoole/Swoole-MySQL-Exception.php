<?php
/**
 * Swoole\MySQL\Exception Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\MySQL;
class Exception extends \Exception implements \Throwable {

protected $message = '';
protected $code = 0;
protected $file;
protected $line;

private function __clone() {}
public function __construct($message = null, $code = null, $previous = null) {}
public function __wakeup() {}
public function getMessage() {}
public function getCode() {}
public function getFile() {}
public function getLine() {}
public function getTrace() {}
public function getPrevious() {}
public function getTraceAsString() {}
public function __toString() {}
}
