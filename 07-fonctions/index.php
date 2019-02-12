<?php

$global007 = 10;

// Déclarer une fonction hello
function hello($name = 'world', $lang = 'en') {
    $local = 5;
    return 'Hello '.$name.'!';
}

function goodBye() {
    global $global007; // Si on veut utiliser une variable déclarée en dehors de la fonction
    echo $global007;
    return hello() . ' et au revoir !';
}

// Appeller une fonction
$message = hello();
echo $message; // Affiche "Hello world!"
echo hello('Matthieu', 'fr'); // Affiche "Hello Matthieu!"
echo hello('Thomas'); // Affiche "Hello Thomas!"

echo goodBye();

echo $local; // Undefined (Variable locale)
