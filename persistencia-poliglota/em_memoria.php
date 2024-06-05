<?php

$memcached = new Memcached();
$memcached->addServer('em_memoria', 11211);
$date = new DateTime('tomorrow');
$memcached->set('chave', 'Valor', $date->getTimestamp());
echo $memcached->get('chave');