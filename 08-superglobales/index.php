<?php

// Les superglobales
// On peut accéder aux données dans l'URL grâce à $_GET
// Par exemple "index.php?user=toto&page=user"
var_dump($_GET);

// On va essayer de récupèrer le paramètre q dans l'URL
// /index.php?q=iphone
$q = null;
if (!empty($_GET['q'])) {
    $q = $_GET['q'];
    echo 'Vous avez cherché : '.$q;
} ?>

<!-- On utilisera un formulaire en GET pour une recherche ou un filtre -->
<form action="" method="get">
    <input type="text" name="q" value="<?php echo $q; ?>">
    <button>Rechercher</button>
</form>

<?php

// On peut récupèrer des informations sur le serveur et sur le client
echo '<pre>';
// var_dump($_SERVER);
echo '</pre>';

// Récupèrer l'adresse IP d'un visiteur
var_dump($_SERVER['REMOTE_ADDR']);

// Pour récupèrer des informations sur le serveur
// phpinfo();

// Récupèrer les données du formulaire
echo '<h2>Formulaire de contact</h2>';
var_dump($_POST);
$name = $_POST['name'] ?? null;
// Null coalesce, ternaire équivaut à isset($_POST['name']) ? $_POST['name'] : null
$message = $_POST['message'] ?? null;

if ($name !== null && $message !== null) {
    echo "<h5>$name a envoyé le message : $message</h5>";
}
?>

<form action="" method="post">
    <input type="text" name="name" value="<?php echo $name; ?>">
    <textarea name="message"><?= $message; ?></textarea>
    <button>Envoyer</button>
</form>
