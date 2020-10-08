<?php

$servidor = 'localhost';
$usuario  = 'root';
$senhaServ = '';
$banco = 'formsite';

$conexao  = new mysqli($servidor, $usuario, $senhaServ, $banco);

if ($conexao->$connect_error){

    die('Erro de conexão: ' . $conexao->connect_error);

}



?>
