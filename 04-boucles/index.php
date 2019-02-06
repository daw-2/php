<?php

/**
 * Les boucles
 * 
 * Présentation des boucles en PHP
 */

// for
echo '<h2>La boucle for</h2>';

for ($i = 0; $i < 10; $i++) {
    echo $i;
}

echo '<br />';

// foreach
echo '<h2>La boucle foreach</h2>';

$students = ['Mickael', 'Baptiste', 'Gregory', 'Thomas'];

foreach ($students as $index => $value) {
    echo $index . ' : '. $value . '<br />';
}

// while
echo '<h2>La boucle while</h2>';

$i = 0;
while ($i < 10) {
    echo $i++;
}

// do ... while
echo '<h2>La boucle do while</h2>';

$i = 10;
do {
    echo $i++;
} while ($i < 10);
