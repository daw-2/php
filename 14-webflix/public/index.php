<?php

// Inclure le header
require __DIR__ . '/../partials/header.php'; ?>

<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <?php
            /**
             * On veut afficher 3 films aléatoires dans le carousel. (ORDER BY)
             * Ces films devront être des films avec une jaquette. (WHERE ... NOT NULL)
             * Si on a moins de 3 films avec jaquette, on affiche ces films.
             */
            $query = $db->query('SELECT * FROM movie WHERE cover IS NOT NULL ORDER BY RAND() LIMIT 3');
            $movies = $query->fetchAll();
        ?>

        <?php foreach ($movies as $key => $movie) { ?>
            <div class="carousel-item <?php if ($key === 0) { echo 'active'; } ?>">
            <div class="movie-cover" style="background-image: url(uploads/<?php echo $movie['cover']; ?>)"></div>
            </div>
        <?php } ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?php

/**
 * Page d'accueil :
 * 
 * 1: Remplir la BDD avec des films
 * 2: Ecrire la requête SQL qui permet de récupèrer 4 films aléatoire dans la BDD.
 * 3: On récupère un tableau de films
 * 4: On parcours ce tableau de films et pour chaque film, on affiche une card Bootstrap. On doit avoir 4 cards sur une ligne.
 */

$movies = $db->query('SELECT * FROM movie ORDER BY RAND() LIMIT 4')->fetchAll();
?>

<div class="container" style="min-height: calc(100vh - 200px)">
    <h1>Sélection de films aléatoire</h1>
    <div class="row">
        <?php foreach ($movies as $movie) { ?>
            <div class="col-lg-3">
                <div class="card shadow">
                    <img src="uploads/<?= $movie['cover']; ?>" class="card-img-top" alt="<?= $movie['title']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $movie['title']; ?></h5>
                        <h6>Sorti en <?= substr($movie['released_at'], 0, 4); ?></h6>
                        <p class="card-text"><?= truncate($movie['description']); ?></p>
                        <a href="movie_single.php?id=<?= $movie['id']; ?>" class="btn btn-danger btn-block">Voir le film</a>
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
