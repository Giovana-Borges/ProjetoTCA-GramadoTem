<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gramado Tem</title>
		<link rel="icon" href="../projeto-base/src/img/icone_braso_prefeitura/brasao_gramado.png">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="/src/style.css">
	</head>
	<body>
		<h2>Login</h2>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			if(isset($_SESSION['msgcad'])){
				echo $_SESSION['msgcad'];
				unset($_SESSION['msgcad']);
			}
		?>
		<form method="POST" action="valida.php">
			<label>Usuário</label>
			<input type="text" name="usuario" placeholder="Digite seu email"><br><br>
			
			<label>Senha</label>
			<input type="password" name="senha" placeholder="Digite a sua senha"><br><br>
			
			<input type="submit" name="btnLogin" value="Acessar">
			
			<h4>Você ainda não possui uma conta?</h4>
			<a href="cadastrar.php">Crie grátis</a>
		
		</form>
		
	</body>
</html>