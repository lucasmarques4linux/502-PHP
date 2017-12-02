<?php 

$user 	= "linux";
$pass 	= "123";
$dsn  	= "pgsql:host=localhost; dbname=dexterescola;";

$pdo = new PDO($dsn, $user, $pass);

$sql = "SELECT * FROM tb_alunos ORDER BY id";

$prepare = $pdo->query($sql);
$prepare->execute();

$alunos = $prepare->fetchAll(PDO::FETCH_ASSOC);

$xml = new SimpleXMLElement("<?xml version='1.0' encoding='UTF-8'?><alunos></alunos>");

foreach ($alunos as $aluno) {
	$item = $xml->addChild('aluno');
	$item->addChild('nome', $aluno['nome']);
	$item->addChild('email', $aluno['email']);
	$item->addChild('senha', $aluno['senha']);
	$item->addChild('senha', $aluno['senha']);
	$item->addChild('cpf', $aluno['cpf']);
	$item->addChild('rg', $aluno['rg']);
	$item->addChild('dt_nasc', $aluno['dt_nasc']);
}

echo "<pre>";
// print_r($xml->asXML());

$json = json_encode($alunos,true);
echo $json;