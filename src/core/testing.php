<?php


include("./Database.php");

$conexao = new Database();


$resultado = $conexao->fetchQuery('SELECT * FROM users');

var_dump($resultado[0]['name']);