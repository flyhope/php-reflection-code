<?php
/**
 * Swoole\Coroutine\MySQL Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Coroutine;
class MySQL {

    private $serverInfo = '';
    
    public $sock = 0;
    
    public $connected = false;
    
    public $connect_error = '';
    
    public $connect_errno = 0;
    
    public $affected_rows = 0;
    
    public $insert_id = 0;
    
    public $error = '';
    
    public $errno = 0;
    

    public function __construct() {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function __destruct() {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function connect($server_config) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function query($sql, $timeout = null) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function recv() {}
    
    public function begin($timeout = null) {}
    
    public function commit($timeout = null) {}
    
    public function rollback($timeout = null) {}
    
    public function prepare($query, $timeout = null) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function setDefer($defer = null) {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function getDefer() {}
    
    /**
     * Description
     *
     * @return ReturnType
     */
    public function close() {}
    
}
