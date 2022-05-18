<?php
// Globals
$URL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pageTitle = 'Welcome!';
$pageDesc = "...";

// Constants
if (!getenv('ENV')) {
    define('ENV', 'DEV');
} else {
    define('ENV', getenv('ENV'));
}
if (!getenv('BASE_DIR')) {
    define('BASE_DIR', '/script/JDS-PHP-FRAMEWORK/public/');
} else {
    define('BASE_DIR', getenv('BASE_DIR'));
}
define('URL', $URL);
