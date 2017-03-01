CREATE DATABASE IF NOT EXISTS `ecomitstart2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ecomitstart2`;

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text,
  `platform` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `img_src` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `articles` (`id`, `name`, `description`, `platform`, `price`, `img_src`) VALUES
(1, 'Counter Strike : Global Offensive', 'Un FPS de Valve.', 'PC', 10, 'root/img/csgo.jpg'),
(2, 'Pokemon Sun & Moon', 'Nouvel opus de la part de Gamefreak.', 'Nintendo 3DS', 40, 'root/img/Pokemon.jpg'),
(3, 'Call of Duty : Modern Warfare 3', 'Le meilleur bien évidemment !', 'PC, PS3, XBOX 360', 20, 'root/img/mw3.jpg'),
(4, 'Uncharted 4 : A Thief\'s End', 'La suite des aventures de Nathan Drake', 'PS4', 40, 'root/img/uncharted4.jpg'),
(5, 'The Witcher 3 : Wild Hunt', '3e The Witcher', 'PC, PS4, XBOX ONE', 30, 'root/img/thewitcher3.jpg'),
(6, 'Battlefield 1', 'Un nouveau Battleield, par Dice', 'PC, PS4, XBOX ONE', 40, 'root/img/bf1.jpg'),
(7, 'Minecraft', 'Des cubes. C\'est tout.', 'PC, PS4, PS3, XBOX ONE, XBOX 360', 20, 'root/img/minecraft.jpg'),
(8, 'The Division', 'Nouveau jeu open world d\'Ubisoft', 'PC, PS4, XBOX ONE', 25, 'root/img/the_division.jpg'),
(9, 'Rainbow 6 : Siege', 'Tom Clancy super réaliste d\'Ubisoft', 'PC, PS4, XBOX ONE', 15, 'root/img/rainbow6.jpg'),
(10, 'H1Z1 - King of the Kill', 'Jeu de survie multijoueur.', 'PC', 15, 'root/img/h1z1.jpg');