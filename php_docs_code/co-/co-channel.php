<?php
/**
 * Co\channel Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace co;
class channel {

public $capacity = 0;
public $errCode = 0;

public function __construct($size = null) {}
public function push($data, $timeout = null) {}
public function pop($timeout = null) {}
public function isEmpty() {}
public function isFull() {}
public function close() {}
public function stats() {}
public function length() {}
}
