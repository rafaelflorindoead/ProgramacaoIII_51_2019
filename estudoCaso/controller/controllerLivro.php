<?php
	$op = filter_input(INPUT_POST, "operacao");
	if(filter_input(INPUT_POST, "operacao"))
	{
		$operacao = filter_input(INPUT_POST, "operacao");
	}elseif ($operacao == "listar") 
	{
		$operacao = $operacao;
	}elseif ($operacao == "listarLivro") 
	{
		$operacao = $operacao;
	}elseif ($operacao == "listarAutor") 
	{
		$operacao = $operacao;
	}elseif ($operacao == "excluir") 
	{
		$operacao = $operacao;
	}else
	{
		echo  $mensagem = "Ops!!! Faltou a operação! Tente novamente mais tarde. Obrigado";
	}
	

	if($operacao == "cadastrar")
	{
		include("../model/Livro.php");
		$isbn = filter_input(INPUT_POST, "isbn");
		$titulo = filter_input(INPUT_POST, "titulo");
		$autor = filter_input(INPUT_POST, "autor");
		$anoEdicao = filter_input(INPUT_POST, "anoEdicao");
		$edicao = filter_input(INPUT_POST, "edicao");
		$editora = filter_input(INPUT_POST, "editora");
		$dados = array($isbn, $titulo, $autor, $anoEdicao, $edicao, $editora);
		$objetoCadastrar = new Livro();
		$result = $objetoCadastrar->inserir($dados);

		if ($result)
		{
			header('location: ../index.php?controller=livro&metodo=cadastro&mensagem=sucesso');
		}else
		{
			header('location: ../index.php?controller=livro&metodo=cadastro&mensagem=erro');
		}

	}elseif($operacao == "alterar")
	{
		include("../model/Livro.php");
		$id = filter_input(INPUT_POST, "id");
		$isbn = filter_input(INPUT_POST, "isbn");
		$titulo = filter_input(INPUT_POST, "titulo");
		$autor = filter_input(INPUT_POST, "autor");
		$anoEdicao = filter_input(INPUT_POST, "anoEdicao");
		$edicao = filter_input(INPUT_POST, "edicao");
		$editora = filter_input(INPUT_POST, "editora");
		$objetoAlterar = new Livro();
		$dados = array($id, $isbn, $titulo, $autor, $anoEdicao, $edicao, $editora);
		$result = $objetoAlterar->alterar($dados);
		if ($result)
		{
			header('location: ../index.php?controller=livro&metodo=alterar&mensagem=sucesso');
		}else
		{
			header('location: ../index.php?controller=livro&metodo=alterar&mensagem=erro');
		}
	}elseif($operacao == "excluir")
	{
		include("model/Livro.php");
		$objetoExcluir = new Livro();
		$dados =  array($id);
		$result = $objetoExcluir->excluir($dados);
		echo "Excluído com sucesso";
		exit;
		if ($result)
		{
			header('location: ../index.php?controller=livro&metodo=alterar&mensagem=sucesso');
		}else
		{
			header('location: ../index.php?controller=livro&metodo=alterar&mensagem=erro');
		}
	}elseif($operacao == "listar")
	{
		include("model/Livro.php");
		$objetoListar = new Livro();
		$retorno = $objetoListar->buscarTodos();
	}elseif($operacao == "listarLivro")
	{
		include("model/Livro.php");
		$objetoListar = new Livro();
		$dados = $id;
		$retorno = $objetoListar->buscarUm($dados);
	}elseif($operacao == "listarAutor")
	{
		include("model/Autor.php");
		$objetoListarAutor = new Autor();
		$retorno = $objetoListarAutor->buscarTodos();
	}else
	{
		return $mensagem = "Ops!!! Operação Inválida. Obrigado";
	}
?>