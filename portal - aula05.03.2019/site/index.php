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
          <div class="row">
            <div class="col-xs-6 col-lg-12">
              <h2>Cientistas transformam spinners em centrífugas para bancos de sangue</h2>
              <h5>Publicado em: XXXXX - Autor: yyyyyyyyy</h5>
              <img src="view/imagens/noticia2.png" align="left" vspace="10px" hspace="10px">
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 

              Ok, é verdade que os as pessoas acabaram superando os fidget spinners - principalmente depois que de tanta gente fazendo questão de mostrar que não havia tanta graça neles. Contudo, cientistas taiwaneses descobriram um novo propósito para estes objetos: eles transformaram os spinners em centrífugas de baixo custo para que funcionários da área da saúde em locais com más condições possam separar os componentes principais do sangue - o plasma e os glóbulos vermelhos -  com mais facilidade.

              O plasma é utilizado para avaliar condições como HIV, hepatite e problemas de nutrição. Acontece que, geralmente, esta separação é feita com centrífugas caras que funcionam com energia elétrica, para poderem girar rápido o suficiente para criar a força centrífuga necessária. Assim, os pesquisadores da Universidade Nacional de Taiwan começaram a pensar se haveria alguma forma de realizar este processo de forma mais barata.


              Por mais engraçado que seja, o primeiro candidato foi uma Beyblade, seguida pelo spinner. Os testes feitos foram relativamente simples: primeiro, os pesquisadores colocaram amostras de sangue em três tubos compridos, e os prenderam a cada um dos braços do spinner. Depois, eles simplesmente giraram o spinner da mesma forma como você faria, e esperaram que ele parasse sozinho antes de girá-lo novamente. Eles realizaram este processo até conseguirem ver o tom amarelado do plasma separado.

              Em média, foram necessários por volta de 7 minutos para que o plasma fosse separado, entre três e cinco movimentos do dedo para que o dispositivo gire. De acordo com os resultados do teste, aproximadamente 30% do plasma total da amostra foi filtrado, sendo que sua composição era 99% de puro plasma. Caso você ainda não esteja confiando muito, saiba que os pesquisadores realizaram o mesmo teste com uma amostra de sangue com uma proteína do vírus HIV-1, a forma mais comum da doença. Após analisar o plasma filtrado com um papel que detecta a proteína em questão, foi possível confirmar a presença do vírus.dui.
              </p>
              <p><a class="btn btn-default" href="https://www.tecmundo.com.br/ciencia/138216-cientistas-transformam-spinners-centrifugas-sangue.htm" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
          </div>
          <div class="row">
            <div class="col-xs-6 col-lg-12">
              <h2>Mais de 140 startups oferecem ajuda a Brumadinho após desastre da Vale</h2>
              <h5>Publicado em: XXXXX - Autor: yyyyyyyyy</h5>
              <img src="view/imagens/noticia3.png" align="left" vspace="10px" hspace="10px">
              <p>Mais de 140 companhias enviaram mensagens para a Agência Brasileira de Desenvolvimento Industrial (ABDI) após a campanha da ABDI para que startups e empresas pudessem disponibilizar inteligência e tecnologias para auxiliar na tragédia gerada pelo rompimento da barragem da Vale em Brumadinho (MG).

              Estamos estimando o fluxo de rejeitos e cruzando com o último sinal de GPS que uma pessoa tenha tido antes do rompimento da barragem

              Especialistas das mais diversas áreas também se colocaram à disposição para ajudar. “Nesse momento, é fundamental mobilizarmos tecnologias e inteligência para atuar com agilidade em cooperação com as autoridades e equipes técnicas no local da tragédia, auxiliando nas buscas e, posteriormente, no trabalho de reconstrução das áreas atingidas”, disse Guto Ferreira, Presidente da ABDI.
              Aplicativo de rastreamento

              A BirminD, uma das startups que respondeu ao chamado da ABDI, juntou-se a outras empresas de base tecnológica para o desenvolvimento de um aplicativo. “Estamos estimando o fluxo de rejeitos e cruzando com o último sinal de GPS que uma pessoa tenha tido antes do rompimento da barragem. Com essa informação queremos estimar, levando em conta o arrasto da lama, onde a pessoa possa estar”, explica Diego Oliveira, um dos Fundadores da empresa.

              A partir das fotos, nós geramos vários mapas. Com essas informações, podemos calcular a declividade do terreno e entender todo o relevo

              Celulares mais modernos mapeiam, praticamente em tempo real, o deslocamento de seus usuários. Essa tecnologia deve auxiliar na busca por desaparecidos. O algoritmo, base para construção do aplicativo, começou a ser desenvolvido domingo às 9 horas. A primeira versão ficou pronta nesta segunda-feira (28), às 2h30. “Agora, nós disponibilizamos o algoritmo de forma aberta na rede para que ele seja melhorado. Qualquer um pode aprimorar”, destaca Oliveira. Como os dados de localização são sigilosos, a ideia é que as empresas de telefonia utilizem o aplicativo para ajudar as equipes de salvamento.
              Drones em busca de sobreviventes

              Uma empresa que oferece serviço de monitoramento por drones também se colocou à disposição da ABDI. As câmeras de alta resolução podem fazer um modelo digital da área, explica o Diretor de Engenharia da Nong, Gabriel Postiglione: “A partir das fotos, nós geramos vários mapas. Com essas informações, podemos calcular a declividade do terreno e entender todo o relevo. Em uma operação de resgate, conhecer a declividade é fundamental, podemos direcionar a melhor entrada e como andar no terreno”.

              Estamos apelando ao espírito solidário do nosso ecossistema de empreendedorismo e inovação para um verdadeiro mutirão cívico de ajuda à cidade de Brumadinho

              As câmaras multiespectrais, embarcadas nos drones, permitem o desenho preciso do terreno. Segundo Postiglione, os equipamentos também poderiam ajudar na visualização do local. “As câmeras, voando a 200 metros, conseguem observar, com boa resolução, objetos à cinco centímetros do chão”, relata.

              A ABDI vai continuar recebendo mensagens de empresas que possam ajudar em Brumadinho. Todas as informações estão sendo compiladas e repassadas para as autoridades competentes. “Estamos apelando ao espírito solidário do nosso ecossistema de empreendedorismo e inovação para um verdadeiro mutirão cívico de ajuda à cidade de Brumadinho”, destaca Guto Ferreira. 
</p>
              <p><a class="btn btn-default" href="https://www.tecmundo.com.br/mercado/138240-140-startups-oferecem-ajuda-brumadinho-desastre-vale.htm" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
          </div>
          <div class="row">
            <div class="col-xs-6 col-lg-12">
              <h2>xxxxxxx</h2>
              <p>xxxxxxxxxxx</p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
          </div>
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Newsletter</a>
            <form class="form-signin" action="#" method="POST">
               <div class="col-md-12">
                <div class="row"><br>
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
