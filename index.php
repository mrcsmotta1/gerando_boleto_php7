<?php

require __DIR__ . "/vendor/autoload.php";

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get("/", function () {
  return "<h1>Rotas com SimpleRouter</h1>";
});

SimpleRouter::start();
