<?php

/*
1. Créer une boucle qui affiche 10 étoiles (*) (https://emojipedia.org)
2. Imbriquer la boucle dans une autre boucle afin d'afficher 10 lignes de 10 étoiles
3. Nous obtenons un carré. Trouver un moyen de modifier le code pour obtenir
un triangle rectangle.
*/

for ($i = 10; $i > 0; $i--) {
    for ($j = 10; $j > 0; $j--) {
        echo '⭐';
    }

    echo '<br />';
}

echo '--------------------- <br />';

for ($i = 10; $i > 0; $i--) {
    for ($j = $i; $j > 0; $j--) {
        echo '⭐';
    }

    echo '<br />';
}

echo '--------------------- <br />';

/*
☆☆☆☆☆★☆☆☆☆☆
☆☆☆☆★★★☆☆☆☆
☆☆☆★★★★★☆☆☆
☆☆★★★★★★★☆☆
☆★★★★★★★★★☆
★★★★★★★★★★★
*/

for ($i = 0; $i < 11; $i++) {
    $state = ($i === 5) ? 'visible' : 'hidden';

    echo '<span style="visibility: '.$state.'">⭐</span>';
}
