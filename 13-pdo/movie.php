<?php

// Changer les identifiants
define('DB_HOST', 'mysql.docker');
define('DB_NAME', 'netflix2');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');

// On crée la connexion à la BDD
$db = new PDO(
    'mysql:host='.DB_HOST.';port=3306;dbname='.DB_NAME.';charset=UTF8',
    DB_USER,
    DB_PASSWORD,
    // On active les erreurs PDO
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]
);

// Ecrire une requête qui récupère un film par son ID
// L'ID doit provenir de l'URL
// Exemple : Si je saisis movie.php?id=4, la requête doit
// récupérer le film avec l'id 4
// Sur la page, on affichera le titre du film récupéré
