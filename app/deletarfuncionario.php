<?php

	$idfunc = $_GET['idfunc'];
	$id = $_GET['id'];

	$deletarFuncionario = "DELETE FROM rh WHERE id = '$idfunc'";

	include 'model/conex.php';
	mysqli_query($conexao, $deletarFuncionario);

    
	echo "<script Language='javascript'>
					alert('Funcionário Excluido!');
					location.href='listafuncionario?id=".$id."';
				 </script>";

    
