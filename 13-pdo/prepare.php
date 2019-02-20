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

// On récupére une chaine dans l'URL
$search = $_GET['search']; // "Heat"

echo 'SELECT * FROM movie WHERE `name` LIKE "%'. $search . '%"<br />';

// On fait une requête préparée
// :search est un paramètre
$query = $db->prepare('SELECT * FROM movie WHERE `name` LIKE :search');
// On remplace les paramètres par des valeurs
$query->bindValue(':search', '%'.$search.'%');
// Ne pas oublier d'exécuter la requête
$query->execute();

$movie = $query->fetch();
var_dump($movie);
