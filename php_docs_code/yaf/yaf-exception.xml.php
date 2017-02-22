<?php
/**
 * @package yaf
 * @author Leelmes <i@chengxuan.li> (DOC Only)
 */
class Yaf_Exception extends Exception {

    protected $message;

    protected $code;

    protected $previous;

    /**
     * The __construct purpose
     */
    public function __construct() {}

    /**
     * The getPrevious purpose
     *
     * @return void
     */
    public function getPrevious() {}


}