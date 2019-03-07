<?php
class NewsLetter{
	public $id, $nome, $email, $desejaReceber;

	public function setId($id){
		$this->id = $id;
	}
	public function getid(){
		return $this->id;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setDesejaReceber($desejaReceber){
		$this->desejaReceber = $desejaReceber;
	}
	public function getDesejaReceber(){
		return $this->desejaReceber;
	}
	public function cadastrar($nome, $email, $desejaReceber){
		$this->setNome($nome);
		$this->setEmail($email);
		$this->setDesejaReceber($desejaReceber);

		//Banco de dados.
	}

	public function alterar($id, $nome, $email, $desejaReceber){
		$this->setId($id);
		$this->setNome($nome);
		$this->setEmail($email);
		$this->setDesejaReceber($desejaReceber);

		//Banco de dados.
	}
}
?>