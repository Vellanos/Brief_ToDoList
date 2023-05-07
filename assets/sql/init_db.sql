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

INSERT INTO task (title,description, important) VALUES
('Tâche 1', 'Desc de la tâche 1', 0),
('Tâche 2', 'Desc de la tâche 2', 0),
('Tâche 3', 'Desc de la tâche 3', 0),
('Tâche 4', 'Desc de la tâche 4', 1),
('Tâche 5', 'Desc de la tâche 5', 1),
('Tâche 6', 'Desc de la tâche 6', 1),
('Tâche 7', 'Desc de la tâche 7', 0),
('Tâche 8', 'Desc de la tâche 8', 1),
('Tâche 9', 'Desc de la tâche 9', 1),
('Tâche 10', 'Desc de la tâche 10', 0);

COMMIT;