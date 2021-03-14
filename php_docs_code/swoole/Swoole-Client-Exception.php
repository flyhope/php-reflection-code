<?php
/**
 * Swoole\Client\Exception Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Client;
class Exception extends \Swoole\Exception implements \Throwable,\Stringable {

protected $message = '';
protected $code = 0;
protected $file;
protected $line;

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
