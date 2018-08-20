<?php

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
define('APP_PATH', dirname(realpath(__FILE__)));
define('VIEWS_PATH', APP_PATH . DS . 'views' . DS);


defined('DATABASE_HOST_NAME') ? NULL : define('DATABASE_HOST_NAME', 'localhost');
defined('DATABASE_USER_NAME') ? NULL : define('DATABASE_USER_NAME', 'root');
defined('DATABASE_PASSWORD') ? NULL : define('DATABASE_PASSWORD', '');
defined('DATABASE_DB_NAME') ? NULL : define('DATABASE_DB_NAME', 'php_pdo');
defined('DATABASE_PORT_NAME') ? NULL : define('DATABASE_PORT_NAME', '3306');
defined('DATABASE_CONN_DRIVER') ? NULL : define('DATABASE_CONN_DRIVER', 1);
