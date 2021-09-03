<?php
/**
 * Swoole_memory_pool Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class swoole_memory_pool {

const TYPE_RING = 1;
const TYPE_GLOBAL = 2;
const TYPE_FIXED = 0;
const TYPE_MALLOC = 3;
const TYPE_EMALLOC = 4;

public function __construct($size, $type, $slice_size = null, $shared = null) {}
public function __destruct() {}
public function alloc($size = null) {}
}
