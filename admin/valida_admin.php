<?php
session_start();
include_once("conexao.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
	if((!empty($email)) AND (!empty($senha))){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$result_email = "SELECT id, nome, senha FROM administrador WHERE email='$email' LIMIT 1";
		$resultado_email = mysqli_query($conn, $result_email);
		if($resultado_email){
			$row_email = mysqli_fetch_assoc($resultado_email);
			if(password_verify($senha, $row_email['senha'])){
				$_SESSION['id'] = $row_email['id'];
				$_SESSION['nome'] = $row_email['nome'];
				
				header("Location: area_admin.html");
			}else{
				$_SESSION['msg'] = "Login e senha incorreto!";
				header("Location: login_admin.php");
			}
		}
	}else{
		$_SESSION['msg'] = "Login e senha incorreto!";
		header("Location: login_admin.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: login_admin.php");
}
