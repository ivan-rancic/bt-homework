<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//Zadatak 1

$a = 200;
$b = 80;
$c = $a + $b;
$d = $a * $b;
$e = $a - $b;
$f = $a / $b;
echo "Zbir brojeva $a i $b je: " . $c;
echo "<br>";
echo "Proizvod brojeva $a i $b je: " . $d;
echo "<br>";
echo "Razlika brojeva $a i $b je: " . $e;
echo "<br>";
echo "Količnik brojeva $a i $b je: " . $f;
echo "<br>";
echo "<br>";

//Zadatak 2

$g = mt_rand(0,6);
$days = array ("ponedeljak", "utorak", "sreda", "četvrtak", "petak", "subota", "nedelja");
echo "Danas je " . $days[$g] . "!";
echo "<br>";
echo "<br>";

//Zadatak 2 na drugi način
$y = mt_rand(0,6);

if ($y == 0){
    echo "Danas je ponedeljak!";
} else if ($y == 1) {
    echo "Danas je utorak!";
}
  else if ($y == 2) {
    echo "Danas je sreda!";
}
else if ($y == 3) {
    echo "Danas je četvrtak!";
}
else if ($y == 4) {
    echo "Danas je petak!";
}
else if ($y == 5) {
    echo "Danas je subota!";
} else {
    echo "Danas je nedelja!";
} 

echo "<br>";

//Zadatak 3

$a = 1;
$b = 2;
$c = 3;
$zb = $a + $b +$c;
echo "Zbir brojeva $a, $b i $c je $zb";

echo "<br>";

//Zadatak 3 na drugi način
$a = 1;
$b = 2;
$c = 3;
$ar = array ($a, $b, $c);
echo "Zbir brojeva $a, $b i $c je " . array_sum($ar);




?>
    
</body>
</html>