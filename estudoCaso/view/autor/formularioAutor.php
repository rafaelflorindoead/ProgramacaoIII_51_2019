
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
                    	<h1>Cadastro de Autor</h1>
	                </div>
                      <!-- /.panel-heading -->
                     <div class="panel-body">
                        <form action="controller/controllerAutor.php" method="POST">
                            <h5 class="form-signin-heading">Por favor, entre com os dados</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <label for="nome">Nome</label>
                                        <input type="text" name="nome" id="nome" class="form-control" required autofocus>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="login">Email</label>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="informe seu e-mail" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <label for="fone">Fone</label>
                                        <input type="text" name="fone" id="fone" class="form-control" required autofocus>
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
                <a href="index.php?controller=autor&metodo=cadastro">
                    <button class="btn btn-outline btn-success btn-xs" type="submit">[+] Adicionar novo usuário</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                &nbsp;
            </div>
        </div>
    </div>