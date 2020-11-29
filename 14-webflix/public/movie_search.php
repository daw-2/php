<?php

/**
 * 1/ Dans ce fichier, on doit afficher les films par rapport à la recherche.
 * 2/ On doit récupérer le paramètre q dans l'URL
 * 3/ Grâce à ce paramètre, on peut faire la bonne requête SQL (avec le LIKE)
 * 4/ On affiche ensuite les films comme sur les autres pages.
 */

// Inclure le header
require __DIR__ . '/../partials/header.php';

$search = $_GET['q'] ?? '';

// Si on a cliqué sur le dropdown des catégories
if (isset($_GET['idCategory'])) {
    // On récupère les films de la catégorie
    $id = intval($_GET['idCategory']);
    $sort = $_GET['sort'] ?? 'released_at';
    $url = 'movie_list.php?idCategory='.$id.'&';
    $movies = $db->query("SELECT * FROM movie WHERE title LIKE '%".$search."%' AND category_id = $id ORDER BY $sort ASC");
} else {
    // Récupèrer tous les films
    $sort = $_GET['sort'] ?? 'released_at'; // isset($_GET['sort']) ? $_GET['sort'] : 'released_at';
    $url = 'movie_list.php?'; // On se sert de cette variable pour générer le lien du tri
    $movies = $db->query("SELECT * FROM movie WHERE title LIKE '%".$search."%' ORDER BY $sort ASC");
}

if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo '<div class="container"><div class="alert alert-success">Le film a bien été ajouté.</div></div>';
}

// J'affiche les films ?>
<div class="container">
    <h1>Vous avez cherché <?= $search; ?></h1>
    <div class="dropdown mb-4">
        <a href="#" class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Trier par</a>
        <div class="dropdown-menu">
            <a href="<?= $url; ?>sort=title" class="dropdown-item">Nom</a>
            <a href="<?= $url; ?>sort=duration" class="dropdown-item">Durée</a>
            <a href="<?= $url; ?>sort=released_at" class="dropdown-item">Date</a>
        </div>
    </div>
    <div class="row">
        <?php foreach ($movies as $movie) { ?>
            <div class="col-lg-3">
                <div class="card shadow mb-4">
                    <img src="uploads/<?= $movie['cover']; ?>" class="card-img-top" alt="<?= $movie['title']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $movie['title']; ?></h5>
                        <h6>Sorti en <?= substr($movie['released_at'], 0, 4); ?></h6>
                        <p class="card-text"><?= truncate($movie['description']); ?></p>
                        <a href="movie_single.php?id=<?= $movie['id']; ?>" class="btn btn-danger btn-block">Voir le film</a>
                        <?php if (isAdmin()) { ?>
                            <a href="movie_update.php?id=<?= $movie['id']; ?>" class="btn btn-secondary btn-block">Modifier</a>
                            <a href="movie_delete.php?id=<?= $movie['id']; ?>"
                               onclick="return confirm('Voulez-vous supprimer le film ?');"
                               class="btn btn-secondary btn-block">
                               Supprimer</a>
                        <?php } ?>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">
                            <?php
                                // Je génére un nombre d'étoiles aléatoires
                                $stars = rand(0, 5);
                                // J'affiche mes 5 étoiles
                                for ($i = 1; $i <= 5; $i++) {
                                    // J'affiche les étoiles pleines si l'itération est inférieure
                                    // au nombre aléatoire $stars
                                    if ($i <= $stars) {
                                    echo '★ ';
                                    } else {
                                    echo '☆ ';
                                    }
                                }
                            ?>
                        </small>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php

// Inclure le footer
require __DIR__ . '/../partials/footer.php';
