<?php 

$apostilas = simplexml_load_file('apostilas5.xml');

unset($apostilas->apostila[3]->topicos->topico[0]);

echo "<pre>";
echo $apostilas->asXML();