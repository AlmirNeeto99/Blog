/*Creating categories table*/
CREATE TABLE IF NOT EXISTS `categories`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;
/*Inserting default categories into their tables*/
INSERT INTO `categories`(`title`) VALUES("Financeiro"), ("Integrações"),("Serviços"),("Agenda"),("Parceiros"),("Outros");

/*Creating posts table*/
CREATE TABLE IF NOT EXISTS `posts`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `category_id` INT UNSIGNED NOT NULL,
    `author` VARCHAR(255) NOT NULL,
    `date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    PRIMARY KEY (`id`),
    FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`)
) ENGINE = InnoDB;

/*Creating posts comments table*/
CREATE TABLE IF NOT EXISTS `comments` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `post_id` INT UNSIGNED NOT NULL,
    `commentary` VARCHAR(150) NOT NULL,
    `author` VARCHAR(255) NOT NULL,
    `date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`post_id`) REFERENCES `posts`(`id`)
) ENGINE = InnoDB;
