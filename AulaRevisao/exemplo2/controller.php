<?php
	include ("Concrete_Pessoa_Fisica.php");

	$obj = new Concrete_Pessoa_Fisica();
	$nome = "rafael";

	$obj->setNome($nome);
	$obj->pagarImposto();
	print_r($obj);
	$obj->setNome("Italo");
	$obj->pagarImposto();
	print_r($obj);
	$obj->setNome("Elton");
	$obj->pagarImposto();
	print_r($obj);
	$obj->setNome("Bassam");
	$obj->pagarImposto();
	print_r($obj);
?>