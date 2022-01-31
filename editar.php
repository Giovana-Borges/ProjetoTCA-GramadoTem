<?php
require 'config.php';

$pontos_turisticos = [];
$idpontos_turisticos = filter_input(INPUT_GET, 'idpontos_turisticos');
if($idpontos_turisticos){
    $sql = $pdo->prepare("SELECT * FROM pontos_turisticos WHERE idpontos_turisticos = :idpontos_turisticos");
    $sql->bindValue(':idpontos_turisticos', $idpontos_turisticos);
    $sql->execute();

    if($sql->rowCount() > 0){
        $pontos_turisticos = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("Location: index.php");
        exit;
    }
}else{
    header("Location: index.php");
}

?>

<h1>Editar Ponto Turístico</h1>
<form method="POST" action="editar_action.php">

    <input type="hidden" name="idpontos_turisticos" value="<?=$pontos_turisticos['idpontos_turisticos'];?>"/>
    <label>
        Nome: <input type="text" name="nome" value="<?=$pontos_turisticos['nome'];?>"/><br><p>
    </label>
    <label>
        Descrição: <input type="text" name="descricao" value="<?=$pontos_turisticos['descricao'];?>"/><br><p>
    </label>
    <label>
        Endereço: <input type="text" name="endereco" value="<?=$pontos_turisticos['endereco'];?>"/><br><p>
    </label>
    <label>
        Horário de Funcionamento: <input type="text" name="horario" value="<?=$pontos_turisticos['horario'];?>"/><br><p>
    </label>
    <label>
        Telefone: <input type="text" name="telefone" value="<?=$pontos_turisticos['telefone'];?>"/><br><p>
    </label>
    <label>
        Preços: <input type="text" name="preco" value="<?=$pontos_turisticos['preco'];?>"/><br><p>
    </label>
    <label>
        Avaliação: <input type="text" name="avaliacao" value="<?=$pontos_turisticos['avaliacao'];?>"/><br><p>
    </label>
    <label>
       Website: <input type="text" name="website" value="<?=$pontos_turisticos['website'];?>"/><br><p>
    </label>


    <input type="submit" value="Salvar"/>
</form>
