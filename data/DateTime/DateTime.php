<?php 

echo "<pre>";
$atual = new DateTime();
echo $atual->format("d-m-Y");
echo "<hr>";
$data = new DateTime("1993-07-25");
echo $data->format("d-m-Y");
echo "<hr>";
$data2 = new DateTime("+1 month");
echo $data2->format("d-m-Y");
echo "<hr>";

//------------------------------
$data->modify("+1 year");
echo $data->format("d-m-Y");
//------------------------------
echo "<hr>";
$data2->setDate(2000,10,20);
echo $data2->format("d-m-Y H:m:s");
//------------------------------
echo "<hr>";
$data2->setTime(22,12,54);
echo $data2->format("d-m-Y H:m:s");

//--------------------------
echo "<hr>";
$fuso = new DateTimeZone("America/New_York");
$data2 = new DateTime("");
echo $data2->format("d-m-Y H:m:s");
echo "<br>";
$data2->setTimeZone($fuso);
echo $data2->format("d-m-Y H:m:s");

//--------------------------
echo "<hr>";

$intervalo = new DateInterval("P3M2D");
print_r($intervalo);
echo "<br>";
echo $intervalo->format("%M meses de diferença, %D dias de diferenca");

//--------------------------
echo "<hr>";
$atual = new DateTime();
echo $atual->format("d-m-Y");
echo "<hr>";
$data = new DateTime("1993-07-25");
echo $data->format("d-m-Y");

$intervalo = $data->diff($atual);
echo "<br>";
echo $intervalo->format("%Y anos, %M meses, %D dias de diferenca");

echo "<br>";
echo $intervalo->format("%R%a dias");
var_dump($intervalo);
//--------------------------
echo "<hr>";
$atual = new DateTime();
$amanha = new DateTime("+1 day");

var_dump($atual == $amanha);
var_dump($atual > $amanha);
var_dump($atual < $amanha);

//--------------------------
echo "<hr>";
$atual = new DateTime();
$atual->add(new DateInterval("P3Y"));
echo $atual->format("d-m-Y");
echo "<br>";
$atual->add($intervalo);
echo $atual->format("d-m-Y");

//--------------------------
echo "<hr>";
$atual = new DateTime();
$atual->sub(new DateInterval("P3Y"));
echo $atual->format("d-m-Y");
echo "<br>";
$atual->sub($intervalo);
echo $atual->format("d-m-Y");