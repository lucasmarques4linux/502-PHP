<?php 

function cronometro(){
	return microtime(true);
}

$start = cronometro();

$a = [];
for ($i=0; $i < 1000000; $i++) { 
	$a[] = pow($i,2);
}

$end = cronometro();

echo "Gastou = " . ($end - $start) . "segundos";