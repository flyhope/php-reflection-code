<?php
/**
 * Co\redis Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace co;
class redis {

public $setting;
public $host;
public $port;
public $sock;
public $connected = false;
public $errCode = 0;
public $errMsg = '';

public function __construct($config = null) {}
public function __destruct() {}
public function connect($host, $port, $serialize = null) {}
public function setDefer() {}
public function getDefer() {}
public function recv() {}
public function request($params) {}
public function close() {}
public function set() {}
public function setBit() {}
public function setEx() {}
public function psetEx() {}
public function lSet() {}
public function get($key) {}
public function mGet() {}
public function del() {}
public function hDel() {}
public function hSet() {}
public function hMSet() {}
public function hSetNx() {}
public function delete() {}
public function mSet() {}
public function mSetNx() {}
public function getKeys() {}
public function keys() {}
public function exists($key) {}
public function type($key) {}
public function strLen($key) {}
public function lPop($key) {}
public function blPop() {}
public function rPop($key) {}
public function brPop() {}
public function bRPopLPush() {}
public function lSize() {}
public function lLen() {}
public function sSize() {}
public function scard() {}
public function sPop() {}
public function sMembers($key) {}
public function sGetMembers($key) {}
public function sRandMember($key, $integer = null) {}
public function persist() {}
public function ttl($key) {}
public function pttl($key) {}
public function zCard() {}
public function zSize() {}
public function hLen() {}
public function hKeys() {}
public function hVals() {}
public function hGetAll() {}
public function debug($key) {}
public function restore() {}
public function dump($key) {}
public function renameKey() {}
public function rename() {}
public function renameNx() {}
public function rpoplpush() {}
public function randomKey() {}
public function ping() {}
public function auth() {}
public function unwatch() {}
public function watch() {}
public function save() {}
public function bgSave() {}
public function lastSave() {}
public function flushDB() {}
public function flushAll() {}
public function dbSize() {}
public function bgrewriteaof() {}
public function time() {}
public function role() {}
public function setRange() {}
public function setNx($key, $value) {}
public function getSet($key, $value) {}
public function append($key, $value) {}
public function lPushx($key, $value) {}
public function lPush() {}
public function rPush() {}
public function rPushx($key, $value) {}
public function sContains($key, $value) {}
public function sismember($key, $value) {}
public function zScore($key, $value) {}
public function zRank($key, $value) {}
public function zRevRank($key, $value) {}
public function hGet() {}
public function hMGet() {}
public function hExists() {}
public function publish() {}
public function zIncrBy($key, $value, $member) {}
public function zAdd() {}
public function zDeleteRangeByScore() {}
public function zRemRangeByScore() {}
public function zCount() {}
public function zRange($key, $start, $end, $withscores = null) {}
public function zRevRange() {}
public function zRangeByScore() {}
public function zRevRangeByScore() {}
public function zRangeByLex() {}
public function zRevRangeByLex() {}
public function zInter() {}
public function zinterstore() {}
public function zUnion() {}
public function zunionstore() {}
public function incrBy($key, $integer) {}
public function hIncrBy() {}
public function incr($key) {}
public function decrBy($key, $integer) {}
public function decr($key) {}
public function getBit($key, $integer) {}
public function lInsert() {}
public function lGet($key, $integer) {}
public function lIndex($key, $integer) {}
public function setTimeout($key, $integer) {}
public function expire($key, $integer) {}
public function pexpire() {}
public function expireAt($key, $integer) {}
public function pexpireAt($key, $integer) {}
public function move($key, $integer) {}
public function select() {}
public function getRange() {}
public function listTrim() {}
public function ltrim() {}
public function lGetRange() {}
public function lRange() {}
public function lRem() {}
public function lRemove() {}
public function zDeleteRangeByRank() {}
public function zRemRangeByRank() {}
public function incrByFloat($key, $float_number) {}
public function hIncrByFloat() {}
public function bitCount() {}
public function bitOp() {}
public function sAdd() {}
public function sMove() {}
public function sDiff() {}
public function sDiffStore() {}
public function sUnion() {}
public function sUnionStore() {}
public function sInter() {}
public function sInterStore() {}
public function sRemove($key, $value) {}
public function srem($key, $value) {}
public function zDelete() {}
public function zRemove() {}
public function zRem() {}
public function pSubscribe() {}
public function subscribe() {}
public function multi() {}
public function exec() {}
public function eval() {}
public function evalSha() {}
public function script() {}
}
