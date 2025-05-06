<?php

include("../models/register.php");

$user = new Register('adri','hames','cpf', 'rg','2000-01-01', '9321921', 'SC', 'saojose', 'bairroas', 'endereco', 390, 'casa', 3000, 'dev', '4831821321', 'aa ', 'adsasd@dass.com', '2025-01-01', 'pending', NULL );

// $resultado = $conexao->fetchQuery('SELECT * FROM users');
try {
    
$user->insertDb();
}catch(Exception $e){
    echo $e->getMessage();
}

// var_dump($resultado[0]['name']);