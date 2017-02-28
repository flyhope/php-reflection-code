<?php
/**
 * Swoole\Atomic Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Atomic {


public function __construct($value = null) {}
public function add($add_value = null) {}
public function sub($sub_value = null) {}
public function get() {}
public function set($value) {}
public function cmpset($cmp_value, $new_value) {}
}
