<?php
include ("AbstractPessoa.php");
class Concrete_Pessoa_Fisica extends AbstractPessoa{
	public $imposto=0;

	public function setNome($nome){
		$this->nome=$nome;
	}
	public function getNome(){
		return $this->nome;
	}
	public function pagarImposto(){
		$this->imposto++;
	}

}
?>