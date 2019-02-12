<?php

// Les superglobales
// On peut accéder aux données dans l'URL grâce à $_GET
// Par exemple "?user=toto&page=user"
var_dump($_GET);

// Pour obtenir des informations sur le serveur et le client
var_dump($_SERVER);

// Récupérer l'adresse IP de l'utilisateur
var_dump($_SERVER['REMOTE_ADDR']);
