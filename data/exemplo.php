<?php 

$user 	= "linux";
$pass 	= "123";
$dsn  	= "pgsql:host=localhost; dbname=dexterescola;";

$pdo = new PDO($dsn, $user, $pass);

$sql = "SELECT * FROM tb_alunos ORDER BY id";

$prepare = $pdo->query($sql);
$prepare->execute();

$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";

foreach ($result as $key => $value) {
	$alunos[$key] = [
		"nome" => $value["nome"],
		"dt_nasc" => new DateTime($value["dt_nasc"])
	];
}

// print_r($alunos[1]["dt_nasc"]->format("d/m/Y"));
// https://github.com/lucasmarques4linux/502-PHP/

$velho = $alunos[0];
$novo = $alunos[0];
for ($i=0; $i < count($alunos); $i++) { 

	if ($velho['dt_nasc'] > $alunos[$i]['dt_nasc']) {
		$velho = $alunos[$i];
	}
	if ($novo['dt_nasc'] < $alunos[$i]['dt_nasc']) {
		$novo = $alunos[$i];
	}
}

echo "<hr>";
echo "Aluno Mais Novo: {$novo['nome']}";

echo "<hr>";
echo "Aluno Mais Velho: {$velho['nome']}";

$intervalo = $velho['dt_nasc']->diff($novo['dt_nasc']);
echo "<hr>";
echo "Aluno Diferença entre as idades: " .  $intervalo->format("%Y anos, %M meses, %D dias de diferença");