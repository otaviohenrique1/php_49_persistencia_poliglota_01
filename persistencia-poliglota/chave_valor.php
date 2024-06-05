<?php

$redis = new Redis();
$redis->connect('chave_valor');
$redis->set('carrinho:1', json_encode(['item' => 3, 'qtd' => 2]));
echo $redis->get('carrinho:1');
$redis->mSet('carrinho:2', ['item' => 3, 'qtd' => 2]);
echo $redis->mGet('carrinho:2', 'qtd');