<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <title>Formulaire de contact</title>
    </head>
    <body>
        <div class="container">
            <h1>Contactez-nous</h1>

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
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
