<?php
	
		$nome = $_POST['nome'];
		$idCategoria = $_GET['categoria'];
		$idSubCategoria = $_GET['subcategoria'];
		$idEmpresa = $_GET['empresa'];


		$inserirQuestao = "INSERT INTO questao (nomeQuestao,idSubcategoria) VALUES ('$nome', '$idSubCategoria')";

		include 'model/conex.php';

		mysqli_query($conexao, $inserirQuestao);

		echo "<script Language='javascript'>
					alert('Questão cadastrada!');
					location.href='verquestao?id=".$idEmpresa."&categoria=".$idCategoria."&subcategoria=".$idSubCategoria."';
				 </script>";