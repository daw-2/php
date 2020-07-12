<?php

/**
 * Afficher les tables de multiplication de 0 à 10
 */

for ($table = 1; $table <= 10; $table++) {
    echo 'Table de ' . $table . ': <br />';
    for ($i = 0; $i <= 10; $i++) {
        echo "$table x $i = ".($table * $i)." <br />";
    }
}

/**
 * Carré de table de multiplication
 */
?>

<style>
    table {
        border: 1px solid #000;
        border-collapse: collapse;
    }
    .border-bottom {
        border-bottom: 1px solid #000;
    }
    .border-right {
        border-right: 1px solid #000;
    }
    td {
        text-align: center;
        width: 1.5em;
    }
    .darkgrey {
        background-color: darkgrey;
    }
    .grey {
        background-color: lightgrey;
    }
</style>

<?php echo '<table>';
// Affiche la légende en haut du tableau
echo '<tr>';
    echo '<td class="border-bottom border-right"><strong>x</strong></td>';
    for ($i = 0; $i <= 10; $i++) {
        echo "<td class=\"border-bottom\"><strong>$i</strong></td>";
    }
echo '</tr>';
// Affiche les résultats de chaque calcul pour chaque table
for ($table = 0; $table <= 10; $table++) {
    echo '<tr>';
    // Affiche la colonne de gauche (légende)
    echo "<td class=\"border-right\"><strong>$table</strong></td>";
    for ($i = 0; $i <= 10; $i++) {
        // On affiche chaque résultat
        // Si le résultat est un nombre carré, on applique un fond gris
        if ($table === $i) {
            echo '<td class="darkgrey">'.($table * $i).'</td>';
        // Si la ligne est paire, on applique un fond gris clair 
        } else if (is_int($table / 2)) {
            // Fond gris quand $i est pair
            $class = ($i % 2 === 0) ? 'grey' : '';
            echo '<td class="'.$class.'">'.($table * $i).'</td>';
        } else {
            // Fond gris quand $i est impair
            $class = ($i % 2 === 0) ? '' : 'grey';
            echo '<td class="'.$class.'">'.($table * $i).'</td>';
        }
    }
    echo '</tr>';
}
echo '</table>';

/**
 * 
 * <table>
 *  <tr>
 *   <td>0</td>
 *   <td>1</td>
 *  </tr>
 *  <tr>
 *   <td>0</td>
 *   <td>1</td>
 *  </tr>
 * </table>
 * 
 */
