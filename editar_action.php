<?php
require 'config.php';

$idpontos_turisticos = filter_input(INPUT_POST, 'idpontos_turisticos');
$nome = filter_input(INPUT_POST, 'nome');
$descricao = filter_input(INPUT_POST, 'descricao');
$endereco = filter_input(INPUT_POST, 'endereco');
$horario = filter_input(INPUT_POST, 'horario');
$telefone = filter_input(INPUT_POST, 'telefone');
$preco = filter_input(INPUT_POST, 'preco');
$avaliacao = filter_input(INPUT_POST, 'avaliacao');
$website = filter_input(INPUT_POST, 'website');

if($idpontos_turisticos && $nome && $descricao && $endereco && $horario && $telefone && $preco && $avaliacao && $website){
    $sql = $pdo->prepare("UPDATE pontos_turisticos SET nome = :nome, descricao = :descricao, endereco = :endereco, horario = :horario, telefone = :telefone, preco = :preco, avaliacao = :avaliacao, website = :website WHERE idpontos_turisticos = :idpontos_turisticos");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':descricao', $descricao); 
    $sql->bindValue(':endereco', $endereco);
    $sql->bindValue(':horario', $horario);
    $sql->bindValue(':telefone', $telefone);
    $sql->bindValue(':preco', $preco);
    $sql->bindValue(':avaliacao', $avaliacao);
    $sql->bindValue(':website', $website);
    $sql->bindValue(':idpontos_turisticos', $idpontos_turisticos);
    $sql->execute();

    header("Location: index.php");
    exit;
}else{
    header("Location: index.php");
    exit;
}