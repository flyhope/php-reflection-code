<?php
/**
 * Swoole\Client Document
 *
 * @package Swoole 
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Client {

    const MSG_OOB = 1;
    const MSG_PEEK = 2;
    const MSG_DONTWAIT = 64;
    const MSG_WAITALL = 256;
    const SHUT_RDWR = 2;
    const SHUT_RD = 0;
    const SHUT_WR = 1;
    public $errCode = 0;
    
    public $sock = 0;
    
    public $reuse = false;
    
    public $reuseCount = 0;
    
    public $type = 0;
    
    public $id;
    
    public $setting;
    
    public $onConnect;
    
    public $onError;
    
    public $onReceive;
    
    public $onClose;
    
    public $onBufferFull;
    
    public $onBufferEmpty;
    
    public $onSSLReady;
    

    public function __construct($type, $async = null) {}
    
    /**
     * Destruct the Swoole client.
     *
     * @return void
     */
    public function __destruct() {}
    
    /**
     * Set the Swoole client parameters before the connection is established.
     *
     * @param array $settings 
     *
     * @return void
     */
    public function set($settings) {}
    
    /**
     * Connect to the remote TCP or UDP port.
     *
     * @param string $host The host name of the remote address.
     * @param integer $port The port number of the remote address.
     * @param integer $timeout The timeout(second) of connect/send/recv, the dafault value is 0.1s
     * @param integer $flag If the type of client is UDP, the $flag means if to enable the configuration udp_connect. If the configuration udp_connect is enabled, the client will only receive the data from specified ip:port. If the type of client is TCP and the $flag is set to 1, it must use swoole_client_select to check the connection status before send/recv.
     *
     * @return bool
     */
    public function connect($host, $port = null, $timeout = null, $sock_flag = null) {}
    
    /**
     * Receive data from the remote socket.
     *
     * @param string $size 
     * @param string $flag 
     *
     * @return void
     */
    public function recv($size = null, $flag = null) {}
    
    /**
     * Send data to the remote TCP socket.
     *
     * @param string $data The data to send which can be string or binary
     * @param string $flag 
     *
     * @return integer
     */
    public function send($data, $flag = null) {}
    
    /**
     * Redirect the data to another file descriptor.
     *
     * @param string $socket 
     *
     * @return void
     */
    public function pipe($dst_socket) {}
    
    /**
     * Send file to the remote TCP socket.
     *
     * @param string $filename File path of the file to send.
     * @param int $offset Offset of the file to send
     *
     * @return boolean
     */
    public function sendfile($filename, $offset = null, $length = null) {}
    
    /**
     * Send data to the remote UDP address.
     *
     * @param string $ip The IP address of remote host, IPv4 or IPv6.
     * @param integer $port The port number of remote host.
     * @param string $data The data to send which should be less-than 64K.
     *
     * @return boolean
     */
    public function sendto($ip, $port, $data) {}
    
    /**
     * Remove the TCP client from system event loop.
     *
     * @return void
     */
    public function sleep() {}
    
    /**
     * Add the TCP client back into the system event loop.
     *
     * @return void
     */
    public function wakeup() {}
    
    /**
     * Pause receiving data.
     *
     * @return void
     */
    public function pause() {}
    
    /**
     * Resume receiving data.
     *
     * @return void
     */
    public function resume() {}
    
    public function shutdown($how) {}
    
    public function enableSSL($callback = null) {}
    
    public function getPeerCert() {}
    
    public function verifyPeerCert() {}
    
    /**
     * Check if the connection is established.
     *
     * @return bool
     */
    public function isConnected() {}
    
    /**
     * Get the local socket name of the connection.
     *
     * @return array
     */
    public function getsockname() {}
    
    /**
     * Get the remote socket name of the connection.
     *
     * @return array
     */
    public function getpeername() {}
    
    /**
     * Close the connection established.
     *
     * @param bool $force Whether force to close the connection.
     *
     * @return bool
     */
    public function close($force = null) {}
    
    /**
     * Add callback functions triggered by events.
     *
     * @param string $event 
     * @param callable $callback 
     *
     * @return void
     */
    public function on($event_name, $callback) {}
    
    public function getSocket() {}
    
}
