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
                    <a class="navbar-brand" href="">Funcionários:<br> <?php echo $nomeEmpresaEncontrado['nome']; ?></a>
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
                <span data-notify="icon" style="color: black; " class="ti-back-left"> <a href="index" style="color:black;">VOLTAR</a></span>

            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                    <a href="cadastrofuncionario?id=<?php echo $id; ?>">
                        <div class="card card2">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon- text-center">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Cadastrar</p>
                                            funcionário
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </a>
                    </div>
                     <div class="col-lg-4 col-sm-6">
                    <a data-toggle="modal" data-target="#myModal">
                    <!--<a href="cadastrofuncionario?id=<?php //echo $id; ?>">-->
                        <div class="card card2">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon- text-center">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Cadastrar</p>
                                            admin
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
                                <h4 class="title">Listas de funcionários</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>E-mail</th>
                                        <th>Opção</th>
                                        
                                    </thead>
                                    <tbody>
                                    <?php 
                                        
                                       
                                        $buscarEmpresas = "SELECT nome, id,celular, email FROM rh WHERE empresa = '$id'";
                                        $buscarEmpresas = mysqli_query($conexao, $buscarEmpresas);

                                        while($dadosBuscados = mysqli_fetch_array($buscarEmpresas)){
                                    ?>
                                        <tr>
                                            <td><?php echo $dadosBuscados['nome']; ?></td>
                                            <td><?php echo $dadosBuscados['celular']; ?></td>
                                            <td><?php echo $dadosBuscados['email']; ?></td>
                                            <td><a href="deletarfuncionario?idfunc=<?php echo $dadosBuscados['id']; ?>&id=<?php echo $id; ?>"><img src="assets/img/delete.png" title="DELETAR"></a>
                                            <a href="dadosfuncionario?idfunc=<?php echo $dadosBuscados['id']; ?>&id=<?php echo $id; ?>" style="margin-left: 5px;"><img src="assets/img/view.png" title="VISUALIZAR"></a></td>
                                            
                                            
                                        </tr>
                                    <?php } ?>
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
          <b>[82% Carregado]</b>
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
