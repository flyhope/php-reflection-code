<?php
/**
 * Memcached Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
class Memcached {

const LIBMEMCACHED_VERSION_HEX = 16777240;
const OPT_COMPRESSION = -1001;
const OPT_COMPRESSION_TYPE = -1004;
const OPT_PREFIX_KEY = -1002;
const OPT_SERIALIZER = -1003;
const OPT_USER_FLAGS = -1006;
const OPT_STORE_RETRY_COUNT = -1005;
const HAVE_IGBINARY = true;
const HAVE_JSON = true;
const HAVE_MSGPACK = true;
const HAVE_SESSION = true;
const HAVE_SASL = true;
const OPT_HASH = 2;
const HASH_DEFAULT = 0;
const HASH_MD5 = 1;
const HASH_CRC = 2;
const HASH_FNV1_64 = 3;
const HASH_FNV1A_64 = 4;
const HASH_FNV1_32 = 5;
const HASH_FNV1A_32 = 6;
const HASH_HSIEH = 7;
const HASH_MURMUR = 8;
const OPT_DISTRIBUTION = 9;
const DISTRIBUTION_MODULA = 0;
const DISTRIBUTION_CONSISTENT = 1;
const DISTRIBUTION_VIRTUAL_BUCKET = 6;
const OPT_LIBKETAMA_COMPATIBLE = 16;
const OPT_LIBKETAMA_HASH = 17;
const OPT_TCP_KEEPALIVE = 32;
const OPT_BUFFER_WRITES = 10;
const OPT_BINARY_PROTOCOL = 18;
const OPT_NO_BLOCK = 0;
const OPT_TCP_NODELAY = 1;
const OPT_SOCKET_SEND_SIZE = 4;
const OPT_SOCKET_RECV_SIZE = 5;
const OPT_CONNECT_TIMEOUT = 14;
const OPT_RETRY_TIMEOUT = 15;
const OPT_DEAD_TIMEOUT = 36;
const OPT_SEND_TIMEOUT = 19;
const OPT_RECV_TIMEOUT = 20;
const OPT_POLL_TIMEOUT = 8;
const OPT_CACHE_LOOKUPS = 6;
const OPT_SERVER_FAILURE_LIMIT = 21;
const OPT_AUTO_EJECT_HOSTS = 28;
const OPT_HASH_WITH_PREFIX_KEY = 25;
const OPT_NOREPLY = 26;
const OPT_SORT_HOSTS = 12;
const OPT_VERIFY_KEY = 13;
const OPT_USE_UDP = 27;
const OPT_NUMBER_OF_REPLICAS = 29;
const OPT_RANDOMIZE_REPLICA_READ = 30;
const OPT_REMOVE_FAILED_SERVERS = 35;
const OPT_SERVER_TIMEOUT_LIMIT = 37;
const RES_SUCCESS = 0;
const RES_FAILURE = 1;
const RES_HOST_LOOKUP_FAILURE = 2;
const RES_UNKNOWN_READ_FAILURE = 7;
const RES_PROTOCOL_ERROR = 8;
const RES_CLIENT_ERROR = 9;
const RES_SERVER_ERROR = 10;
const RES_WRITE_FAILURE = 5;
const RES_DATA_EXISTS = 12;
const RES_NOTSTORED = 14;
const RES_NOTFOUND = 16;
const RES_PARTIAL_READ = 18;
const RES_SOME_ERRORS = 19;
const RES_NO_SERVERS = 20;
const RES_END = 21;
const RES_ERRNO = 26;
const RES_BUFFERED = 32;
const RES_TIMEOUT = 31;
const RES_BAD_KEY_PROVIDED = 33;
const RES_STORED = 15;
const RES_DELETED = 22;
const RES_STAT = 24;
const RES_ITEM = 25;
const RES_NOT_SUPPORTED = 28;
const RES_FETCH_NOTFINISHED = 30;
const RES_SERVER_MARKED_DEAD = 35;
const RES_UNKNOWN_STAT_KEY = 36;
const RES_INVALID_HOST_PROTOCOL = 34;
const RES_MEMORY_ALLOCATION_FAILURE = 17;
const RES_CONNECTION_SOCKET_CREATE_FAILURE = 11;
const RES_E2BIG = 37;
const RES_KEY_TOO_BIG = 39;
const RES_SERVER_TEMPORARILY_DISABLED = 47;
const RES_SERVER_MEMORY_ALLOCATION_FAILURE = 48;
const RES_AUTH_PROBLEM = 40;
const RES_AUTH_FAILURE = 41;
const RES_AUTH_CONTINUE = 42;
const RES_PAYLOAD_FAILURE = -1001;
const SERIALIZER_PHP = 1;
const SERIALIZER_IGBINARY = 2;
const SERIALIZER_JSON = 3;
const SERIALIZER_JSON_ARRAY = 4;
const SERIALIZER_MSGPACK = 5;
const COMPRESSION_FASTLZ = 2;
const COMPRESSION_ZLIB = 1;
const GET_PRESERVE_ORDER = 1;
const GET_EXTENDED = 2;
const GET_ERROR_RETURN_VALUE = false;

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
public function getStats($args) {}
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
