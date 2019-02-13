
<div class="row">
    <div class="col-md-12">&nbsp;

    </div>
</div>
<div class="page-header">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                	<?php
						if($mensagem = filter_input(INPUT_GET, "mensagem"))
						{
							if($mensagem=="sucesso")
							{
							?>
								<div class="alert alert-success" role="alert">
	 								 Dados gravados com sucesso!!!
								</div>
							<?php
							}else 
							{
							?>
								<div class="alert alert-danger" role="alert">
	 								 Erro ao gravar os dados
								</div>
							<?php
							}
						}
						else 
						{
						}

					?>
                    <div class="panel-heading">
                    	<h1>Cadastro de Livro</h1>
	                </div>
                      <!-- /.panel-heading -->
                     <div class="panel-body">
                        <form action="controller/controllerLivro.php" method="POST">
                            <h5 class="form-signin-heading">Por favor, entre com os dados</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <label for="isbn">ISBN</label>
                                        <input type="text" name="isbn" id="isbn" class="form-control" required autofocus>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="titulo">tÍtulo</label>
                                        <input type="text" name="titulo" id="titulo" class="form-control" placeholder="informe seu e-mail" required>
                                    </div>
                                    <div class="col-md-4">
										<label for="autore">Autor</label>
                                        <select name = "autor" id="titulo" class="form-control">
                                    	<?php
                                    		$operacao = "listarAutor";
                                    		include ("controller/controllerLivro.php");
                                    		foreach ($retorno as $value) {
                                    	?>
                                               	<option value=<?php echo $value["id"];?>><?php echo $value["nome"];?></option>
                                   		<?php } ?>
                               		</select>
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
                                        <input type="text" name="anoEdicao" id="anoEdicao" class="form-control" required autofocus>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="edicao">Edicao</label>
                                        <input type="text" name="edicao" id="edicao" class="form-control" required autofocus>
                                    </div>
                                     <div class="col-md-4">
                                        <label for="editora">Editora</label>
                                        <input type="text" name="editora" id="editora" class="form-control" required autofocus>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                            <input type="hidden" name="operacao" value="cadastrar">
                                            <button class="btn btn-primary" type="submit">CADASTRAR</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-primary" type="reset">LIMPAR</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                     </div>
                </div>
            </div>
        </div>
    <div class="page-header">
        <div class="row">
            <div class="col-md-12">
                <a href="index.php?controller=livro&metodo=cadastro">
                    <button class="btn btn-outline btn-success btn-xs" type="submit">[+] Adicionar novo Livro</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                &nbsp;
            </div>
        </div>
    </div>



