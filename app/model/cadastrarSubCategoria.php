<?php
	
		$nome = $_POST['nome'];
		$idCategoria = $_GET['categoria'];
		$idEmpresa = $_GET['empresa'];


		$inserirSubCategoria = "INSERT INTO subcategoria (nomeSubcategoria,idCategoria) VALUES ('$nome', '$idCategoria')";

		include 'model/conex.php';

		mysqli_query($conexao, $inserirSubCategoria);

		echo "<script Language='javascript'>
					alert('Subcategoria cadastrada!');
					location.href='versubcategorias?id=".$idEmpresa."&categoria=".$idCategoria."';
				 </script>";