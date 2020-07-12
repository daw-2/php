<?php

$number1 = 0;
$number2 = 5;
$number3 = 8;

// Vérification division par zéro
if ($number1 === 0) {
    $number1 = 1;
    echo 'Number1 ne doit pas être égal à 0 <br />';
}

$result1 = $number1 + $number2 + $number3;
$result2 = $number1 * ($number2 - $number3);
$result3 = ($number3 - $number2) / $number1;

// Arrondir le résultat à 2 chiffres après la virgule
$result3 = round($result3, 2);

echo $number1 . ' + ' . $number2 . ' + '. $number3 . ' = ' . ($number1 + $number2 + $number3) . ' <br />';
echo "$number1 x ($number2 - $number3) = $result2 <br />";
echo "($number3 - $number2) / $number1 = $result3 <br />";
