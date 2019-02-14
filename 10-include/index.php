<?php

var_dump(__DIR__);
var_dump(__FILE__);
var_dump(__LINE__);
var_dump(__FUNCTION__);

include_once('a.php');
//include('a.php'); // Exécuter le contenu du fichier a.php
//include('a.php');
//include('a.php');
include_once('a.php'); // Affiche le contenu du fichier a seulement s'il n'a pas encore été affiché

// C:\xampp\htdocs\php\10-include\b.php
require __DIR__ . '/b.php'; // si b.php n'existe pas, le reste du code ne se lance pas

echo 'footer';
