<?php
/**
 * Swoole\FastCGI\FrameParser Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole\FastCGI;
class FrameParser {

protected static $classMapping = array (
  1 => 'Swoole\\FastCGI\\Record\\BeginRequest',
  2 => 'Swoole\\FastCGI\\Record\\AbortRequest',
  3 => 'Swoole\\FastCGI\\Record\\EndRequest',
  4 => 'Swoole\\FastCGI\\Record\\Params',
  5 => 'Swoole\\FastCGI\\Record\\Stdin',
  6 => 'Swoole\\FastCGI\\Record\\Stdout',
  7 => 'Swoole\\FastCGI\\Record\\Stderr',
  8 => 'Swoole\\FastCGI\\Record\\Data',
  9 => 'Swoole\\FastCGI\\Record\\GetValues',
  10 => 'Swoole\\FastCGI\\Record\\GetValuesResult',
  11 => 'Swoole\\FastCGI\\Record\\UnknownType',
);

static public function hasFrame($buffer) {}
static public function parseFrame(& $buffer) {}
}
