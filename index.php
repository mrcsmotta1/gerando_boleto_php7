<?php
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\DataLayer\Connect;

use CoffeeCode\Router\Router;

$router = new Router(getenv('HOST'));

$router->group((null));

$router->get("/", function () {
  echo json_encode(['message' => 'home', "statusCode" => 200]);
});

$router->dispatch();

if ($router->error()) {
  if ($router->error() == 404) {
    header("HTTP/1.1 404 Not Found");
    echo json_encode(['error' => 'route Not found', "statusCode" => 404]);
  }
}
