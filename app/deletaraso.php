<?php

	$idFunc = $_GET['idfunc'];
	$idAso = $_GET['idaso'];
	$idEmpresa = $_GET['id'];

	$deletar = "DELETE FROM aso WHERE id = '$idAso'";

	include 'model/conex.php';

	mysqli_query($conexao, $deletar);

	echo "<script Language='javascript'>
					alert('A.S.O. Deletado');
					location.href='aso?idfunc=".$idFunc."&id=".$idEmpresa."';
				 </script>";
