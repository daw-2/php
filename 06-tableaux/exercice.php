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

echo '<h2>1/ Afficher la liste de tous les éléves avec leurs notes.</h2>';

foreach ($eleves as $eleve) {
    // Affiche le nom de l'élève
    echo $eleve['nom'].' a eu ';

    // Affiche les notes
    foreach ($eleve['notes'] as $index => $note) {
        $separator = ', ';
        // Si la note est la dernière ou l'avant dernière
        // count($eleve['notes']); // 8
        // $index; // 7
        if ($index === count($eleve['notes']) - 1) {
            $separator = '';
        }
        if ($index === count($eleve['notes']) - 2) {
            $separator = ' et ';
        }

        echo $note.$separator;
    }

    echo '<br />'; // Passe à la ligne entre chaque élève
}

echo '<h2>2/ Calculer la moyenne de Jean. On part de $eleves[2][\'notes\']</h2>';

// Récupèrer les notes
$jeanNotes = $eleves[2]['notes']; // [1, 5, 6]
// Faire la somme des notes
$somme = 0; // $somme = array_sum($jeanNotes);

foreach ($jeanNotes as $note) {
    $somme += $note;
}
// Diviser la somme par le nombre de notes
echo round($somme / count($jeanNotes), 2); // 82 / 7

echo '<h2>3/ Combien d\'élèves ont la moyenne ?</h2>';

$i = 0;
foreach ($eleves as $eleve) {
    $average = array_sum($eleve['notes']) / count($eleve['notes']);
  
    if ($average >= 10) {
        echo $eleve['nom'].' a la moyenne';
        $i++; // On compte le nombre d'élèves avec la moyenne
    } else {
        echo $eleve['nom'].' n\'a pas la moyenne';
    }

    echo '<br />';
}

echo 'Nombre d\'élèves avec la moyenne : '.$i;

echo '<h2>4/ Quel(s) éléve(s) a(ont) la meilleure note ?</h2>';

// [10, 8, 16, 20, 17, 16, 15, 2]
$bestNote = 0;
foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        // Comparer les notes...
        if ($note > $bestNote) {
            $bestNote = $note;
        }
        if ($bestNote === 20) { // Totalement optionnel
            break 2; // On arrête les 2 foreach
        }
    }
}

foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        if ($note === $bestNote) {
            echo $eleve['nom'] . ' a eu la meilleure note : ' . $bestNote . '<br />';
            break;
        }
    }
}

echo '<h2>5/ Qui a eu au moins un 20 ?</h2>';

$aEu20 = false;

foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        if ($note === 20) {
            $aEu20 = true;
            break 2;
        }
    }
}

if ($aEu20) {
    echo 'Quelqu\'un a eu 20';
} else {
    echo 'Personne n\'a eu 20';
}
