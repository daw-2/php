# Webflix PHP SQL

On va créer un clone de Netflix afin d'apprendre à créer un projet en PHP / SQL.

## Partie Back

- `config/database.php` : Contiendra la connexion à la BDD. A inclure dans tous les fichiers.
- `config/config.php` : Contiendra les variables de configuration du projet.
- `config/functions.php` : Contiendra des fonctions utiles pour le projet.
- `partials/header.php` : Le header du site à inclure sur toutes les pages.
- `partials/footer.php` : Le footer du site à inclure sur toutes les pages
- `public/index.php` : Page d'accueil du site qui affiche 4 films aléatoires de la BDD.
- `public/movie_list.php` : Lister tous les films de la BDD.
- `public/movie_single.php` : La page d'un seul film
- `public/register.php` : Page d'inscription
- `public/login.php` : Page de connexion

## Partie Front

- `public/assets` : Dossier qui contient le CSS, le JS et les images
- `public/assets/css`
- `public/assets/js`
- `public/assets/img`
- `public/assets/uploads` : Dossier qui contient les images uploadées (Films, avatars)

## Fonctionalités attendues

Le client nous a donné une liste de maquettes, ce qui va nous permettre de déduire les fonctionnalités à développer sur le site.

## Base de données

Voici les tables à créer :

- movie
    - id
    - title
    - description
    - cover
    - duration
    - category_id

- comment
    - id
    - nickname
    - message
    - note
    - created_at
    - movie_id

- category
    - id
    - name

- actor
    - id
    - lastname
    - firstname
    - birthday

- movie_has_actor
    - movie_id
    - actor_id

- user
    - id
    - email
    - username
    - password
    - token
    - requested_at

- subscription
    - id
    - user_id
    - stripe_id
    - amount
    - status
