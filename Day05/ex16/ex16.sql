SELECT COUNT(id_film) AS 'film' FROM historique_membre WHERE date BETWEEN '2007-07-27' AND '2006-10-30' OR MONTH(date) = 12 AND DAY(date) = 24;
