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
            $imp = "Alteração dos dados da Notícia";
        }else{
            $imp = "Cadastro de Usuário";
            $valorIndividual["titulo"]="";
            $valorIndividual["descricao"]="";
        }
?>
    <div class="page-header">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <?php
                            //echo $imp;
                            ?>
                     </div>
                      <!-- /.panel-heading -->
                     <div class="panel-body">
                        <form action="../controller/cadastroNoticia.php" method="POST">
                            <h5 class="form-signin-heading">Por favor, entre com os dados</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label for="titulo">Título</label>
                                        <input type="text" name="titulo" id="titulo" value="<?php echo $valorIndividual["titulo"];?>" class="form-control" required autofocus>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="autor">Autor</label>
                                        <input type="text" name="autor" id="autor" value="<?php echo $valorIndividual["autor"];?>" class="form-control" placeholder="informe seu e-mail" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <label for="imagem">Foto</label>
                                        <input type="file" name="imagem" id="imagem" class="form-control">
                                    </div>
                                    <div class="col-md-2">
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
                                    <div class="col-md-10">
                                        <label for="senha">Descrição</label>
                                        <textarea name="descricao" id="descricao" class="form-control" required autofocus><?php echo $valorIndividual["descricao"];?></textarea>
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
    
</div> <!-- /container -->
<?php } ?>
