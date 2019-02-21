<?php

// On inclus le fichier header.php sur la page
require_once __DIR__ . '/../partials/header.php'; ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <?php
          /**
           * Dynamiser la liste des catégories
           * 1. Faire la requête SQL pour récupérer toutes les catégories.
           * 2. On récupère un résultat, un tableau de catégories.
           * 3. On parcourt ce tableau et on remplace la partie HTML
           * dans la div avec la classe list-group.
           * 4. BONUS : Utiliser fetch() au lieu de fetchAll() avec un while.
           */

          // BONUS fetch() - Méthode alternative
          // $query = $db->query('SELECT * FROM category');
          
          // while ($category = $query->fetch()) { // Tant qu'il y a des résultats dans la requête
          //   echo $category['name'];
          // }
          // BONUS fetch() - Méthode alternative

          $query = $db->query('SELECT * FROM category');
          $categories = $query->fetchAll(); // [ ['id' => 1, 'name' => 'A'], ['id' => 2, 'name' => 'B'] ]
        ?>

        <h1 class="my-4">Catégories</h1>
        <div class="list-group">
          <?php foreach ($categories as $category) { ?>
            <a href="#" class="list-group-item"><?php echo $category['name']; ?></a>
          <?php } ?>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
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

        <div class="row">

          <?php
            /**
             * Dynamiser la liste des films
             * 1. Faire la requête SQL pour récupérer toutes les films.
             * 2. On récupère un résultat, un tableau de films.
             * 3. On parcourt ce tableau et on remplace la partie HTML
             * dans la div avec la classe col-lg-4.
             * 4. BONUUUUS : Générer un nombre d'étoiles aléatoire
             */

            $query = $db->query('SELECT * FROM movie');
            $movies = $query->fetchAll();
          ?>

          <?php foreach ($movies as $movie) { ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#">
                  <img class="card-img-top" src="assets/img/<?php echo $movie['cover']; ?>" alt="<?= $movie['name']; ?>">
                  <div class="movie-cover" style="background-image: url(assets/img/<?php echo $movie['cover']; ?>)"></div>
                </a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?= $movie['name']; ?></a>
                  </h4>
                  <h5>
                    <?php
                      $date = (new DateTime($movie['date']))->format('d F Y'); // 12 April 2019

                      // On traduit les mois en français
                      $date = str_replace(
                        ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'],
                        $date
                      );

                      echo $date;
                     ?>
                  </h5>
                  <p class="card-text"><?= $movie['description']; ?></p>
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
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php require_once __DIR__ . '/../partials/footer.php';
