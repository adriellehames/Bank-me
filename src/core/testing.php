<?php

include("../models/register.php");

$obj1 = new Register('name','surname','cpf', 'rg','2020-01-01', '9321921', 'SC', 'saojose', 'bairroas', 'endereco', 390, 'casa', 3000, 'dev', '4831821321', 'C:\32321.jpg', 'adsasd@dass.com', '2025-01-01', 'pending', NULL );

// $resultado = $conexao->fetchQuery('SELECT * FROM users');
try {
    
$obj1->insertDb();
}catch(Exception $e){
    echo $e->getMessage();
}

// var_dump($resultado[0]['name']);