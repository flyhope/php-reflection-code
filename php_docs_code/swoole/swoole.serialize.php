<?php
/**
 * Swoole\Serialize Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Serialize {


    /**
     * Serialize the data.
     *
     * @param string $data 
     * @param int $is_fast 
     *
     * @return ReturnType
     */
    static public function pack($data, $flag = null) {}
    
    /**
     * Unserialize the data.
     *
     * @param string $data 
     * @param string $args 
     *
     * @return ReturnType
     */
    static public function unpack($string, $args = null) {}
    
}
