<?php
	include("model/include.php");
?>
<table border="1">
	<th>ID</th>
	<th>TÍTULO</th>	
	<th>DESCRIÇÃO</th>
<?php
	foreach ($noticia as $linha) {
		echo "<tr><td>".$linha["id"];
		echo "</td><td>" . $linha["titulo"];
		echo "</td><td>" . $linha["descricao"];
		echo "</td></tr>";
	}
?>
</table>
<a href="view/formNewsletter.php">Formulário Newsletter</a>