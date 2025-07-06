<?php
declare(strict_types= 1);

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

require "../vendor/autoload.php";

$router = new RouteCollector;

$router->any("/", function () {
    return "this is the homepage";
});
$router->get("/sobre", function () {
    return "this is the sobre page";
});
$router->get("/solucoes", function () {
    return "this is the solutions";
});
$router->get("/contato", function () {
    return "this is the contacts";
});
$router->get("/registro", function () {
    return "this is the register";
});
$router->get("/login", function () {
    return "this is the login";
});

$dispatcher = new Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER["REQUEST_METHOD"], $path);

echo $response;