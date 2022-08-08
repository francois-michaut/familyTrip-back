CREATE DATABASE IF NOT EXISTS `TRIBES` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `TRIBES`;

CREATE TABLE `ACTIVITY` (
  `activity_code` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(42),
  `location` VARCHAR(42),
  `date` DATE,
  `hourly` VARCHAR(42),
  `nb_members` VARCHAR(42),
  `more` VARCHAR(42),
  PRIMARY KEY (`activity_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `IS_MADE_BY` (
  `activity_code` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `tribe_code` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`activity_code`, `tribe_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `BELONGS_TO` (
  `tribe_code` INT,
  `user_id` INT,
  PRIMARY KEY (`tribe_code`, `user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `USER` (
  `user_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(42),
  `lastname` VARCHAR(42),
  `email` VARCHAR(42),
  `password` VARCHAR(42),
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `TRIBE` (
  `tribe_code` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(42),
  PRIMARY KEY (`tribe_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `REMEMBER` (
  `remember_code` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `location` VARCHAR(42),
  `date` VARCHAR(42),
  `members` VARCHAR(42),
  PRIMARY KEY (`remember_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `WAS_LIVED_BY` (
  `tribe_code` INT,
  `remember_code` INT,
  PRIMARY KEY (`tribe_code`, `remember_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `WRITES_BY` (
  `tribe_code` INT,
  `shoppinglist_code` INT,
  PRIMARY KEY (`tribe_code`, `shoppinglist_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `SHOPPINGLIST` (
  `shoppinglist_code` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `list` VARCHAR(42),
  PRIMARY KEY (`shoppinglist_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `IS_MADE_BY` ADD FOREIGN KEY (`tribe_code`) REFERENCES `TRIBE` (`tribe_code`);
ALTER TABLE `IS_MADE_BY` ADD FOREIGN KEY (`activity_code`) REFERENCES `ACTIVITY` (`activity_code`);
ALTER TABLE `BELONGS_TO` ADD FOREIGN KEY (`user_id`) REFERENCES `USER` (`user_id`);
ALTER TABLE `BELONGS_TO` ADD FOREIGN KEY (`tribe_code`) REFERENCES `TRIBE` (`tribe_code`);
ALTER TABLE `WAS_LIVED_BY` ADD FOREIGN KEY (`remember_code`) REFERENCES `REMEMBER` (`remember_code`);
ALTER TABLE `WAS_LIVED_BY` ADD FOREIGN KEY (`tribe_code`) REFERENCES `TRIBE` (`tribe_code`);
ALTER TABLE `WRITES_BY` ADD FOREIGN KEY (`shoppinglist_code`) REFERENCES `SHOPPINGLIST` (`shoppinglist_code`);
ALTER TABLE `WRITES_BY` ADD FOREIGN KEY (`tribe_code`) REFERENCES `TRIBE` (`tribe_code`);