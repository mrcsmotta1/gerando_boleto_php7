<?php

/* 
* Home Controller 
*/

namespace Source\Controllers;

class Home
{
  public function index()
  {
    echo json_encode(['message' => 'home', "statusCode" => 200]);
  }
}
