<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
</head>
<body>
    <?php
        // Intégrer Bootstrap
        // Créer le formulaire
        // Récupérer les données du formulaire ($_POST)

        // On traite le formulaire si le formulaire est soumis
        if (!empty($_POST)) {
            // On récupére les données du formulaire
            $nombre1 = $_POST['nombre1'];
            $nombre2 = $_POST['nombre2'];
            $operateur = $_POST['operateur'];

            // On fait le bon calcul en fonction de l'opérateur choisi
            if ($operateur == '+') {
                $result = $nombre1 + $nombre2;
            } else if ($operateur == '-') {
                $result = $nombre1 - $nombre2;
            } else if ($operateur == '/') {
                $result = $nombre1 / $nombre2;
            } else if ($operateur == '*') {
                $result = $nombre1 * $nombre2;
            }

            echo '<h2>Le résultat de ' . $nombre1 . ' et ' . $nombre2 . ' est ' . $result . '</h2>';
        }
    ?>

    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="nombre1">Nombre 1</label>
                <input type="text" class="form-control" name="nombre1" id="nombre1"
                       value="<?php echo $nombre1 ?? ''; ?>">
                <?php /*if (isset($nombre1)) {
                    echo $nombre1;
                } else {
                    echo '';
                }*/ ?>
            </div>
            <div class="form-group">
                <label for="nombre2">Nombre 2</label>
                <input type="text" class="form-control" name="nombre2" id="nombre2"
                       value="<?php echo $nombre2 ?? ''; ?>">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operateur" id="addition" value="+">
                <label class="form-check-label" for="addition">+</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operateur" id="soustraction" value="-">
                <label class="form-check-label" for="soustraction">-</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operateur" id="division" value="/">
                <label class="form-check-label" for="division">/</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operateur" id="multiplication" value="*">
                <label class="form-check-label" for="multiplication">*</label>
            </div>
            <?php if (isset($result)) : ?>
                <input type="text" class="form-control" disabled value="<?php echo $result; ?>">
            <?php endif; ?>
            <button class="btn btn-primary">Calculer</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
</body>
</html>
