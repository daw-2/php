<?php

$eleves = []; // Crée un tableau vide
$eleves = array(); // Crée un tableau vide

$eleves = [ // 1ère dimension
    0 => [ // 2ème dimension
        'nom' => 'Toto',
        'notes' => [10, 8, 6, 2, 15, 2] // 3ème dimension
    ],
    1 => [ // 2ème dimension
        'nom' => 'Titi',
        'notes' => [4, 18, 20, 15, 13, 7]
    ]
];

// Exemple pour parcourir un tableau
foreach ($eleves as $eleve) {
    echo $eleve['nom'];

    // echo $eleve['notes'];

    foreach ($eleve['notes'] as $note) {
        echo $note . ',';
    }
}

// Debuger un tableau
print_r($eleves[0]['notes']);

echo '<br />';

// Récap tableaux
$array = [5, 9, 11, 17, 18, 19, 15];

// print_r ou var_dump nous aident à debuger
print_r($array);

// récupérer le 18
echo $array[4] . '<br />';

foreach ($array as $index => $item) {
    echo $index .' : '. $item . '<br />';
}
