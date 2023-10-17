<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function (Request $request, Response $response, array $args) {
    $response->getBody()->write("Coloque os valores para cálculo na barra de pesquisa! <br/> Use: mult, div, sub, soma <br/> Exemplo: /soma/20/10");

    return $response;
});

$app->get('/soma/{num1}/{num2}', function (Request $request, Response $response, array $args) {
    $num1 = $args['num1'];
    $num2 = $args['num2'];
    $resultado = $num1 + $num2;
    $response->getBody()->write("Resultado da Soma: " . $resultado);
    return $response;
});

$app->get('/sub/{num1}/{num2}', function (Request $request, Response $response, array $args) {
    $num1 = $args['num1'];
    $num2 = $args['num2'];
    $resultado = $num1 - $num2;
    $response->getBody()->write("Resultado da Subtração: " . $resultado);
    return $response;
});

$app->get('/mult/{num1}/{num2}', function (Request $request, Response $response, array $args) {
    $num1 = $args['num1'];
    $num2 = $args['num2'];
    $resultado = $num1 * $num2;
    $response->getBody()->write("Resultado da Multiplicação: " . $resultado);
    return $response;
});

$app->get('/div/{num1}/{num2}', function (Request $request, Response $response, array $args) {
    $num1 = $args['num1'];
    $num2 = $args['num2'];
    $resultado = $num1 / $num2;
    $response->getBody()->write("Resultado da Divisão: " . $resultado);
    return $response;
});

$app->run();
