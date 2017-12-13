<?php
echo "<pre>";

$cpf = '111.222.333-44';

$regex = '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/';

$retorno = preg_match($regex,$cpf);

echo "CPF: ";
if($retorno){
	echo "Válido";
}else {
	echo "Inválido";
}

echo "<hr>";

$placa = "AAA-1234";

$regex = '/^[A-Z]{3}-[0-9]{4}$/';

$retorno = preg_match($regex,$placa);

echo "Placa: ";
if($retorno){
	echo "Válido";
}else {
	echo "Inválido";
}

echo "<hr>";

$ip = "192.168.10.111";

$regex = "/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/";

$retorno = preg_match($regex,$ip);

echo "Ip: ";
if($retorno){
	echo "Válido";
}else {
	echo "Inválido";
}

echo "<hr>";

$cel = "(12)12345-1234";

$regex = "/^\([0-9]{2}\)[0-9]{4,5}-[0-9]{4}$/";

$retorno = preg_match($regex,$cel);

echo "Cel: ";
if($retorno){
	echo "Válido";
}else {
	echo "Inválido";
}

echo "<hr>";

$cnpj = "22.608.568/0001-22";

$regex = "/^[0-9]{2}\.[0-9]{3}\.[0-9]{3}\/[0-9]{4}-[0-9]{2}$/";

$retorno = preg_match($regex,$cnpj);

echo "CNPJ: ";
if($retorno){
	echo "Válido";
}else {
	echo "Inválido";
}

echo "<hr>";

$email = "seu_joao@gmail.com";

$regex = "/^[a-z0-9._-]*\@[a-z0-9]*\.[a-z]{3}$/i";

$retorno = preg_match($regex,$email);

echo "Email: ";
if($retorno){
	echo "Válido";
}else {
	echo "Inválido";
}

echo "<hr>";

$cpf = '11122233344';

$regex = '/([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})/';

echo preg_replace($regex,'\1.\2.\3-\4',$cpf);

echo "<hr>";

$string = "Palmeiras tem mundial";

$string = preg_replace('/palmeiras/i', 'Corinthians', $string);

echo $string;

echo "<hr>";

$cpf = '111.222.333-44';

$regex = '/(\.|-)/';

echo preg_replace($regex,'',$cpf);

echo "<hr>";

$line = "col1;col2,col3";

$cols = preg_split("/;|,/",$line);

print_r($cols);

echo "<hr>";

$data = "25-07-1993";

$cols = preg_split("/-|\/|\./",$data);

print_r($cols);

echo "<hr>";

$data = "25-07-1993 HH:mm:ss";

$cols = preg_split("/-|\/|\.|\:| /",$data);

print_r($cols);

echo "<hr>";

$cel = "(12)12345-1234";

$regex = "/^\(([0-9]{2})\)([0-9]{4,5})-([0-9]{4})$/";

preg_match($regex,$cel,$retorno);

print_r($retorno);

echo "<hr>";

$string = "Versões do PHP PHP 7, PHP 5.5, PHP 5.6";

preg_match_all('/PHP/', $string, $retornoStrings);

print_r($retornoStrings);

echo "<hr>";

$arrayLinguagens = array(
    'PHP',
    'JAVA',
    'RUBY'
);

if($retorno = preg_grep('/PHP/', $arrayLinguagens)){
    echo 'Existe';
    echo '<pre><hr>';
    print_r($retorno);
}else{
    echo 'Erro';
}