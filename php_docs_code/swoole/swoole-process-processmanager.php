<?php
/**
 * Swoole\process\processmanager Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace swoole\process;
class processmanager {

protected $pool;
protected $ipcType = 0;
protected $msgQueueKey = 0;
protected $startFuncMap = array (
);

public function __construct($ipcType = null, $msgQueueKey = null) {}
public function add($func, $enableCoroutine = null) {}
public function addBatch($workerNum, $func, $enableCoroutine = null) {}
public function start() {}
public function setIPCType($ipcType) {}
public function getIPCType() {}
public function setMsgQueueKey($msgQueueKey) {}
public function getMsgQueueKey() {}
}
