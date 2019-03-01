<?php

$contacts = [
    [
        'lastname' => 'Mota',
        'firstname' => 'Matthieu',
        'secret' => 'a44ff98zd1'
    ],
    [
        'lastname' => 'Dupont',
        'firstname' => 'Jean',
        'secret' => 'a42ee94dx1'
    ],
    [
        'lastname' => 'Quint',
        'firstname' => 'Mickael',
        'secret' => 'a09fabc53cb'
    ]
];

/**
 * 1. Ecouter l'événement submit du formulaire en JS
 * 2. Dans cet événement, on exécutera une requête en AJAX en POST sur form.php avec les données du formulaire.
 * 3. On récupérera firstname et lastname dans $_POST
 * 4. On cherchera ensuite dans le tableau le contact qui a exactement le même nom et le même prénom que ce qui a été saisi.
 * 5. Afficher le code secret et le récupérer sur la page HTML uniquement si le nom et le prénom correspondent.
 */

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    // echo $firstname . $lastname;

    foreach ($contacts as $contact) {
        if ($contact['firstname'] === $firstname && $contact['lastname'] === $lastname) {
            echo $contact['secret'];
        }
    }
}
