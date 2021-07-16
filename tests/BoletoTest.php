<?php

declare(strict_types=1);

use Pecee\SimpleRouter\Route\Route;
use PHPUnit\Framework\TestCase;

final class BoletoTest extends TestCase
{
  function testeRotaInexistente()
  {
    $client = new GuzzleHttp\Client();
    $res = $client->get(URL_BASE . "/erro");
    print_r($res);


    // $this->assertEquals(200, $response->getStatusCode());
  }
}
