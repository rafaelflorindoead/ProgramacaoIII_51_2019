<?php
include ("Conexao.php");
include ("interfaceController.php");
class Livro implements Controller
{
	public $result;
	public $id, $isbn, $titulo, $autor, $anoEdicao, $edicao, $editora, $situacao;

	public function setId($id)
	{
		$this->id = $id;
	}
	public function setIsbn($isbn)
	{
		$this->isbn = $isbn;
	}
	public function setTitulo($titulo)
	{
		$this->titulo = $titulo;
	}
	public function setAutor($autor)
	{
		$this->autor = $autor;
	}
	public function setAnoEdicao($anoEdicao)
	{
		$this->anoEdicao = $anoEdicao;
	}
	public function setEdicao($edicao)
	{
		$this->edicao = $edicao;
	}
	public function setEditora($editora)
	{
		$this->editora = $editora;
	}
	public function setSituacao($situacao)
	{
		$this->situacao = $situacao;
	}

	public function getId()
	{
		return $this->id;
	}
	public function getIsbn()
	{
		return $this->isbn;
	}
	public function getautor()
	{
		return $this->autor;
	}
	public function getTitulo()
	{
		return $this->titulo;
	}
	public function getAnoEdicao()
	{
		return $this->anoEdicao;
	}
	public function getEdicao()
	{
		return $this->edicao;
	}
	public function getEditora()
	{
		return $this->editora;
	}
	public function getSituacao()
	{
		return $this->situacao;
	}

	public function getResult()
	{
		return $this->result;
	}

	public function inserir($dados){
		list($isbn, $titulo, $autor, $anoEdicao, $edicao, $editora, $situacao) = $dados;
		$this->setIsbn($isbn);
		$this->setautor($autor);
		$this->setTitulo($titulo);
		$this->setAnoEdicao($anoEdicao);
		$this->setEdicao($edicao);
		$this->setEditora($editora);

		$sql = "INSERT INTO livro (isbn, titulo, autor, anoEdicao, edicao, editora) values ('{$this->getIsbn()}','{$this->getTitulo()}','{$this->getAutor()}','{$this->getAnoEdicao()}','{$this->getEdicao()}','{$this->getEditora()}')";
        $conn = new Conexao();
		$result = $conn->getConnection()->query($sql);
		return $result;
	}
	public function alterar($dados){
		
		list($id, $isbn, $titulo, $autor, $anoEdicao, $edicao, $editora) = $dados;
		$this->setId($id);
		$this->setIsbn($isbn);
		$this->setautor($autor);
		$this->setTitulo($titulo);
		$this->setAnoEdicao($anoEdicao);
		$this->setEdicao($edicao);
		$this->setEditora($editora);

		$sql = "UPDATE livro set isbn= '{$this->getIsbn()}', titulo = '{$this->getTitulo()}', autor = '{$this->getAutor()}', anoEdicao = '{$this->getAnoEdicao()}', edicao = '{$this->getEdicao()}', editora = '{$this->getEditora()}' WHERE id = '{$this->getId()}'";
        $conn = new Conexao();
		$result=$conn->getConnection()->query($sql);
		return $result;
	}
	public function excluir($dados){
		list($id) = $dados;
		$this->setId($id);
		
		$sql = "DELETE FROM livro WHERE id = '{$this->getId()}'";
        $conn = new Conexao();
		$result = $conn->getConnection()->query($sql);
		return $result;
	}
	public function buscarTodos(){
		$sql = "SELECT * FROM livro";
        $conn = new Conexao();
		$retorno = $conn->getConnection()->query($sql);
		
		$listaLivro = array();
		while($linha = $retorno->fetch_array())
		{
			$listaLivro[] = $linha;
		}
		return $listaLivro;
	}
	public function buscarUm($dados){
		$id = $dados;
		$this->setId($id);

		$sql = "SELECT * FROM livro WHERE id = '{$this->getId()}'";
		
        $conn = new Conexao();
		$retorno = $conn->getConnection()->query($sql);
		
		$listaLivro = array();
		while($linha = $retorno->fetch_array())
		{
			$listaLivro[] = $linha;
		}
		return $listaLivro;
	}
}
?>