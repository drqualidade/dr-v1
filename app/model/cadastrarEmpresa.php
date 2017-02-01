<?php

	$empresa = $_POST['empresa'];
	$cnpj = $_POST['cnpj'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$adm = $_POST['adm'];
	$endereco = $_POST['endereco'];

	include 'model/conex.php';

	$inserirEmpresa = "INSERT INTO empresa (`nome`,`cnpj`,`email`,`telefone`,`responsavel`,`endereco`)
	VALUES('$empresa', '$cnpj', '$email', '$telefone', '$adm', '$endereco')";


	mysqli_query($conexao, $inserirEmpresa);

	echo "<script Language='javascript'>
					alert('Empresa cadastrada!');
					location.href='dadosempresa';
				 </script>";
