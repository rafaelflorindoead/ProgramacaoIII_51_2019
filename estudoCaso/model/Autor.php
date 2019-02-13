<?php
include ("Conexao.php");
include ("interfaceController.php");
class Autor implements Controller
{
	public $result;
	public $id, $nome, $fone, $email;

	public function setId($id)
	{
		$this->id = $id;
	}
	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}
	public function setFone($fone)
	{
		$this->fone = $fone;
	}
	public function getId()
	{
		return $this->id;
	}
	public function getNome()
	{
		return $this->nome;
	}
	public function getFone()
	{
		return $this->fone;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function getResult()
	{
		return $this->result;
	}

	public function inserir($dados){
		list($nome, $email, $fone) = $dados;
		$this->setNome($nome);
		$this->setFone($fone);
		$this->setEmail($email);

		$sql = "INSERT INTO autor (nome,email,fone) values ('{$this->getNome()}','{$this->getEmail()}','{$this->getFone()}')";
        $conn = new Conexao();
		$result = $conn->getConnection()->query($sql);
		return $result;
	}
	public function alterar($dados){

		list($id, $nome, $email, $fone) = $dados;
		$this->setId($id);
		$this->setNome($nome);
		$this->setFone($fone);
		$this->setEmail($email);

		$sql = "UPDATE autor set nome= '{$this->getNome()}', email= '{$this->getEmail()}', fone ='{$this->getFone()}' WHERE id = '{$this->getId()}'";
      
        $conn = new Conexao();
		$result = $conn->getConnection()->query($sql);
		return $result;
	}

	public function excluir($dados){
		list($id) = $dados;

		$this->setId($id);
		$sql = "DELETE FROM autor WHERE id = '{$this->getId()}'";
        $conn = new Conexao();
		$result = $conn->getConnection()->query($sql);
		//return $result;
	}
	public function buscarTodos(){
		$sql = "SELECT * FROM autor";
        $conn = new Conexao();
		$retorno = $conn->getConnection()->query($sql);
		
		$listaAutor = array();
		while($linha = $retorno->fetch_array())
		{
			$listaAutor[] = $linha;
		}
		return $listaAutor;
	}
	public function buscarUm($dados){
		$id = $dados;
		$sql = "SELECT * FROM autor WHERE id = $id";
        $conn = new Conexao();
		$retorno = $conn->getConnection()->query($sql);
		
		$listaAutor = array();
		while($linha = $retorno->fetch_array())
		{
			$listaAutor[] = $linha;
		}
		return $listaAutor;
	}
}
?>