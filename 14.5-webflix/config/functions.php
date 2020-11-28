<?php

/*
 | -------------------------------
 | Toutes les fonctions du site
 | -------------------------------
 |
 | Ici, on va déclarer toutes les fonctions qui seront utilisables partout
 | sur le site.
 |
 */

/**
 * Cette fonction permet de tronquer une chaine de caractères.
 */
function truncate($string, $limit = 50, $separator = '...') {
    if (strlen($string) > $limit) { // On tronque la chaine seulement si elle dépasse la limite
        return substr($string, 0, $limit).$separator;
    }

    return $string;
}

/**
 * Cette fonction permet de convertir
 * des minutes en heures
 */
function convertToHours($duration) {
    $hours = floor($duration / 60); // 1.63
    $minutes = $duration - 60 * $hours; // 98 - 60 * 1

    return $hours.'h'.str_pad($minutes, 2, 0, STR_PAD_LEFT);
}

/**
 * Cette fonction retourne toutes les
 * catégories du site.
 */
function getCategories() {
    global $db; // On utilise la variable global $db
    $query = $db->query('SELECT * FROM category');

    return $query->fetchAll();
}

/**
 * Cette fonction permet de savoir si l'user
 * est un admin
 */
function isAdmin() {
    $user = $_SESSION['user'] ?? null;

    // Si l'utilisateur n'est pas connecté
    if ($user === null) {
        return false;
    }

    if ($user['email'] !== 'matthieumota@gmail.com') {
        // Le return arrête la fonction
        return false;
    }

    return true;
    // return $user && $user['email'] === 'matthieumota@gmail.com';
}

 /**
  * echo '<div class="container"><pre class="bg-light shadow p-3">';
  * highlight_string("<?php\n\$data =\n" . var_export($_SERVER, true) . ";\n?>");
  * echo '</pre></div>';
  */

/**
 * Permet de formatter une date en français.
 * 
 * Le paramètre $date est une date au format "2019-02-01"
 * 
 * La fonction retourne la date au format "01 février 2019"
 */
function formatFrenchDate($date) {
    $formatedDate = (new DateTime($date))->format('d F Y'); // 12 April 2019

    // On traduit les mois en français
    $formatedDate = str_replace(
        ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'],
        $formatedDate
    );

    return $formatedDate;
}
