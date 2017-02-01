<?php
	
	$id = $_GET['id'];
	include 'model/conex.php';
	$buscaNomeEmpresa = "SELECT nome FROM empresa WHERE id = '$id'";
	$buscaNomeEmpresa = mysqli_query($conexao, $buscaNomeEmpresa);
	$nomeEmpresaEncontrado = mysqli_fetch_assoc($buscaNomeEmpresa);
	include 'view/viewListaFuncionario.php';