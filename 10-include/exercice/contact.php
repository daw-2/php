<?php
// On inclut le header
require __DIR__.'/partials/header.php'; ?>

    <!-- Begin page content -->
    <main role="main" class="container">
        <h1 class="mt-5">Contact</h1>
        <?php
            // Traitement du formulaire
            $email = $_POST['email'] ?? null;
            $subject = $_POST['subject'] ?? null;
            $message = $_POST['message'] ?? null;
            $errors = []; // Ce tableau contiendra les erreurs de chaque champ s'il y en a

            if (!empty($_POST)) {
                // Vérification des champs
                // $formIsValid = true;

                // Vérifier si le mail n'est pas vide
                if (empty($email)) {
                    // echo 'L\'email est vide';
                    // $formIsValid = false;
                    $errors['email'] = 'L\'email est vide';
                }

                // Vérifier si le mail est valide
                if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = 'L\'email n\'est pas valide';
                }

                // Vérifier le sujet et le message...
                if (empty($subject)) {
                    $errors['subject'] = 'Le sujet est vide';
                }

                if (strlen($message) < 15) {
                    $errors['message'] = 'Le message est trop court';
                }

                // var_dump($errors);

                if (empty($errors)) { // Si le tableau d'erreur est vide, tout va bien
                    // Requête...
                    echo '<div class="alert alert-success">Le formulaire a été envoyé</div>';
                } else {
                    echo '<div class="alert alert-danger">';
                    echo '<ul class="mb-0">';
                    foreach ($errors as $error) {
                        echo '<li>'.$error.'</li>';
                    }
                    echo '</ul>';
                    echo '</div>';
                }
            }
        ?>

        <form action="./contact.php" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control <?= isset($errors['email']) ? 'is-invalid' : ''; ?>" type="text" name="email" id="email" value="<?= $email; ?>">
            </div>
            <div class="form-group">
                <label for="subject">Sujet</label>
                <input class="form-control <?= isset($errors['subject']) ? 'is-invalid' : ''; ?>" type="text" name="subject" id="subject" value="<?= $subject; ?>">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control <?= isset($errors['message']) ? 'is-invalid' : ''; ?>" name="message" id="message"><?= $message; ?></textarea>
            </div>

            <button class="btn btn-primary">Envoyer</button>
        </form>
    </main>

<?php
// On inclut le footer
require __DIR__.'/partials/footer.php'; ?>
