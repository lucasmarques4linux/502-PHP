<?php 

$file = new SplFileObject('alunos.csv');

$file->setFlags(SplFileObject::READ_CSV);

echo "<pre>";
// foreach ($file as $line) {
	
// 	list($nome, $idade) = $line;

// 	echo "$nome -> $idade";
// 	echo "<br>";
// }

echo "<hr>";

while (!$file->eof()) {
	$line = $file->fgetcsv(';','');
	var_dump($line);
}