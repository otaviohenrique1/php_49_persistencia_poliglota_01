<?php

require_once 'vendor/autoload.php';

use MongoDB\Client;

$mongodb = new Client('mongodb://usuario:senha@documentos');
$mongodb->selectDatabase('e_commerce');

$colecaoDeProdutos = $database->selectCollection('produtos');
$resultado = $colecaoDeProdutos->insertOne([
    'name' => 'TV Fictícia',
    'descricao' => 'Uma TV muito bonita',
    'polegadas' => 40
]);

echo "Foram inseridos {$resultado->getInsertedCount()} itens. Id da última inserção: {$resultado->getInsertedId()}";
