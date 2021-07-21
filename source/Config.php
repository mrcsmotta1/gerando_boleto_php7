<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createUnsafeMutable(__DIR__);
$dotenv->load();

define("DATA_LAYER_CONFIG", [
  "driver" => getenv('DBDRIVER'),
  "host" => getenv('DBHOST'),
  "port" => getenv('DBPORTS'),
  "dbname" => getenv('DBNAME'),
  "username" => getenv('USERNAME'),
  "passwd" => getenv('PASSWD'),
  "options" => [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_CASE => PDO::CASE_NATURAL
  ]
]);
