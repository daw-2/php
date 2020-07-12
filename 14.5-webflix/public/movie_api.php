<?php

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/database.php';

$movies = $db->query('SELECT * FROM movie')->fetchAll();
header('Content-Type: application/json');
echo json_encode($movies);

/**
 * On peut récupérer cette page en AJAX
 * fetch('http://localhost/php-base/12-webflix/public/movie_api.php')
 * .then(response => response.json())
 * .then(data => console.log(data))
 */
