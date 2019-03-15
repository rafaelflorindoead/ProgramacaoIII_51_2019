<?php
	include ("GerenteProjeto.php");

$nome = "Rafael";
$matricula = "123456";
$projeto = "Atualizar Livro PHP";
$gerente1 = new GerenteProjeto($nome, $matricula, $projeto);
//$gerente1->nome="Rafael";
//$gerente1->matricula="123456";

echo "Nome = " . $gerente1->nome;
echo "<br>";
echo "Matricula = " . $gerente1->matricula;
echo "<br>";
echo "Projeto = " . $gerente1->projeto;
?>