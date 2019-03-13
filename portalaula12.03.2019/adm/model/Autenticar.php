<?php
class Autenticar{
	private $id, $login, $senha, $nome;

	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this->id;
	}
	public function setLogin($login){
		$this->login = $login;
	}
	public function getLogin(){
		return $this->login;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}
	public function getSenha(){
		return $this->senha;
	}
	public function logar($login, $senha){
		$this->setLogin($login);
		$this->setSenha($senha);
		echo "<br>Login = " . $this->getLogin();
		echo "<br>Senha = " . $this->getSenha();
		exit;
	}
	public function verificarLogado(){
		
	}
	public function deslogar(){

	}
}
?>