<?php 

$json = ' {
      "cep": "01001-000",
      "logradouro": "Praça da Sé",
      "complemento": "lado ímpar",
      "bairro": "Sé",
      "localidade": "São Paulo",
      "uf": "SP",
      "unidade": "",
      "ibge": "3550308",
      "gia": "1004"
    }';

echo "<pre>";
var_dump(json_decode($json));
echo "<hr>";

$end = json_decode($json);
echo $end->logradouro;
echo "<hr>";
var_dump(json_decode($json, true));
$end = json_decode($json,true);
echo $end['logradouro'];