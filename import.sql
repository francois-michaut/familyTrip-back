-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `ACTIVITY`;
CREATE TABLE `ACTIVITY` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(42) DEFAULT NULL,
  `location` varchar(42) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `hourly` varchar(42) DEFAULT NULL,
  `nb_members` varchar(42) DEFAULT NULL,
  `more` varchar(42) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `ACTIVITY` (`id`, `type`, `location`, `date`, `hourly`, `nb_members`, `more`) VALUES
(1,    'randonnée',    'Pornic',    '2023-08-27 22:00:00',    '14h-15h',    '1-77',    'Prévoir crème solaire'),
(2,    'Cinéma',    'Pornic',    '2022-08-19 11:13:13',    '16h',    NULL,    NULL),
(3,    'plage',    'Pornic',    '2022-08-24 22:00:00',    '16h',    NULL,    'Crème solaire'),
(4,    'Pêche au gros',    'Monaco',    '2022-08-25 22:00:00',    '10h-12h',    '3',    'Prévoir appât'),
(9,    'Vélo',    'Montagne',    '2022-09-10 22:00:00',    'après déjeuner',    '4',    'Chapeaux et crème solaire'),
(16,    'poney',    'Poitiers',    '2022-09-10 22:00:00',    'après-midi',    '3',    'Bombe');

DROP TABLE IF EXISTS `BELONGS_TO`;
CREATE TABLE `BELONGS_TO` (
  `tribe_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`tribe_id`,`user_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `BELONGS_TO_ibfk_1` FOREIGN KEY (`tribe_id`) REFERENCES `TRIBE` (`id`),
  CONSTRAINT `BELONGS_TO_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `USER` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `IS_MADE_BY`;
CREATE TABLE `IS_MADE_BY` (
  `activity_id` int(10) unsigned NOT NULL,
  `tribe_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`activity_id`,`tribe_id`),
  KEY `tribe_id` (`tribe_id`),
  CONSTRAINT `IS_MADE_BY_ibfk_1` FOREIGN KEY (`activity_id`) REFERENCES `ACTIVITY` (`id`),
  CONSTRAINT `IS_MADE_BY_ibfk_2` FOREIGN KEY (`tribe_id`) REFERENCES `TRIBE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `IS_MADE_BY` (`activity_id`, `tribe_id`) VALUES
(3,    5);

DROP TABLE IF EXISTS `REMEMBER`;
CREATE TABLE `REMEMBER` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(42) DEFAULT NULL,
  `location` varchar(42) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `members` varchar(42) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `REMEMBER` (`id`, `name`, `location`, `date`, `members`) VALUES
(1,    'Royan 2022',    'Royan',    '2022-07-21 22:00:00',    NULL),
(28,    'un jour à Paris',    'Paris',    '2022-09-02 22:00:00',    'Liam et papa'),
(30,    'Lundi',    'Paris',    '2022-09-02 22:00:00',    'Liam et papa'),
(31,    'retour de vacances',    'Villejuif',    '2022-08-28 22:00:00',    'Papa'),
(32,    'Pornic',    'Pornic',    '2022-08-19 22:00:00',    'Michaut et Delga'),
(33,    'unjour un oiseau ...',    'Paris',    '2022-08-07 22:00:00',    'Loic');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `SHOPPINGLIST`;
CREATE TABLE `SHOPPINGLIST` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `list` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `tribe_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `SHOPPINGLIST` (`id`, `list`, `tribe_id`) VALUES
(1,    '{\r\n1:\'pain\',\r\n2:\'lait\'\r\n}',    5),
(2,    'pain\r\nallumette\r\npq\r\nbrosse à dents',    2),
(3,    'pain, sel',    NULL),
(11,    'poivre-couche',    NULL),
(12,    'chien,chat',    NULL);

DROP TABLE IF EXISTS `TRIBE`;
CREATE TABLE `TRIBE` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(42) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `TRIBE` (`id`, `name`) VALUES
(1,    'Les copains'),
(2,    'Les Zinzin'),
(3,    'Les ouf'),
(4,    'Caribean crew'),
(5,    'Les Delchaut'),
(6,    'LES DEV'),
(7,    'les poto'),
(9,    'les tiny'),
(10,    'Soccer Club'),
(11,    'Les Kong'),
(12,    'Les rockers'),
(13,    'les zorro'),
(14,    'les nuls'),
(15,    'amis'),
(16,    'méchants');

DROP TABLE IF EXISTS `USER`;
CREATE TABLE `USER` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(42) DEFAULT NULL,
  `lastname` varchar(42) DEFAULT NULL,
  `email` varchar(42) DEFAULT NULL,
  `password` varchar(42) DEFAULT NULL,
  `tribe_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `USER` (`id`, `firstname`, `lastname`, `email`, `password`, `tribe_id`) VALUES
(1,    'François',    'Michaut',    'f.michaut@yo.com',    'Liam.2014',    5),
(2,    'Alexis',    'Melga',    'alex@beaufrere.com',    'marathonman',    5),
(3,    'Benoit',    'Gaucher',    'ben@yo.com',    'ben',    1);

DROP TABLE IF EXISTS `WAS_LIVED_BY`;
CREATE TABLE `WAS_LIVED_BY` (
  `tribe_id` int(10) unsigned NOT NULL,
  `remember_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`tribe_id`,`remember_id`),
  KEY `remember_id` (`remember_id`),
  CONSTRAINT `WAS_LIVED_BY_ibfk_1` FOREIGN KEY (`tribe_id`) REFERENCES `TRIBE` (`id`),
  CONSTRAINT `WAS_LIVED_BY_ibfk_2` FOREIGN KEY (`remember_id`) REFERENCES `REMEMBER` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `WAS_LIVED_BY` (`tribe_id`, `remember_id`) VALUES
(5,    1);

DROP TABLE IF EXISTS `WRITES_BY`;
CREATE TABLE `WRITES_BY` (
  `tribe_id` int(11) unsigned NOT NULL,
  `shoppinglist_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`tribe_id`,`shoppinglist_id`),
  KEY `shoppinglist_id` (`shoppinglist_id`),
  CONSTRAINT `WRITES_BY_ibfk_1` FOREIGN KEY (`shoppinglist_id`) REFERENCES `SHOPPINGLIST` (`id`),
  CONSTRAINT `WRITES_BY_ibfk_2` FOREIGN KEY (`tribe_id`) REFERENCES `TRIBE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2022-09-05 11:10:51

