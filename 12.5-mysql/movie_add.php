<?php
    // On inclus la configuration de la BDD
    require __DIR__.'/database.php';

    // Traitement PHP pour ajouter le film
    // Récupère les données du formulaire
    $name = htmlspecialchars($_POST['name'] ?? null);
    $releasedAt = $_POST['released_at'] ?? null;
    $description = $_POST['description'] ?? null;
    $category = $_POST['category'] ?? null;

    if (!empty($_POST)) { // Si le formulaire est soumis
        // Je dois faire une requête SQL (préparée)
        $query = $db->prepare(
            "INSERT INTO
            movie (`name`, `released_at`, `description`, `cover`, `category_id`)
            VALUES (:name, :released_at, :description, :cover, :category)"
        );
        // Je dois remplacer les paramètres de la requête
        $query->bindValue(':name', $name);
        $query->bindValue(':released_at', $releasedAt);
        $query->bindValue(':description', $description);
        $query->bindValue(':category', $category);

        // Faire l'upload...
        var_dump($_FILES);
        // Récupèrer l'emplacement temporaire du fichier
        $file = $_FILES['cover']['tmp_name'];
        // Renommer le fichier (optionnel)
        $originalName = $_FILES['cover']['name'];
        // Récupère l'extension du fichier
        $extension = pathinfo($originalName)['extension']; // jpg, pdf, png...
        $filename = md5($originalName.uniqid()).'.'.$extension;
        // 1f5784f49582fad49585jjfi8589.jpg
        // Déplacer le fichier vers un répertoire
        move_uploaded_file($file, __DIR__.'/uploads/'.$filename);

        // On ajoute le chemin de l'image dans la BDD
        $query->bindValue(':cover', $filename);

        // On doit maintenant exécuter la requête
        $query->execute();

        echo "Le film $name a été ajouté.";
    }
?>

<form action="" method="POST" enctype="multipart/form-data">
    <div>
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="released_at">Date</label>
        <input type="date" name="released_at" id="released_at">
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <div>
        <?php
        // Je récupère toutes les catégories de la BDD pour générer le select
        $categories = $db->query('SELECT * FROM category')->fetchAll(); ?>
        <label for="category">Catégorie</label>
        <select name="category" id="category">
            <?php foreach ($categories as $category) { ?>
                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
            <?php } ?>

            <!-- <option value="1">Films de gangsters</option>
            <option value="2">Action</option>
            <option value="3">Horreur</option>
            <option value="4">Science-fiction</option>
            <option value="5">Thriller</option> -->
        </select>
    </div>

    <div>
        <label for="cover">Jaquette</label>
        <input type="file" name="cover" id="cover">
    </div>

    <button>Ajouter le film</button>
</form>
