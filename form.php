<?php
include_once 'conexao.php';

if(empty($_POST['email1'])){
    
    echo "<script>window.location='../index.html';alert('$nome, você precisa preencher seu Email');</script>";
    die;
}

function clear($input){
    global $conexao;
    //sql
    $var = mysqli_escape_string($conexao, $input);
    //xss (ou SQL INJECTION)
    $var = htmlspecialchars($var);
    return $var;
    
}

if(isset($_POST['btn-entrar'])){
    $nome = clear($_POST['nome1']);
    $sobrenome = clear($_POST['sobrenome1']);
    $email = clear($_POST['email1']);
    $opcoes = clear($_POST['options1']);
    
}

if(isset($_POST['btn-enviar'])){
    
$nome = $_POST['nome1'];
$sobrenome = $_POST['sobrenome1'];
$email = $_POST['email1'];
$opcoes = $_POST['options1'];
    
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