<?php

include("../model/Autenticar.php");
if (filter_input(INPUT_POST,"login") && filter_input(INPUT_POST,"senha")){
        $login = filter_input(INPUT_POST,"login");
        $senha = filter_input(INPUT_POST,"senha");
        
        $user = new Autenticar;
        $user -> logar($login, $senha);
    }else{
        echo "Erro entre View e Controller";
    }