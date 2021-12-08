CREATE TABLE `individual_object`.`individual_object` ( `object_id` INT NOT NULL AUTO_INCREMENT , `object_name` VARCHAR(32) NOT NULL , `latitude` FLOAT NOT NULL , `longitude` FLOAT NOT NULL , PRIMARY KEY (`object_id`)) ENGINE = InnoDB;

CREATE TABLE `reviews`.`reviews` ( `object_id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , `rating` INT NOT NULL , `review` TEXT NOT NULL , `media` VARCHAR(2083) NOT NULL , PRIMARY KEY (`object_id`)) ENGINE = InnoDB;
ALTER TABLE `reviews` ADD FOREIGN KEY (`object_id`) REFERENCES `individual_object`.`individual_object`(`object_id`) ON DELETE CASCADE ON UPDATE CASCADE;

CREATE TABLE `users`.`users` ( `user_id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(50) NOT NULL , `name` VARCHAR(70) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;