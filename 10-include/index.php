<?php

// C:\xampp\htdocs\php-base\10-include
var_dump(__DIR__); // Renvoie le dossier du serveur sur lequel je suis

include 'a.php'; // Exécuter le contenu du fichier a.php
// C:\xampp\htdocs\php-base\10-include\b.php
require __DIR__.'/b.php'; // Exécuter le contenu du fichier b.php
include_once 'b.php';
include_once 'b.php';
include 'b.php';
include_once 'b.php';

echo 'footer';
