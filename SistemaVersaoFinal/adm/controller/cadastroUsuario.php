<?php

include("../model/Usuario.php");
if(filter_input(INPUT_POST,"operacao")=="cadastrar"){
    if (filter_input(INPUT_POST,"login") && filter_input(INPUT_POST,"senha") && filter_input(INPUT_POST,"nome") && filter_input(INPUT_POST,"ativo")){
        $login = filter_input(INPUT_POST,"login");
        $senha = filter_input(INPUT_POST,"senha");
        $nome = filter_input(INPUT_POST,"nome");
        $ativo = filter_input(INPUT_POST,"ativo");
        $user = new Usuario;
        $user -> cadastrar($login, $senha, $nome, $ativo);
    }else{
        echo "Erro entre View e Controller";
    }
}elseif(filter_input(INPUT_POST,"operacao")=="alterar"){
    if (filter_input(INPUT_POST,"id") && filter_input(INPUT_POST,"login") && filter_input(INPUT_POST,"senha") && filter_input(INPUT_POST,"nome") && filter_input(INPUT_POST,"ativo")){
        $id = filter_input(INPUT_POST,"id");
        $login = filter_input(INPUT_POST,"login");
        $senha = filter_input(INPUT_POST,"senha");
        $nome = filter_input(INPUT_POST,"nome");
        $ativo = filter_input(INPUT_POST,"ativo");
        $user = new Usuario;
        $user -> alterar($id, $login, $senha, $nome, $ativo);
    }else{
        echo "Erro entre View e Controller";
    }
}






?>