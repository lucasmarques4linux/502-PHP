<?php 

$dom = new DOMDOcument();
$dom->load('apostilas.xml');

$titulos = $dom->getElementsByTagName('titulo');

$titulos->item(0)
	->parentNode->removeChild($titulos->item(0));


print_r($dom->saveXML());