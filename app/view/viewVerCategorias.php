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
                    <a class="navbar-brand" href="#">Categorias</a>

                </div>

                 <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">

                        
                       
                        <li>
                            <a href="#" >
                                <b style="color:red;">SAIR</b>
                            </a>
                        </li>
                    </ul>

                </div>
                    <span data-notify="icon" style="color: black; background-color: #70D3FC;" class="ti-back-left"> <a href="dadosauditoria" style="color:black;">VOLTAR</a></span>

            </div>
        </nav>


      <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="header">
                        <p class="category" style="font-size: 1.2em;">Escolha uma categoria:</p>

                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6">
                                
                               <?php 
                                    include 'model/conex.php';
                                    $buscarCategorias = "SELECT nomeCategoria, id FROM categoria WHERE idEmpresa = $idEmpresa";
                                    $buscarCategorias = mysqli_query($conexao, $buscarCategorias);

                                    while($dadosCategorias = mysqli_fetch_array($buscarCategorias)){
                                ?>
                                <a href="versubcategorias?id=<?php echo $idEmpresa; ?>&categoria=<?php echo $dadosCategorias['id']; ?>">
                                <div class="alert alert-info alert-with-icon" data-notify="container" style="background-color: #FD6502" >
                                    <button type="button" aria-hidden="true" class="close"></button>
                                    <span data-notify="icon" style="color: black;" class="ti-arrow-circle-right"></span>
                                    <span data-notify="message" style="color:black; font-size: 1.2em;"><b><?php echo $dadosCategorias['nomeCategoria']; ?></b></span>
                                </div>
                                </a>
                                <?php } ?>
                               
                            </div>



                        </div>
                        
                        <br>
                        <br>
                        
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
