<?php

include("../model/Noticia.php");
if(filter_input(INPUT_POST,"operacao")=="cadastrar"){
    if (filter_input(INPUT_POST,"titulo") && filter_input(INPUT_POST,"descricao") && filter_input(INPUT_POST,"autor") && filter_input(INPUT_POST,"ativo") && filter_input(INPUT_POST,"fonte")){
        $titulo = filter_input(INPUT_POST,"titulo");
        $descricao = filter_input(INPUT_POST,"descricao");
        $autor = filter_input(INPUT_POST,"autor");
        $ativo = filter_input(INPUT_POST,"ativo");
        $fonte = filter_input(INPUT_POST,"fonte");

        $imagem = $_FILES['arquivo']['name'];
        $imagemTemporaria = $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
        
        $imagem = array($imagem, $imagemTemporaria);

        $not = new Noticia;
        $not -> cadastrar($titulo, $descricao, $autor, $ativo, $imagem, $fonte);
    }else{
        echo "Erro entre View e Controller";
    }
}elseif(filter_input(INPUT_POST,"operacao")=="alterar"){
    if (filter_input(INPUT_POST,"id") && filter_input(INPUT_POST,"titulo") && filter_input(INPUT_POST,"descricao") && filter_input(INPUT_POST,"autor") && filter_input(INPUT_POST,"ativo") && filter_input(INPUT_POST,"fonte")){
        $id = filter_input(INPUT_POST,"id");
        $titulo = filter_input(INPUT_POST,"titulo");
        $descricao = filter_input(INPUT_POST,"descricao");
        $autor = filter_input(INPUT_POST,"autor");
        $ativo = filter_input(INPUT_POST,"ativo");
        $fonte = filter_input(INPUT_POST,"fonte");
        $imagem = $_FILES['arquivo']['name'];
        $imagemTemporaria = $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
        
        $imagem = array($imagem, $imagemTemporaria);
        $not = new Noticia;
        $not -> alterar($id, $titulo, $descricao, $autor, $ativo, $imagem, $fonte);
    }else{
        echo "Erro entre View e Controller";
    }
}






?>