<?php
	//$titulo = filter_input(INPUT_GET,"");
	$titulo = filter_input(INPUT_POST,"titulo");
	$autor = filter_input(INPUT_POST,"nome");
	$email = filter_input(INPUT_POST,"email");
/*
	echo "Nome = " . $autor;
	echo "<br>Título = $titulo";
	echo "<br>E-mail = $email";
*/
	include("../model/Livro.php");
	$objetoLivro = new Livro();
	print_r($objetoLivro);
	$objetoLivro->titulo=$titulo;
	$objetoLivro->autor=$autor;
	$objetoLivro->email=$email;

	print_r($objetoLivro);
	exit;
	echo "<fieldset>";
	echo "<h1>Dados do livro</h1>";
	echo "Nome = " . $objetoLivro->autor;
	echo "<br>Título = " . $objetoLivro->titulo;
	echo "<br>E-mail = " . $objetoLivro->email;
	echo "</fieldset>";
?>