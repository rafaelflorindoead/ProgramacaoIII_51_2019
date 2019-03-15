<?php
class Funcionario{
	public $nome;
	public $matricula;

	public function __construct($nome, $matricula){
		//echo "$nome, $matricula";
		$this->nome=$nome;
		$this->matricula=$matricula;
	}
}

?>