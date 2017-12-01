<?php 

echo "<pre>";
$file = file_get_contents("teste.txt");
// $file contém uma string com o conteúdo todo do arquivo.

print_r($file);

echo "<hr>";

$file2 = file("teste.txt");

print_r($file2);

echo "<hr>";

$file3 = fopen("teste.txt", "r");

while (!feof($file3)) {
	$line = fgets($file3);
	var_dump($line);
	echo $line . "<br>";
}

fclose($file3);