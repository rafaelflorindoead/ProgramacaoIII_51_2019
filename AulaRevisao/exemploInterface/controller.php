<?php
	include("Aluno.php");

	$bruno = new Aluno();
	$nome = "Bruno Kammers";
	$bruno->inserir($nome);
	echo "<br>";
	$nome = "Bruno K.";
	$bruno->alterar($nome);
?>