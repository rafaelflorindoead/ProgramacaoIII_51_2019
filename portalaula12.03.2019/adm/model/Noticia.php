<?php
class Noticia
{
	public $id, $titulo, $descricao, $autor, $ativo, $dataCadastro;
	public $imagem;

	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this->id;
	}
	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}
	public function getTitulo(){
		return $this->titulo;
	}
	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}
	public function getDescricao(){
		return $this->descricao;
	}
	public function setAutor($autor){
		$this->autor = $autor;
	}
	public function getAutor(){
		return $this->autor;
	}
	public function setAtivo($ativo){
		$this->ativo = $ativo;
	}
	public function getAtivo(){
		return $this->ativo;
	}
	public function setDataCadastro($dataCadastro){
		$this->dataCadastro = $dataCadastro;
	}
	public function getDataCadastro(){
		return $this->dataCadastro;
	}
	public function setImagem($imagem){
		$this->imagem = $imagem;
	}
	public function getImagem(){
		return $this->imagem;
	}
	public function cadastrar($titulo, $descricao, $autor, $ativo, $imagem){
		$this->setTitulo($titulo);
		$this->setDescricao($descricao);
		$this->setAutor($autor);
		$this->setAtivo($ativo);
		$this->setImagem($imagem);
		$dataCadastro = date("Y-m-d h:m:s");
		$this->setDataCadastro($dataCadastro);
		echo "<br>Titulo = " . $this->getTitulo();
		echo "<br>Descricao = " . $this->getDescricao();
		echo "<br>Autor = " . $this->getAutor();
		echo "<br>Ativo = " . $this->getAtivo();
		echo "<br>Imagem = " . $this->getimagem();

		echo $sql = "insert into noticia (titulo, autor, descricao, ativo, dataCadastro) values ('{$this->getTitulo()}',
		'{$this->getAutor()}','{$this->getDescricao()}','{$this->getAtivo()}','{$this->getDataCadastro()}')";
		
		include ("conexao.php");

		$inserir = $conectar->query($sql);
		$num = $conectar->affected_rows;
		
		if ($num==1){
			echo "Dados Gravados";
		
		}else{
			echo "Erro";
		}
		exit;
	}
	public function alterar($id, $titulo, $descricao, $autor, $ativo, $imagem){
		$this->setId($id);
		$this->setTitulo($titulo);
		$this->setDescricao($descricao);
		$this->setAutor($autor);
		$this->setAtivo($ativo);
		$this->setImagem($imagem);
		//Banco de dados.
	}
	public function buscaDados($id){
		$this->setId($id);
		echo "<br>Id = " . $this->getId();
	}
	public function buscaTodosDados(){

	}
}
?>