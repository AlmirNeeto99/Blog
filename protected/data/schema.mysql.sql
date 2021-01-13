CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `blog`;
/*Creating categories table*/
CREATE TABLE IF NOT EXISTS `categoria`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;
/*Inserting default categories into their tables*/
INSERT INTO `categoria`(`nome`)
VALUES("Financeiro"),
    ("Integrações"),
    ("Serviços"),
    ("Agenda"),
    ("Parceiros"),
    ("Outros");
/*Creating posts table*/
CREATE TABLE IF NOT EXISTS `post`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `categoria_id` INT UNSIGNED NOT NULL,
    `conteudo` TINYTEXT NOT NULL,
    `autor` VARCHAR(255) NOT NULL,
    `data` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`categoria_id`) REFERENCES `categoria`(`id`)
) ENGINE = InnoDB;
/*Creating posts comments table*/
CREATE TABLE IF NOT EXISTS `comentario` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `post_id` INT UNSIGNED NOT NULL,
    `texto` VARCHAR(150) NOT NULL,
    `autor` VARCHAR(255) NOT NULL,
    `data` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`post_id`) REFERENCES `post`(`id`)
) ENGINE = InnoDB;