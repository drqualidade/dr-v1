<?php 

	
	session_start();

	$login = $_POST['cpf'];
	$senha = $_POST['senha'];

	include 'model/conex.php';

	$senha = md5($senha);
	$login2 = "SELECT * FROM usuario WHERE login = '$login'";
	$login2 = mysqli_query($conexao, $login2);

	$verificarLogin = mysqli_fetch_assoc($login2);

	if($verificarLogin['login'] == $login && $verificarLogin['senha'] == $senha){

		$_SESSION['tipoUser'] = $verificarLogin['tipoUsuario'];

		$_SESSION['logado'] = $verificarLogin;

		header('Location:ola');

	}else{
		echo "<script Language='javascript'>
					alert('Você não tem acesso! :(');
					location.href='index';
				 </script>";
				 
	}
