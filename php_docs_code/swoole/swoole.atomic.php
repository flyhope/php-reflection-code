<?php
/**
 * Swoole\Atomic Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Atomic {


    public function __construct($value = null) {}
    
    /**
     * Add a number to the value to the atomic object.
     *
     * @param integer $add_value The value which will be added to the current value.
     *
     * @return integer
     */
    public function add($add_value = null) {}
    
    /**
     * Subtract a number to the value of the atomic object.
     *
     * @param integer $sub_value The value which will be subtracted to the current value.
     *
     * @return integer
     */
    public function sub($sub_value = null) {}
    
    /**
     * Get the current value of the atomic object.
     *
     * @return integer
     */
    public function get() {}
    
    /**
     * Set a new value to the atomic object.
     *
     * @param integer $value The value to set to the atomic object.
     *
     * @return integer
     */
    public function set($value) {}
    
    public function wait($timeout = null) {}
    
    public function wakeup($count = null) {}
    
    /**
     * Compare and set the value of the atomic object.
     *
     * @param integer $cmp_value The value to compare with the current value of the atomic object.
     * @param integer $new_value The value to set to the atomic object if the cmp_value is the same as the current value of the atomic object.
     *
     * @return integer
     */
    public function cmpset($cmp_value, $new_value) {}
    
}
