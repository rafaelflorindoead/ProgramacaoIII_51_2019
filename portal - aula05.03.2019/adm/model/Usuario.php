<?php
class Usuario{
	public $id, $nome, $login, $senha, $ativo, $dataCadastro;

	public function cadastrar($nome, $login, $senha, $ativo){
		$this->nome = $nome;
		$this->login = $login;
		$this->senha = $senha;
		$this->ativo = $ativo;
		$dataCadastro = date("Y-m-d h:m:s");
		$this->dataCadastro = $dataCadastro;

		echo "<br>Nome = " . $this->nome;
		echo "<br>Login = " . $this->login;
		echo "<br>Senha = " . $this->senha;
		echo "<br>Ativo = " . $this->ativo;
		echo "<br>Data de Cadastro = " . $this->dataCadastro;
		exit;
	}
	public function alterar($id, $nome, $login, $senha, $ativo, $dataCadastro){
		$this->id = $id;
		$this->nome = $nome;
		$this->login = $login;
		$this->senha = $senha;
		$this->ativo = $ativo;
		$dataCadastro = date("Y-m-d h:m:s");
		$this->dataCadastro = $dataCadastro;

		echo "<br>Id = " . $this->id;
		echo "<br>Nome = " . $this->nome;
		echo "<br>Login = " . $this->login;
		echo "<br>Senha = " . $this->senha;
		echo "<br>Ativo = " . $this->ativo;
		echo "<br>Data de Cadastro = " . $this->dataCadastro;
	}
	public function buscaDados($id){
		$this->setId($id);
		echo "<br>Id = " . $this->getId();
	}
	public function buscaTodosDados(){

	}
}
?>