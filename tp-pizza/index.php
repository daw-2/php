<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">

    <title>Pizzeria</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Ma pizza</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nos-pizzas">Nos pizzas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="intro">
      <div class="intro-content">
        <div class="container">
          <h1>Bienvenue sur notre site</h1>
          <p>Avec de belles pizzas</p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="content" id="nos-pizzas">
        <h2>Nos pizzas</h2>
        <p>Découvrez nos pizzas</p>

        <?php
          $pizzas = [
            ['name' => 'Pizza 1', 'image' => '01.jpg'],
            ['name' => 'Pizza 2', 'image' => '02.jpg'],
            ['name' => 'Pizza 3', 'image' => '03.jpg'],
            ['name' => 'Pizza 4', 'image' => '04.jpg'],
            ['name' => 'Pizza 5', 'image' => '05.jpg'],
            ['name' => 'Pizza 6', 'image' => '06.jpg'],
            ['name' => 'Pizza 7', 'image' => '07.jpg'],
            ['name' => 'Pizza 8', 'image' => '08.jpg'],
            ['name' => 'Pizza 9', 'image' => '09.jpg'],
            ['name' => 'Pizza 10', 'image' => '10.jpg'],
            ['name' => 'Pizza 11', 'image' => '11.jpg'],
            ['name' => 'Pizza 12', 'image' => '12.jpg']
          ];
        ?>

        <div class="row">
          <?php
            // <?= équivaut à <?php echo
            foreach ($pizzas as $key => $pizza) { ?>
            <div class="col-md-3">
              <div class="pizza">
                <img class="img-fluid" src="img/pizzas/<?= $pizza['image']; ?>" alt="<?= $pizza['name']; ?>" />
                <div style="display: none">
                  <h2><?= $pizza['name']; ?></h2>
                  <p><?= $key * 2.99 + 0.87; ?> €</p>
                  <button class="btn btn-dark btn-block choosePizza">Choisir cette pizza</button>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>

        <h3 class="text-center" id="pizzaClick">
          Vous n'avez pas choisi de pizza.
        </h3>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Horaires</h2>
            <div class="row open-hours">
              <div class="col-md-6">Lundi - Vendredi</div>
              <div class="col-md-6">09h00 - 23h00</div>

              <div class="col-md-6">Samedi</div>
              <div class="col-md-6">09h00 - 16h00</div>

              <div class="col-md-6">Dimanche</div>
              <div class="col-md-6">12h00 - 18h00</div>
            </div>
          </div>
          <div class="col-md-6">
            <h2>Newsletter</h2>

            <?php if (isset($_POST['email']) && false !== filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
              echo 'Vous êtes bien inscrit !';
            } else {
              $email = $_POST['email'] ?? null;
              $valid = (null !== $email && false === filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) ? false : true;
              ?>

              <form action="" method="POST">
                <div class="form-group">
                  <label for="email">Adresse email</label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Votre email" value="<?= $email; ?>" <?php if (!$valid) { ?>style="border-color: #dc3545"<?php } ?>>

                  <?php if (!$valid) { ?>
                    <span class="text-danger">L'email est invalide.</span>
                  <?php } ?>
                </div>

                <button class="btn btn-dark btn-block">S'inscrire</button>
              </form>
            <?php } ?>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <?php
    // Si le formulaire est soumis, on scroll en bas de la page
    if (isset($_POST['email'])) { ?>
      <script>
        window.scrollTo(0, document.body.scrollHeight);
      </script>
    <?php } ?>
  </body>
</html>
