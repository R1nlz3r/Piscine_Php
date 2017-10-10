SELECT titre AS 'Titre', resum AS 'Resume', annee_prod FROM film, genre WHERE nom = 'erotic' AND genre.id_genre = film.id_genre ORDER BY annee_prod DESC;
