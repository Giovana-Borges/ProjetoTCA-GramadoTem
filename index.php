<?php
require 'config.php';

$lista = [];
$sql =$pdo->query("SELECT * FROM pontos_turisticos");

if ($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<h1>Listagem de Pontos Turísticos</h1>

<table border='1'>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Endereço</th>
        <th>Horário de Funcionamento</th>
        <th>Telefone</th>
        <th>Preços</th>
        <th>Avaliação</th>
        <th>Website</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($lista as $pontos_turisticos): ?>
        <tr>
            <td><?=$pontos_turisticos['idpontos_turisticos'];?></td>
            <td><?=$pontos_turisticos['nome'];?></td>
            <td><?=$pontos_turisticos['descricao'];?></td>
            <td><?=$pontos_turisticos['endereco'];?></td> 
            <td><?=$pontos_turisticos['horario'];?></td>
            <td><?=$pontos_turisticos['telefone'];?></td>
            <td><?=$pontos_turisticos['preco'];?></td>
            <td><?=$pontos_turisticos['avaliacao'];?></td>
            <td><?=$pontos_turisticos['website'];?></td>
            <td>
                <a href="editar.php?idpontos_turisticos=<?=$pontos_turisticos['idpontos_turisticos'];?>">[Editar]</a>
                <a href="excluir.php?idpontos_turisticos=<?=$pontos_turisticos['idpontos_turisticos'];?>">[Excluir]</a>
            </td> 
        </tr>

    <?php endforeach; ?>  
</table>

<a href="cadastrar.php">Cadastrar Ponto Turístico</a>