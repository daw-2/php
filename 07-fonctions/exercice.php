<?php

echo '<h2>1. Créer une fonction calculant le carré d\'un nombre <br />';

function square($number) {
    return $number * $number;
}

echo square(5); // 25
echo '<br />';
echo square(10); // 100
echo '<br />';
echo square(5) + square(25); // 25 + 625 soit 650.

echo '<h2>2. Créer une fonction calculant l\'aire d\'un rectangle et une fonction pour celle d\'un cercle <br />';

function areaRect($width, $length) {
    return $width * $length; // Aire du rectangle
}

function areaCircle($radius) {
    return square($radius) * M_PI; // M_PI ou pi()
}

echo areaRect(5, 10); // 50
echo '<br />';
echo areaCircle(10); // 314,15

echo '<h2>3. Créer une fonction calculant le prix TTC d\'un prix HT. Nous aurons besoin de 2 paramètres, le prix HT et le taux. <br />';

function convert($price, $rate, $withTax = true) {
    if ($withTax) {
        // Le return arrête la fonction
        return $price * (1 + $rate / 100);
    }

    return $price / (1 + $rate / 100);
}

echo convert(10, 20); // 10 euros HT -> 12 euros TTC
echo '<br />';
echo convert(12, 20, false); // 12 euros TTC -> 10 euros HT
echo '<br />';

echo '<h2>4. Ajouter un 3ème paramètre à cette fonction permettant de l\'utiliser dans les 2 sens (HT vers TTC ou TTC vers HT) <br />';


