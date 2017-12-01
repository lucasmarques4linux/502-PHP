<?php 

$file = new SplFileInfo('teste.txt');

print_r($file->getFileName());
print_r($file->getExtension());
// print_r($file->getSize());
// print_r($file->getType());
print_r($file->getRealPath());
