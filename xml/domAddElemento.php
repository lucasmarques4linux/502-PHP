<?php 

$dom = new DOMDOcument();
$dom->load('apostilas.xml');

$apostilas = $dom->getElementsByTagName('apostila');

$apostila = $apostilas->item(0);

$codigo = $dom->createElement('codigo','500');

$apostila->appendChild( $codigo );

print_r($dom->saveXML());