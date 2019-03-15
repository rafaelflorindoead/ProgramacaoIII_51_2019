<?php
include("Gerente.php");
class GerenteProjeto extends Gerente{
	public $projeto;
	public function __construct($nome, $matricula, $projeto){
		//echo "$nome, $matricula, $projeto";
		parent::__construct($nome, $matricula);
		$this->projeto=$projeto;
	}
}

?>