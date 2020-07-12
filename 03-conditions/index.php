<?php

$tableau = [1, 2, 3];

// Pour aider à "debuger" le contenu d'une variable
var_dump($tableau); // Affiche le contenu d'une variable
print_r($tableau);

die(); // Arrête le script

if (true) {
    echo 'test';
} // Attention aux accolades

echo $a; // Affiche une NOTICE (avertissement), le script ne s'arrête pas

echo 10 / 0; // Affiche un WARNING, division par zéro

echo 3;
echo 4; // Affiche une ERROR, le script s'arrête
echo 6;
