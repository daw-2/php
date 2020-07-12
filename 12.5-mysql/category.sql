-- Commentaire en SQL
-- Insérer des catégories dans la BDD
-- Film de gangsters, Action, Horreur, Science-fiction, Thriller

INSERT INTO category (`name`) VALUES
('Film de gangsters'),
('Action'),
('Horreur'),
('Science-fiction'),
('Thriller');

-- Récupèrer toutes les catégories
SELECT * FROM category;
