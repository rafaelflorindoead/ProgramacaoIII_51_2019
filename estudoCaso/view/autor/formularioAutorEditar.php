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
                            $operacao = "listarAutor";
                            include("controller/controllerAutor.php");
                            foreach ($retorno as $value) {
                    ?>
                    <div class="panel-heading">
                    	<h1>Edição de Autor</h1>
	                </div>
                      <!-- /.panel-heading -->
                    
                    <div class="panel-body">
                        <form action="controller/controllerAutor.php" method="POST">
                            <h5 class="form-signin-heading">Por favor, entre com os dados</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <label for="nome">Nome</label>
                                        <input type="text" name="nome" value = <?php echo $value["nome"]; ?> id="nome" class="form-control" required autofocus>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="login">Email</label>
                                        <input type="text" name="email" value = <?php echo $value["email"]; ?> id="email" class="form-control" placeholder="informe seu e-mail" required>
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
                                        <input type="text" name="fone" value = <?php echo $value["fone"]; ?> id="fone" class="form-control" required autofocus>
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
    
