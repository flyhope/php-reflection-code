<?php
/**
 * Co\waitgroup Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace co;
class waitgroup {

protected $chan;
protected $count = 0;
protected $waiting = false;

public function __construct($delta = null) {}
public function add($delta = null) {}
public function done() {}
public function wait($timeout = null) {}
}
