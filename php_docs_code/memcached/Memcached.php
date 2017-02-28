<?php
/**
 * Memcached Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class Memcached {

LIBMEMCACHED_VERSION_HEX = 16777238;
OPT_COMPRESSION = -1001;
OPT_COMPRESSION_TYPE = -1004;
OPT_PREFIX_KEY = -1002;
OPT_SERIALIZER = -1003;
OPT_USER_FLAGS = -1006;
OPT_STORE_RETRY_COUNT = -1005;
HAVE_IGBINARY = 0;
HAVE_JSON = 1;
HAVE_MSGPACK = 0;
HAVE_SESSION = 1;
HAVE_SASL = 1;
OPT_HASH = 2;
HASH_DEFAULT = 0;
HASH_MD5 = 1;
HASH_CRC = 2;
HASH_FNV1_64 = 3;
HASH_FNV1A_64 = 4;
HASH_FNV1_32 = 5;
HASH_FNV1A_32 = 6;
HASH_HSIEH = 7;
HASH_MURMUR = 8;
OPT_DISTRIBUTION = 9;
DISTRIBUTION_MODULA = 0;
DISTRIBUTION_CONSISTENT = 1;
DISTRIBUTION_VIRTUAL_BUCKET = 6;
OPT_LIBKETAMA_COMPATIBLE = 16;
OPT_LIBKETAMA_HASH = 17;
OPT_TCP_KEEPALIVE = 32;
OPT_BUFFER_WRITES = 10;
OPT_BINARY_PROTOCOL = 18;
OPT_NO_BLOCK = 0;
OPT_TCP_NODELAY = 1;
OPT_SOCKET_SEND_SIZE = 4;
OPT_SOCKET_RECV_SIZE = 5;
OPT_CONNECT_TIMEOUT = 14;
OPT_RETRY_TIMEOUT = 15;
OPT_DEAD_TIMEOUT = 36;
OPT_SEND_TIMEOUT = 19;
OPT_RECV_TIMEOUT = 20;
OPT_POLL_TIMEOUT = 8;
OPT_CACHE_LOOKUPS = 6;
OPT_SERVER_FAILURE_LIMIT = 21;
OPT_AUTO_EJECT_HOSTS = 28;
OPT_HASH_WITH_PREFIX_KEY = 25;
OPT_NOREPLY = 26;
OPT_SORT_HOSTS = 12;
OPT_VERIFY_KEY = 13;
OPT_USE_UDP = 27;
OPT_NUMBER_OF_REPLICAS = 29;
OPT_RANDOMIZE_REPLICA_READ = 30;
OPT_REMOVE_FAILED_SERVERS = 35;
RES_SUCCESS = 0;
RES_FAILURE = 1;
RES_HOST_LOOKUP_FAILURE = 2;
RES_UNKNOWN_READ_FAILURE = 7;
RES_PROTOCOL_ERROR = 8;
RES_CLIENT_ERROR = 9;
RES_SERVER_ERROR = 10;
RES_WRITE_FAILURE = 5;
RES_DATA_EXISTS = 12;
RES_NOTSTORED = 14;
RES_NOTFOUND = 16;
RES_PARTIAL_READ = 18;
RES_SOME_ERRORS = 19;
RES_NO_SERVERS = 20;
RES_END = 21;
RES_ERRNO = 26;
RES_BUFFERED = 32;
RES_TIMEOUT = 31;
RES_BAD_KEY_PROVIDED = 33;
RES_STORED = 15;
RES_DELETED = 22;
RES_STAT = 24;
RES_ITEM = 25;
RES_NOT_SUPPORTED = 28;
RES_FETCH_NOTFINISHED = 30;
RES_SERVER_MARKED_DEAD = 35;
RES_UNKNOWN_STAT_KEY = 36;
RES_INVALID_HOST_PROTOCOL = 34;
RES_MEMORY_ALLOCATION_FAILURE = 17;
RES_CONNECTION_SOCKET_CREATE_FAILURE = 11;
RES_E2BIG = 37;
RES_KEY_TOO_BIG = 39;
RES_SERVER_TEMPORARILY_DISABLED = 47;
RES_SERVER_MEMORY_ALLOCATION_FAILURE = 48;
RES_AUTH_PROBLEM = 40;
RES_AUTH_FAILURE = 41;
RES_AUTH_CONTINUE = 42;
RES_PAYLOAD_FAILURE = -1001;
SERIALIZER_PHP = 1;
SERIALIZER_IGBINARY = 2;
SERIALIZER_JSON = 3;
SERIALIZER_JSON_ARRAY = 4;
SERIALIZER_MSGPACK = 5;
COMPRESSION_FASTLZ = 2;
COMPRESSION_ZLIB = 1;
GET_PRESERVE_ORDER = 1;
GET_EXTENDED = 2;
GET_ERROR_RETURN_VALUE = false;

public function __construct($persistent_id = null, $callback = null) {}
public function getResultCode() {}
public function getResultMessage() {}
public function get($key, $cache_cb = null, $get_flags = null) {}
public function getByKey($server_key, $key, $cache_cb = null, $get_flags = null) {}
public function getMulti($keys, $get_flags = null) {}
public function getMultiByKey($server_key, $keys, $get_flags = null) {}
public function getDelayed($keys, $with_cas = null, $value_cb = null) {}
public function getDelayedByKey($server_key, $keys, $with_cas = null, $value_cb = null) {}
public function fetch() {}
public function fetchAll() {}
public function set($key, $value, $expiration = null) {}
public function setByKey($server_key, $key, $value, $expiration = null) {}
public function touch($key, $expiration) {}
public function touchByKey($server_key, $key, $expiration) {}
public function setMulti($items, $expiration = null) {}
public function setMultiByKey($server_key, $items, $expiration = null) {}
public function cas($cas_token, $key, $value, $expiration = null) {}
public function casByKey($cas_token, $server_key, $key, $value, $expiration = null) {}
public function add($key, $value, $expiration = null) {}
public function addByKey($server_key, $key, $value, $expiration = null) {}
public function append($key, $value, $expiration = null) {}
public function appendByKey($server_key, $key, $value, $expiration = null) {}
public function prepend($key, $value, $expiration = null) {}
public function prependByKey($server_key, $key, $value, $expiration = null) {}
public function replace($key, $value, $expiration = null) {}
public function replaceByKey($server_key, $key, $value, $expiration = null) {}
public function delete($key, $time = null) {}
public function deleteMulti($keys, $time = null) {}
public function deleteByKey($server_key, $key, $time = null) {}
public function deleteMultiByKey($server_key, $keys, $time = null) {}
public function increment($key, $offset = null, $initial_value = null, $expiry = null) {}
public function decrement($key, $offset = null, $initial_value = null, $expiry = null) {}
public function incrementByKey($server_key, $key, $offset = null, $initial_value = null, $expiry = null) {}
public function decrementByKey($server_key, $key, $offset = null, $initial_value = null, $expiry = null) {}
public function addServer($host, $port, $weight = null) {}
public function addServers($servers) {}
public function getServerList() {}
public function getServerByKey($server_key) {}
public function resetServerList() {}
public function quit() {}
public function flushBuffers() {}
public function getLastErrorMessage() {}
public function getLastErrorCode() {}
public function getLastErrorErrno() {}
public function getLastDisconnectedServer() {}
public function getStats() {}
public function getVersion() {}
public function getAllKeys() {}
public function flush($delay = null) {}
public function getOption($option) {}
public function setOption($option, $value) {}
public function setOptions($options) {}
public function setBucket($host_map, $forward_map, $replicas) {}
public function setSaslAuthData($username, $password) {}
public function isPersistent() {}
public function isPristine() {}
}
