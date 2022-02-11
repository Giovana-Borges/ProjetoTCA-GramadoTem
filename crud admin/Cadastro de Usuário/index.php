<?php
require 'config.php';

$lista = [];
$sql =$pdo->query("SELECT * FROM usuarios");

if ($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<ul>
    <li><a class="nav-link active" aria-current="page" href="/admin/area_admin.html">Início</a></li>
    <li><a class="nav-link" href="../../opcoes.html">Opções</a></li>
    <li><a class="nav-link" href="../../sair.php" >Sair</a></li>
</ul>

<h1>Listagem de Usuários</h1>

<table border='1'>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($lista as $usuarios)s: ?>
        <tr>
            <td><?=$usuarios['id'];?></td>
            <td><?=$usuarios['nome'];?></td>
            <td><?=$usuarios['email'];?></td> 
            <td>
                <a href="editar.php?id=<?=$usuarios['id'];?>">[Editar]</a>
                <a href="excluir.php?id=<?=$usuarios['id'];?>">[Excluir]</a>
            </td> 
        </tr>


</table>

<!-- <a href="cadastrar.php">Cadastrar Usuário</a> -->