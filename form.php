<?php


$nome = $_POST['nome1'];
$sobrenome = $_POST['sobrenome1'];
$email = $_POST['email1'];
$opcoes = $_POST['options1'];

$servidor = 'localhost';
$usuario  = 'root';
$senhaServ = '';
$banco = 'formsite';

$conexao  = new mysqli($servidor, $usuario, $senhaServ, $banco);

if ($conexao->connect_error){

    die('Erro de conexão:' . $conexao->connect_error);

}

$info = "INSERT INTO clientes (nome, sobrenome, email, options) VALUES ('$nome','$sobrenome', '$email', '$opcoes'
)";

if($conexao->query($info) === true){

    echo "Tudo ocorreu  com sucesso!";
    echo "<script>window.location='index.html';alert('$nome, sua mensagem foi enviada com sucesso! Estaremos retornando em breve');</script>";


}else{

    echo "Ocorreu algum problema na conexão, tente novamentem mais tarde" . $conexao->error;
}

$conexao->close();


?>