<?php

// On inclus le fichier header.php sur la page
require_once __DIR__ . '/../partials/header.php';

/**
 * Récupérer les informations du film
 * 1. Récupérer l'id dans l'URL
 * 2. Vérifier qu'il est correct (nombre entier)
 * 3. Exécuter la requête pour récupérer le film en BDD grâce à l'ID
 * 4. Si le film existe, on récupère les informations.
 * 5. Si le film n'existe pas, on affiche un message pour dire que le film n'existe pas.
 */

// Récupérer l'id dans l'URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Exécuter la requête (préparée)
// $query = $db->query('SELECT * FROM movie WHERE id = '.$id);
// SELECT * FROM movie WHERE id = 5
// SELECT * FROM movie WHERE id = 5; DROP DATABASE bdd;

$query = $db->prepare('SELECT * FROM movie WHERE id = :id');
$query->bindValue(':id', $id);
$query->execute();

// On récupère le film
$movie = $query->fetch();

// Si le film n'existe pas
if (!$movie) {
    echo 'Le film n\'existe pas';
    exit; // On arrête le script
}

?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="assets/img/<?php echo $movie['cover']; ?>" alt="<?= $movie['name']; ?>">
        </div>

        <div class="col-md-6">
            <h1><?= $movie['name']; ?></h1>
            <p><?php echo formatFrenchDate($movie['date']); ?></p>
            <div>
                <?= $movie['description']; ?>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../partials/footer.php';
