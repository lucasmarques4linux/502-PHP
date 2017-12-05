<!DOCTYPE html>
<html>
<head>
	<title>Busca Endereço</title>
</head>
<body>
	<form action="#" method="POST">
		CEP:
		<input type="text" name="cep">
		<input type="submit" value="Buscar">
	</form>

</body>
</html>

<?php 

	if ($_POST) {
		$cep = $_POST['cep'];

		$url = "http://viacep.com.br/ws/{$cep}/json/";

		$curl = curl_init();

		curl_setopt($curl, CURLOPT_URL, $url);

		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		$retorno = curl_exec($curl);

		curl_close($curl);

		$endereco = json_decode($retorno);

		echo "<strong>Endereço: </strong>" . $endereco->logradouro . "<br>";
		echo "<strong>Complemento: </strong>" . $endereco->complemento . "<br>";
		echo "<strong>Bairro: </strong>" . $endereco->bairro . "<br>";
		echo "<strong>Cidade: </strong>" . $endereco->localidade . "<br>";
		echo "<strong>Estado: </strong>" . $endereco->uf . "<br>";
	}