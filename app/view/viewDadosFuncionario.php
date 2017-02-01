<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8" />
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Drº Qualidade - Segurança de Alimentos</title>
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/icone.png">

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<?php include 'view/viewMenuLateral.php' ?>
    </div>

    <div class="main-panel" style="background-color: #98FB98;">
		<nav class="navbar navbar-default" style="background-color: #98FB98;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dados Funcionário</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        
                       
						<li>
                            <a href="off" >
								<button class="btn-danger"><b style="color:#fff;">SAIR</b></button>
                            </a>
                        </li>
                    </ul>

                </div>
                <?php
                    if(!isset($_SERVER['HTTP_REFERER'])){
                        $urlAnterior = "index";
                    }else{
                        $urlAnterior = $_SERVER['HTTP_REFERER'];
                    }
                ?>
                <span data-notify="icon" style="color: black; " class="ti-back-left"> <a href="<?php echo $urlAnterior; ?>" style="color:black;">VOLTAR</a></span>
                
            </div>
        </nav>
       

        <div class="content">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-3 col-sm-6">
                    <a href="aso?idfunc=<?php echo $idFunc; ?>&id=<?php echo $AchadosDados['empresa']; ?>">
                        <div class="card card2">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon- text-center">
                                            <i class="ti-file"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Dados</p>
                                            A.S.O.
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                    <a href="dadoscursos?idfunc=<?php echo $idFunc; ?>&id=<?php echo $AchadosDados['empresa']; ?>">
                        <div class="card card2">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon- text-center">
                                            <i class="ti-video-camera"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Dados</p>
                                            cursos
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"></h4>
                            </div>
                            <div class="content">
                            <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Empresas que trabalhou</label>
                                                <?php 
                                                $idEmpresaDele = $AchadosDados['empresa'];
                                                $empresaDele = "SELECT nome FROM empresa WHERE id = '$idEmpresaDele'";
                                                $empresaDele = mysqli_query($conexao, $empresaDele);

                                                $nomeEmpresaDele = mysqli_fetch_assoc($empresaDele);

                                                ?>
                                                <h5><?php echo $nomeEmpresaDele['nome']; ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                <form >
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" disabled="" name="nome" class="form-control border-input" required="" value="<?php echo $AchadosDados['nome']; ?>" placeholder="" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>CPF</label>
                                                <input type="text" disabled="" name="cpf" class="form-control border-input" value="<?php echo $AchadosDados['cpf']; ?>" required="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">E-mail</label>
                                                <input type="email" disabled="" name="email" class="form-control border-input" value="<?php echo $AchadosDados['email']; ?>" required="" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telefone</label>
                                                <input type="text" disabled="" name="telefone" autocomplete="off" class="form-control border-input" value="<?php echo $AchadosDados['celular']; ?>" required="" placeholder="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Setor</label>
                                                <input type="text" disabled="" name="setor" class="form-control border-input" value="<?php echo $AchadosDados['setor']; ?>" required="" placeholder="">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input type="text" disabled="" name="endereco" class="form-control border-input" value="<?php echo $AchadosDados['endereco']; ?>" required="" placeholder=" " >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                
				<div class="copyright pull-right">
                    &copy; 2016 Drº Qualidade </a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
