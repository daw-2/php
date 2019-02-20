<?php

// On va créer une connexion à la base de données avec PDO
// $db = new PDO('mysql:host=localhost;dbname=netflix2', 'root', '');
// $db = new PDO('mysql:host=mysql.docker;port=3306;dbname=netflix2', 'root', 'root');

// A remplacer par vos accès
// Permet de définir des constantes (Des variables qui ne varient pas)
define('DB_HOST', 'mysql.docker');
// define('DB_HOST', 'localhost');
define('DB_NAME', 'netflix2');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');

// On peut utiliser le bloc try catch pour attraper une erreur (exception) si elle se produit
try {
    $db = new PDO(
        'mysql:host='.DB_HOST.';port=3306;dbname='.DB_NAME.';charset=UTF8',
        DB_USER,
        DB_PASSWORD,
        // On active les erreurs PDO
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]
    );
} catch (Exception $e) {
    echo '<span style="color: red">'.$e->getMessage().'</span>';
    echo '<p>Qu\'est-ce que tu as foutu à la ligne '.$e->getTrace()[0]['line'].' ?</p>';
    echo '<img src="travolta.gif" />';
    // header('Location: https://www.google.fr/search?q='.$e->getMessage());
}

// Ecrire la requête permettant de récupérer tous les films
$query = $db->query('SELECT * FROM movie');

// $query est un objet PDOStatement

// On récupére les résultats = les films
// le paramètre PDO::FETCH_ASSOC permet
// de récupérer les résultats sous forme
// de tableau associatif
$movies = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($movies);

// Ecrire la requête permettant de récupérer tous les acteurs
$query = $db->query('SELECT * FROM actor');
$actors = $query->fetchAll(PDO::FETCH_ASSOC);

// On peut parcourir le tableau de résultat
foreach ($actors as $actor) {
    echo '<h2>'.$actor['firstname'].' '.$actor['name'].'</h2>';
}

// Ecrire la requête permettant de récupérer le film Heat
$query = $db->query('SELECT * FROM movie WHERE id = 4');
$movie = $query->fetch(PDO::FETCH_ASSOC);
var_dump($movie);
// Afficher le nom du film
echo $movie['name'];
