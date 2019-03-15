<?php
include("Funcionario.php");
class Gerente extends Funcionario{
	public function __construct($nome, $matricula){
		//echo "$nome, $matricula";
		parent::__construct($nome, $matricula);
	}
}

?>