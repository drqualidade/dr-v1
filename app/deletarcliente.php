<?php

	$id = $_GET['id'];

	$deletar = "DELETE FROM usuario WHERE id = '$id'";

	include 'model/conex.php';

	mysqli_query($conexao, $deletar);

	echo "<script Language='javascript'>
					alert('Cliente Deletado');
					location.href='verclientes';
				 </script>";