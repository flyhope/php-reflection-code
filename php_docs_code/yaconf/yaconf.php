<?php
/**
 * Yaconf Document
 *
 * Yaconf is a configurations container,
 * it parses INIT files, stores the result in
 * PHP when PHP is started, the result lives
 * with the whole PHP lifecycle.
 * 
 * @package Yaconf 
 * @author Leelmes <i@chengxuan.li>
 */
class Yaconf {


    /**
     * Retrieve a item
     *
     * @param string $name Configuration key, the key looks like "filename.key", or "filename.sectionName,key".
     * @param mixed $default_value if the key doesn't exists, Yaconf::get will return this as result.
     *
     * @return mixed
     */
    static public function get($name) {}
    
    /**
     * Determine if a item exists
     *
     * @param string $name 
     *
     * @return bool
     */
    static public function has($name) {}
    
}
