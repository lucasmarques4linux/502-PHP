<?php 

$apostilas = simplexml_load_file('apostilas.xml');

$apostila = $apostilas->apostila[0]->attributes();

unset($apostila->versao);

echo $apostilas->asXML();

// echo count($apostilas->apostila);