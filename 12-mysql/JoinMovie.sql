-- Left join: Récupére tous les films avec ou sans catégories
SELECT * FROM movie m
LEFT JOIN category c ON m.category_id = c.id

-- Inner join: Récupére les films avec catégories
SELECT * FROM movie m
INNER JOIN category c ON m.category_id = c.id

-- Right join: Récupére les catégories qui sont associées ou non à un film
SELECT * FROM movie m
RIGHT JOIN category c ON m.category_id = c.id

-- Récupére les films sans catégories
SELECT * FROM movie m
LEFT JOIN category c ON m.category_id = c.id
WHERE c.id IS NULL

-- Récupére les catégories sans films
SELECT * FROM movie m
RIGHT JOIN category c ON m.category_id = c.id
WHERE m.id IS NULL
