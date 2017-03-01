-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 09 Février 2017 à 17:40
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecomitstart2`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text,
  `platform` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `img_src` varchar(64) DEFAULT NULL,
  `yt_src` text NOT NULL,
  `nb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `description`, `platform`, `price`, `img_src`, `yt_src`, `nb`) VALUES
(1, 'Counter Strike : Global Offensive', 'Counter-Strike: Global Offensive est un jeu de tir à la première personne multijoueur en ligne basé sur le jeu d\'équipe développé par Valve Corporation.', 'PC', 10, 'root/img/csgo.jpg', 'https://www.youtube.com/embed/edYCtaNueQY', 4),
(2, 'Pokemon Sun & Moon', 'Pokémon Soleil et Pokémon Lune sont deux jeux vidéo de rôle de la série Pokémon développés par Game Freak sous la direction de Junichi Masuda.', 'Nintendo 3DS', 40, 'root/img/Pokemon.jpg', 'https://www.youtube.com/embed/fL6QuYi3rpo', 2),
(3, 'Call of Duty : Modern Warfare 3', 'Call of Duty: Modern Warfare 3 est un jeu vidéo de tir à la première personne conjointement développé par Infinity Ward et Sledgehammer Games ainsi que Raven Software pour la partie multijoueur, et édité par Activision en novembre 2011.', 'PC, PS3, XBOX 360', 20, 'root/img/mw3.jpg', 'https://www.youtube.com/embed/coiTJbr9m04', 1),
(4, 'Uncharted 4 : A Thief\'s End', 'Uncharted 4: A Thief\'s End est un jeu vidéo d\'action-aventure développé par Naughty Dog et édité par Sony. Il s\'agit du quatrième opus de la série de jeux vidéo Uncharted.', 'PS4', 40, 'root/img/uncharted4.jpg', 'https://www.youtube.com/embed/WNDGQMz1fJQ', 7),
(5, 'The Witcher 3 : Wild Hunt', 'The Witcher 3: Wild Hunt est un jeu vidéo en vue à la troisième personne en monde ouvert de type action-RPG développé par le studio CD Projekt RED.', 'PC, PS4, XBOX ONE', 30, 'root/img/thewitcher3.jpg', 'https://www.youtube.com/embed/xt_65k-gv1U', 3),
(6, 'Battlefield 1', 'Battlefield 1 est un jeu vidéo de tir à la première personne développé par DICE et édité par Electronic Arts, sorti le 21 octobre 2016.', 'PC, PS4, XBOX ONE', 40, 'root/img/bf1.jpg', 'https://www.youtube.com/embed/c7nRTF2SowQ', 5),
(7, 'Minecraft', 'Minecraft est un jeu vidéo de type « bac à sable » développé par le Suédois Markus Persson, alias Notch, puis par le studio de développement Mojang. Ce jeu vidéo plonge le joueur dans un univers généré aléatoirement et composé de voxels.', 'PC, PS4, PS3, XBOX ONE, XBOX 360', 20, 'root/img/minecraft.jpg', 'https://www.youtube.com/embed/MmB9b5njVbA', 9),
(8, 'The Division', 'Tom Clancy’s The Division est un jeu vidéo en ligne à monde ouvert de tir tactique et d\'action-RPG développé par Massive Entertainment, Ubisoft Reflections, Red Storm Entertainment et Ubisoft Annecy.', 'PC, PS4, XBOX ONE', 25, 'root/img/the_division.jpg', 'https://www.youtube.com/embed/yPq_NVi-TC4', 6),
(9, 'Rainbow 6 : Siege', 'Tom Clancy\'s Rainbow Six: Siege est un jeu vidéo de tir tactique développé par Ubisoft Montréal et édité par Ubisoft. Le jeu est annoncé lors de l\'E3 2014, il sort le 1ᵉʳ décembre 2015.', 'PC, PS4, XBOX ONE', 15, 'root/img/rainbow6.jpg', 'https://www.youtube.com/embed/KlbLLRdg9u8', 12),
(10, 'H1Z1 - King of the Kill', 'H1Z1: King of the Kill est un jeu de tir dans lequel les joueurs participent à des spectacles de PvP chaotique et à grande échelle, où chacun doit se battre jusqu\'à la mort pour se tenir au sommet du podium.', 'PC', 15, 'root/img/h1z1.jpg', 'https://www.youtube.com/embed/_1SSMKlpgL8', 11),
(11, 'GTA 5', 'Grand Theft Auto V est un jeu vidéo d\'action-aventure, développé par Rockstar North et édité par Rockstar Game', 'PC, PS4, PS3, XBOX ONE, XBOX 360', 40, 'root/img/gta5.png', 'https://www.youtube.com/embed/wvLTlpKTwJ8', 2),
(12, 'Mario Kart 7', 'Mario Kart 7 est un jeu vidéo de course développé par Nintendo EAD et Retro Studios et édité par Nintendo pour la console portable Nintendo 3DS', '3DS', 20, 'root/img/mk7.jpg', 'https://www.youtube.com/embed/N36jPMZWyAA', 15),
(13, 'The Last Guardian', 'The Last Guardian, nommé au Japon Hitokui no ?washi Torico, est un jeu vidéo d\'action-aventure développé par la Team Ico et édité par Sony Computer Entertainment, sorti le 7 décembre 2016 sur PlayStation 4', 'PS4', 70, 'root/img/tlg.png', 'https://www.youtube.com/embed/zXLZvsSmBIs', 10),
(14, 'Call of Duty : Black Ops III', 'Call of Duty: Black Ops III est un jeu vidéo de tir à la première personne développé par le studio Treyarch et édité par Activision, sorti le 6 novembre 2015', 'PC, PS4, XBOX ONE, PS3, XBOX 360', 35, 'root/img/bo3.jpg', 'https://www.youtube.com/embed/5jOvoMl3YSY', 7),
(16, 'Dark Souls III', 'Dark Souls III est un jeu vidéo d\'Action-RPG de dark fantasy développé par From Software.', 'PC, PS4, XBOX ONE', 25, 'root/img/ds3.jpg', 'https://www.youtube.com/embed/_zDZYrIUgKE', 3),
(19, 'The Elder Scrolls V : Skyrim', 'The Elder Scrolls V: Skyrim est un jeu vidéo de rôle et d\'action, développé par Bethesda Game Studios et édité par Bethesda Softworks, sorti le 11 novembre 2011.', 'PC, PS3, XBOX 360', 10, 'root/img/skyrim.jpg', 'https://www.youtube.com/embed/QpvM9uwOcUc', 8),
(20, 'ARK : Survival Evolved', 'Ark: Survival Evolved est un jeu vidéo d’action-aventure et de survie, développé et publié par Studio Wildcard.', 'PC, PS4, XBOX ONE', 35, 'root/img/ark.jpg', 'https://www.youtube.com/embed/FW9vsrPWujI', 14),
(21, 'Lumos', 'Lumos est un jeu crée par Quentin PENAULT, Maxime SORIEUL et Pierre LEZAN durant une GAMEJAM, en 2017, avec UNITY3D.', 'PC', 0, 'root/img/lumos.png', '', 0),
(22, 'Overwatch', 'Overwatch est un jeu vidéo de tir en vue subjective en ligne développé et publié par Blizzard Entertainment.', 'PC, PS4, XBOX ONE', 40, 'root/img/overwatch.jpg', 'https://www.youtube.com/embed/dushZybUYnM', 9),
(23, 'FIFA 17', 'FIFA 17 est un jeu vidéo de football développé par EA Canada et édité par Electronic Arts.', 'PC, PS3, XBOX 360, PS4, XBOX ONE', 30, 'root/img/fifa17.jpg', 'https://www.youtube.com/embed/VjDjXh5X50E', 1),
(24, 'Watch Dogs 2', 'Watch Dogs 2 est un jeu vidéo d\'action-aventure et d\'infiltration développé par le studio Ubisoft Montréal et édité par Ubisoft. C\'est la suite du jeu Watch Dogs sorti en 2014.', 'PC, PS4, XBOX ONE', 35, 'root/img/wd2.png', 'https://www.youtube.com/embed/ixDxJ_X1pfo', 5),
(25, 'Resident Evil 7: Biohazard', 'Resident Evil 7: Biohazard, connu au Japon sous le nom Biohazard 7: Resident Evil, est un jeu vidéo de genre survival horror en vue à la première personne développé et édité par Capcom, sorti le 24 janvier 2017.', 'PC, PS4, XBOX ONE', 50, 'root/img/re7.jpg', 'https://www.youtube.com/embed/-pp8iUILmns', 1),
(26, 'For Honor', 'For Honor est un jeu vidéo mêlant combat et beat them all développé par Ubisoft Montréal et édité par Ubisoft, dont la sortie est prévue pour le 14 février 2017.', 'PC, PS4, XBOX ONE', 55, 'root/img/fh.jpg', 'https://www.youtube.com/embed/g6GGoTxvGzk', 4),
(27, 'Titanfall 2', 'Titanfall 2 est un jeu vidéo de tir en vue à la première personne développé par Respawn Entertainment et édité par Electronic Arts, sorti en octobre 2016.', 'PC, PS4, XBOX ONE', 25, 'root/img/titanfall2.png', 'https://www.youtube.com/embed/Wtu3fUs9i7M', 18),
(28, 'Tom Clancy\'s Ghost Recon Wildlands', 'Tom Clancy\'s Ghost Recon Wildlands est un jeu vidéo de tir tactique en monde ouvert développé par Ubisoft Paris et édité par Ubisoft, prévu pour sortir le 7 mars 2017.', 'PC, PS4, XBOX ONE', 60, 'root/img/grw.jpg', 'https://www.youtube.com/embed/WdJub3Kz2wI', 20),
(29, 'Dishonored 2', 'Dishonored 2 est un jeu vidéo d\'action-aventure en vue subjective développé par Arkane Studios et édité par Bethesda Softworks. Il est sorti le 11 novembre 2016.', 'PC, PS4, XBOX ONE', 30, 'root/img/dishonored2.jpg', 'https://www.youtube.com/embed/T3Z05Jr1wR4', 9),
(30, 'Hitman', 'Hitman est un jeu vidéo d\'action-aventure et d’infiltration développé par IO Interactive et édité par Square Enix. Il s\'agit de la sixième inscription à la série de jeu vidéo Hitman.', 'PC, PS4, XBOX ONE', 45, 'root/img/hitman.jpg', 'https://www.youtube.com/embed/Xh-IwJh9fus', 7),
(31, 'No Man\'s Sky', 'No Man\'s Sky est un jeu vidéo de science-fiction bac-à-sable développé et édité par Hello Games, sorti respectivement le 10 et 12 août 2016.', 'PC, PS4', 35, 'root/img/nms.jpg', 'https://www.youtube.com/embed/nLtmEjqzg7M', 16),
(32, 'Mirror\'s Edge Catalyst', 'Mirror\'s Edge Catalyst est un jeu vidéo développé par DICE et édité par Electronic Arts. Il est annoncé officiellement lors de l\'E3 2013 durant la conférence Electronic Arts.', 'PC, PS4, XBOX ONE', 20, 'root/img/mec.jpg', 'https://www.youtube.com/embed/r6GQEtUREWY', 12),
(33, 'Steep', 'Steep est un jeu vidéo de sports extrêmes ayant pour cadre les Alpes, se déroulant en monde ouvert, développé par Ubisoft Annecy et édité par Ubisoft, sorti le 2 décembre 2016.', 'PC, PS4, XBOX ONE', 40, 'root/img/steep.png', 'https://www.youtube.com/embed/B0rhd5xSLg0', 10),
(34, 'Portal 2', 'Portal 2 est un jeu vidéo de plates-formes et de réflexion en vue subjective développé et édité par Valve.', 'PC, PS3, XBOX 360', 5, 'root/img/portal2.jpg', 'https://www.youtube.com/embed/tax4e4hBBZc', 7),
(35, 'Civilization VI', 'Civilization VI est un jeu vidéo de stratégie au tour par tour de type 4X développé par Firaxis Games et édité par 2K Games. Il fait partie de la série Civilization. Le jeu est sorti le 21 octobre 2016.', 'PC', 35, 'root/img/civ6.jpg', 'https://www.youtube.com/embed/5KdE0p2joJw', 7),
(36, 'Assassin\'s Creed Syndicate', 'Assassin\'s Creed Syndicate est un jeu vidéo d\'action-aventure et d\'infiltration développé par Ubisoft Québec et édité par Ubisoft.', 'PC, PS4, XBOX ONE', 20, 'root/img/acs.jpg', 'https://www.youtube.com/embed/peurkQEoH94', 5),
(37, 'Far Cry Primal', 'Far Cry Primal est un jeu vidéo d\'action-aventure à la première personne développé par Ubisoft Montréal se déroulant dans un monde ouvert à l\'Âge de la pierre.', 'PC, PS4, XBOX ONE', 25, 'root/img/fcp.png', 'https://www.youtube.com/embed/LJ2iH57Fs3M', 8),
(38, 'Halo 5: Guardians', 'Halo 5: Guardians est un jeu vidéo de tir à la première personne édité par Microsoft Studios et développé par 343 Industries sur Xbox One, sorti le 27 octobre 2015.', 'PC, XBOX ONE', 20, 'root/img/halo5.jpg', 'https://www.youtube.com/embed/Rh_NXwqFvHc', 2),
(39, 'Doom', 'Doom, initialement connu sous le nom Doom 4, est un jeu vidéo de genre « FPS » dans un univers de science-fiction et d\'horreur, développé par id Software et édité par Bethesda Softworks, sorti le 13 mai 2016.', 'PC, PS4, XBOX ONE', 15, 'root/img/doom.jpg', 'https://www.youtube.com/embed/RO90omga8D4', 5),
(40, 'Quantum Break', 'Quantum Break est un jeu vidéo d\'action-aventure et de tir à la troisième personne développé par Remedy Entertainment et publié par Microsoft Studios, sorti le 5 avril 2016.', 'PC, XBOX ONE', 20, 'root/img/qb.jpg', 'https://www.youtube.com/embed/KyNYbVPSs38', 7),
(41, 'The Legend of Zelda: Breath of the Wild', 'The Legend of Zelda: Breath of the Wild est un jeu vidéo d’action-aventure en monde ouvert développé par Nintendo EPD avec l\'aide de Monolith Soft et édité par Nintendo, prévu pour le 3 mars 2017.', '3DS', 50, 'root/img/zeldabotw.jpg', 'https://www.youtube.com/embed/UL-1tph8g3g', 4),
(42, 'The Last of Us', 'The Last of Us est un jeu vidéo d’action-aventure en vue à la troisième personne de type survie développé par Naughty Dog et édité par Sony Computer Entertainment, sorti le 14 juin 2013. La version "Remastered" est sortie le 29 juillet 2014.', 'PS3, PS4', 20, 'root/img/tlou.jpg', 'https://www.youtube.com/embed/mJt-mlLk10k', 9);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `date_inscription` date NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mdp`, `mail`, `date_inscription`, `admin`) VALUES
(1, 'quentin', 'admin', 'nom@domaine.com', '2017-02-02', 1),
(7, 'nanmaisalloquoi', '123456', 'a@a', '2017-02-09', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
