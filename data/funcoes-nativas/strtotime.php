<?php 

echo strtotime("now");
echo "<hr>";

var_dump(date("d/m/Y",strtotime("now")));
$data1 = date("d/m/Y",strtotime("now"));
echo "<hr>";
var_dump(date("d/m/Y",strtotime("30 September 2000")));
$data2 = date("d/m/Y",strtotime("30 September 2000"));
echo "<hr>";

if ($data1 > $data2) {
	echo "maior";
} else {
	echo "menor";
}

echo "<hr>";
echo strtotime("+1 day");
echo "<hr>";
echo strtotime("+1 week");
echo "<hr>";
echo strtotime("+1 week 2 days 4 hours");
echo "<hr>";
echo strtotime("last Monday");