<?php
	$titulo = filter_input(INPUT_POST,"titulo");
	$autor = filter_input(INPUT_POST,"nome");
	$email = filter_input(INPUT_POST,"email");

	include("../model/Livro.php");
	$objetoLivro = new Livro($titulo, $autor, $email);
	$objetoLivro->imprimir();
/*
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
	*/
?>