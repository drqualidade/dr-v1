<?php 

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$telefone  = $_POST['telefone'];
	$senha = $_POST['senha'];
	$empresa = $_POST['empresa'];
	$endereco = $_POST['endereco'];
	$dataHoraCadastro = date("d-m-Y H:i");

	$senha = md5($senha);

	include 'model/conex.php';

	$inserirAuditor = "INSERT INTO usuario (nome, cpf, email, login, senha, endereco, empresa, tipoUsuario, dataHoraCadastro, telefone)
	VALUES('$nome', '$cpf', '$email', '$cpf', '$senha', '$endereco', '$empresa', '1','$dataHoraCadastro', '$telefone')";

	mysqli_query($conexao, $inserirAuditor);

	echo "<script Language='javascript'>
					alert('Auditor Cadastrado');
					location.href='index';
				 </script>";