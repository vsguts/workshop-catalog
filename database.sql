CREATE TABLE `pages` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `title` VARCHAR(255) NOT NULL ,
    `content` TEXT NOT NULL ,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;
