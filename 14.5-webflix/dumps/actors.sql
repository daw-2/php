-- On va ajouter quelques acteurs

-- Réinitialise la BDD
SET FOREIGN_KEY_CHECKS=0;
TRUNCATE TABLE actor;
TRUNCATE TABLE movie_has_actor;
SET FOREIGN_KEY_CHECKS=1;

INSERT INTO actor (`lastname`, `firstname`, `birthday`) VALUES
('Pacino', 'Al', '1940-04-25'),
('Brando', 'Marlon', '1924-04-03'),
('de Niro', 'Robert', '1943-08-17'),
('Willis', 'Bruce', '1955-03-19'),
('Liotta', 'Ray', '1954-12-18'),
('Snipes', 'Wesley', '1962-07-31'),
('Stalone', 'Sylvester', '1946-07-06'),
('Spacey', 'Kevin', '1959-07-26'),
('Kilmer', 'Val', '1959-12-31');

INSERT INTO movie_has_actor (movie_id, actor_id) VALUES
(1, 1), (1, 2),
(2, 1),
(3, 3), (3, 5),
(4, 1), (4, 3), (4, 9),
(5, 4),
(6, 6), (6, 7),
(10, 8);
