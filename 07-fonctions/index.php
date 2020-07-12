<?php

// Déclarer une fonction hello
function hello($name, $lang = 'fr') {
    // Logique du code à ranger ici...
    $hello = 'Bonjour';
    if ('en' === $lang) {
        $hello = 'Hello';
    }
    // Hallo en de
    // Hola en es
    $translations = [
        'en' => 'Hello',
        'fr' => 'Bonjour',
        'de' => 'Hallo',
        'es' => 'Hola',
    ];

    // Vérifier si la langue existe dans le tableau
    if (!isset($translations[$lang])) {
        $lang = 'fr';
    }

    return $translations[$lang].' '.$name.' !';
}

echo strtoupper(hello('Toto')); // Affiche "BONJOUR TOTO"
echo hello('Titi', 'en'); // Affiche "Hello Titi"
echo hello('Tata', 'it'); // Affiche "Bonjour Tata"
