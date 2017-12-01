<?php 

$apostilas = simplexml_load_file('apostilas.xml');

$apostila = $apostilas->apostila[0]->attributes();

$apostila->versao = '1.5';

echo $apostilas->asXML();