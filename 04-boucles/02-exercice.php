<?php

/**
 * 1. Crée une boucle qui affiche 10 étoiles (*) (https://emojipedia.org)
 */

for ($i = 10; $i > 0; $i--) {
    for ($j = 10; $j > 0; $j--) {
        echo '🌟';
    }
    
    echo '<br />';
}

echo '--------------- <br />';
/**
* 2. Imbriquer la boucle dans une autre boucle afin d'afficher 10 lignes de 10 étoiles
*/

for ($i = 10; $i > 0; $i--) {
    for ($j = $i; $j > 0; $j--) {
        echo '🌟';
    }
    
    echo '<br />';
}

/*
Pour s'entrainer, on peut essayer de générer le code suivant...

☆☆☆☆☆★☆☆☆☆☆
☆☆☆☆★★★☆☆☆☆
☆☆☆★★★★★☆☆☆
☆☆★★★★★★★☆☆
☆★★★★★★★★★☆
★★★★★★★★★★★
*/
