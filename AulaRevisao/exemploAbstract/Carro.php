<?php
include("Veiculo.php");
class Carro extends Veiculo{
	public function inserir($nome){
		$this->setNome($nome);
	}
	public function alterar($nome){
		$this->setNome($nome);
	}

	public function imprimir(){
		echo $this->getNome();
	}
}
?>