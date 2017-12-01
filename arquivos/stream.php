<?php 

$pagina = fopen("http://google.com", "r");

while (!feof($pagina)) {
	$linha = fgets($pagina);
	if (strstr($linha, "Estou com sorte")) {
		echo $linha;
	}
	// echo $linha;
}

fclose($pagina);