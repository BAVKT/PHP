SELECT * FROM fiche_personne WHERE regexp_like('login', 'a') AND LENGHT(login) < 9 ORDER BY nom LIMIT 10