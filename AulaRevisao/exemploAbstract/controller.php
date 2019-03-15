<?php
	include("Carro.php");

	$celta = new Carro();
	$nome = "Celta 2014";
	$celta->inserir($nome);
	$celta->imprimir();
?>