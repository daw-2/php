<?php

/*
Acronyme : Créer une fonction qui prend en argument une chaine (World of Warcraft)
et qui retourne les initiales de chaque mot en majuscule (WOW).
*/

function acronym($sentence) {
    // Je dois d'abord transformer la phrase en tableau
    $words = explode(' ', $sentence); // ['World', 'of', 'Warcraft']
    // Je parcours ce tableau
    $acronym = '';
    foreach ($words as $word) {
        // Pour chaque mot du tableau, je récupère sa première lettre
        $acronym .= substr($word, 0, 1); // World => W
    }

    return strtoupper($acronym);
}

echo acronym('World of Warcraft').'<br />'; // WOW
echo acronym('PHP: Hypertext Preprocessor').'<br />'; // PHP
echo acronym('Hyper Text Markup Language').'<br />'; // HTML
echo acronym('Cascading Style Sheet').'<br />'; // CSS

/*
Conjugaison : Créer une fonction qui permet de conjuguer un verbe
(chercher par exemple). Cela doit renvoyer toutes les conjugaisons au présent.
*/

function conjuguer($verbe) {
    // Je récupère le radical et la terminaison
    $radical = substr($verbe, 0, -2); // cherch
    $groupe = substr($verbe, -2); // er

    // Préparer un tableau avec les pronoms et les terminaisons du présent
    $sujets = [
        'Je' => 'e',
        'Tu' => 'es',
        'Il / Elle / On' => 'e',
        'Nous' => 'ons',
        'Vous' => 'ez',
        'Ils / Elles' => 'ent',
    ];

    // Gérer les exceptions
    // *g exception
    if (substr($radical, -1) === 'g') {
        $sujets['Nous'] = 'eons';
    }

    // j' exception
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
    if (in_array(substr($radical, 0, 1), $voyelles)) {
        unset($sujets['Je']); // Supprimer le Je
        $sujets = array_merge(['J\'' => 'e'], $sujets); // je mets j' en première position
    }

    // Afficher les conjugaisons
    foreach ($sujets as $pronom => $terminaison) {
        echo $pronom . ' ' . $radical . $terminaison . '<br />'; // Je cherche
    }
}

echo conjuguer('chercher');
/*
Je cherche
Tu cherches
Il cherche
Nous cherchons
Vous cherchez
Ils cherchent
*/
//echo conjuguer('développer');
//echo conjuguer('ajouter');
//echo conjuguer('manger');

if (!empty($_POST)) {
    // On récupère le verbe à conjuguer
    $verb = trim(strip_tags($_POST['verb'])); // Sanitize la valeur
    echo conjuguer($verb);
}

?>

<form action="" method="post">
    <input type="text" name="verb">
    <button>Conjuguer</button>
</form>
