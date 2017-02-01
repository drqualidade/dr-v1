<?php 

	session_start();

	if(!isset($_SESSION['logado'])){

		include 'view/viewLogin.php';

	}else{

		if($_SESSION['tipoUser'] == 0){ //adm

			include 'view/viewIndexAdm.php';
		
		}elseif ($_SESSION['tipoUser'] == 1) { //auditor

			//include 'view/viewIndexAuditor.php';
			include 'turbosite.php';


		}elseif ($_SESSION['tipoUser'] == 2){ //empresa

			//include 'view/viewIndexEmpresa.php';
			include 'turbosite.php';


		}elseif ($_SESSION['tipoUser'] == 3) { //cliente

			include 'view/viewAreaCliente.php';
			//include 'turbosite.php';


		}
	}