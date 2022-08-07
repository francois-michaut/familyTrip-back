CREATE DATABASE IF NOT EXISTS `TRIBES` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `TRIBES`;

CREATE TABLE `ACTIVITY` (
  `id` VARCHAR(42),
  `name` VARCHAR(42),
  `date` VARCHAR(42),
  `location` VARCHAR(42),
  `duration` VARCHAR(42),
  `hourly` VARCHAR(42),
  `nb-person` VARCHAR(42),
  `to_check` VARCHAR(42),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `DEPENDS_ON` (
  `id` VARCHAR(42),
  `id_1` VARCHAR(42),
  `activity_id` VARCHAR(42),
  `tribe_id` VARCHAR(42),
  PRIMARY KEY (`id`, `id_1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `BELONGS_TO` (
  `id` VARCHAR(42),
  `id_1` VARCHAR(42),
  `member_id` VARCHAR(42),
  `tribe_id` VARCHAR(42),
  PRIMARY KEY (`id`, `id_1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `MEMBER` (
  `id` VARCHAR(42),
  `firstname` VARCHAR(42),
  `lastname` VARCHAR(42),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `TRIBE` (
  `id` VARCHAR(42),
  `name` VARCHAR(42),
  `nb_members` VARCHAR(42),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `REMEMBER` (
  `id` VARCHAR(42),
  `date` VARCHAR(42),
  `location` VARCHAR(42),
  `members` VARCHAR(42),
  `story` VARCHAR(42),
  `picture` VARCHAR(42),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `WAS_LIVED_BY` (
  `id` VARCHAR(42),
  `id_1` VARCHAR(42),
  `remember_id` VARCHAR(42),
  `tribe_id` VARCHAR(42),
  PRIMARY KEY (`id`, `id_1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `WRITTEN_BY` (
  `id` VARCHAR(42),
  `id_1` VARCHAR(42),
  `tribe_id` VARCHAR(42),
  `shoppinglist_id` VARCHAR(42),
  PRIMARY KEY (`id`, `id_1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `SHOPPINGLIST` (
  `id` VARCHAR(42),
  `list` VARCHAR(42),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `DEPENDS_ON` ADD FOREIGN KEY (`id_1`) REFERENCES `TRIBE` (`id`);
ALTER TABLE `DEPENDS_ON` ADD FOREIGN KEY (`id`) REFERENCES `ACTIVITY` (`id`);
ALTER TABLE `BELONGS_TO` ADD FOREIGN KEY (`id_1`) REFERENCES `TRIBE` (`id`);
ALTER TABLE `BELONGS_TO` ADD FOREIGN KEY (`id`) REFERENCES `MEMBER` (`id`);
ALTER TABLE `WAS_LIVED_BY` ADD FOREIGN KEY (`id_1`) REFERENCES `REMEMBER` (`id`);
ALTER TABLE `WAS_LIVED_BY` ADD FOREIGN KEY (`id`) REFERENCES `TRIBE` (`id`);
ALTER TABLE `WRITTEN_BY` ADD FOREIGN KEY (`id_1`) REFERENCES `SHOPPINGLIST` (`id`);
ALTER TABLE `WRITTEN_BY` ADD FOREIGN KEY (`id`) REFERENCES `TRIBE` (`id`);