<div class="container">
    <div class="row">
        <div class="col-md-12">&nbsp;
        </div>
    </div>
    <?php
        if (filter_input(INPUT_GET,"mensagem")=="sucesso"){
    ?>
            <div class="alert alert-success" role="alert">
                Sucesso!!!
            </div>

<!--            https://getbootstrap.com/docs/4.0/components/alerts/-->
    <?php
        }elseif (filter_input(INPUT_GET,"mensagem")=="UsuarioExiste"){
            ?>
            <div class="alert alert-warning" role="alert">
                Já existe Usuário cadastrado com este login.
            </div>
            <?php
        }elseif (filter_input(INPUT_GET,"mensagem")=="erro"){
            ?>
            <div class="alert alert-danger" role="alert">
                Ocorreu um erro ao tentar gravar o usuário
            </div>
            <?php
        }
    ?>
   <!-- <div class="alert alert-primary" role="alert">
        This is a primary alert—check it out!
    </div>
    <div class="alert alert-secondary" role="alert">
        This is a secondary alert—check it out!
    </div>
    <div class="alert alert-danger" role="alert">
        This is a danger alert—check it out!
    </div>
    <div class="alert alert-warning" role="alert">
        This is a warning alert—check it out!
    </div>
    <div class="alert alert-info" role="alert">
        This is a info alert—check it out!
    </div>
    <div class="alert alert-light" role="alert">
        This is a light alert—check it out!
    </div>
    <div class="alert alert-dark" role="alert">
        This is a dark alert—check it out!
    </div>-->
    <?php
    include ("../model/Usuario.php");
    $objControleUsuario = new Usuario();
    if ((filter_input(INPUT_GET,"acao")=="alterar") || (filter_input(INPUT_GET,"acao")=="cadastrar")){
        if ($id = filter_input(INPUT_GET,"id")){
            //busca dos dados do usuário

            $valorIndividual = $objControleUsuario->buscaDados($id);
            $imp = "Alteração dos dados do Usuário";
        }else{
            $imp = "Cadastro de Usuário";
            $valorIndividual["nome"]="";
            $valorIndividual["login"]="";
        }
?>
    <div class="page-header">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <?php
                            echo $imp;
                            ?>
                     </div>
                      <!-- /.panel-heading -->
                     <div class="panel-body">
                        <form action="../controller/cadastroUsuario.php" method="POST">
                            <h5 class="form-signin-heading">Por favor, entre com os dados</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <label for="nome">Nome</label>
                                        <input type="text" name="nome" id="nome" value="<?php echo $valorIndividual["nome"];?>" class="form-control" required autofocus>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="login">Login</label>
                                        <input type="text" name="login" id="login" value="<?php echo $valorIndividual["login"];?>" class="form-control" placeholder="informe seu e-mail" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <label for="senha">Senha</label>
                                        <input type="password" name="senha" id="senha" class="form-control" required autofocus>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="ativo">Ativo no Sistema</label>
                                        <select name="ativo" id="ativo" class="form-control">
                                            <option value="1">Sim</option>
                                            <option value="2" selected>Não</option>
                                        </select>
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
                                        <?php
                                        if ($id){
                                            ?>
                                            <input type="hidden" name="operacao" value="alterar">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                            <button class="btn btn-primary" type="submit">ALTERAR</button>
                                            <?php
                                        }else{
                                            ?>
                                            <input type="hidden" name="operacao" value="cadastrar">
                                            <button class="btn btn-primary" type="submit">CADASTRAR</button>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-primary" type="submit">LIMPAR</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                     </div>
                </div>
            </div>
        </div>
    <?php
    }

    ?>
    <?php
        if(filter_input(INPUT_GET,"acao")=="listar"){
    ?>
    <div class="page-header">
        <div class="row">
            <div class="col-md-12">
                <a href="index.php?pagina=formUsuario.php&acao=cadastrar">
                    <button class="btn btn-outline btn-primary btn-xs" type="submit">[+] Adicionar novo usuário</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Relação de Usuários Cadastrados
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Login</th>
                                <th>Data Cadastro</th>
                                <th>Data Atualização</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $valor = $objControleUsuario->buscaTodosDados();
                                //echo "<pre>";print_r($valor);echo "</pre:";
                                foreach ($valor as $reproduzir){
                                    ?>
                                    <tr class="even gradeC">
                                        <td><?php echo $reproduzir["id"];?></td>
                                        <td><?php echo $reproduzir["nome"];?></td>
                                        <td><?php echo $reproduzir["login"];?></td>
                                        <td><?php
                                            $date = new DateTime($reproduzir["dataCadastro"]);
                                            echo $date->format('d/m/Y H:i:s'); ?></td>
                                        <td><?php $date1 = new DateTime($reproduzir["dataAtualizacao"]);
                                            echo $date1->format('d/m/Y H:i:s'); ?></td>
                                        <td class="center">
                                            <a href="index.php?pagina=formUsuario.php&acao=alterar&id=<?php echo $reproduzir["id"];?>"><button class="btn btn-outline btn-primary btn-xs" type="submit">VISUALIZAR</button></a>
                                            <a href="index.php?pagina=formUsuario.php&acao=alterar&id=<?php echo $reproduzir["id"];?>"><button class="btn btn-outline btn-primary btn-xs" type="submit">ALTERAR</button></a>

                                          </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                       <!-- <div class="well">
                            <h4>DataTables Usage Information</h4>
                            <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                            <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                        </div>-->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
    </div>
            <?php
        }
        ?>
    </div>
</div> <!-- /container -->
