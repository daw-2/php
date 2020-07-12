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

// Requête pour récupèrer les catégories
$query = $db->query('SELECT * FROM category');

// Récupèrer les résultats de la requête sous format associatif
$categories = $query->fetchAll();

// $categories = $db->query('SELECT * FROM category')->fetchAll();

// Afficher les catégories
echo '<h2>Toutes les catégories</h2>';

echo '<ul>';
foreach ($categories as $category) {
    echo '<li><a href="./index.php?idCategory='.$category['id'].'">'.$category['id'].': '.$category['name'].'</a></li>';
}
echo '</ul>';

// Afficher une seule catégorie
// On va bien récupèrer la catégorie par son ID
// grâce à l'URL
// Eexemple : Si je tape index.php?idCategory=5, la requête
// doit récupèrer la catégorie qui a l'id 5
$idCategory = intval($_GET['idCategory'] ?? 5); // On affiche la catégorie 5 par défaut
// Debug de la requête pour s'aider
echo 'SELECT * FROM category WHERE id = '.$idCategory.' <br />';

// Ecrire la requête pour récupérer une seule catégorie
$query = $db->query('SELECT * FROM category WHERE id = '.$idCategory);

// On récupère la catégorie sous forme de tableau
$category = $query->fetch();

// Ensuite, on affiche le nom de cette catégorie
echo '<h3>'.$category['name'].'</h3>'; // Affiche Thriller
?>
<a href="movie_add.php">Ajouter un film</a>

<?php
// Vérifier s'il y a une suppression de film à faire
if (isset($_GET['deleteMovie'])) {
    // Supprimer le film demandé
    $id = intval($_GET['deleteMovie']);
    $db->query('DELETE FROM movie WHERE id = '.$id);
}

// Ici, on va afficher les films de la catégorie
$q = $db->query('SELECT * FROM movie WHERE category_id = '.$idCategory);

// On a les films
$movies = $q->fetchAll();

// J'affiche les films
echo '<ul>';
foreach ($movies as $movie) { ?>
    <li>
        <?= $movie['name'] . ' sorti le '. $movie['date']; ?> <br />
        <img src="./uploads/<?= $movie['cover']; ?>" width="150"> <br />
        <strong><?= $movie['description']; ?></strong>
        <a href="?deleteMovie=<?= $movie['id']; ?>">X</a>
    </li>
<?php }
echo '</ul>';
