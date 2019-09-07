<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('APP_PATH', realpath(dirname(__DIR__)));

require_once APP_PATH . '/core/config/inc.php';
require_once MODEL;
require_once ROUTE;
require_once VIEW;
$route = new Route;
$model = new Model();
