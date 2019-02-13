
<div class="row">
    <div class="col-md-12">&nbsp;

    </div>
</div>
<div class="page-header">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    	<h1>Relação de Autores</h1>
	                </div>
                      <!-- /.panel-heading -->
                     <div class="panel-body">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nome</th>
                              <th scope="col">E-mail</th>
                              <th scope="col">Fone</th>
                              <th scope="col">Ação</th>
                            </tr>
                          </thead>
                          <tbody>
                                <?php  
                                $operacao = "listar";
                                include("controller/controllerAutor.php");
                                foreach ($retorno as $key => $value) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $value["id"];?></th>
                                    <td><?php echo $value["nome"];?></td>
                                    <td><?php echo $value["email"];?></td>
                                    <td><?php echo $value["fone"];?></td>
                                    <td>
                                        <a href = "index.php?controller=autor&metodo=alterar&id=<?php echo $value['id'];?>">[Editar]</a>
                                        <a href = "index.php?controller=autor&metodo=excluir&id=<?php echo $value['id'];?>">[Excluir]</a>
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