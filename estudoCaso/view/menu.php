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
          	Objeto de estudo de caso
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?controller=autor&metodo=cadastro">Autor</a></li>
                <li><a href="index.php?controller=livro&metodo=cadastro">Livro</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Movimentação <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?controller=autor&metodo=listarAutor">Autor</a></li>
                 <li><a href="index.php?controller=livro&metodo=listarLivro">Livro</a></li>
              </ul>
            </li>
             
          </ul>      
        </div><!--/.nav-collapse -->
      </div>
    </nav>