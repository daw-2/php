<?php

/*
Acronyme : Créer une fonction qui prend en argument une chaine (World of Warcraft)
et qui retourne les initiales de chaque mot en majuscule (WOW).
*/

function acronym($sentence) {
    $words = explode(' ', $sentence); // tableau avec les mots de la phrase
    $acronym = '';
   
    foreach ($words as $word) {
        // $accronym .= substr($word, 0, 1);
        $acronym .= $word[0]; // première lettre du mot
    }

    return strtolower($acronym);
}

echo acronym('World Of Warcraft').'<br />'; // WOW
echo acronym('PHP: Hypertext Preprocessor').'<br />'; // PHP
echo acronym('Hyper Text Markup Language').'<br />'; // HTML
echo acronym('Cascading Style Sheet').'<br />'; // CSS

/*
Conjugaison : Créer une fonction qui permet de conjuguer un verbe
(chercher par exemple). Cela doit renvoyer toutes les conjugaisons au présent.
*/

function conjuguer($verbe) {
    $racine = substr($verbe, 0, -2); // cherch
    $terminaison = substr($verbe, -2); // er

    $sujets = [
        'Je' => 'e',
        'Tu' => 'es',
        'Il / Elle / On' => 'e',
        'Nous' => 'ons',
        'Vous' => 'ez',
        'Ils / Elles' => 'ent'
    ];

    // j' exception (ajouter, inclure, enlever)
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
    // Est-ce que la première lettre de la racine est une voyelle ?
    if ( in_array(substr($racine, 0, 1), $voyelles) ) {
        unset($sujets['Je']); // On supprime le Je du tableau
        // $sujets['J\''] = 'e';
        $sujets = array_merge(['J\'' => 'e'], $sujets); // On peut fusionner des tableaux
    }

    // *g exception (chang, mang, plong)
    if (substr($racine, -1) === 'g') {
        $sujets['Nous'] = 'eons';
    }

    $html = '';
    foreach ($sujets as $pronom => $conjugaison) {
        $html .= $pronom . ' ' . $racine . $conjugaison . '<br />';
    }

    return $html;
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
echo conjuguer('développer');
echo conjuguer('ajouter');
echo conjuguer('manger');
