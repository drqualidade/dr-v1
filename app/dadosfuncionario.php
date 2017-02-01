<?php

	$idFunc = $_GET['idfunc'];
	$idEmpresa = $_GET['id'];

	include 'model/conex.php';

	$buscarDadosFunc = "SELECT * FROM rh WHERE id = '$idFunc'";
	$buscarDadosFunc = mysqli_query($conexao, $buscarDadosFunc);
	$AchadosDados = mysqli_fetch_assoc($buscarDadosFunc);

	include 'view/viewDadosFuncionario.php';