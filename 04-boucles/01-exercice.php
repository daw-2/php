<?php

/*
1. Ecrire une boucle qui affiche les nombres de 10 à 1
2. Ecrire une boucle qui affiche uniquement les nombres pairs entre 1 et 100
3. Ecrire le code permettant de trouver le PGCD de 2 nombres
4. Coder le jeu du FizzBuzz
    Parcourir les nombres de 0 à 100
    Quand le nombre est un multiple de 3, afficher Fizz.
    Quand le nombre est un multiple de 5, afficher Buzz.
    Quand le nombre est un multiple de 15, afficher FizzBuzz.
    Sinon, afficher le nombre
*/
echo '<h2>1. Ecrire une boucle qui affiche les nombres de 10 à 1</h2>';

for ($i = 10; $i > 0; $i--) {
    echo $i.' ';
}

echo '<h2>2. Ecrire une boucle qui affiche uniquement les nombres pairs entre 1 et 100</h2>';

for ($i = 1; $i <= 100; $i++) {
    // $isEven = is_int($i / 2);
    if ($i % 2 === 0) { // $i est pair
        echo $i.' ';
    }
}

echo '<h2>3. Ecrire le code permettant de trouver le PGCD de 2 nombres</h2>';

$n1 = 96;
$n2 = 36;

// 96 - 36 = 60
// 60 - 36 = 24
// 36 - 24 = 12
do {
    $result = $n1 - $n2; // 96 - 36 = 60
    if ($result > $n2) { // 60 > 36 ?
        $n1 = $result;
    } else {
        $n1 = $n2;
        $n2 = $result;
    }
    // $n1 = ($result > $n2) ? $result : $n2;
    if ($n2 === 0) {
        $pgcd = $n1;
    }
} while($result != 0);

echo "Le PGCD de 96 et 36 est $pgcd";

echo '<h2>3.1. PGCD avec division</h2>';

$n1 = 758;
$n2 = 306;

do {
    $result = $n1 % $n2; // Reste 146
    if ($result === 0) {
        $pgcd = $n2;
    }
    $n1 = $n2; // 758 devient 306
    $n2 = $result; // 306 devient 146
} while ($result != 0);

echo "Le PGCD de 758 et 306 est $pgcd";

echo '<h2>4. Le jeu du FizzBuzz</h2>';

for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 === 0) { // $i est divisible par 15 ?
        echo 'FizzBuzz - ';
    } else if ($i % 3 === 0) { // $i est divisible par 3 ?
        echo 'Fizz - ';
    } else if ($i % 5 === 0) { // $i est divisible par 5 ?
        echo 'Buzz - ';
    } else {
        echo $i.' - ';
    }
}
