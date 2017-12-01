<?php 

$apostilas = simplexml_load_file('apostilas.xml');

$apostila = $apostilas->apostila[0]->attributes();

$apostila->addAttribute('ano', '2017');

echo $apostilas->asXML();