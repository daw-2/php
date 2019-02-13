<?php

// Les superglobales
// On peut accéder aux données dans l'URL grâce à $_GET
// Par exemple "?user=toto&page=user"
var_dump($_GET);

// On vérifie que le paramètre q existe dans l'URL
if (!empty($_GET['q'])) {
    $q = $_GET['q'];
    echo 'Vous avez recherché : ' . $q;
}

// Pour obtenir des informations sur le serveur et le client
// var_dump($_SERVER);

// Récupérer l'adresse IP de l'utilisateur
// var_dump($_SERVER['REMOTE_ADDR']);

// Traitement d'un formulaire
var_dump($_POST);
?>

<form action="" method="post">
    <input type="text" name="message">
    <button>Envoyer</button>
</form>
