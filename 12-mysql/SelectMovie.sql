-- Récupère tous les films
SELECT * FROM movie;

-- Récupère tous les films dans la catégorie "Films de gangster"
SELECT * FROM movie WHERE category_id = 1;

-- Récupère tous les films dans la catégorie "Films de gangster" qui sont sortis avant 1990
SELECT * FROM movie WHERE category_id = 1 AND released_at < '1990-01-01';

-- Récupère tous les films du plus récent au plus vieux
SELECT * FROM movie ORDER BY `released_at` DESC, `title` ASC;

-- Récupère les films dans l'ordre aléatoire
SELECT * FROM movie ORDER BY RAND();

-- Récupère les 10 premiers films à partir du 4ème
SELECT * FROM movie LIMIT 3, 10;

-- Récupère le film le plus récent
SELECT * FROM movie ORDER BY released_at DESC LIMIT 1;

-- Récupère le film le plus ancien
SELECT * FROM movie ORDER BY released_at ASC LIMIT 1;

-- Récupère le film le plus récent et le plus ancien
SELECT * FROM movie
WHERE released_at = (SELECT MAX(released_at) FROM movie)
OR    released_at = (SELECT MIN(released_at) FROM movie);

-- Compte le nombre de films
SELECT COUNT(id) FROM movie;

-- Avoir la moyenne des années de sortie des films
SELECT ROUND(AVG(YEAR(`released_at`))) FROM movie;
