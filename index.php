<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Polimorfismo com PHP</title>

<!-- javascript -->
<script type="text/javascript">
	//transporte de dados do PHP para o JavaScript
	var vs_index="<?php echo $_POST['instrumento']; ?>";
</script>
<script type="text/javascript" src="js/script.js"></script>

</head>
<body>

<h1>Polimorfismo com PHP</h1>
<p>Exemplo de polimorfismo no PHP5, para mais detalhes veja o código fonte.</p>

<!-- Resultado -->
<h2>Resultado</h2>
<form id="frmpoli" action="" method="post" onsubmit="return checkToSubmit(this)">
	<fieldset>
		<legend>Instrumento:</legend>
		<select name="instrumento" id="instrumento">
			<option value="" selected="selected">Instrumentos</option>
			<option value="s">Saxofone</option>
			<option value="p">Piano</option>
			<option value="v">Violão</option>
			<option value="b">Bateria</option>
		</select>
		<button type="submit">OK</button>
	</fieldset>
</form>
<p><?php require("paginas/pgn_factory.php"); ?></p>

</body>
</html>
