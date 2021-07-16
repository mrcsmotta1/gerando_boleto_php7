<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->group((null));

$router->get("/", function ($data) {
  echo '<h1>Ola mundo</h1>';
  var_dump($data);
});

$router->dispatch();

if ($router->error()) {
  if ($router->error() == 404) {
    header("HTTP/1.1 404 Not Found");
    echo json_encode(['error' => 'route Not found']);
  }
}
