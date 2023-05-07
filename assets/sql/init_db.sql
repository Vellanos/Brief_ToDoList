START TRANSACTION;

DROP DATABASE IF EXISTS ToDoList;

CREATE DATABASE IF NOT EXISTS ToDoList;

USE ToDoList;

CREATE TABLE IF NOT EXISTS task (
    id INT(10) NOT NULL AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    description VARCHAR(150) NOT NULL,
    important BOOLEAN NOT NULL default 0,
    PRIMARY KEY (id)
);

INSERT INTO task (title, description, important)
VALUES 
("Créer une page d'accueil", "Concevoir et développer la page d'accueil de notre site web", 1),
("Configurer un serveur web", "Configurer un serveur web Apache pour héberger notre site web", 0),
("Développer une fonctionnalité de recherche", "Concevoir et développer une fonctionnalité de recherche pour notre site web", 1),
("Optimiser le référencement naturel", "Améliorer le référencement naturel de notre site web sur les moteurs de recherche", 0),
("Mettre en place un système de cache", "Mettre en place un système de cache pour améliorer les performances de notre site web", 1),
("Sécuriser notre site web", "Configurer les règles de sécurité pour protéger notre site web contre les attaques", 1),
("Améliorer l'expérience utilisateur", "Améliorer l'expérience utilisateur de notre site web pour augmenter la satisfaction des utilisateurs", 0),
("Développer une API REST", "Concevoir et développer une API REST pour notre site web", 1),
("Utiliser un framework CSS", "Utiliser un framework CSS pour accélérer le développement de notre site web", 0),
("Effectuer des tests unitaires", "Concevoir et exécuter des tests unitaires pour garantir la qualité de notre code", 1);


COMMIT;