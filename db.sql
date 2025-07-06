DROP DATABASE IF EXISTS education;
CREATE DATABASE education;
use education;

CREATE  TABLE user 
(
    nom_complet VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR (100)
);

INSERT INTO user (nom_complet, email,password) VALUES("John Doe", "demo@example.com","password123");