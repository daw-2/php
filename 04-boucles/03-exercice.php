<?php

/**
 * Afficher les tables de multiplication de 0 à 10
 */

for ($table = 1; $table <= 10; $table++) {
    echo 'Table de ' . $table . ' : <br />';
    for ($j = 1; $j <= 10; $j++) {
        echo "$table x $j = ".($table * $j).'<br />';
    }
    echo '================ <br />';
}


/**
 * Carré de table de multiplication
 */

echo PHP_EOL; // Equivaut à un retour chariot
echo '<table align="center" border="1" style="border-collapse: collapse">'.PHP_EOL;

// Légende du tableau
echo '<thead><tr>';
echo '<td align="center" style="width: 20px; background-color: lightgrey">x</td>';
for ($z = 0; $z <= 20; $z++) {
    $color = ($z % 2) ? 'lightgrey' : 'white';
    /* // Le code ci-dessus est un ternaire, il est
    // équivalent au code suivant :
    if ($z % 2) {
        // Pair
        $color = 'lightgrey';
    } else {
        // Pas pair
        $color = 'white';
    } */
    echo '<td align="center" style="width: 20px; background-color: '.$color.'">'.$z.'</td>';
}
echo '</tr></thead>';

for ($i = 0; $i <= 20; $i++) {
    $color = ($i % 2) ? 'lightgrey' : 'white';
    $direction = ($color === 'lightgrey') ? 1 : 0; // Sens du background color
    echo "\t<tr>"; // "\t" génére une tabulation
    echo '<td align="center" style="width: 20px; background-color: '.$color.'">'.$i.'</td>';
    for ($j = 0; $j <= 20; $j++) {
        $color = ($j % 2 === $direction) ? 'lightgrey' : 'white';
        $color = ($i === $j) ? 'grey' : $color; // Gris foncé sur le carré
        echo '<td align="center" style="width: 20px; background-color: '.$color.'">'.$i * $j.'</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>

<!-- <table>
    <tr>
        <td>x</td>
        <td>0</td>
        <td>1</td>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td>1</td>
        <td>0</td>
        <td>1</td>
    </tr>
</table> -->
