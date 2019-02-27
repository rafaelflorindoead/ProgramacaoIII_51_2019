<?php
	if(filter_input(INPUT_POST, "nome") &&
		filter_input(INPUT_POST, "login") &&
		filter_input(INPUT_POST, "senha")
		){
		$nome = filter_input(INPUT_POST, "nome");
		$login = filter_input(INPUT_POST, "login");
		$senha = filter_input(INPUT_POST, "senha");

		echo "Nome: " . $nome;
		echo "<br>Login: " . $login;
		echo "<br>Senha: " . $senha;
	}else{
		echo "Campos não preenchidos!!!";
	}
?>