<?php
use Dotenv\Dotenv;
use Pecee\SimpleRouter\SimpleRouter;
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv::createImmutable(getcwd());
$dotenv->load();

/* Load external routes file */
require_once __DIR__ . '/App/Routes/Routes.php'; // تغییر مسیر به صورت مطلق

/**
 * The default namespace for route-callbacks, so we don't have to specify it each time.
 * Can be overwritten by using the namespace config option on your routes.
 */

SimpleRouter::setDefaultNamespace('\App\Controllers');

// Start the routing
SimpleRouter::start();