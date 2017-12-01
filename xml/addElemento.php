<?php 

$apostilas = simplexml_load_file('apostilas.xml');

$nova_apostila = $apostilas->addChild('apostila');
$nova_apostila->addChild('titulo','Zend Framework');
$topicos = $nova_apostila->addChild('topicos');
$topicos->addChild('topico', 'Introdução ao ZF');
$topicos->addChild('topico', 'MVC com ZF');

echo "<pre>";
echo $apostilas->asXML();

