<?php 

$apostilas = simplexml_load_file('apostilas.xml');

echo "<pre>";
print_r($apostilas->apostila[2]->titulo);

$apostilas->apostila[2]->titulo = "PHP Enterprise 4LINUX";

// chmod('/var/www/html', 0777);
echo $apostilas->asXML('apostilas2.xml');