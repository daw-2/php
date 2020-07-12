<?php

// Traitement du formulaire
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Vérification des champs
$formIsValid = true;

// Vérifier si le mail n'est pas vide
if (empty($email)) {
    echo 'L\'email est vide';
    $formIsValid = false;
}

// Vérifier si le mail est valide
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'L\'email n\'est pas valide';
    $formIsValid = false;
}

if ($formIsValid) {
    // Requête...
    echo 'Le formulaire a été envoyé';
}
