<div class="row">
    <div class="col-md-12">&nbsp;

    </div>
</div>
<div class="page-header">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                	<?php
						if(filter_input(INPUT_GET, "mensagem"))
						{
                            $mensagem = filter_input(INPUT_GET, "mensagem");
							if($mensagem=="sucesso")
							{
							?>
								<div class="alert alert-success" role="alert">
	 								 Dados Alterados com sucesso!!!
								</div>
							<?php
							}else 
							{
							?>
								<div class="alert alert-danger" role="alert">
	 								 Erro ao alterar os dados
								</div>
							<?php
							}
						}
						else 
						{
						}

					?>
                    <?php
                        $id = filter_input(INPUT_GET, "id");
                        
                        if($id){
                            $operacao = "listarLivro";
                            include("controller/controllerLivro.php");
                            foreach ($retorno as $value) {
                    ?>
                    <div class="panel-heading">
                    	<h1>Edição de Livro</h1>
	                </div>
                      <!-- /.panel-heading -->
                    
                    <div class="panel-body">
                        <form action="controller/controllerLivro.php" method="POST">
                            <h5 class="form-signin-heading">Por favor, entre com os dados</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <label for="isbn">ISBN</label>
                                        <input type="text" name="isbn" value = <?php echo $value["isbn"]; ?> id="isbn" class="form-control" required autofocus>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="titulo">Tíulo</label>
                                        <input type="text" name="titulo" value = <?php echo $value["titulo"]; ?> id="titulo" class="form-control" placeholder="informe seu e-mail" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="autor">Autor</label>
                                        <input type="text" name="autor" value = <?php echo $value["autor"]; ?> id="titulo" class="form-control" placeholder="informe seu e-mail" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <label for="anoEdicao">Ano Edicao</label>
                                        <input type="text" name="anoEdicao" value = <?php echo $value["anoEdicao"]; ?> id="anoEdicao" class="form-control" required autofocus>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="edicao">Edicao</label>
                                        <input type="text" name="edicao" value = <?php echo $value["edicao"]; ?> id="edicao" class="form-control" required autofocus>
                                    </div>
                                     <div class="col-md-4">
                                        <label for="editora">Editora</label>
                                        <input type="text" name="editora" value = <?php echo $value["editora"]; ?> id="editora" class="form-control" required autofocus>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                            <input type="hidden" name="operacao" value="alterar">
                                            <input type="hidden" name="id" value=<?php echo $id; ?>>
                                            <button class="btn btn-primary" type="submit">ALTERAR</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-primary" type="reset">LIMPAR</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                     </div>
                         <?php } }
    ?>
                </div>
            </div>
        </div>
    
