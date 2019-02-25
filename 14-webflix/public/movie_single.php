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
?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            Jaquette du film
        </div>

        <div class="col-md-6">
            <h1>Titre du film</h1>
            <p>Année de sortie</p>
            <div>
                Description
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../partials/footer.php';
