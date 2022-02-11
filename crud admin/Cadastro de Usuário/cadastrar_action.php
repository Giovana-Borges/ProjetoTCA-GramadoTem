<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha');

if($nome && $email && $senha && $usuario){

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() === 0){
        $sql = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, usuario) VALUES (:nome, :email, :senha, :usuario)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        
        $sql->execute();

        header("Location: index.php");
        exit;
    }else{
        header("Location: cadastrar.php");
    }

}else{
    header("Location: cadastrar.php");
    exit;
}
