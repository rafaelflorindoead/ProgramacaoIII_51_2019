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
	 								 Dados Excluídos com sucesso!!!
								</div>
							<?php
							}else 
							{
							?>
								<div class="alert alert-danger" role="alert">
	 								 Erro ao excluir os dados
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
                            $operacao = "excluir";
                            include("controller/controllerAutor.php");
                        }
                    ?>
                </div>
            </div>
        </div>
    
