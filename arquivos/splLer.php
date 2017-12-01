<?php 

$file = new SplFileObject('teste.txt');

while (!$file->eof()) {
	$line = $file->fgets();
	echo $line . "<br>";
}

echo "<hr>";

var_dump($file);

foreach ($file as $line) {
	echo $line . "<br>";
}