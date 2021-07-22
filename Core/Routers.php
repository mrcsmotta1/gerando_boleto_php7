<?php
/* 
* Routers
*/

namespace Core\Routers;

use CoffeeCode\Router\Router;

$router = new Router(getenv('HOST'));

//ACESSO A HOME DO PROJETO
$router->group((null));
$router->get("/", function () {
  echo json_encode(['message' => 'home', "statusCode" => 200]);
});

//GRUPO PARA ACESSAR OS ITENS RELACIONADOS AO BANCO PARA GERAR O BOLETO
$router->group(('bank'));

//ACESSO PARA CADASTRO DO BANCO
$router->post("/register", function () {
  echo json_encode(['message' => 'register', "statusCode" => 200]);
});

//ACESSO PARA ALTERAR DADOS DO BANCO CADASTRADO
$router->put("/change", function () {
  echo json_encode(['message' => 'change', "statusCode" => 200]);
});

//ACESSO PARA LISTAR OS BANCOS CADASTRADOS
$router->get("/select", function () {
  echo json_encode(['message' => 'select', "statusCode" => 200]);
});

//ACESSO PARA DELETAR O BANCO CADASTRADO
$router->delete("/delete", function () {
  echo json_encode(['message' => 'delete', "statusCode" => 200]);
});

$router->dispatch();

//RETORNO PARA PÁGINA NÃO ENCONTRADA
if ($router->error()) {
  if ($router->error() == 404) {
    header("HTTP/1.1 404 Not Found");
    echo json_encode(['error' => 'route Not found', "statusCode" => 404]);
  }
}
