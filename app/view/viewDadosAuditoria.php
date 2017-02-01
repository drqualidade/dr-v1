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

    <div class="main-panel" style="background-color: #B0E0E6;">
        <nav class="navbar navbar-default" style="background-color: #B0E0E6;">
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
                            <a href="off" >
                                <button class="btn-danger"><b style="color:#fff;">SAIR</b></button>
                            </a>
                        </li>
                    </ul>

                </div>
                <span data-notify="icon" style="color: black; " class="ti-back-left"> <a href="opcoesempresa?id=<?php echo $idEmpresa; ?>" style="color:black;">VOLTAR</a></span>

            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-4 col-sm-6">
                    <a href="cadastrarcategoria?id=<?php echo $idEmpresa; ?>">
                        <div class="card card2">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon text-center">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Adicionar</p>
                                            categoria
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </a>
                    </div>
                </div>

                
            </div>
            <div class="card">
                    <div class="header">
                        <p class="category" style="font-size: 1.2em;">Essas são categorias já cadastradas, para cadastrar subcategorias clique em cima da categotia desejada!</p>

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
                                <!--<a href="versubcategorias?id=<?php //echo $idEmpresa; ?>&categoria=<?php //echo $dadosCategorias['id']; ?>">-->
                                <a data-toggle="modal" data-target="#myModal">
                                <div class="alert alert-info alert-with-icon" data-notify="container" style="background-color: #DCDCDC" >
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




        <footer class="footer">
            <div class="container-fluid">
                
                <div class="copyright pull-right">
                    &copy; 2016 Drº Qualidade </a>
                </div>
            </div>
        </footer>

    </div>
</div>

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><img src="assets/img/logoTurbo.png"></h4>
        </div>
        <div class="modal-body">
          <p>Instalando módulo em processamento.</p>
          Aguarde!
          <br>
          <b>[57% Carregado]</b>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Entendi</button>
        </div>
      </div>
      
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
