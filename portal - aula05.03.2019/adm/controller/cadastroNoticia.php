<?php

include("../model/Noticia.php");
if(filter_input(INPUT_POST,"operacao")=="cadastrar"){
    if (filter_input(INPUT_POST,"titulo") && filter_input(INPUT_POST,"descricao") && filter_input(INPUT_POST,"autor") && filter_input(INPUT_POST,"ativo")){
        $titulo = filter_input(INPUT_POST,"titulo");
        $descricao = filter_input(INPUT_POST,"descricao");
        $autor = filter_input(INPUT_POST,"autor");
        $ativo = filter_input(INPUT_POST,"ativo");
        $imagem ="imagem";
        $objNoticia = new Noticia();
        $objNoticia->cadastrar($titulo, $descricao, $autor, $ativo, $imagem);

    }else{
        echo "Erro entre View e Controller";
    }
}elseif(filter_input(INPUT_POST,"operacao")=="alterar"){
    if (filter_input(INPUT_POST,"id") && filter_input(INPUT_POST,"titulo") && filter_input(INPUT_POST,"descricao") && filter_input(INPUT_POST,"autor") && filter_input(INPUT_POST,"ativo")){
        $id = filter_input(INPUT_POST,"id");
        $titulo = filter_input(INPUT_POST,"titulo");
        $descricao = filter_input(INPUT_POST,"descricao");
        $autor = filter_input(INPUT_POST,"autor");
        $ativo = filter_input(INPUT_POST,"ativo");
        $imagem ="imagem Alterada";
        $objNoticia = new Noticia();
        $objNoticia->alterar($id, $titulo, $descricao, $autor, $ativo, $imagem);
    }else{
        echo "Erro entre View e Controller";
    }
}






?>