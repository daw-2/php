<?php

// Connexion à la BDD avec PDO
try {
    $db = new PDO('mysql:host=localhost;dbname=movies', 'root', '', [
        // On active les erreurs SQL
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        // On récupère tout en associatif
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (Exception $e) {
    echo $e->getMessage(); // Affiche le message s'il y a une erreur
    echo '<img src="travolta.gif" />';
    exit;
}
