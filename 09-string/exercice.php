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
