<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Polimorfismo com PHP</title>
</head>
<body>

<h1>Polimorfismo com PHP</h1>
<p>Exemplo de polimorfismo no PHP5, para mais detalhes veja o c�digo fonte.</p>

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

<!-- javascript -->
<script type="text/javascript">
	//transporte de dados do PHP para o JavaScript
	var vs_index="<?php echo $_POST['instrumento']; ?>";
</script>
<script src="js/script.js"></script>

</body>
</html>
