<?php

declare(strict_types=1);

use GuzzleHttp\Client;
use Pecee\SimpleRouter\Route\Route;
use PHPUnit\Framework\TestCase;

final class BoletoTest extends TestCase
{
  function testeRotaInexistente()
  {
    $url = URL_BASE . "/erro";
    $client = new Client();
    $response = $client->get($url, ['http_errors' => false]);
    $this->assertEquals(404, $response->getStatusCode());
  }
}
