<?php

/**
 * Permet de nettoyer une chaine de caractères
 */
function sanitize($value) {
    return trim(htmlspecialchars($value));
}

/**
 * Permet de se connecter à la BDD
 */
$db = new PDO('mysql:host=localhost;dbname=vtc_2', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
]);
