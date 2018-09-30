CREATE DATABASE journlr ;

CREATE TABLE `journlr`.`users`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(50) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `firstname` VARCHAR(32) NOT NULL,
    `lastname` VARCHAR(32) NOT NULL,

PRIMARY KEY (`id`)
);

CREATE TABLE `journlr`.`journlr`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL,
    `owner_id` VARCHAR(48) NOT NULL,
    `firstName` VARCHAR(32) NOT NULL,
    `lastName` VARCHAR(32) NOT NULL,
    `title` VARCHAR(32) NOT NULL,
    `postbody` TEXT(32) NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
PRIMARY KEY (`id`)
);
