<?php
	class Livro{
		public $titulo, $autor, $email;

		public function setTitulo($titulo){
			$this->titulo=$titulo;
		}
		public function setAutor($autor){
			$this->autor=$autor;
		}
		public function setEmail($email){
			$this->email=$email;
		}
		public function getTitulo(){
			return $this->titulo;
		}
		public function getAutor(){
			return $this->autor;
		}
		public function getEmail(){
			return $this->email;
		}
		public function __construct($titulo, $autor, $email){
			$this->setTitulo($titulo);
			$this->setAutor($autor);
			$this->setEmail($email);
			/*$this->titulo=$titulo;
			$this->autor=$autor;
			$this->email=$email;*/
		}

		public function imprimir(){
			echo "<fieldset>";
			echo "<h1>Dados do livro</h1>";
			echo "Nome = " . $this->getAutor();
			echo "<br>Título = " . $this->getTitulo();
			echo "<br>E-mail = " . $this->getEmail();
			echo "</fieldset>";
		}
	}

?>