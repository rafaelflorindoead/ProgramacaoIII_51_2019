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
        }elseif (filter_input(INPUT_GET,"mensagem")=="NoticiaExiste"){
            ?>
            <div class="alert alert-warning" role="alert">
                Já existe Notícia cadastrado com este Título.
            </div>
            <?php
        }elseif (filter_input(INPUT_GET,"mensagem")=="erro"){
            ?>
            <div class="alert alert-danger" role="alert">
                Ocorreu um erro ao tentar gravar o notícia
            </div>
            <?php
        }
    ?>
    <?php
    include("../model/Noticia.php");
    $objetoNoticia = new Noticia();
    if ((filter_input(INPUT_GET,"acao")=="alterar") || (filter_input(INPUT_GET,"acao")=="cadastrar")){
        if ($id = filter_input(INPUT_GET,"id")){
            //busca dos dados do usuário

            $valorIndividual = $objetoNoticia->buscaDados($id);
           // print_r($valorIndividual);

            //Array ( [0] => 1 [id] => 1 [1] => Rafael [nome] => Rafael [2] => rafaelflorindo [login] => rafaelflorindo [3] => 123 [senha] => 123 [4] => 2019-02-09 12:14:37 [dataCadastro] => 2019-02-09 12:14:37 [5] => 2019-02-16 11:14:39 [dataAtualizacao] => 2019-02-16 11:14:39 [6] => 1 [ativo] => 1 ) 
            //Array ( [0] => Array ( [0] => 1 [id] => 1 [1] => Aprenda a baixar os vídeos do Instagram no seu celular ou na web [titulo] => Aprenda a baixar os vídeos do Instagram no seu celular ou na web [2] => Jose [autor] => Jose [3] => Desde que o Instagram se tornou uma versão melhorada do Snapchat, o sucesso do aplicativo só cresce. [descricao] => Desde que o Instagram se tornou um

            $imp = "Alteração dos dados da Notícia";
        }else{
            $imp = "Cadastro de Usuário";
            $valorIndividual["titulo"]="";
            $valorIndividual["descricao"]="";
            $valorIndividual["autor"]="";
            $valorIndividual["fonte"]="";
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
                        <form action="../controller/cadastroNoticia.php" method="POST" enctype="multipart/form-data">
                            <h5 class="form-signin-heading">Por favor, entre com os dados</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="titulo">Título</label>
                                        <input type="text" name="titulo" id="titulo" value="<?php echo $valorIndividual["titulo"]; ?>" class="form-control" required autofocus>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="autor">Autor</label>
                                        <input type="text" name="autor" id="autor" value="<?php echo $valorIndividual["autor"]; ?>" class="form-control" placeholder="informe seu e-mail" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <label for="imagem">Foto</label>
                                        <input type="file" name="arquivo" id="imagem" class="form-control-file">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ativo">Ativo no Sistema</label>
                                        <select name="ativo" id="ativo" class="form-control">
                                            <option value="1">Sim</option>
                                            <option value="2" selected>Não</option>
                                        </select>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="imagem">Fonte</label>
                                        <input type="text" name="fonte" id="imagem" value="<?php echo $valorIndividual["fonte"]; ?>" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label for="senha">Descrição</label>
                                        <textarea rows="5" name="descricao" id="descricao" class="form-control" required autofocus><?php echo $valorIndividual["descricao"];?></textarea>
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
                <a href="index.php?pagina=formNoticia.php&acao=cadastrar">
                    <button class="btn btn-outline btn-primary btn-xs" type="submit">[+] Adicionar nova Notícia</button></a>
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
                        Relação de Notícias Cadastradas
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Código</th>
                                <th>Titulo</th>
                                <th>Descricao</th>
                                <th>Data Cadastro</th>
                                <th>Data Atualização</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $valor = $objetoNoticia->buscaTodosDados();
                                //echo "<pre>";print_r($valor);echo "</pre:";
                                foreach ($valor as $reproduzir){
                                    ?>
                                    <tr class="even gradeC">
                                        <td><?php echo $reproduzir["id"];?></td>
                                        <td><?php echo $reproduzir["titulo"];?></td>
                                        <td><?php $desc = $reproduzir["descricao"];
                                        echo substr($desc, 0, 300);?></td>
                                        <td><?php
                                            $date = new DateTime($reproduzir["dataCadastro"]);
                                            echo $date->format('d/m/Y H:i:s'); ?></td>
                                        <td><?php $date1 = new DateTime($reproduzir["dataAtualizacao"]);
                                            echo $date1->format('d/m/Y H:i:s'); ?></td>
                                        <td class="center">
                                            <a href="index.php?pagina=formNoticia.php&acao=alterar&id=<?php echo $reproduzir["id"];?>"><button class="btn btn-outline btn-primary btn-xs" type="submit">ALTERAR</button></a>

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
