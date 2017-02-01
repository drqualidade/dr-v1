<?php 
    
    
		
    $conexao = new mysqli('localhost','root','','dr');
    //$conexao = new mysqli('localhost','drqua531_admin','vivax123','drqua531_sistema');
    //drqua531_sistema” to the MySQL user “drqua531_admin



	if (mysqli_connect_error()) {
    printf('Erro de conexão: %s', mysqli_connect_error());
    
    exit;
	}

	if (!mysqli_set_charset($conexao, 'utf8')) {
	    printf('Error ao usar utf8: %s', mysqli_error($conexao));
	    exit;
	}
	    
/*$senha = md5(123);	    
$in = "INSERT INTO `usuario`(`login`, `tipoUser`, `email`, `cpf`, `telefone`, `senha`, `responsavel`, `nomeEmpresa`) 
VALUES ('caio','0','caiovega7@gmail.com','000','00000','$senha','caio','adm')";

mysqli_query($conexao, $in);*/