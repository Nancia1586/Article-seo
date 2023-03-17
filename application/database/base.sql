CREATE TABLE Categorie(
    id SERIAL PRIMARY KEY,
    type varchar(150)
);

CREATE TABLE Article(
    id SERIAL PRIMARY KEY,
    titre varchar(200),
    resume text,
    idCategorie int,
    contenu text
);
