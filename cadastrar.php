<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	//var_dump($dados);
	$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
	
	$result_email = "INSERT INTO usuarios (nome, email, senha) VALUES (
					'" .$dados['nome']. "',
					'" .$dados['email']. "',
					'" .$dados['senha']. "'
					)";
	$resultado_email = mysqli_query($conn, $result_email);
	if(mysqli_insert_id($conn)){
		$_SESSION['msgcad'] = "";
		header("Location: area_usuario.html");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar o usuário";
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastrar</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<title>Gramado Tem</title>
		<link rel="icon" href="../projeto-base/src/img/icone_braso_prefeitura/brasao_gramado.png">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
	</head>
	<body>
		<header>
				<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
				<div class="container-fluid">
					<a class="navbar-brand fonte-titulo cor-especial" href="#">Gramado Tem</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
					<ul class="navbar-nav">
						
						<li><a class="nav-link active" aria-current="page" href="home.html">Início</a></li>
						<li><a class="nav-link" href="cadastrar.php">Cadastro</a></li>
						<li><a class="nav-link" href="login.php" >Login</a></li>
						<li><a class="nav-link"data-bs-toggle="modal" data-bs-target="#modal-quem_somos">Quem somos</a></li>
					
					</ul>
					</div>
				</div>
				</nav> 
		</header> 
	<div style=margin-top:7%>
		<h2 style=text-align:center>Cadastro</h2>
	</div>

		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
		<form  class="modal-content modal-dialog" style=text-align:center method="POST" action="">
			<label class="btn" style=font-weight:bold>Nome</label>
			<input class="btn" style=border-color:#116bb6 type="text" name="nome" placeholder="Digite seu nome"><br><br>
		
			<label class="btn" style=font-weight:bold>E-mail</label>
			<input class="btn " style=border-color:#116bb6 type="text" name="email" placeholder="Digite o seu e-mail"><br><br>
			
			<label class="btn" style=font-weight:bold>Senha</label>
			<input class="btn " style=border-color:#116bb6 type="password" name="senha" placeholder="Digite a senha"><br><br>
			
			<div style=border-size:5px>
			<input class="btn " style=border-color:#116bb6  type="submit" name="btnCadUsuario" value="Cadastrar"><br><br>
			</div>

		<div style=border-size:40px>
		  <p class="btn" style=border-color:#116bb6>Lembrou? <a href="login.php">Clique aqui</a> para logar</p>
		</div>
		</form>
		<footer class="bg-white p-3">
		<ul class="rodape ">
		<li> <p class="p-rodape">Fone: (54)32860220
			<br>Av. das Hortênsias, 2029 - Centro - Gramado
			<br> E-mail:<a class="cor-especial" href="mailto:eduardazingano@gmail.com">turismo@gramado.rs.gov.br</a></p>
		</li>  

		<li>
		<a href="https://www.facebook.com/prefeituradegramado"><img class="imagem-face-rodape" src="src/img/rodape/face_icon.png" ></a>
		</li>

		<li>
		<a href="https://www.instagram.com/prefeituradegramado/"><img class="imagem-insta-rodape" src="src/img/rodape/insta_icon.png" ></a>
		</li>
		</ul> 

		<p class="copyright"> 	
		&copy; Gramado Tem - 2022</p>

		<img src="src/img/rodape/logo_gramado.png" class="imagem-logo-rodape">



		</footer>



		<div class="modal fade" id="modal-quem_somos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<dialog class="modal-content">
			<header class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Quem somos?</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</header>
			<main class="modal-body">
				<p>O app "Gramado Tem" é uma iniciativa da Secretaria de <br>
				Turismo da cidade de Gramado/RS para potencializar o turismo na região.</p>

				<p>Institucional:
				Compete à Secretaria Municipal de Turismo: atrair investimentos para o desenvolvimento do turismo no município;<br>
				articular a promoção institucional da cidade no país e no exterior; 
				impulsionar ações que visem a integração<br> 
				das atividades do setor de turismo com a região; compreendendo destinos, roteiros e atividades turísticas dos <br>
				municípios integrados; estimular e participar de comitês ou fóruns municipais, regionais, estaduais e federais <br>
				que visem o desenvolvimento turístico da Região; incentivar a interação com entidades públicas e privadas, <br>
				organizações não governamentais e organizações da sociedade civil de interesse público, nacionais <br>  
				e internacionais, com o objetivo de incrementar o intercâmbio de novas tecnologias de desenvolvimento<br> 
				turístico; viabilizar a formação e a capacitação dos profissionais que atuam na área de turismo,<br>
				visando a melhoria da qualidade e, da produtividade dos <br>
				serviços prestados aos turistas; fomentar a captação e a <br>
				geração de eventos, nacionais e internacionais, no sentido de <br>
				minimizar os efeitos da sazonalidade da atividade turística; coordenar, monitorar e acompanhar as ações dos programas <br>
				da Política de Turismo do Estado e União; <br> 
			<p> responder demandas de Protocolo, Ouvidoria Fala Cidadão de sua Secretaria; realizar todos os procedimentos<br> 
				definidos pela Norma ISO 9001.</p>
				</p>
				<p>  
			<br>Av. das Hortênsias, 2029 - Centro - Gramado <br>
			Fone: (54)32860220 <br>
			E-mail:<a class="cor-especial" href="mailto:turismo@gramado.rs.gov.br">turismo@gramado.rs.gov.br</a>
			</p> 
			</main>
			<footer class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
			</footer>
			</dialog>
		</div>
		</div>
		

		

		

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
		</script>
	</body>
</html>