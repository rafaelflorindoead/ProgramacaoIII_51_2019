
<div class="row">
    <div class="col-md-12">&nbsp;

    </div>
</div>
<div class="page-header">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    	<h1>Relação de Livros</h1>
	                </div>
                      <!-- /.panel-heading -->
                     <div class="panel-body">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Titulo</th>
                              <th scope="col">ISBN</th>
                              <th scope="col">Autor</th>
                              <th scope="col">Ação</th>
                            </tr>
                          </thead>
                          <tbody>
                                <?php  
                                $operacao = "listar";
                                include("controller/controllerLivro.php");
                                foreach ($retorno as $key => $value) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $value["id"];?></th>
                                    <td><?php echo $value["titulo"];?></td>
                                    <td><?php echo $value["isbn"];?></td>
                                    <td><?php echo $value["autor"];?></td>                                
                                    <td>
                                        <a href = "index.php?controller=livro&metodo=alterar&id=<?php echo $value['id'];?>">[Editar]</a>
                                        <a href = "index.php?controller=livro&metodo=excluir&id=<?php echo $value['id'];?>">[Excluir]</a>
                                    </td>
                                </tr>
                                    <?php
                                }
                                ?>    
                          </tbody>
                        </table>    
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