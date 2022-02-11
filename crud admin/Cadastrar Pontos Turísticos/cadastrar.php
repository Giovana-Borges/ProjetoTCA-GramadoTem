<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>

<body>

<h1>Cadastrar Ponto Turístico</h1>

<form method="POST" action="cadastrar_action.php">
    
    <label>
        Nome: <input type="text" name="nome"/><br><p>
    </label>
    <label>
        Descrição: <input type="text" name="descricao"/><br><p>
    </label>
    <label>
        Endereço: <input type="text" name="endereco"/><br><p>
    </label>
    <label>
        Horário de Funcionamento: <input type="text" name="horario"/><br><p>
    </label>
    <label>
        Telefone: <input type="text" name="telefone"/><br><p>
    </label>
    <label>
        Preços: <input type="text" name="preco"/><br><p>
    </label>
    <label>
        Avaliação: <input type="text" name="avaliacao"/><br><p>
    </label>
    <label>
       Website: <input type="text" name="website"/><br><p>
    </label>
    <label>
       Tipo: <input type="text" name="tipo"/><br><p>
    </label>
    <input type="submit" value="Salvar"><br><p> 
</form>


</body>
</html>