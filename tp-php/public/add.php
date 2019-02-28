<?php require_once __DIR__ . '/../partials/header.php'; ?>

<main class="container mt-5">
    <?php
        // Traitement du formulaire
        $brand = null;
        $model = null;
        $price = null;
        $release_date = null;

        if (!empty($_POST)) {
            $brand = $_POST['brand'];
            $model = $_POST['model'];
            $price = intval($_POST['price']);
            $release_date = intval($_POST['release_date']);
            $photo = $_FILES['photo'];

            $errors = [];

            if (strlen($brand) <= 2) {
                $errors['brand'] = 'Le nom de la marque est trop court.';
            }

            if (empty($model)) {
                $errors['model'] = 'Le nom du modèle est vide.';
            }

            if ($price < 10000) {
                $errors['price'] = 'Le prix doit être au moins 10000.';
            }

            if (0 !== $photo['error']) {
                $errors['photo'] = 'Erreur sur la photo...';
            }

            if (!isset($errors['photo'])) {
                $extension = pathinfo($photo['name'])['extension'];

                if (!in_array(strtolower($extension), ['jpeg', 'jpg', 'gif', 'png'])) {
                    $errors['photo'] = 'Le fichier n\'est pas valide';
                }
            }

            if (empty($errors)) {
                // On peut faire l'upload
                $fileName = uniqid().'.'.$extension;
                $tmpFile = $photo['tmp_name'];

                move_uploaded_file($tmpFile, __DIR__ . '/upload/'.$fileName);

                // On peut faire la requête
                $query = $db->prepare('INSERT INTO car (brand, model, price, release_date, photo) VALUES (:brand, :model, :price, :release_date, :photo)');
                $query->bindValue(':brand', $brand);
                $query->bindValue(':model', $model);
                $query->bindValue(':price', $price);
                $query->bindValue(':release_date', $release_date);
                $query->bindValue(':photo', $fileName);
                
                if ($query->execute()) {
                    echo '<div class="alert alert-success">
                        La voiture a été ajoutée!
                    </div>';
                }
            }
        }
    ?>

    <div class="row">
        <div class="col-md-6 offset-3">
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="brand">Marque *</label>
                    <input type="text" name="brand" id="brand" class="form-control <?= (isset($errors['brand'])) ? 'is-invalid': '' ?>" value="<?= $brand; ?>">

                    <?php if (isset($errors['brand'])) { ?>
                        <div class="invalid-feedback">
                            <?= $errors['brand']; ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="model">Modèle *</label>
                    <input type="text" name="model" id="model" class="form-control <?= (isset($errors['model'])) ? 'is-invalid': '' ?>" value="<?= $model; ?>">

                    <?php if (isset($errors['model'])) { ?>
                        <div class="invalid-feedback">
                            <?= $errors['model']; ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="price">Prix *</label>
                    <input type="text" name="price" id="price" class="form-control <?= (isset($errors['price'])) ? 'is-invalid': '' ?>" value="<?= $price; ?>">

                    <?php if (isset($errors['price'])) { ?>
                        <div class="invalid-feedback">
                            <?= $errors['price']; ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="release_date">Année de sortie *</label>
                    <select name="release_date" id="release_date" class="form-control">
                        <?php for ($year = date('Y'); $year >= 1950; $year--) { ?>
                            <option <?= ($release_date == $year) ? 'selected' : ''; ?> value="<?= $year; ?>">
                                <?= $year; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="photo">Photo *</label>
                    <input type="file" name="photo" id="photo" class="form-control <?= (isset($errors['photo'])) ? 'is-invalid': '' ?>">

                    <?php if (isset($errors['photo'])) { ?>
                        <div class="invalid-feedback">
                            <?= $errors['photo']; ?>
                        </div>
                    <?php } ?>
                </div>

                <button class="btn btn-dark btn-block">Ajouter la voiture</button>

            </form>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>
