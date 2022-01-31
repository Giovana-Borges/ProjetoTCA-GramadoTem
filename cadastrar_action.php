<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$descricao = filter_input(INPUT_POST, 'descricao');
$endereco = filter_input(INPUT_POST, 'endereco');
$horario = filter_input(INPUT_POST, 'horario');
$telefone = filter_input(INPUT_POST, 'telefone');
$preco = filter_input(INPUT_POST, 'preco');
$avaliacao = filter_input(INPUT_POST, 'avaliacao');
$website = filter_input(INPUT_POST, 'website');



if($nome){

    $sql = $pdo->prepare("SELECT * FROM pontos_turisticos WHERE nome = :nome");
    $sql->bindValue(':nome', $nome);
    $sql->execute();

    if($sql->rowCount() === 0){
        $sql = $pdo->prepare("INSERT INTO pontos_turisticos (nome, descricao, endereco, horario, telefone, preco, avaliacao, website) VALUES (:nome, :descricao, :endereco, :horario, :telefone, :preco, :avaliacao, :website)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':descricao', $descricao); 
        $sql->bindValue(':endereco', $endereco);
        $sql->bindValue(':horario', $horario);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':preco', $preco);
        $sql->bindValue(':avaliacao', $avaliacao);
        $sql->bindValue(':website', $website);

        header("Location: index.php");
        exit;
    }else{
        header("Location: cadastrar.php");
    }

}else{
    header("Location: cadastrar.php");
    exit;
}
