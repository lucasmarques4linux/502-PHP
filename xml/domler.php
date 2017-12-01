<?php 


$apostilas = new DOMDOcument();
$apostilas->load('apostilas.xml');

echo "<pre>";
print_r($apostilas);