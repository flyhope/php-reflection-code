<?php
/**
 * Swoole\Constant Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class Constant {

const EVENT_RECEIVE = 'receive';
const EVENT_CONNECT = 'connect';
const EVENT_CLOSE = 'close';
const EVENT_PACKET = 'packet';
const EVENT_REQUEST = 'request';
const EVENT_MESSAGE = 'message';
const EVENT_OPEN = 'open';
const EVENT_HANDSHAKE = 'handshake';
const EVENT_TASK = 'task';
const EVENT_FINISH = 'finish';
const EVENT_START = 'start';
const EVENT_SHUTDOWN = 'shutdown';
const EVENT_WORKER_START = 'workerStart';
const EVENT_WORKER_EXIT = 'workerExit';
const EVENT_WORKER_ERROR = 'workerError';
const EVENT_WORKER_STOP = 'workerStop';
const EVENT_PIPE_MESSAGE = 'pipeMessage';
const EVENT_MANAGER_START = 'managerStart';
const EVENT_MANAGER_STOP = 'managerStop';
const EVENT_ERROR = 'error';
const OPTION_DEBUG_MODE = 'debug_mode';
const OPTION_TRACE_FLAGS = 'trace_flags';
const OPTION_LOG_FILE = 'log_file';
const OPTION_LOG_LEVEL = 'log_level';
const OPTION_LOG_DATE_FORMAT = 'log_date_format';
const OPTION_LOG_DATE_WITH_MICROSECONDS = 'log_date_with_microseconds';
const OPTION_LOG_ROTATION = 'log_rotation';
const OPTION_DISPLAY_ERRORS = 'display_errors';
const OPTION_DNS_SERVER = 'dns_server';
const OPTION_SOCKET_DNS_TIMEOUT = 'socket_dns_timeout';
const OPTION_SOCKET_CONNECT_TIMEOUT = 'socket_connect_timeout';
const OPTION_SOCKET_WRITE_TIMEOUT = 'socket_write_timeout';
const OPTION_SOCKET_SEND_TIMEOUT = 'socket_send_timeout';
const OPTION_SOCKET_READ_TIMEOUT = 'socket_read_timeout';
const OPTION_SOCKET_RECV_TIMEOUT = 'socket_recv_timeout';
const OPTION_SOCKET_BUFFER_SIZE = 'socket_buffer_size';
const OPTION_SOCKET_TIMEOUT = 'socket_timeout';
const OPTION_AIO_CORE_WORKER_NUM = 'aio_core_worker_num';
const OPTION_AIO_WORKER_NUM = 'aio_worker_num';
const OPTION_AIO_MAX_WAIT_TIME = 'aio_max_wait_time';
const OPTION_AIO_MAX_IDLE_TIME = 'aio_max_idle_time';
const OPTION_ENABLE_SIGNALFD = 'enable_signalfd';
const OPTION_WAIT_SIGNAL = 'wait_signal';
const OPTION_DNS_CACHE_REFRESH_TIME = 'dns_cache_refresh_time';
const OPTION_THREAD_NUM = 'thread_num';
const OPTION_MIN_THREAD_NUM = 'min_thread_num';
const OPTION_MAX_THREAD_NUM = 'max_thread_num';
const OPTION_SOCKET_DONTWAIT = 'socket_dontwait';
const OPTION_DNS_LOOKUP_RANDOM = 'dns_lookup_random';
const OPTION_USE_ASYNC_RESOLVER = 'use_async_resolver';
const OPTION_ENABLE_COROUTINE = 'enable_coroutine';
const OPTION_SSL_PROTOCOLS = 'ssl_protocols';
const OPTION_SSL_COMPRESS = 'ssl_compress';
const OPTION_SSL_CERT_FILE = 'ssl_cert_file';
const OPTION_SSL_KEY_FILE = 'ssl_key_file';
const OPTION_SSL_PASSPHRASE = 'ssl_passphrase';
const OPTION_SSL_HOST_NAME = 'ssl_host_name';
const OPTION_SSL_VERIFY_PEER = 'ssl_verify_peer';
const OPTION_SSL_ALLOW_SELF_SIGNED = 'ssl_allow_self_signed';
const OPTION_SSL_CAFILE = 'ssl_cafile';
const OPTION_SSL_CAPATH = 'ssl_capath';
const OPTION_SSL_VERIFY_DEPTH = 'ssl_verify_depth';
const OPTION_OPEN_EOF_CHECK = 'open_eof_check';
const OPTION_OPEN_EOF_SPLIT = 'open_eof_split';
const OPTION_PACKAGE_EOF = 'package_eof';
const OPTION_OPEN_MQTT_PROTOCOL = 'open_mqtt_protocol';
const OPTION_OPEN_LENGTH_CHECK = 'open_length_check';
const OPTION_PACKAGE_LENGTH_TYPE = 'package_length_type';
const OPTION_PACKAGE_LENGTH_OFFSET = 'package_length_offset';
const OPTION_PACKAGE_BODY_OFFSET = 'package_body_offset';
const OPTION_PACKAGE_LENGTH_FUNC = 'package_length_func';
const OPTION_PACKAGE_MAX_LENGTH = 'package_max_length';
const OPTION_BUFFER_HIGH_WATERMARK = 'buffer_high_watermark';
const OPTION_BUFFER_LOW_WATERMARK = 'buffer_low_watermark';
const OPTION_BIND_PORT = 'bind_port';
const OPTION_BIND_ADDRESS = 'bind_address';
const OPTION_OPEN_TCP_NODELAY = 'open_tcp_nodelay';
const OPTION_SOCKS5_HOST = 'socks5_host';
const OPTION_SOCKS5_PORT = 'socks5_port';
const OPTION_SOCKS5_USERNAME = 'socks5_username';
const OPTION_SOCKS5_PASSWORD = 'socks5_password';
const OPTION_HTTP_PROXY_HOST = 'http_proxy_host';
const OPTION_HTTP_PROXY_PORT = 'http_proxy_port';
const OPTION_HTTP_PROXY_USERNAME = 'http_proxy_username';
const OPTION_HTTP_PROXY_USER = 'http_proxy_user';
const OPTION_HTTP_PROXY_PASSWORD = 'http_proxy_password';
const OPTION_TIMEOUT = 'timeout';
const OPTION_CONNECT_TIMEOUT = 'connect_timeout';
const OPTION_READ_TIMEOUT = 'read_timeout';
const OPTION_WRITE_TIMEOUT = 'write_timeout';
const OPTION_SSL_DISABLE_COMPRESSION = 'ssl_disable_compression';
const OPTION_MAX_CORO_NUM = 'max_coro_num';
const OPTION_MAX_COROUTINE = 'max_coroutine';
const OPTION_ENABLE_DEADLOCK_CHECK = 'enable_deadlock_check';
const OPTION_HOOK_FLAGS = 'hook_flags';
const OPTION_ENABLE_PREEMPTIVE_SCHEDULER = 'enable_preemptive_scheduler';
const OPTION_C_STACK_SIZE = 'c_stack_size';
const OPTION_STACK_SIZE = 'stack_size';
const OPTION_DNS_CACHE_EXPIRE = 'dns_cache_expire';
const OPTION_DNS_CACHE_CAPACITY = 'dns_cache_capacity';
const OPTION_RECONNECT = 'reconnect';
const OPTION_DEFER = 'defer';
const OPTION_LOWERCASE_HEADER = 'lowercase_header';
const OPTION_KEEP_ALIVE = 'keep_alive';
const OPTION_WEBSOCKET_MASK = 'websocket_mask';
const OPTION_WEBSOCKET_COMPRESSION = 'websocket_compression';
const OPTION_HTTP_PARSE_COOKIE = 'http_parse_cookie';
const OPTION_HTTP_PARSE_POST = 'http_parse_post';
const OPTION_HTTP_PARSE_FILES = 'http_parse_files';
const OPTION_HTTP_COMPRESSION = 'http_compression';
const OPTION_HTTP_COMPRESSION_LEVEL = 'http_compression_level';
const OPTION_HTTP_GZIP_LEVEL = 'http_gzip_level';
const OPTION_COMPRESSION_MIN_LENGTH = 'compression_min_length';
const OPTION_UPLOAD_TMP_DIR = 'upload_tmp_dir';
const OPTION_HOST = 'host';
const OPTION_PORT = 'port';
const OPTION_SSL = 'ssl';
const OPTION_USER = 'user';
const OPTION_PASSWORD = 'password';
const OPTION_DATABASE = 'database';
const OPTION_CHARSET = 'charset';
const OPTION_STRICT_TYPE = 'strict_type';
const OPTION_FETCH_MODE = 'fetch_mode';
const OPTION_SERIALIZE = 'serialize';
const OPTION_COMPATIBILITY_MODE = 'compatibility_mode';
const OPTION_CHROOT = 'chroot';
const OPTION_GROUP = 'group';
const OPTION_DAEMONIZE = 'daemonize';
const OPTION_PID_FILE = 'pid_file';
const OPTION_REACTOR_NUM = 'reactor_num';
const OPTION_SINGLE_THREAD = 'single_thread';
const OPTION_WORKER_NUM = 'worker_num';
const OPTION_MAX_WAIT_TIME = 'max_wait_time';
const OPTION_MAX_QUEUED_BYTES = 'max_queued_bytes';
const OPTION_SEND_TIMEOUT = 'send_timeout';
const OPTION_DISPATCH_MODE = 'dispatch_mode';
const OPTION_SEND_YIELD = 'send_yield';
const OPTION_DISPATCH_FUNC = 'dispatch_func';
const OPTION_DISCARD_TIMEOUT_REQUEST = 'discard_timeout_request';
const OPTION_ENABLE_UNSAFE_EVENT = 'enable_unsafe_event';
const OPTION_ENABLE_DELAY_RECEIVE = 'enable_delay_receive';
const OPTION_ENABLE_REUSE_PORT = 'enable_reuse_port';
const OPTION_TASK_USE_OBJECT = 'task_use_object';
const OPTION_TASK_OBJECT = 'task_object';
const OPTION_EVENT_OBJECT = 'event_object';
const OPTION_TASK_ENABLE_COROUTINE = 'task_enable_coroutine';
const OPTION_TASK_WORKER_NUM = 'task_worker_num';
const OPTION_TASK_IPC_MODE = 'task_ipc_mode';
const OPTION_TASK_TMPDIR = 'task_tmpdir';
const OPTION_TASK_MAX_REQUEST = 'task_max_request';
const OPTION_TASK_MAX_REQUEST_GRACE = 'task_max_request_grace';
const OPTION_MAX_CONNECTION = 'max_connection';
const OPTION_MAX_CONN = 'max_conn';
const OPTION_START_SESSION_ID = 'start_session_id';
const OPTION_HEARTBEAT_CHECK_INTERVAL = 'heartbeat_check_interval';
const OPTION_HEARTBEAT_IDLE_TIME = 'heartbeat_idle_time';
const OPTION_MAX_REQUEST = 'max_request';
const OPTION_MAX_REQUEST_GRACE = 'max_request_grace';
const OPTION_RELOAD_ASYNC = 'reload_async';
const OPTION_OPEN_CPU_AFFINITY = 'open_cpu_affinity';
const OPTION_CPU_AFFINITY_IGNORE = 'cpu_affinity_ignore';
const OPTION_ENABLE_STATIC_HANDLER = 'enable_static_handler';
const OPTION_DOCUMENT_ROOT = 'document_root';
const OPTION_HTTP_AUTOINDEX = 'http_autoindex';
const OPTION_HTTP_INDEX_FILES = 'http_index_files';
const OPTION_STATIC_HANDLER_LOCATIONS = 'static_handler_locations';
const OPTION_INPUT_BUFFER_SIZE = 'input_buffer_size';
const OPTION_BUFFER_INPUT_SIZE = 'buffer_input_size';
const OPTION_OUTPUT_BUFFER_SIZE = 'output_buffer_size';
const OPTION_BUFFER_OUTPUT_SIZE = 'buffer_output_size';
const OPTION_MESSAGE_QUEUE_KEY = 'message_queue_key';
const OPTION_BACKLOG = 'backlog';
const OPTION_KERNEL_SOCKET_RECV_BUFFER_SIZE = 'kernel_socket_recv_buffer_size';
const OPTION_KERNEL_SOCKET_SEND_BUFFER_SIZE = 'kernel_socket_send_buffer_size';
const OPTION_TCP_DEFER_ACCEPT = 'tcp_defer_accept';
const OPTION_OPEN_TCP_KEEPALIVE = 'open_tcp_keepalive';
const OPTION_OPEN_HTTP_PROTOCOL = 'open_http_protocol';
const OPTION_OPEN_WEBSOCKET_PROTOCOL = 'open_websocket_protocol';
const OPTION_WEBSOCKET_SUBPROTOCOL = 'websocket_subprotocol';
const OPTION_OPEN_WEBSOCKET_CLOSE_FRAME = 'open_websocket_close_frame';
const OPTION_OPEN_WEBSOCKET_PING_FRAME = 'open_websocket_ping_frame';
const OPTION_OPEN_WEBSOCKET_PONG_FRAME = 'open_websocket_pong_frame';
const OPTION_OPEN_HTTP2_PROTOCOL = 'open_http2_protocol';
const OPTION_OPEN_REDIS_PROTOCOL = 'open_redis_protocol';
const OPTION_MAX_IDLE_TIME = 'max_idle_time';
const OPTION_TCP_KEEPIDLE = 'tcp_keepidle';
const OPTION_TCP_KEEPINTERVAL = 'tcp_keepinterval';
const OPTION_TCP_KEEPCOUNT = 'tcp_keepcount';
const OPTION_TCP_USER_TIMEOUT = 'tcp_user_timeout';
const OPTION_TCP_FASTOPEN = 'tcp_fastopen';
const OPTION_PACKAGE_BODY_START = 'package_body_start';
const OPTION_SSL_CLIENT_CERT_FILE = 'ssl_client_cert_file';
const OPTION_SSL_PREFER_SERVER_CIPHERS = 'ssl_prefer_server_ciphers';
const OPTION_SSL_CIPHERS = 'ssl_ciphers';
const OPTION_SSL_ECDH_CURVE = 'ssl_ecdh_curve';
const OPTION_SSL_DHPARAM = 'ssl_dhparam';
const OPTION_SSL_SNI_CERTS = 'ssl_sni_certs';
const OPTION_OPEN_SSL = 'open_ssl';
const OPTION_OPEN_FASTCGI_PROTOCOL = 'open_fastcgi_protocol';

}
