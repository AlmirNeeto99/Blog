CREATE DATABASE `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `blog`;

/*Creating categories table*/
CREATE TABLE IF NOT EXISTS `category`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;
/*Inserting default categories into their tables*/
INSERT INTO `category`(`title`) VALUES("Financeiro"), ("Integrações"),("Serviços"),("Agenda"),("Parceiros"),("Outros");

/*Creating posts table*/
CREATE TABLE IF NOT EXISTS `post`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `category_id` INT UNSIGNED NOT NULL,
    `content` TINYTEXT NOT NULL,
    `author` VARCHAR(255) NOT NULL,
    `date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    PRIMARY KEY (`id`),
    FOREIGN KEY (`category_id`) REFERENCES `category`(`id`)
) ENGINE = InnoDB;

/*Creating posts comments table*/
CREATE TABLE IF NOT EXISTS `comment` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `post_id` INT UNSIGNED NOT NULL,
    `commentary` VARCHAR(150) NOT NULL,
    `author` VARCHAR(255) NOT NULL,
    `date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`post_id`) REFERENCES `post`(`id`)
) ENGINE = InnoDB;
