<?php
include("Pessoa.php");
class Aluno implements Pessoa{

	public $nome;

	public function inserir($nome){
		$this->nome=$nome;
		echo "Inserindo Aluno " . $this->nome;
	}
	public function alterar($nome){
		$this->nome=$nome;
		echo "Alterando Aluno " . $this->nome;
	}
}
?>