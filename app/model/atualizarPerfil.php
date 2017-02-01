<?php
	session_start();

	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$cpf = $_POST['cpf'];
	$empresa = $_POST['empresa'];
	$senha = $_POST['senha'];
	$endereco = $_POST['endereco'];
	$email = $_POST['email'];

	$idUsuario = $_SESSION['logado'];
	
	if($senha == "123456"){

		$senha = md5($idUsuario['senha']);

	}

	$senha = md5($senha);

	
	
	$idNovo = $idUsuario['id'];
	$upPerfil = "UPDATE usuario SET nome = '$nome', telefone = '$telefone', cpf = '$cpf', empresa = '$empresa', senha = '$senha', endereco = '$endereco', email = '$email'  WHERE id = '$idNovo'";

	include 'model/conex.php';

	mysqli_query($conexao, $upPerfil);

	$atualizaLogin = "SELECT * FROM usuario WHERE id = '$idNovo'";
	$atualizaLogin = mysqli_query($conexao, $atualizaLogin);

	$verificarLogin = mysqli_fetch_assoc($atualizaLogin);

	$_SESSION['logado'] = $verificarLogin;

	echo "<script Language='javascript'>
					alert('Atualizado com sucesso!');
					location.href='perfil';
				 </script>";