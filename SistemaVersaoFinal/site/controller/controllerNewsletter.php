<?php
	if (filter_input(INPUT_POST, "nome") && filter_input(INPUT_POST, "email")){
		$nome = filter_input(INPUT_POST, "nome");
		$email = filter_input(INPUT_POST, "email");
		$desejaReceber = filter_input(INPUT_POST, "desejaReceber") ? "1": "0";

		echo "Nome ". $nome;
		echo "<br>E-mail = ". $email;
		echo "<br>Deseja receber Notícia = ". $desejaReceber;		
		include ("../../adm/model/Newsletter.php");
		$incluir = new Newsletter();
		$incluir->cadastrar($nome, $email);
		return; 
	}else{
		echo "Campos não preenchidos";
	}
?>