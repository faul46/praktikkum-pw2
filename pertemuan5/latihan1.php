<?php 

$hari = array("Senin", "Selasa", "Rabu");

$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

var_dump($hari1);
echo "<br>";
print_r($bulan);
echo "<br>";

echo "$arr1[0]";
echo "<br>";
echo $bulan[1];

var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);

 ?>