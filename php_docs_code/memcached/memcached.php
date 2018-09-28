<?php
/**
 * Memcached Document
 *
 * 表征到memcached服务集群的连接。
 * 
 * @package Memcached 
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
    const HAVE_IGBINARY = false;
    const HAVE_JSON = false;
    const HAVE_MSGPACK = false;
    const HAVE_SESSION = true;
    const HAVE_SASL = false;
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
    
    /**
     * 返回最后一次操作的结果代码
     *
     * @return int
     */
    public function getResultCode() {}
    
    /**
     * 返回最后一次操作的结果描述消息
     *
     * @return string
     */
    public function getResultMessage() {}
    
    /**
     * 检索一个元素
     *
     * @param string $key 要检索的元素的key。
     * @param callback $cache_cb 通读缓存回掉函数或&null;.
     * @param float $cas_token 检索的元素的CAS标记值。
     *
     * @return mixed
     */
    public function get($key, $cache_cb = null, $get_flags = null) {}
    
    /**
     * 从特定的服务器检索元素
     *
     * @param string $server_key &memcached.parameter.server_key;
     * @param string $key 要抓取的元素的key。
     * @param callback $cache_cb 通读缓存回掉函数或&null;.
     * @param float $cas_token 检索的元素的CAS标记值。
     *
     * @return mixed
     */
    public function getByKey($server_key, $key, $cache_cb = null, $get_flags = null) {}
    
    /**
     * 检索多个元素
     *
     * @param array $keys 要检索的key的数组。
     * @param array $cas_tokens 用来存储检索到的元素的CAS标记。
     * @param int $flags get操作的附加选项。
     *
     * @return mixed
     */
    public function getMulti($keys, $get_flags = null) {}
    
    /**
     * 从特定服务器检索多个元素
     *
     * @param string $server_key &memcached.parameter.server_key;
     * @param array $keys 要检索的key的数组。
     * @param string $cas_tokens 用来存储检索到的元素的CAS标记。
     * @param int $flags get操作的附加选项。
     *
     * @return array
     */
    public function getMultiByKey($server_key, $keys, $get_flags = null) {}
    
    /**
     * 请求多个元素
     *
     * @param array $keys 要请求的key的数组。
     * @param bool $with_cas 是否同时请求CAS标记。
     * @param callback $value_cb 结果回掉函数或&null;。
     *
     * @return bool
     */
    public function getDelayed($keys, $with_cas = null, $value_cb = null) {}
    
    /**
     * 从指定的服务器上请求多个元素
     *
     * @param string $server_key &memcached.parameter.server_key;
     * @param array $keys 要请求的key的数组。
     * @param bool $with_cas 是否同时请求CAS标记。
     * @param callback $value_cb 结果回掉函数或&null;。
     *
     * @return bool
     */
    public function getDelayedByKey($server_key, $keys, $with_cas = null, $value_cb = null) {}
    
    /**
     * 抓取下一个结果
     *
     * @return array
     */
    public function fetch() {}
    
    /**
     * 抓取所有剩余的结果
     *
     * @return array
     */
    public function fetchAll() {}
    
    /**
     * 存储一个元素
     *
     * @param string $key &memcached.parameter.key;
     * @param mixed $value &memcached.parameter.value;
     * @param int $expiration &memcached.parameter.expiration;
     *
     * @return bool
     */
    public function set($key, $value, $expiration = null) {}
    
    /**
     * Store an item on a specific server
     *
     * @param string $server_key &memcached.parameter.server_key;
     * @param string $key &memcached.parameter.key;
     * @param mixed $value &memcached.parameter.value;
     * @param int $expiration &memcached.parameter.expiration;
     *
     * @return bool
     */
    public function setByKey($server_key, $key, $value, $expiration = null) {}
    
    public function touch($key, $expiration) {}
    
    public function touchByKey($server_key, $key, $expiration) {}
    
    /**
     * 存储多个元素
     *
     * @param array $items &memcached.parameter.items;
     * @param int $expiration &memcached.parameter.expiration;
     *
     * @return bool
     */
    public function setMulti($items, $expiration = null) {}
    
    /**
     * Store multiple items on a specific server
     *
     * @param string $server_key &memcached.parameter.server_key;
     * @param array $items &memcached.parameter.items;
     * @param int $expiration &memcached.parameter.expiration;
     *
     * @return bool
     */
    public function setMultiByKey($server_key, $items, $expiration = null) {}
    
    /**
     * 比较并交换值
     *
     * @param float $cas_token 与已存在元素关联的唯一的值，由Memcache生成。
     * @param string $key &memcached.parameter.key;
     * @param mixed $value &memcached.parameter.value;
     * @param int $expiration &memcached.parameter.expiration;
     *
     * @return bool
     */
    public function cas($cas_token, $key, $value, $expiration = null) {}
    
    /**
     * 在指定服务器上比较并交换值
     *
     * @param float $cas_token 与已存在元素关联的唯一的值，由Memcache生成。
     * @param string $server_key &memcached.parameter.server_key;
     * @param string $key &memcached.parameter.key;
     * @param mixed $value &memcached.parameter.value;
     * @param int $expiration &memcached.parameter.expiration;
     *
     * @return bool
     */
    public function casByKey($cas_token, $server_key, $key, $value, $expiration = null) {}
    
    /**
     * 向一个新的key下面增加一个元素
     *
     * @param string $key &memcached.parameter.key;
     * @param mixed $value &memcached.parameter.value;
     * @param int $expiration &memcached.parameter.expiration;
     *
     * @return bool
     */
    public function add($key, $value, $expiration = null) {}
    
    /**
     * 在指定服务器上的一个新的key下增加一个元素
     *
     * @param string $server_key &memcached.parameter.server_key;
     * @param string $key &memcached.parameter.key;
     * @param mixed $value &memcached.parameter.value;
     * @param int $expiration &memcached.parameter.expiration;
     *
     * @return bool
     */
    public function addByKey($server_key, $key, $value, $expiration = null) {}
    
    /**
     * 向已存在元素后追加数据
     *
     * @param string $key &memcached.parameter.key;
     * @param string $value 将要追加的值。
     *
     * @return bool
     */
    public function append($key, $value, $expiration = null) {}
    
    /**
     * 向指定服务器上已存在元素后追加数据
     *
     * @param string $server_key &memcached.parameter.server_key;
     * @param string $key &memcached.parameter.key;
     * @param string $value 要追加的字符串。
     *
     * @return bool
     */
    public function appendByKey($server_key, $key, $value, $expiration = null) {}
    
    /**
     * 向一个已存在的元素前面追加数据
     *
     * @param string $key 要向前追加数据的元素的key。
     * @param string $value 要追加的字符串。
     *
     * @return bool
     */
    public function prepend($key, $value, $expiration = null) {}
    
    /**
     * Prepend data to an existing item on a specific server
     *
     * @param string $server_key &memcached.parameter.server_key;
     * @param string $key 要向前追加数据的元素的key。
     * @param string $value 要追加的字符串。
     *
     * @return bool
     */
    public function prependByKey($server_key, $key, $value, $expiration = null) {}
    
    /**
     * 替换已存在key下的元素
     *
     * @param string $key &memcached.parameter.key;
     * @param mixed $value &memcached.parameter.value;
     * @param int $expiration &memcached.parameter.expiration;
     *
     * @return bool
     */
    public function replace($key, $value, $expiration = null) {}
    
    /**
     * Replace the item under an existing key on a specific server
     *
     * @param string $server_key &memcached.parameter.server_key;
     * @param string $key &memcached.parameter.key;
     * @param mixed $value &memcached.parameter.value;
     * @param int $expiration &memcached.parameter.expiration;
     *
     * @return bool
     */
    public function replaceByKey($server_key, $key, $value, $expiration = null) {}
    
    /**
     * 删除一个元素
     *
     * @param string $key 要删除的key
     * @param int $time 服务端等待删除该元素的总时间(或一个Unix时间戳表明的实际删除时间).
     *
     * @return bool
     */
    public function delete($key, $time = 0) {}
    
    public function deleteMulti($keys, $time = null) {}
    
    /**
     * 从指定的服务器删除一个元素
     *
     * @param string $server_key &memcached.parameter.server_key;
     * @param string $key 要删除的key。
     * @param int $time 服务端等待删除该元素的总时间(或一个Unix时间戳表明的实际删除时间).
     *
     * @return bool
     */
    public function deleteByKey($server_key, $key, $time = 0) {}
    
    public function deleteMultiByKey($server_key, $keys, $time = null) {}
    
    /**
     * 增加数值元素的值
     *
     * @param string $key 要增加值的元素的key。
     * @param int $offset 要将元素的值增加的大小。
     *
     * @return int
     */
    public function increment($key, $offset = 1, $initial_value = null, $expiry = null) {}
    
    /**
     * 减小数值元素的值
     *
     * @param string $key 将要减小值的元素的key。
     * @param int $offset 要将减小指定元素的值减小多少。
     *
     * @return int
     */
    public function decrement($key, $offset = 1, $initial_value = null, $expiry = null) {}
    
    public function incrementByKey($server_key, $key, $offset = null, $initial_value = null, $expiry = null) {}
    
    public function decrementByKey($server_key, $key, $offset = null, $initial_value = null, $expiry = null) {}
    
    /**
     * 向服务器池中增加一个服务器
     *
     * @param string $host memcached服务端主机名。如果主机名无效，相关的数据操作的返回代码将被设置为Memcached::RES_HOST_LOOKUP_FAILURE。
     * @param int $port memcached服务端端口号，通常是11211。
     * @param int $weight 此服务器相对于服务器池中所有服务器的权重。此参数用来控制服务器在操作时被选种的概率。这个仅用于一致性 分布选项，并且这个值通常是由服务端分配的内存来设置的。
     *
     * @return bool
     */
    public function addServer($host, $port, $weight = 0) {}
    
    /**
     * 向服务器池中增加多台服务器
     *
     * @param array $servers 
     *
     * @return bool
     */
    public function addServers($servers) {}
    
    /**
     * 获取服务器池中的服务器列表
     *
     * @return array
     */
    public function getServerList() {}
    
    /**
     * 获取一个key所映射的服务器信息
     *
     * @param string $server_key &memcached.parameter.server_key;
     *
     * @return array
     */
    public function getServerByKey($server_key) {}
    
    public function resetServerList() {}
    
    /**
     * 关闭所有打开的链接。
     *
     * @return bool
     */
    public function quit() {}
    
    public function flushBuffers() {}
    
    public function getLastErrorMessage() {}
    
    public function getLastErrorCode() {}
    
    public function getLastErrorErrno() {}
    
    public function getLastDisconnectedServer() {}
    
    /**
     * 获取服务器池的统计信息
     *
     * @return array
     */
    public function getStats($args) {}
    
    /**
     * 获取服务器池中所有服务器的版本信息
     *
     * @return array
     */
    public function getVersion() {}
    
    public function getAllKeys() {}
    
    /**
     * 作废缓存中的所有元素
     *
     * @param int $delay 在作废所有元素之前等待的时间（单位秒）。
     *
     * @return bool
     */
    public function flush($delay = 0) {}
    
    /**
     * 获取Memcached的选项值
     *
     * @param int $option Memcached::OPT_*系列常量中的一个。
     *
     * @return mixed
     */
    public function getOption($option) {}
    
    /**
     * 设置一个memcached选项
     *
     * @param int $option 
     * @param mixed $value 
     *
     * @return bool
     */
    public function setOption($option, $value) {}
    
    public function setOptions($options) {}
    
    public function setBucket($host_map, $forward_map, $replicas) {}
    
    public function isPersistent() {}
    
    public function isPristine() {}
    
}
