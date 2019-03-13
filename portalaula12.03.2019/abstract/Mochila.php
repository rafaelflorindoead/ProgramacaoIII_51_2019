<?php
include("Produto.php");
class Mochila extends Produto{
	public $cor, $marca;

	public function reservar(){
		echo "Produto reservado";
	}
}
?>