<?php
	
	$id = $_GET['id'];

	$deletarEmpresa = "DELETE FROM empresa WHERE id = '$id'";


	include 'model/conex.php';

	mysqli_query($conexao, $deletarEmpresa);

	echo "<script Language='javascript'>
					alert('Empresa deletada!');
					location.href='dadosempresa';
				 </script>";