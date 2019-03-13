<?php
	include("Autor.php");
	include("Livro.php");
	$rafael = new Autor();
	$rafael->nome="Rafael Florindo";
	$rafael->email="rafae123";

	$php = new Livro();
	$php->titulo= "POO";
	$php->isbn="1234567489";
	$php->autor=$rafael;

	echo "Título: " . $php->titulo; 
	echo "<br>ISBN: " . $php->isbn ; 
	echo "<br>Autor: " . $php->autor->nome; 
	echo "<br>Email: " . $php->autor->email ; 
?>