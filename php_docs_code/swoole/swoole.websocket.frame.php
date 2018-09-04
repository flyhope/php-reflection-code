<?php
/**
 * Swoole\WebSocket\Frame Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\WebSocket;
class Frame {

    public $fd = 0;
    
    public $data;
    
    public $opcode = 0;
    
    public $finish = false;
    

}
