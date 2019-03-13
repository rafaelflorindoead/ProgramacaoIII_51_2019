<?php
session_start();

class Autenticar{
	private $login;
	private $senha;
	private $logado;
  private $nome;
  private $id;

  public function setLogin($login){
      $this->login = $login;
  }
  public function setSenha($senha){
      $this->senha = $senha;
  }
  public function getLogin(){
      return $this->login;
  }
  public function getSenha(){
      return $this->senha;
  }
	public function getNomeLogin(){
    return $_SESSION["NomeLogin"];
  }
	public function getLogado(){
    return $_SESSION["logado"];
  }

	public function logar($login, $senha){
	  $this->login=$login;
    $this->senha=$senha;

		$sql = "SELECT * from usuario WHERE login = '$this->login'";
    include ("conexao.php");
		$query = $conectar->query($sql);
		
    $registros = $query->num_rows;
		
	  if($registros == 1){
         	$d_usuario = $query->fetch_array();
         	if($d_usuario["senha"] == $this->senha){
		        $_SESSION["NomeLogin"] = $d_usuario["nome"];
		        $_SESSION["logado"] = "sim";
		    	
          header("Location: ../view/index.php");
		    }else{
            	header("location: ../view/formLogin.php?mensagem=erro");
         	}
      	}else{
        	header("location: ../view/formLogin.php?mensagem=erro");
  	    }
	}
	public function verificarLogado(){
		if(!isset($_SESSION["logado"])){
        	header("Location: ../view/formLogin.php");
        	exit();
      	}
   	}
	public function deslogar(){
    	session_destroy();
     	header("Location: ../view/formLogin.php?menssagem=deslogado");
   	}
}
?>