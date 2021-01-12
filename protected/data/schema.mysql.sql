/*Creating categories table*/
CREATE TABLE categories(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL
);
/*Inserting default categories into their tables*/
INSERT INTO categories("Financeiro");
INSERT INTO categories("Integrações");
INSERT INTO categories("Serviços");
INSERT INTO categories("Agenda");
INSERT INTO categories("Parceiros");
INSERT INTO categories("Outros");

/*Creating posts table*/
CREATE TABLE posts(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    categories_id INTEGER NOT NULL

    FOREIGN KEY (categories_id) REFERENCES categories(id)
);