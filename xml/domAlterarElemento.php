<?php 

$apostilas = new DOMDOcument();
$apostilas->load('apostilas.xml');

$titulo = $apostilas->getElementsByTagName('titulo');

echo "<pre>";
print_r($titulo->item(0)->nodeValue);


$titulo->item(0)->nodeValue = "PHP 4Linux";

print_r($apostilas->saveXML());