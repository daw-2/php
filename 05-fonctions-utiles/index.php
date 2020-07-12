<?php

/**
 * Les dates
 */
$currentTimestamp = time();
echo $currentTimestamp. '<br />';

// Formater une date en 03/03/2020
echo date('d/m/Y H\hi\ms\s', $currentTimestamp).'<br />';

// Affiche la date pour le 01/01/1970
echo date('d/m/Y H:i:s', 3600).'<br />';

$firstname = 'Fiorella';
echo strlen($firstname).'<br />'; // Affiche 8 (le nombre de caractères dans la chaine)

$fruits = ['pomme', 'poire', 'banane'];

// Compter le nombre d'éléments d'un tableau
echo count($fruits);

echo strtotime('+3 days').'<br />'; // Affiche le timestamp qu'il sera dans 3 jours.

echo date('d/m/Y', strtotime('+3 days')).'<br />'; // Affiche la date dans 3 jours.

// Décompte jusqu'à une date
$startingTimestamp = strtotime('14:00'); // Je mets mon disque à 14h00
$endingTimestamp = $startingTimestamp + 5400; // Il expire à 15h30

// Récupèrer l'heure actuelle...
$currentTimestamp = time() + 3600;
// Soustraire l'heure actuelle et le timestamp de fin
// Et on a le nombre de secondes restantes
$secondsKeep = $endingTimestamp - $currentTimestamp;
// Formater le nombre de secondes en "Il reste 1h 10m et 35s avant de changer le disque."
$hours = $secondsKeep / 60 / 60;
$minutes = ($secondsKeep - (floor($hours) * 60 * 60)) / 60;

// floor permet d'arrondir à l'entier inférieur
// 1.15 devient 1
$seconds = $secondsKeep - (floor($hours) * 60 * 60 + floor($minutes) * 60);

echo 'Il reste '.floor($hours).' heures et '.floor($minutes).' minutes et '.$seconds.' secondes';

echo '------------ <br />';

echo '<h2>Afficher une date</h2>';
echo date('l d F Y, ').' il est '.date('H\hi').' et '.date('s').' secondes';

echo '<h2>Quel jour sera-t-on dans 10 jours ?</h2>';
echo date('l d F Y', strtotime('+10 days'));
