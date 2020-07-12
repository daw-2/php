<?php

/**
 * for
 * Composée de 3 instructions: initialisation, condition d'exécution et instruction à exécuter à chaque itération
 */

echo '<h2>La boucle for</h2>';

for ($i = 0; $i < 10; $i++) {
    echo $i.' ';
}

echo '<h2>La boucle foreach</h2>';

$students = ['Pierre', 'Matthieu', 'Vincent'];

// var_dump($students);

foreach ($students as $index => $student) {
    echo $index . ' : ' . $student . ' <br />';
}

echo '<h2>La boucle while</h2>';

$i = 0;
while ($i < 10) {
    echo $i++;
}

echo '<h2>Le do while</h2>';

$i = 10;
do {
    echo $i++;
} while ($i < 10);
