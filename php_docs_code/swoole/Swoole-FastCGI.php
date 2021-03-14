<?php
/**
 * Swoole\FastCGI Document
 *
 * @author Leelmes <i@chengxuan.li>
 */
namespace Swoole;
class FastCGI {

const HEADER_LEN = 8;
const HEADER_FORMAT = 'Cversion/Ctype/nrequestId/ncontentLength/CpaddingLength/Creserved';
const MAX_CONTENT_LENGTH = 65535;
const VERSION_1 = 1;
const BEGIN_REQUEST = 1;
const ABORT_REQUEST = 2;
const END_REQUEST = 3;
const PARAMS = 4;
const STDIN = 5;
const STDOUT = 6;
const STDERR = 7;
const DATA = 8;
const GET_VALUES = 9;
const GET_VALUES_RESULT = 10;
const UNKNOWN_TYPE = 11;
const DEFAULT_REQUEST_ID = 1;
const KEEP_CONN = 1;
const RESPONDER = 1;
const AUTHORIZER = 2;
const FILTER = 3;
const REQUEST_COMPLETE = 0;
const CANT_MPX_CONN = 1;
const OVERLOADED = 2;
const UNKNOWN_ROLE = 3;

}
