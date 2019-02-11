<?php

$firstname = 'Carmelo';

// Compter le nombre de caractères d'une chaine
$length = strlen($firstname); // Affiche "7"
echo $length . '<br />';

/**
 * Les dates
 */

// Affiche 11/02/2019
echo date('d/m/Y H:i:s'/*, 2230000000*/) . '<br />';

// Le timestamp courant
echo time() . '<br />';

// Quel jour sera-t-on dans 10 jours ?
echo date('l d/m/Y', strtotime('+ 10 days')) . '<br />';

// Dans combien de jours est la fin de la formation ? (27 mai)
$nowTimestamp = strtotime('now');
$endTimestamp = strtotime('27 may 2019');

$totalSeconds = $endTimestamp - $nowTimestamp;
$total = $totalSeconds / 60 / 60 / 24;
$days = round($total);
$hours = ($total - $days) * 24;

echo 'Il reste ' . $days . ' jours et ' . $hours . ' heures.<br />';

echo date('H\h i\m s\s') . '<br />'; // Affichera "18h 55m 36s"

$seconds = date('s'); // Renvoie 00, 01 ou 54
echo date('l d F Y');
echo ', il est ';
echo date('H\hi \e\t ');
echo $seconds . ' seconde';
echo ($seconds > 1) ? 's' : '';
















