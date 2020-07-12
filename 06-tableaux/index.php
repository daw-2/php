<?php

$students = []; // Initialise un tableau vide

$students = [ // 1ère dimension
    47 => [ // 2ème dimension
        'nom' => 'Toto',
        'notes' => [12, 5, 6, 16, 20], // 3ème dimension
    ],
    [ // Ici, l'index est 48
        'nom' => 'Titi',
        'notes' => [4, 6, 19, 20],
    ],
];

// Afficher le nom de chaque élève
foreach ($students as $student) {
    echo $student['nom'];

    foreach($student['notes'] as $note) {
        echo $note;
    }
}

// Affiche 19
echo $students[48]['notes'][2];

// Debug du tableau
echo '<pre>';
var_dump($students);
echo '</pre>';
