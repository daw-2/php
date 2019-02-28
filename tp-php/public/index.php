<?php require_once __DIR__ . '/../partials/header.php'; ?>

<main class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Photo</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Prix</th>
                <th>Année de sortie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $cars = $db->query('SELECT * FROM car')->fetchAll();

            foreach ($cars as $car) {
        ?>

            <tr>
                <td><?= $car['id']; ?></td>
                <td>
                    <img class="img-fluid" src="upload/<?= $car['photo']; ?>" alt="<?= $car['brand'].' '.$car['model']; ?>">
                </td>
                <td><?= $car['brand']; ?></td>
                <td><?= $car['model']; ?></td>
                <td><?= number_format($car['price'], 2, ',', ' '); ?> €</td>
                <td><?= $car['release_date']; ?></td>
                <td>
                    <a href="#" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>

        <?php } ?>
        </tbody>
    </table>
</main>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>
