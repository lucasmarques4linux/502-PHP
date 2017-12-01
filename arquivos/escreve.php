<?php 

file_put_contents("teste.txt", "\nDentro do PHP", FILE_APPEND);


$file = fopen("teste.txt", "a+");
fwrite($file, "Modo Díficil");
fclose($file);