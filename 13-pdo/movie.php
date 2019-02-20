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

if (!empty($_GET['id'])) { // Si l'id existe dans l'url
    $id = intval($_GET['id']); // On récupére l'id dans l'URL
} else {
    die('Error'); // On arrête le script PHP et on affiche un message
}
// Aide pour la requête
echo 'SELECT * FROM movie WHERE id = '. $id . '<br />';
// On fait la requête
$query = $db->query('SELECT * FROM movie WHERE id = '. $id);
// On récupére UN film avec fetch
$movie = $query->fetch();
// Si le film existe en BDD
if ($movie) {
    // On affiche le nom du film
    echo $movie['name'];
} else {
    echo 'Le film n\'existe pas';
}
