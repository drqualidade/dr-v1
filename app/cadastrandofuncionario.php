<?php

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$empresa = $_POST['empresa'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$setor = $_POST['setor'];
	$dataHoraCadastro = date("d-m-Y (H:i)");

	$inserirFuncionario = "INSERT INTO rh (nome, cpf, email, empresa, celular, endereco, setor, dataHoraCadastro)
	VALUES('$nome', '$cpf', '$email', '$empresa', '$telefone', '$endereco', '$setor', '$dataHoraCadastro')";

	include 'model/conex.php';

	mysqli_query($conexao, $inserirFuncionario);


	echo "<script Language='javascript'>
					alert('Funcionário Cadastrado!');
					location.href='listafuncionario?id=".$empresa."';
				 </script>";