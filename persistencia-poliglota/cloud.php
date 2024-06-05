<?php

require_once 'vendor/autoload.php';

use Aws\DynamoDb\DynamoDbClient;

$dynamo = new DynamoDbClient([
  'region' => 'us-east-1',
  'credentials' => require_once 'credentials.php',
]);

// var_dump($dynamo);

// $result = $dynamo->putItem([
//   'TableName' => 'Product_Catalog',
//   'Item' => [
//     'Id' => ['S' => '1'],
//     'Name' => ['S' => 'TV Fictícia'],
//     'Descricao' => ['S' => 'Uma TV muito bonita'],
//     'Polegadas' => ['N' => '42']
//   ],
// ]);

// var_dump($result);

$result = $client->query([
  'ExpressionAttributeValues' => [
    ':v1' => [
      'S' => 'No One You Know',
    ],
  ],
  'KeyConditionExpression' => 'Artist = :v1',
  'ProjectionExpression' => 'SongTitle',
  'TableName' => 'Music',
]);

var_dump($result->get('Items'));
