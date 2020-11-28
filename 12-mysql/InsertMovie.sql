-- Insèrer quelques films dans la bdd
-- 1 Film de gangster : Le Parrain 1972, Scarface 1983, Les Affranchis 1990, Heat 1995
-- 2 Action : Die Hard 1988, Demolition Man 1993, Taken 2008, Deadpool 2016, Expandable 2010
-- 3 Horreur : Scream 1996, Vendredi 13 1980, Saw 2005, Scary Movie 2000
-- 4 Science Fiction : Star Wars IV Un nouvel espoir 1977, Alien 1979, E.T 1982, Robocop 1987
-- 5 Thriller : The Game 1997, Sixième Sens 1999, Usual Suspects 1995, Fight Club 1999,
-- Inception 2010

-- Pour reset les catégories
-- Décocher "Activer la vérification des clés étrangères"
TRUNCATE TABLE category;

INSERT INTO `movie` (`id`, `title`, `released_at`, `description`, `cover`, `category_id`) VALUES
(1, 'Le Parrain', '1972-01-01', 'Lorem ipsum', 'le-parrain.jpg', NULL),
(2, 'Scarface', '1983-01-01', 'Lorem ipsum', 'scarface.jpg', 1),
(3, 'Les Affranchis', '1990-01-01', 'Lorem ipsum', 'les-affranchis.jpg', 1),
(4, 'Heat', '1995-01-01', 'Lorem ipsum', 'heat.jpg', 1),
(5, 'Die Hard', '1988-01-01', 'Lorem ipsum', 'die-hard.jpg', 2),
(6, 'Demolition Man', '1993-01-01', 'Lorem ipsum', 'demolition-man.jpg', 2),
(7, 'Taken', '2008-01-01', 'Lorem ipsum', 'taken.jpg', 2),
(8, 'Deadpool', '2016-01-01', 'Lorem ipsum', 'deadpool.jpg', 2),
(9, 'The Expandables', '2010-01-01', 'Lorem ipsum', 'the-expandables.jpg', 2),
(10, 'Scream', '1996-01-01', 'Lorem ipsum', 'scream.jpg', 3),
(11, 'Vendredi 13', '1980-01-01', 'Lorem ipsum', 'vendredi-13.jpg', 3),
(12, 'Saw', '2005-01-01', 'Lorem ipsum', 'saw.jpg', 3),
(13, 'Scary Movie', '2000-01-01', 'Lorem ipsum', 'scary-movie.jpg', 3),
(14, 'Star Wars IV Un nouvel espoir', '1977-01-01', 'Lorem ipsum', 'star-wars-iv-un-nouvel-espoir.jpg', 4),
(15, 'Alien', '1979-01-01', 'Lorem ipsum', 'alien.jpg', 4),
(16, 'ET', '1982-01-01', 'Lorem ipsum', 'et.jpg', 4),
(17, 'Robocop', '1987-01-01', 'Lorem ipsum', 'robocop.jpg', 4),
(18, 'The Game', '1997-01-01', 'Lorem ipsum', 'the-game.jpg', 5),
(19, 'Sixième Sens', '1999-01-01', 'Lorem ipsum', 'sixieme-sens.jpg', 5),
(20, 'Usual Suspects', '1995-01-01', 'Lorem ipsum', 'usual-suspects.jpg', 5),
(21, 'Fight Club', '1999-01-01', 'Lorem ipsum', 'fight-club.jpg', 5),
(22, 'Inception', '2010-01-01', 'Lorem ipsum', 'inception.jpg', 5),
(23, 'Deadpool 2', '2019-02-19', NULL, 'deadpool-2.jpg', 2);
