<?php

	$medico = $_POST['medico'];
	$crm = $_POST['crm'];
	$data = $_POST['data'];
	$validade = $_POST['validade'];
	$resultado = $_POST['resultado'];

	$empresa = $_POST['empresa'];
	$funcionario = $_POST['funcionario'];

	$cadastroAso = "INSERT INTO aso (dataRealizado, dataValidade, nomeMedico, crmMedico, resutlado, funcionario, empresa)
	VALUES('$data', '$validade', '$medico', '$crm', '$resultado', '$funcionario', '$empresa')";

	include 'model/conex.php';

	mysqli_query($conexao, $cadastroAso);

	echo "<script Language='javascript'>
					alert('A.S.O. Cadastrado!');
					location.href='cadastraraso?idfunc=".$funcionario."&id=".$empresa."';
				 </script>";


