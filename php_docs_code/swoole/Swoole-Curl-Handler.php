<?php
/**
 * Swoole\Curl\Handler Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\Curl;
final class Handler implements \Stringable {

private $client;
private $info = array (
  'url' => '',
  'content_type' => '',
  'http_code' => 0,
  'header_size' => 0,
  'request_size' => 0,
  'filetime' => -1,
  'ssl_verify_result' => 0,
  'redirect_count' => 0,
  'total_time' => 5.3E-5,
  'namelookup_time' => 0.0,
  'connect_time' => 0.0,
  'pretransfer_time' => 0.0,
  'size_upload' => 0.0,
  'size_download' => 0.0,
  'speed_download' => 0.0,
  'speed_upload' => 0.0,
  'download_content_length' => -1.0,
  'upload_content_length' => -1.0,
  'starttransfer_time' => 0.0,
  'redirect_time' => 0.0,
  'redirect_url' => '',
  'primary_ip' => '',
  'certinfo' => 
  array (
  ),
  'primary_port' => 0,
  'local_ip' => '',
  'local_port' => 0,
  'http_version' => 0,
  'protocol' => 0,
  'ssl_verifyresult' => 0,
  'scheme' => '',
);
private $withHeaderOut = false;
private $withFileTime = false;
private $urlInfo;
private $postData;
private $infile;
private $infileSize = 9223372036854775807;
private $outputStream;
private $proxyType;
private $proxy;
private $proxyPort = 1080;
private $proxyUsername;
private $proxyPassword;
private $clientOptions = array (
);
private $followLocation = false;
private $autoReferer = false;
private $maxRedirects;
private $withHeader = false;
private $nobody = false;
private $headerFunction;
private $readFunction;
private $writeFunction;
private $progressFunction;
private $returnTransfer = false;
private $method = '';
private $headers = array (
);
private $headerMap = array (
);
private $transfer;
private $errCode = 0;
private $errMsg = '';
private $failOnError = false;
private $closed = false;
private $cookieJar = '';

public function __construct($url = null) {}
public function __toString() {}
public function isAvailable() {}
public function setOpt($opt, $value) {}
public function exec() {}
public function getInfo() {}
public function errno() {}
public function error() {}
public function reset() {}
public function getContent() {}
public function close() {}
private function create($urlInfo = null) {}
private function getUrl() {}
private function setUrl($url, $setInfo = null) {}
private function setUrlInfo($urlInfo) {}
private function setPort($port) {}
private function setError($code, $msg = null) {}
private function hasHeader($headerName) {}
private function setHeader($headerName, $value) {}
private function setOption($opt, $value) {}
private function execute() {}
static private function unparseUrl($parsedUrl) {}
private function getRedirectUrl($location) {}
}
