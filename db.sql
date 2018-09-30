CREATE DATABASE journlr ;

CREATE TABLE `journlr`.`users`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(128) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `firstname` VARCHAR(32) NOT NULL,
    `lastname` VARCHAR(32) NOT NULL,

PRIMARY KEY (`id`)
);

CREATE TABLE `journlr`.`journlr`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `owner_id` VARCHAR(48) NOT NULL,
    `firstName` VARCHAR(48) NOT NULL,
    `lastName` VARCHAR(48) NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `postbody` TEXT NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
PRIMARY KEY (`id`)
);
