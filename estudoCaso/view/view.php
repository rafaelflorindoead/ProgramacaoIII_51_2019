<?php
	$controller = filter_input(INPUT_GET,'controller');
	$metodo = filter_input(INPUT_GET,'metodo');

	if($controller == "autor")
	{
		if($metodo == "cadastro")
		{
			include("view/". $controller . "/formularioAutor.php");
		}elseif ($metodo == "listarAutor") {
			include("view/". $controller . "/listarAutor.php");
		}elseif ($metodo == "alterar") {
			include("view/". $controller . "/formularioAutorEditar.php");
		}elseif ($metodo == "excluir") {
			include("view/". $controller . "/excluirAutor.php");
		}
	}elseif($controller == "livro")
	{
		if($metodo == "cadastro")
		{
			include("view/". $controller . "/formularioLivro.php");
		}elseif ($metodo == "listarLivro") {
			include("view/". $controller . "/listarLivro.php");
		}elseif ($metodo == "alterar") {
			include("view/". $controller . "/formulariolivroEditar.php");
		}elseif ($metodo == "excluir") {
			include("view/". $controller . "/excluirLivro.php");
		}
	}
?>