<?php
if(filter_input(INPUT_POST, "nome") && filter_input(INPUT_POST, "email")){
	$nome = filter_input(INPUT_POST, "nome");
	$email = filter_input(INPUT_POST, "email");
	echo "Nome = " . $nome;
	echo "E-mail = " . $email;
}else{
	echo "Campos não informados";
}


?>