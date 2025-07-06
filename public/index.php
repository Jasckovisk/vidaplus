<?php
define('ACCESS', true);

defined('ACCESS') or die('Acesso negado meu parceiro.');

require '../vendor/autoload.php';

use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;

$latte = require '../app/bootstrap.php';

$router = new RouteCollector;
$routes = require '../app/system/Web.php';
$routes($router, $latte);

$dispatcher = new Dispatcher($router->getData());

$method = $_SERVER['REQUEST_METHOD'];
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

try {
    echo $dispatcher->dispatch($method, $path);
} catch (Phroute\Phroute\Exception\HttpRouteNotFoundException $e) {
    http_response_code(404);
    echo "404 - Página não encontrada";
}
