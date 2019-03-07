<?php
 // require_once('../model/Autenticar.php');
  //$objConnection = new Autenticar();
  //$objConnection->verificarLogado();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>GERENCIADOR - PORTAL DE NOTICIA</title>


    <!-- Bootstrap core CSS -->
    <link href="bootstrap3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap3.3.7/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap3.3.7/dist/navbar-fixed-top.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="bootstrap3.3.7/dist/css/sticky-footer.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="bootstrap3.3.7/dist/css/signin.css" rel="stylesheet">

      <!-- DataTables CSS -->
      <link href="bootstrap3.3.7/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

      <!-- DataTables Responsive CSS -->
      <link href="bootstrap3.3.7/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="bootstrap3.3.7/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap3.3.7/assets/js/vendor/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            GERENCIADOR - PORTAL DE NOTICIA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?pagina=formUsuario.php&acao=listar">Usuário</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="index.php?pagina=formNoticia.php&acao=listar">Notícia</a></li>
              </ul>
            </li>
            <li class="active"><a href="../controller/logout.php">Sair</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <?php
          if(isset($_GET['pagina'])){
            include($_GET["pagina"]);
          } else{
            //include("home.php");
          }
        ?>
      </div>
    </div> <!-- /container -->
  
    <footer class="footer">
      <div class="container">
        <p class="text-muted">
          Usuário Logado:
          <?php
           // echo $objConnection->getNomeLogin();
          ?>
          <br>
          Data/hora:<?php echo date ("d/m/Y h:m:s")?>
        </p>
          <p class="credit muted">Programação III. <span class="badge" id="sessaoInfo" style="display:none"></span></p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bootstrap3.3.7/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap3.3.7/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap3.3.7/assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="bootstrap3.3.7/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="bootstrap3.3.7/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="bootstrap3.3.7/vendor/datatables-responsive/dataTables.responsive.js"></script>


    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
  </body>
</html>
