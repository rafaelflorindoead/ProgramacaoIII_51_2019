<?php
interface Controller
{
	public function inserir($dados);
	public function alterar($dados);
	public function excluir($dados);
	public function buscarTodos();
	public function buscarUm($dados);
}

?>