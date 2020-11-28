<?php

/**
 * Sur cette page, on affichera la liste des catégories. Il n'y aura pas la sidebar ni le carousel.
 * On pourra cliquer sur une catégorie, par exemple, si on clique sur la catégorie 5, on va sur
 * le lien category_single.php?id=5.
 */

// On inclus le fichier header.php sur la page
require_once __DIR__ . '/../partials/header.php';

$query = $db->query('SELECT * FROM category');
$categories = $query->fetchAll(); ?>

<div class="container my-5">
    <div class="row">
        <?php foreach ($categories as $category) { ?>
            <div class="col-md-3 mb-5">
                <h2 class="text-center">
                    <a href="movie_list.php?idCategory=<?php echo $category['id']; ?>">
                        <?= $category['name']; ?>
                    </a>
                </h2>
            </div>
        <?php } ?>
    </div>
</div>

<?php require_once __DIR__ . '/../partials/footer.php';
