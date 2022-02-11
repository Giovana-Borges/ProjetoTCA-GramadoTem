<?php
require 'config.php';

 $id = filter_input(INPUT_GET, 'idpontos_turisticos');

if($id){
    $sql = $pdo->prepare("DELETE FROM pontos_turisticos WHERE idpontos_turisticos = :idpontos_turisticos");
    $sql->bindValue(':idpontos_turisticos', $idpontos_turisticos);
    $sql->execute();
}

header("Location: index.php");

?>