<?php
/**
 * Swoole\MySQL Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class MySQL {

    const STATE_QUERY = 0;
    const STATE_READ_START = 1;
    const STATE_READ_FIELD  = 2;
    const STATE_READ_ROW = 3;
    const STATE_READ_END = 5;
    const STATE_CLOSED = 6;
    public $serverInfo;
    
    public $sock;
    
    public $connected = false;
    
    public $errno = 0;
    
    public $connect_errno = 0;
    
    public $error;
    
    public $connect_error;
    
    public $insert_id;
    
    public $affected_rows;
    
    public $onConnect;
    
    public $onClose;
    

    public function __construct() {}
    
    /**
     * Destory the async MySQL client.
     *
     * @return void
     */
    public function __destruct() {}
    
    /**
     * Connect to the remote MySQL server.
     *
     * @param array $server_config 
     * @param callable $callback 
     *
     * @return void
     */
    public function connect($server_config, $callback) {}
    
    public function begin($callback) {}
    
    public function commit($callback) {}
    
    public function rollback($callback) {}
    
    /**
     * Run the SQL query.
     *
     * @param string $sql 
     * @param callable $callback 
     *
     * @return ReturnType
     */
    public function query($sql, $callback) {}
    
    /**
     * Close the async MySQL connection.
     *
     * @return void
     */
    public function close() {}
    
    public function getState() {}
    
    /**
     * Register callback function based on event name.
     *
     * @param string $event_name 
     * @param callable $callback 
     *
     * @return void
     */
    public function on($event_name, $callback) {}
    
}
