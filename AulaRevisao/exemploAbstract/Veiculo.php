<?php
abstract class Veiculo{
	public $nome;

	public function setNome($nome){
		$this->nome=$nome;
	}
	public function getNome(){
		return $this->nome;
	}
	abstract function inserir($nome);
	abstract function alterar($nome);
}

?>