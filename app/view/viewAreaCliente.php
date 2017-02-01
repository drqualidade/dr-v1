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

    	<?php include 'view/viewMenuLateralCliente.php' ?>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Painel Cliente</a>
                </div>
                 <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        
                       
                        <li>
                            <a href="off" >
                                <b style="color:red;">SAIR</b>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                    <a href="#" onclick="alert('Server Connection Failed - Error 9882 JavaScript - Verifique sua conexão com a internet!');">
                    
                        <div class="card card2">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-list"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Fazer</p>
                                            avaliação
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </a>
                    </div>
                    
                   
                    
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Minhas avaliações</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>#</th>
                                        <th>Empresa</th>
                                        <th>Auditor</th>
                                        <th>Data</th>
                                        
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mercado X</td>
                                            <td>Caio</td>
                                            <td>01/12/2016</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mercado Y</td>
                                            <td>Caio</td>
                                            <td>1/12/2016</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Mercado Z</td>
                                            <td>Caio</td>
                                            <td>2/12/2016</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Mercado Z</td>
                                            <td>Caio</td>
                                            <td>2/12/2016</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Mercado X</td>
                                            <td>Caio</td>
                                            <td>5/12/2016</td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>

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

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-face-smile',
            	message: "<b>Bem-vindo, faça bom proveito do sistema!</b>."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

</html>
