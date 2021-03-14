<?php
/**
 * Swoole\StringObject Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class StringObject implements \Stringable {

protected $string;

public function __construct($string = null) {}
public function __toString() {}
public function length() {}
public function indexOf($needle, $offset = null) {}
public function lastIndexOf($needle, $offset = null) {}
public function pos($needle, $offset = null) {}
public function rpos($needle, $offset = null) {}
public function ipos($needle) {}
public function lower() {}
public function upper() {}
public function trim() {}
public function ltrim() {}
public function rtrim() {}
public function substr($offset, $length = null) {}
public function repeat($n) {}
public function append($str) {}
public function replace($search, $replace, & $count = null) {}
public function startsWith($needle) {}
public function endsWith($needle) {}
public function equals($str, $strict = null) {}
public function contains($subString) {}
public function split($delimiter, $limit = null) {}
public function char($index) {}
public function chunkSplit($chunkLength = null, $chunkEnd = null) {}
public function chunk($splitLength = null) {}
public function toString() {}
static protected function detectArrayType($value) {}
}
