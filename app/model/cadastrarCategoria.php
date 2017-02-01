<?php
	$nome = $_POST['nome'];
	$idEmpresa = $_GET['id'];

	$inserirCategoria = "INSERT INTO categoria (nomeCategoria,idEmpresa) VALUES ('$nome','$idEmpresa')";

	include 'model/conex.php';

	mysqli_query($conexao,$inserirCategoria);

	echo "<script Language='javascript'>
					alert('Categoria cadastrada!');
					location.href='dadosauditoria?id=".$idEmpresa."';
				 </script>";

