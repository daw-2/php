-- Un commentaire en SQL
-- CECI EST UN SUPPORT POUR LE COURS
-- Insèrer des catégories de films
-- Film de gangsters, Action, Horreur, Science-fiction, Thriller
-- Copier/coller la requête SQL dans PHPMyAdmin (Onglet SQL)
-- On peut mettre les colonnes entre `` (backtick => alt gr + 7)
-- et les valeurs entre '' (quote)

INSERT INTO category (`name`) VALUES ('Film de gangsters');

-- On insère plusieurs catégories
INSERT INTO category (`name`) VALUES
('Action'),
('Horreur'),
('Science-fiction'),
('Thriller');

-- Pour récupérer toutes les catégories
SELECT * FROM category;

-- On change le nom de la catégorie qui a l'id 5
UPDATE category SET name = 'Documentaire' WHERE id = 5;

-- Supprimer la catégorie qui a l'id 5
DELETE FROM category WHERE id = 5;
