<?php 

$apostilas = simplexml_load_file('apostilas.xml');

$apostila = $apostilas->apostila[0]->attributes();

echo "<pre>";
print_r($apostila);