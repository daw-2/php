<?php

/**
 * Ce fichier va nous permettre d'ajouter un film en base de données.
 * 
 * On affichera d'abord un formulaire correctement configuré pour faire de l'upload.
 * Le formulaire contiendra 5 champs :
 * - Le titre: champ de type text
 * - La date: champ de type date
 * - La description: champ textarea
 * - La jaquette: champ de type file
 * - La catégorie: champ select avec toutes les catégories de la BDD en option. Le value de l'option sera l'id de la catégorie. "<option value="1">Film de gangsters</option>"
 * 
 * Quand le formulaire sera soumis, on récupère tous les champs du formulaire en PHP. On les vérifie et s'ils sont corrects, on exécute la requête SQL pour insérer le film en BDD. Optionnellement, on pourra également faire l'upload de la jaquette.
 */
