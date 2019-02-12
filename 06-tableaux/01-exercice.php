<?php

$eleves = [
    0 => [
        'nom' => 'Matthieu',
        'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 18, 12, 15, 13, 7]
    ],
    2 => [
        'nom' => 'Jean',
        'notes' => [17, 14, 6, 2, 16, 18, 9]
    ],
    3 => [
        'nom' => 'Enzo',
        'notes' => [1, 14, 6, 2, 1, 8, 9, 20]
    ]
];

echo $eleves[2]['nom']; // Affiche "Jean"
echo $eleves[2]['notes'][2]; // Récupère la 3ème note de Jean (6)

echo '<h2>1/ Afficher la liste de tous les éléves avec leurs notes.</h2>';

foreach ($eleves as $eleve) {
    // $eleve est un tableau représentant un élève avec son nom et ses
    // notes.
    echo $eleve['nom'] . ' a eu ';
    // Afficher toutes les notes d'un élève
    foreach ($eleve['notes'] as $index => $note) {
        $separator = ', ';

        // Si la note est la dernière
        if ($index == count($eleve['notes']) - 1) {
            $separator = '.';
        // Si la note est l'avant dernière
        } else if ($index == count($eleve['notes']) - 2) {
            $separator = ' et ';
        }

        echo $note . $separator;
    }

    // On passe à la ligne entre chaque élève
    echo '<br />';
}

echo '<h2>2/ Calculer la moyenne de Jean. On part de $eleves[2][\'notes\']</h2>';

$jeanNotes = $eleves[2]['notes']; // [17, 14, 6, 2, 16, 18, 9]

$somme = 0;

// Faire la somme des notes
foreach ($jeanNotes as $note) {
    $somme += $note;
}

// Moyenne
echo round($somme / count($jeanNotes), 2); // Arrondi à 2 décimales
// echo round(array_sum($jeanNotes) / count($jeanNotes), 2);

echo '<h2>3/ Combien d\'élèves ont la moyenne ?</h2>';
/* Exemple :
Matthieu a la moyenne
Jean n'a pas la moyenne
Thomas a la moyenne
Nombre d'éléves avec la moyenne : 2 */

$i = 0;
foreach ($eleves as $eleve) {
    $moyenne = array_sum($eleve['notes']) / count($eleve['notes']);
    echo $eleve['nom'];

    if ($moyenne >= 10) {
        echo ' a la moyenne';
        $i++; // permet de compter le nombre d'élèves qui ont la moyenne
    } else {
        echo ' n\'a pas la moyenne';
    }

    echo '<br />';
}

echo 'Nombre d\'élèves avec la moyenne : ' . $i;

echo '<h2>4/ Quel(s) éléve(s) a(ont) la meilleure note ?</h2>';

$bestNote = 0;

foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        // Permet de trouver la meilleure note
        if ($note > $bestNote) {
            $bestNote = $note;
        }
    }
}

foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        if ($note == $bestNote) {
            echo $eleve['nom'] . ' a la meilleure note : ' . $bestNote . '<br />';
        }
    }
}

echo '<h2>5/ Qui a eu au moins un 20 ?</h2>';
/* Exemple: Personne n'a eu 20
         Quelqu'un a eu 20 */
$aEu20 = false;

foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        if ($note == 20) {
            $aEu20 = true;
        }
    }
}

if ($aEu20) { // équivaut à $aEu20 == true
    echo 'Quelqu\'un a eu 20';
} else {
    echo 'Personne n\'a eu 20';
}
