<?php

/**
 * Permet de formatter une date en français.
 * 
 * Le paramètre $date est une date au format "2019-02-01"
 * 
 * La fonction retourne la date au format "01 février 2019"
 */
function formatFrenchDate($date) {
    $formatedDate = (new DateTime($date))->format('d F Y'); // 12 April 2019

    // On traduit les mois en français
    $formatedDate = str_replace(
        ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'],
        $formatedDate
    );

    return $formatedDate;
}
