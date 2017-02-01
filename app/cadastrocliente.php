<?php 

	if (!isset($_POST['nome'])){

		header('Location:index');

	}elseif (!isset($_POST['email'])) {
		
		header('Location:index');
	
	}elseif (!isset($_POST['cpf'])) {
		
		header('Location:index');

	}elseif (!isset($_POST['senha'])){

		header('Location:index');

	}else{

		include 'model/conex.php';

		$cpf = $_POST['cpf'];
		$email = $_POST['email'];
		
		$clienteIgual = "SELECT cpf FROM usuario WHERE cpf = '$cpf'";
		$clienteIgual = mysqli_query($conexao, $clienteIgual);

		$resultadoCliente = mysqli_fetch_assoc($clienteIgual);

		if($resultadoCliente['cpf'] != ""){
		
			echo "<script Language='javascript'>
					alert('Esse CPF já está cadastrado!');
					location.href='index#toregister';
				 </script>";
		
		}else{

		$nome = $_POST['nome'];
		$login = $_POST['cpf'];
		$senha = md5($_POST['senha']);
		$dataHoraCadastro = date("d-m-Y H:i");



		$cadastrarCliente = "INSERT INTO usuario (nome, cpf, email, login, senha, tipoUsuario, dataHoraCadastro)
		VALUES('$nome', '$cpf', '$email', '$login', '$senha', '3', '$dataHoraCadastro')";

		mysqli_query($conexao, $cadastrarCliente);

		echo "<script Language='javascript'>
					alert('Cadastro efetuado com sucesso!');
					location.href='index';
				 </script>";
		
			
		
		}
		

	
	}