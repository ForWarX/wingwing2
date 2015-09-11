<?php
// database host
$db_host   = "localhost:3306";

// database name
$db_name   = "wingon";

// database username
$db_user   = "root";

// database password
$db_pass   = "pbcc2015";

// table prefix
$prefix    = "ecs_";

$timezone    = "PRC";

$cookie_path    = "/";

$cookie_domain    = "";

$session = "1440";

define('EC_CHARSET','utf-8');

define('ADMIN_PATH','plugins2');

define('AUTH_KEY', 'this is a key');

define('OLD_AUTH_KEY', '');

define('API_TIME', '2015-08-14 05:36:40');

/**
1	:	error_reporting(E_ALL);
2	:	smarty , force_compile = true; direct_output = false; 不缓存模板 
4	:	include(ECSHOP_PATH . 'includes/lib.debug.php');
8	:	mysql log -- log/mysql_query_...
* 
* */

define('DEBUG_MODE',2); 
?>