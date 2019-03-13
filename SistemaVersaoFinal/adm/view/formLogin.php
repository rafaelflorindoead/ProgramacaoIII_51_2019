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

    <title>Autenticação Sistema Escola</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap3.3.7/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap3.3.7/dist/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="bootstrap3.3.7/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap3.3.7/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
          <a class="brand" href="#">&nbsp;</a>
      </div>
  </nav>

    <div class="container">
        <div class="page-header">
            <div class="panel panel-default">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">

                            <h2>Seja bem-vindo ao Sistema Gerenciador de Noticías.</h2>

                            <p>Para conectar-se à intranet informe o seu usuário e senha.</p>
                        </div>
                        <div class="col-md-6">
                            <form class="form-signin" action="../controller/controlelogin.php" method="POST">
                                    <?php
                              if (filter_input(INPUT_GET, "mensagem")=="erro"){
                                ?>
                                <div class="alert alert-warning">
                                  <strong>Atenção!</strong> Usuário e senha não Conferem.
                                </div>
                                <?php
                              }elseif(filter_input(INPUT_GET, "mensagem")=="deslogado"){
                                ?>
                                <div class="alert alert-success">
                                  <strong>Sucesso!</strong>Você saiu do sistema.
                                </div>
                                <?php
                              }else{
                                 // echo "";
                              }
                                ?>
                                <h2>Login</h2>
                                <label for="inputlogin" class="sr-only">Login</label>
                                <input type="text" name="login" id="inputlogin" class="form-control" placeholder="Login" required>
                                <label for="inputPassword" class="sr-only">Password</label>
                                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Password" required>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sessão</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /container -->
  <footer class="footer">
      <div class="container">
          <p class="text-muted">
              <br>
              Data/hora:<?php echo date ("d/m/Y h:m:s")?>
          </p>
          <p class="credit muted">Programação III. <span class="badge" id="sessaoInfo" style="display:none"></span></p>
      </div>
  </footer>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap3.3.7/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>