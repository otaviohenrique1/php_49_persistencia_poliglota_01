<?php

$pdo = new PDO(
  'pgsql:host=relacional;dbname=postgres',
  'postgres',
  'senha_postgres'
);

var_dump($pdo);