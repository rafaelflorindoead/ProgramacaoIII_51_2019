<?php

include("../model/Newsletter.php");
if(filter_input(INPUT_POST,"operacao")=="cadastrar"){
    if (filter_input(INPUT_POST,"nome") && filter_input(INPUT_POST,"email") && filter_input(INPUT_POST,"desejaReceber")){
        $nome = filter_input(INPUT_POST,"nome");
        $email = filter_input(INPUT_POST,"email");
        $desejaReceber = filter_input(INPUT_POST,"desejaReceber");
        $not = new Newsletter;
        $not -> cadastrar($nome, $email, $desejaReceber);
    }else{
        echo "Erro entre View e Controller";
    }
}elseif(filter_input(INPUT_POST,"operacao")=="alterar"){
    if (filter_input(INPUT_POST,"id") && filter_input(INPUT_POST,"nome") && filter_input(INPUT_POST,"email") && filter_input(INPUT_POST,"desejaReceber")){
        $id = filter_input(INPUT_POST,"id");
        $nome = filter_input(INPUT_POST,"nome");
        $email = filter_input(INPUT_POST,"email");
        $desejaReceber = filter_input(INPUT_POST,"desejaReceber");
        $not = new Newsletter;
        $not -> alterar($id, $nome, $email, $desejaReceber);
    }else{
        echo "Erro entre View e Controller";
    }
}
?>