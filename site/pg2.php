<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/3.3/../favicon.ico">

    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="view/bootstrap3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="view/bootstrap3.3.7/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/docs/3.3/../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="view/bootstrap3.3.7/assets/js/ie-emulation-modes-warning.js"></script>

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
          <a class="navbar-brand" href="#">Portal de Notícias</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Noticias</a></li>
            <li><a href="#contact">Tutoriais</a></li>
            <li><a href="#contact">Cntato</a></li>
          </ul>
          <form action = "#" class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
<!--         <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="/docs/3.3/../components/#navbar" role="button">View navbar docs &raquo;</a>
        </p> -->
          <h1>Notícias de Tecnologia</h1>
      </div>
      
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-12">
        </div>
      </div>

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>


          <div class="row">
            <div class="col-xs-6 col-lg-12">
              <h2>Cientistas criam sistema que envia sons só ouvidos pelo receptor</h2>
              <h5>Publicado em: XXXXX - Autor: yyyyyyyyy</h5>
              <img src="view/imagens/noticia1.png" align="left" vspace="10px" hspace="10px"><p>Imagine que você queira ouvir alguém tentando conversar com você do outro lado de uma sala lotada; considerando o modo como as ondas de som se espalham, essa situação realmente não seria muito prática. Mas e se fosse possível projetar sons da mesma forma como a luz é projetada? 

              Pesquisadores do MIT pensaram nesta situação e desenvolveram um sistema que é capaz de fazer isso, utilizando uma transmissão de áudio que pode ser "lançada" nos ouvidos de uma pessoa específica da mesma forma como um laser lança um raio de luz. Trata-se de um método preciso e seguro, que é capaz de transmitir música e até mesmo falas para a o alvo desejado - e o melhor de tudo: sem que outras pessoas ouçam o conteúdo.

              Este sistema trabalha com a fotoacústica que, em linhas gerais, significa que as ondas sonoras são resultado de uma interação entre luz e matéria: a energia proveniente da luz faz a matéria vibrar, e o som depende destas vibrações materiais. Assim, a equipe de pesquisadores criou um sistema baseado em lasers que interagem com o vapor d'água presente no ar e, assim, geram o som audível em uma orientação bem definida, que é enviado do transmissor ao receptor.

              Segundo Charles M. Wynn, pesquisador envolvido no projeto, este sistema poderia ser utilizado em distâncias razoáveis para enviar informações diretamente no ouvido de alguém sem espalhar o som. Trata-se do primeiro sistema que utiliza lasers completamente seguros para os olhos e pele para localizar um sinal audível para o alvo desejado.

              Mas e se o ambiente não tiver muita umidade? Neste caso, também não há problemas: de acordo com o pesquisador, este sistema pode funcionar até mesmo nas condições climáticas mais secas, uma vez que sempre há um pouquinho de água no ar - principalmente perto de pessoas. A quantidade de água necessária para a aplicação desta tecnologia é pequena desde que, claro, sejam utilizados comprimentos de onda no laser que sejam absorvidos fortemente pela água.
              </p>
              <p><a class="btn btn-default" href="https://www.tecmundo.com.br/ciencia/138325-pesquisadores-criam-sistema-envia-sons-que-receptor-ouve.htm" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
          </div>

        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Newsletter</a>
            <form class="form-signin" action="#" method="POST">
               <div class="col-md-12">
                <div class="row">
                  <div class="col-md-10">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control" required autofocus>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-10">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-10">
                    <div class="checkbox">
                      <input type="checkbox" name="" id="email" required>Desejo Receber
                    </div>
                  </div>             
                </div>
              </div>             
              <button class="btn btn-small btn-success" type="submit">Quero Receber</button>
            </form>  
          </div>  
        </div><!--/.sidebar-offcanvas-->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Mais lidas</a>
            <a href="#" class="list-group-item">Cientistas criam sistema que envia sons só ouvidos pelo receptor</a>
            <a href="#" class="list-group-item">Cientistas transformam spinners em centrífugas para bancos de sangue</a>
            <a href="#" class="list-group-item">Mais de 140 startups oferecem ajuda a Brumadinho após desastre da Vale</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
          </div>  
        </div><!--/.sidebar-offcanvas-->

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="view/bootstrap3.3.7/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="view/bootstrap3.3.7/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="view/bootstrap3.3.7/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
