<?php
	$op = filter_input(INPUT_POST, "operacao");
	if(filter_input(INPUT_POST, "operacao"))
	{
		$operacao = filter_input(INPUT_POST, "operacao");
	}elseif ($operacao == "listar") 
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
		include("../model/Autor.php");
		$nome = filter_input(INPUT_POST, "nome");
		$email = filter_input(INPUT_POST, "email");
		$fone = filter_input(INPUT_POST, "fone");
		$objetoCadastrar = new Autor();
		$dados = array($nome, $email, $fone);
		$result = $objetoCadastrar->inserir($dados);
		if ($result)
		{
			header('location: ../index.php?controller=autor&metodo=cadastro&mensagem=sucesso');
		}else
		{
			header('location: ../index.php?controller=autor&metodo=cadastro&mensagem=erro');
		}

	}elseif($operacao == "alterar")
	{
		include("../model/Autor.php");
		$id = filter_input(INPUT_POST, "id");
		$nome = filter_input(INPUT_POST, "nome");
		$email = filter_input(INPUT_POST, "email");
		$fone = filter_input(INPUT_POST, "fone");
		$objetoAlterar = new Autor();
		$dados = array($id, $nome, $email, $fone);

		$result = $objetoAlterar->alterar($dados);

		if ($result)
		{
			header('location: ../index.php?controller=autor&metodo=alterar&mensagem=sucesso');
		}else
		{
			header('location: ../index.php?controller=autor&metodo=alterar&mensagem=erro');
		}
	}elseif($operacao == "excluir")
	{
		include("model/Autor.php");
		$objetoExcluir = new Autor();
		$dados =  array($id);
		$result = $objetoExcluir->excluir($dados);
		echo "Excluído com sucesso";
	}elseif($operacao == "listar")
	{
		include("model/Autor.php");
		$objetoListar = new Autor();
		$retorno = $objetoListar->buscarTodos();
	}elseif($operacao == "listarAutor")
	{
		include("model/Autor.php");
		$objetoListar1 = new Autor();
		$dados = $id;
		$retorno = $objetoListar1->buscarUm($dados);
	}
	else
	{
		return $mensagem = "Ops!!! Operação Inválida. Obrigado";
	}
?>