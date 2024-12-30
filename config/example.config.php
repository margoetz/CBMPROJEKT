<?php declare(strict_types=1);


// ------------------------------------------------------------------------------
// -- Paths
// ------------------------------------------------------------------------------

define('APP_ROOT', dirname(__DIR__));

const APP_PUBLIC    = APP_ROOT . '/public';
const APP_SERVICES  = APP_ROOT . '/services';
const APP_TEMPLATES = APP_ROOT . '/templates';



// ------------------------------------------------------------------------------
// -- Database configuration
// ------------------------------------------------------------------------------

const DB = [
    'name'    => '', // Database name
    'pass'    => '',
    'host'    => '127.0.0.1',
    'port'    => 3306,
    'options' => [],
];
